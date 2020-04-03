<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Image;

class BrandsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->menu=3;
    }

    public function index()
    {
        $data['menu'] = $this->menu;
        $data['pageTitle'] = 'Brands';
        $data['count'] = DB::table('brands')->count();
        $data['result'] = DB::table('brands')->orderBy('id','desc')->paginate(25);
        return view('admin.brands.view', $data);
    }

    public function add()
    {
        $data['menu']=$this->menu;
        $data['pageTitle']='Add Brands';
        return view('admin.brands.add',$data);
    }
    public function save(Request $request)
    {
        if($request->file('file'))
        {
            $image = $request->file('file');
            $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/images/brands/');
            Image::make($image)->fit(500, 400)->save($destinationPath.$image_name, 80);

            $data=array(
                "description" =>$request->description,
                "image" => $image_name,
                "created_at" => date("Y-m-d h:i:s")
            );

        }
        else
        {

            echo "no file";
        }

        DB::table('brands')->insert($data);
        return redirect('admin/brands')->with("view_msg", "<div class='alert alert-success'>Successfully saved!</div>");


    }
    public function edit($id)
    {
        $data['menu']=$this->menu;
        $data['pageTitle']='Edit Brands';
        $data['result']=DB::table('brands')->where('id', '=', $id)->first();
        return view('admin.brands.edit',$data);
    }



    public function update(Request $request,$id)
    {
        $item=DB::table('brands')->where('id', '=', $id)->first();

        if($item)
        {
            //-----------------------------------------------------------------------
            if($request->file('file'))
            {
                $image = $request->file('file');
                $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/assets/images/brands/');
                Image::make($image)->fit(500, 400)->save($destinationPath.$image_name, 80);
                $image_path=public_path('assets/images/brands/') . $item->image;
                if (file_exists($image_path))
                {
                    unlink($image_path);//Image Delete
                }

                $data=array(
                    "description" =>$request->description,
                    "image" => $image_name,
                    "updated_at" => date("Y-m-d h:i:s")
                );

            }
            else
            {

                $data=array(
                    "description" =>$request->description,
                    "updated_at" => date("Y-m-d h:i:s")
                );
            }
            DB::table('brands')->where('id',$id)->update($data);
            return redirect('admin/brands')->with("view_msg", "<div class='alert alert-success'>Successfully updated</div>");

            //-----------------------------------------------------------------------------
        }
        else
        {
            return redirect('admin/brands');
        }

    }

    public function delete($id)
    {
        $item=DB::table('brands')->where('id', '=', $id)->first();
        if($item)
        {
            $image_path=public_path('assets/images/brands/') . $item->image;
            if (file_exists($image_path))
            {
                unlink($image_path);//Image Delete
            }
            DB::table('brands')->where('id',$id)->delete();
            return redirect('admin/brands')->with("view_msg", "<div class='alert alert-success'>Successfully Deleted!</div>");
        }
        else
        {
            return redirect('admin/brands');
        }
    }

}
