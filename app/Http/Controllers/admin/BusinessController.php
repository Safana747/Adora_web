<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Image;


class BusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->menu=4;
        $this->sub_menu=40;
    }

    public function index()
    {
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle'] = 'Business';
        $data['count'] = DB::table('business')->count();
        $data['result'] = DB::table('business')->orderBy('id','desc')->paginate(25);
        return view('admin.business.business.view', $data);
    }

    public function add()
    {
        $data['menu']=$this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle']='Add Business';
        return view('admin.business.business.add',$data);
    }
    public function save(Request $request)
    {

        if($request->file('file'))
        {
            $image = $request->file('file');
            $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/images/business/');
            Image::make($image)->save($destinationPath.$image_name, 80);

            $data=array(
                "title" =>$request->title,
                "description" =>$request->description,
                "image" => $image_name,
                "button_name" =>$request->button_name,
                "bus_type" =>$request->bus_type,
                "created_at" => date("Y-m-d h:i:s")
            );

        }
        else
        {

            echo "no file";
        }

        DB::table('business')->insert($data);
        return redirect('admin/business/business')->with("view_msg", "<div class='alert alert-success'>Successfully saved!</div>");


    }
    public function edit($id)
    {
        $data['menu']=$this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle']='Edit Business';
        $data['result']=DB::table('business')->where('id', '=', $id)->first();
        return view('admin.business.business.edit',$data);
    }



    public function update(Request $request,$id)
    {
        $item=DB::table('business')->where('id', '=', $id)->first();

        if($item)
        {
            //-----------------------------------------------------------------------
            if($request->file('file'))
            {
                $image = $request->file('file');
                $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/assets/images/business/');
                Image::make($image)->save($destinationPath.$image_name, 80);
                $image_path=public_path('assets/images/business/') . $item->image;
                if (file_exists($image_path))
                {
                    unlink($image_path);//Image Delete
                }

                $data=array(
                    "title" =>$request->title,
                    "description" =>$request->description,
                    "image" => $image_name,
                    "button_name" =>$request->button_name,
                    "bus_type" =>$request->bus_type,
                    "updated_at" => date("Y-m-d h:i:s")
                );

            }
            else
            {

                $data=array(
                    "title" =>$request->title,
                    "description" =>$request->description,
                    "button_name" =>$request->button_name,
                    "bus_type" =>$request->bus_type,
                    "updated_at" => date("Y-m-d h:i:s")
                );
            }
            DB::table('business')->where('id',$id)->update($data);
            return redirect('admin/business/business')->with("view_msg", "<div class='alert alert-success'>Successfully updated</div>");

            //-----------------------------------------------------------------------------
        }
        else
        {
            return redirect('admin/business/business');
        }

    }

    public function delete($id)
    {
        $item=DB::table('business')->where('id', '=', $id)->first();
        if($item)
        {
            $image_path=public_path('assets/images/business/') . $item->image;
            if (file_exists($image_path))
            {
                unlink($image_path);//Image Delete
            }
            DB::table('business')->where('id',$id)->delete();
            return redirect('admin/business/business')->with("view_msg", "<div class='alert alert-success'>Successfully Deleted!</div>");
        }
        else
        {
            return redirect('admin/business/business');
        }
    }

    //--------------------------------------------


}
