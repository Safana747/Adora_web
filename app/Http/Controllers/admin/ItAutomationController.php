<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Image;

class ItAutomationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->menu=4;
        $this->sub_menu=41;
    }

    public function index()
    {
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle'] = 'IT & Automation';
        $data['count'] = DB::table('it_automation')->count();
        $data['result'] = DB::table('it_automation')->orderBy('id','desc')->paginate(25);
        return view('admin.business.it_automation.view', $data);
    }

    public function add()
    {
        $data['menu']=$this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle']='Add IT & Automation';
        return view('admin.business.it_automation.add',$data);
    }
    public function save(Request $request)
    {
        function slugify($text)
        {
            $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
            $text = trim($text, '-');
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
            $text = strtolower($text);
            $text = preg_replace('~[^-\w]+~', '', $text);
            if (empty($text))
            {return 'n-a';}
            $checkUrl = DB::table('it_automation')->where('seo_url', $text)->count();
            if($checkUrl==0)
            {return substr($text,0,100);}
            else{return substr($text,0,100).'-'.uniqid();}
        }

        if($request->file('file'))
        {
            $image = $request->file('file');
            $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/images/it_automation/');
            Image::make($image)->save($destinationPath.$image_name, 80);

            $data=array(
                "seo_url"=>slugify($request->title),
                "title" =>$request->title,
                "description" =>$request->description,
                "summary" =>$request->summary,
                "image" => $image_name,
                "knowmore_button" =>$request->knowmore_button,
                "created_at" => date("Y-m-d h:i:s")
            );

        }
        else
        {

            echo "no file";
        }

        DB::table('it_automation')->insert($data);
        return redirect('admin/business/it_automation')->with("view_msg", "<div class='alert alert-success'>Successfully saved!</div>");


    }
    public function edit($id)
    {
        $data['menu']=$this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle']='Edit IT & Automation';
        $data['result']=DB::table('it_automation')->where('id', '=', $id)->first();
        return view('admin.business.it_automation.edit',$data);
    }



    public function update(Request $request,$id)
    {
        $item=DB::table('it_automation')->where('id', '=', $id)->first();

        if($item)
        {
            //-----------------------------------------------------------------------
            if($request->file('file'))
            {
                $image = $request->file('file');
                $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/assets/images/it_automation/');
                Image::make($image)->save($destinationPath.$image_name, 80);
                $image_path=public_path('assets/images/it_automation/') . $item->image;
                if (file_exists($image_path))
                {
                    unlink($image_path);//Image Delete
                }

                $data=array(
                    "title" =>$request->title,
                    "description" =>$request->description,
                    "summary" =>$request->summary,
                    "image" => $image_name,
                    "knowmore_button" =>$request->knowmore_button,
                    "updated_at" => date("Y-m-d h:i:s")
                );

            }
            else
            {

                $data=array(
                    "title" =>$request->title,
                    "description" =>$request->description,
                    "summary" =>$request->summary,
                    "knowmore_button" =>$request->knowmore_button,
                    "updated_at" => date("Y-m-d h:i:s")
                );
            }
            DB::table('it_automation')->where('id',$id)->update($data);
            return redirect('admin/business/it_automation')->with("view_msg", "<div class='alert alert-success'>Successfully updated</div>");

            //-----------------------------------------------------------------------------
        }
        else
        {
            return redirect('admin/business/it_automation');
        }

    }

    public function delete($id)
    {
        $item=DB::table('it_automation')->where('id', '=', $id)->first();
        if($item)
        {
            $image_path=public_path('assets/images/it_automation/') . $item->image;
            if (file_exists($image_path))
            {
                unlink($image_path);//Image Delete
            }
            DB::table('it_automation')->where('id',$id)->delete();
            return redirect('admin/business/it_automation')->with("view_msg", "<div class='alert alert-success'>Successfully Deleted!</div>");
        }
        else
        {
            return redirect('admin/business/it_automation');
        }
    }

}
