<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Image;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->menu=1;
        $this->sub_menu=15;
    }

    public function index()
    {
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle'] = 'Clients';
        $data['count'] = DB::table('clients')->count();
        $data['result'] = DB::table('clients')->orderBy('id','desc')->paginate(25);
        return view('admin.landing.clients.view', $data);
    }

    public function add()
    {
        $data['menu']=$this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle']='Add Clients';
        return view('admin.landing.clients.add',$data);
    }
    public function save(Request $request)
    {
        if($request->file('file'))
        {
            $image = $request->file('file');
            $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/images/clients/');
            Image::make($image)->save($destinationPath.$image_name, 80);

            $data=array(
                "image" => $image_name,
                "created_at" => date("Y-m-d h:i:s")
            );

        }
        else
        {

            echo "no file";
        }

        DB::table('clients')->insert($data);
        return redirect('admin/home/clients')->with("view_msg", "<div class='alert alert-success'>Successfully saved!</div>");


    }
    public function edit($id)
    {
        $data['menu']=$this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle']='Edit Clients';
        $data['result']=DB::table('clients')->where('id', '=', $id)->first();
        return view('admin.landing.clients.edit',$data);
    }



    public function update(Request $request,$id)
    {
        $item=DB::table('clients')->where('id', '=', $id)->first();

        if($item)
        {
            //-----------------------------------------------------------------------

                $image = $request->file('file');
                $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/assets/images/clients/');
                Image::make($image)->save($destinationPath.$image_name, 80);
                $image_path=public_path('assets/images/clients/') . $item->image;
                if (file_exists($image_path))
                {
                    unlink($image_path);//Image Delete
                }

                $data=array(
                    "image" => $image_name,
                    "updated_at" => date("Y-m-d h:i:s")
                );



            DB::table('clients')->where('id',$id)->update($data);
            return redirect('admin/home/clients')->with("view_msg", "<div class='alert alert-success'>Successfully updated</div>");

            //-----------------------------------------------------------------------------
        }
        else
        {
            return redirect('admin/home/clients');
        }

    }

    public function delete($id)
    {
        $item=DB::table('clients')->where('id', '=', $id)->first();
        if($item)
        {
            $image_path=public_path('assets/images/clients/') . $item->image;
            if (file_exists($image_path))
            {
                unlink($image_path);//Image Delete
            }
            DB::table('clients')->where('id',$id)->delete();
            return redirect('admin/home/clients')->with("view_msg", "<div class='alert alert-success'>Successfully Deleted!</div>");
        }
        else
        {
            return redirect('admin/home/clients');
        }
    }

}
