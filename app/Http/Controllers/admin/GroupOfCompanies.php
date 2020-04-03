<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Image;

class GroupOfCompanies extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->menu=2;
        $this->sub_menu=22;
    }

    public function index()
    {
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle'] = 'Group of Companies';
        $data['count'] = DB::table('group_of_companies')->count();
        $data['result'] = DB::table('group_of_companies')->orderBy('id','desc')->paginate(25);
        return view('admin.company.group_of_companies.view', $data);
    }

    public function add()
    {
        $data['menu']=$this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle']='Add Group of Companies';
        return view('admin.company.group_of_companies.add',$data);
    }
    public function save(Request $request)
    {
        if($request->file('file'))
        {
            $image = $request->file('file');
            $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/images/group_of_companies/');
            Image::make($image)->fit(500, 400)->save($destinationPath.$image_name, 80);

            $data=array(
                "image" => $image_name,
                "created_at" => date("Y-m-d h:i:s")
            );

        }
        else
        {

            echo "no file";
        }

        DB::table('group_of_companies')->insert($data);
        return redirect('admin/company/group_of_companies')->with("view_msg", "<div class='alert alert-success'>Successfully saved!</div>");


    }
    public function edit($id)
    {
        $data['menu']=$this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle']='Edit Group of Companies';
        $data['result']=DB::table('group_of_companies')->where('id', '=', $id)->first();
        return view('admin.company.group_of_companies.edit',$data);
    }



    public function update(Request $request,$id)
    {
        $item=DB::table('group_of_companies')->where('id', '=', $id)->first();

        if($item)
        {
            //-----------------------------------------------------------------------

                $image = $request->file('file');
                $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/assets/images/group_of_companies/');
                Image::make($image)->fit(500, 400)->save($destinationPath.$image_name, 80);
                $image_path=public_path('assets/images/group_of_companies/') . $item->image;
                if (file_exists($image_path))
                {
                    unlink($image_path);//Image Delete
                }

                $data=array(
                    "image" => $image_name,
                    "updated_at" => date("Y-m-d h:i:s")
                );



            DB::table('group_of_companies')->where('id',$id)->update($data);
            return redirect('admin/company/group_of_companies')->with("view_msg", "<div class='alert alert-success'>Successfully updated</div>");

            //-----------------------------------------------------------------------------
        }
        else
        {
            return redirect('admin/company/group_of_companies');
        }

    }

    public function delete($id)
    {
        $item=DB::table('group_of_companies')->where('id', '=', $id)->first();
        if($item)
        {
            $image_path=public_path('assets/images/group_of_companies/') . $item->image;
            if (file_exists($image_path))
            {
                unlink($image_path);//Image Delete
            }
            DB::table('group_of_companies')->where('id',$id)->delete();
            return redirect('admin/company/group_of_companies')->with("view_msg", "<div class='alert alert-success'>Successfully Deleted!</div>");
        }
        else
        {
            return redirect('admin/company/group_of_companies');
        }
    }

}
