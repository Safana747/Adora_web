<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Image;

class TeamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->menu=2;
        $this->sub_menu=21;
    }

    public function index()
    {
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle'] = 'Team Members';
        $data['count'] = DB::table('teams')->count();
        $data['result'] = DB::table('teams')->orderBy('id','desc')->paginate(25);
        return view('admin.company.teams.view', $data);
    }

    public function add()
    {
        $data['menu']=$this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle']='Add Teams';
        return view('admin.company.teams.add',$data);
    }
    public function save(Request $request)
    {
        if($request->file('file'))
        {
            $image = $request->file('file');
            $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/images/teams/');
            Image::make($image)->save($destinationPath.$image_name, 80);

            $data=array(
                "name" =>$request->name,
                "designation" =>$request->designation,
                "phone" =>$request->phone,
                "email" =>$request->email,
                "image" => $image_name,
                "created_at" => date("Y-m-d h:i:s")
            );

        }
        else
        {

            echo "no file";
        }

        DB::table('teams')->insert($data);
        return redirect('admin/company/teams')->with("view_msg", "<div class='alert alert-success'>Successfully saved!</div>");


    }
    public function edit($id)
    {
        $data['menu']=$this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle']='Edit Teams';
        $data['result']=DB::table('teams')->where('id', '=', $id)->first();
        return view('admin.company.teams.edit',$data);
    }



    public function update(Request $request,$id)
    {
        $item=DB::table('teams')->where('id', '=', $id)->first();

        if($item)
        {
            //-----------------------------------------------------------------------
            if($request->file('file'))
            {
                $image = $request->file('file');
                $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/assets/images/teams/');
                Image::make($image)->save($destinationPath.$image_name, 80);
                $image_path=public_path('assets/images/teams/') . $item->image;
                if (file_exists($image_path))
                {
                    unlink($image_path);//Image Delete
                }

                $data=array(
                    "name" =>$request->name,
                    "designation" =>$request->designation,
                    "phone" =>$request->phone,
                    "email" =>$request->email,
                    "image" => $image_name,
                    "updated_at" => date("Y-m-d h:i:s")
                );

            }
            else
            {

                $data=array(
                    "name" =>$request->name,
                    "designation" =>$request->designation,
                    "phone" =>$request->phone,
                    "email" =>$request->email,
                    "updated_at" => date("Y-m-d h:i:s")
                );
            }
            DB::table('teams')->where('id',$id)->update($data);
            return redirect('admin/company/teams')->with("view_msg", "<div class='alert alert-success'>Successfully updated</div>");

            //-----------------------------------------------------------------------------
        }
        else
        {
            return redirect('admin/company/teams');
        }

    }

    public function delete($id)
    {
        $item=DB::table('teams')->where('id', '=', $id)->first();
        if($item)
        {
            $image_path=public_path('assets/images/teams/') . $item->image;
            if (file_exists($image_path))
            {
                unlink($image_path);//Image Delete
            }
            DB::table('teams')->where('id',$id)->delete();
            return redirect('admin/company/teams')->with("view_msg", "<div class='alert alert-success'>Successfully Deleted!</div>");
        }
        else
        {
            return redirect('admin/company/teams');
        }
    }
}
