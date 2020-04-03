<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Image;

class SocialResponsobilities extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->menu=2;
        $this->sub_menu=23;
    }

    public function index()
    {
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle'] = 'Social Responsibilities';
        $data['count'] = DB::table('social_responsabilities')->count();
        $data['result'] = DB::table('social_responsabilities')->orderBy('id','desc')->paginate(25);
        return view('admin.company.social_responsobilities.view', $data);
    }

    public function add()
    {
        $data['menu']=$this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle']='Add Social Responsibilities';
        return view('admin.company.social_responsobilities.add',$data);
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
            $checkUrl = DB::table('social_responsabilities')->where('seo_url', $text)->count();
            if($checkUrl==0)
            {return substr($text,0,100);}
            else{return substr($text,0,100).'-'.uniqid();}
        }

        if($request->file('file'))
        {
            $image = $request->file('file');
            $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/images/social_responsibilities/');
            Image::make($image)->fit(500, 400)->save($destinationPath.$image_name, 80);

            $data=array(
                "title" =>$request->title,
                "description" =>$request->description,
                "summary" =>$request->summary,
                "image" => $image_name,
                "created_at" => date("Y-m-d h:i:s")
            );

        }
        else
        {

            echo "no file";
        }

        DB::table('social_responsabilities')->insert($data);
        return redirect('admin/company/social_responsibilities')->with("view_msg", "<div class='alert alert-success'>Successfully saved!</div>");


    }
    public function edit($id)
    {
        $data['menu']=$this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle']='Edit Social Responsibilities';
        $data['result']=DB::table('social_responsabilities')->where('id', '=', $id)->first();
        return view('admin.company.social_responsobilities.edit',$data);
    }



    public function update(Request $request,$id)
    {
        $item=DB::table('social_responsabilities')->where('id', '=', $id)->first();

        if($item)
        {
            //-----------------------------------------------------------------------
            if($request->file('file'))
            {
                $image = $request->file('file');
                $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/assets/images/social_responsibilities/');
                Image::make($image)->fit(500, 400)->save($destinationPath.$image_name, 80);
                $image_path=public_path('assets/images/social_responsibilities/') . $item->image;
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
            DB::table('social_responsabilities')->where('id',$id)->update($data);
            return redirect('admin/company/social_responsibilities')->with("view_msg", "<div class='alert alert-success'>Successfully updated</div>");

            //-----------------------------------------------------------------------------
        }
        else
        {
            return redirect('admin/company/social_responsibilities');
        }

    }

    public function delete($id)
    {
        $item=DB::table('social_responsabilities')->where('id', '=', $id)->first();
        if($item)
        {
            $image_path=public_path('assets/images/social_responsibilities/') . $item->image;
            if (file_exists($image_path))
            {
                unlink($image_path);//Image Delete
            }
            DB::table('social_responsabilities')->where('id',$id)->delete();
            return redirect('admin/company/social_responsibilities')->with("view_msg", "<div class='alert alert-success'>Successfully Deleted!</div>");
        }
        else
        {
            return redirect('admin/company/social_responsibilities');
        }
    }

}
