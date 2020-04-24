<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Image;
use Validator;

class OngoingProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->menu=1;
        $this->sub_menu=13;
    }

    public function index()
    {
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle'] = 'Ongoing Projects';
        $data['count'] = DB::table('ongoingprojects')->count();
        $data['result'] = DB::table('ongoingprojects')->orderBy('id','desc')->paginate(25);
        return view('admin.landing.ongoingprojects.view', $data);
    }

    public function add()
    {
        $data['menu']=$this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle']='Add Ongoing Projects';
        return view('admin.landing.ongoingprojects.add',$data);
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
            $checkUrl = DB::table('ongoingprojects')->where('seo_url', $text)->count();
            if($checkUrl==0)
            {return substr($text,0,100);}
            else{return substr($text,0,100).'-'.uniqid();}
        }

        if($request->file('file'))
        {
            $image = $request->file('file');
            $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/images/ongoingprojects/');
            if($image->getClientOriginalExtension()=='gif')
            {
                copy($image->getRealPath(), $destinationPath.$image_name);

            }
            else{
                Image::make($image)->save($destinationPath.$image_name, 80);
            }
            $data=array(
                "seo_url"=>slugify($request->title),
                "title" =>$request->title,
                "description" =>$request->description,
                "summary" =>$request->summary,
                "image" => $image_name,
                "knowmore_button" =>$request->knowmore_button,
                "button_name" =>$request->button_name,
                "button_link" =>$request->button_link,
                "created_at" => date("Y-m-d h:i:s")
            );

        }
        else
        {

            echo "no file";
        }

        DB::table('ongoingprojects')->insert($data);
        return redirect('admin/home/ongoingprojects')->with("view_msg", "<div class='alert alert-success'>Successfully saved!</div>");


    }
    public function edit($id)
    {
        $data['menu']=$this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle']='Edit Ongoing Projects';
        $data['result']=DB::table('ongoingprojects')->where('id', '=', $id)->first();
        return view('admin.landing.ongoingprojects.edit',$data);
    }



    public function update(Request $request,$id)
    {
        $item=DB::table('ongoingprojects')->where('id', '=', $id)->first();

        if($item)
        {
            //-----------------------------------------------------------------------
            if($request->file('file'))
            {
                $image = $request->file('file');
                $image_name=uniqid() . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/assets/images/ongoingprojects/');
                if($image->getClientOriginalExtension()=='gif')
                {
                    copy($image->getRealPath(), $destinationPath.$image_name);

                }
                else{
                    Image::make($image)->save($destinationPath.$image_name, 80);
                }
                $image_path=public_path('assets/images/ongoingprojects/') . $item->image;
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
                    "button_name" =>$request->button_name,
                    "button_link" =>$request->button_link,
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
                    "button_name" =>$request->button_name,
                    "button_link" =>$request->button_link,
                    "updated_at" => date("Y-m-d h:i:s")
                );
            }
            DB::table('ongoingprojects')->where('id',$id)->update($data);
            return redirect('admin/home/ongoingprojects')->with("view_msg", "<div class='alert alert-success'>Successfully updated</div>");

            //-----------------------------------------------------------------------------
        }
        else
        {
            return redirect('admin/home/ongoingprojects');
        }

    }

    public function delete($id)
    {
        $item=DB::table('ongoingprojects')->where('id', '=', $id)->first();
        if($item)
        {
            //---------------------------------------------
            $table_name='ongoingprojects';
            $image_path=public_path('assets/images/ongoingprojects/');
            //-----------------------------------------------------
            $resultImg=DB::table('images')->where('table_name', '=', $table_name)->where('slider_id', '=', $id)->get();
            foreach ($resultImg as $itemImg)
            {
                if (file_exists($image_path.$itemImg->image))
                {
                    unlink($image_path.$itemImg->image);
                }
                DB::table('images')->where('id',$itemImg->id)->delete();
            }

            //------------------------------------------------
            $image_path=public_path('assets/images/ongoingprojects/') . $item->image;
            if (file_exists($image_path))
            {
                unlink($image_path);//Image Delete
            }
            DB::table('ongoingprojects')->where('id',$id)->delete();
            return redirect('admin/home/ongoingprojects')->with("view_msg", "<div class='alert alert-success'>Successfully Deleted!</div>");
        }
        else
        {
            return redirect('admin/home/ongoingprojects');
        }
    }
    public function uploadImg(Request $request, $ser_id = null)
    {
        $table_name = 'ongoingprojects';
        $success_url = 'admin/home/ongoingprojects';
        $upload_path = '/assets/images/ongoingprojects/';
        $rules = array(
            'file' => 'required|mimes:jpg,jpeg,gif,png |max:3612',
        );

        $messsages = array(
            'required' => 'Please Select image',
            'mimes' => "Please insert image only 'jpg', 'jpeg', 'gif', 'png' format",
            'max'   => 'Image should be less than 3 MB',
        );
        //customMessages
        $validate = Validator::make($request->all(), $rules, $messsages);

        if ($validate->fails()) {
            return back()->with('view_msg',"<div class='alert alert-danger'>".$validate->messages()->first()."</div>");

        }


//-------------------------------------------------------------
        if (!($request->file('file'))) {
            return redirect($success_url);
        }
        if (!$ser_id == null) {
            //--------------START---------------------------------

            $result = DB::table($table_name)->where('id', $ser_id)->first();
            if (!($result)) {
                return redirect($success_url);
            } else {
                $image = $request->file('file');
                $image_name = uniqid() . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path($upload_path);
                if($image->getClientOriginalExtension()=='gif')
                {
                    copy($image->getRealPath(), $destinationPath.$image_name);

                }
                else{
                    Image::make($image)->save($destinationPath.$image_name, 80);
                }
                $data = array(
                    "table_name" => $table_name,
                    "slider_id" => $ser_id,
                    "image" => $image_name,
                );
                DB::table('images')->insert($data);
                return redirect($success_url)->with("view_msg", "<div class='alert alert-success'>Successfully uploaded</div>");
            }
        } else {
            return redirect($success_url);
        }
    }

    public function deleteImg($id = null)
    {
        $success_url = 'admin/home/ongoingprojects';
        $delete_path = 'assets/images/ongoingprojects/';
        if (!$id == null) {
            //--------------START---------------------------------
            $result = DB::table('images')->where('id', $id)->first();
            if ($result) {
                //----------------DELETE START---------------------------
                $folder = $delete_path;
                if (file_exists($folder . $result->image)) {
                    unlink($folder . $result->image);
                }
                DB::table('images')->where('id', $id)->delete();
                return redirect($success_url)->with("view_msg", "<div class='alert alert-danger'>Deleted successfully</div>");
                //------------------DELETE END-------------------------
            } else {
                return redirect($success_url);
            }

        } else {
            return redirect($success_url);
        }
    }

}
