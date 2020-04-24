<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Image;
use Validator;

class ItAutomationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->menu = 4;
        $this->sub_menu = 41;
    }

    public function index()
    {
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle'] = 'IT & Automation';
        $data['count'] = DB::table('it_automation')->count();
        $data['result'] = DB::table('it_automation')->orderBy('id', 'desc')->paginate(25);
        return view('admin.business.it_automation.view', $data);
    }

    public function add()
    {
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle'] = 'Add IT & Automation';
        return view('admin.business.it_automation.add', $data);
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
            if (empty($text)) {
                return 'n-a';
            }
            $checkUrl = DB::table('it_automation')->where('seo_url', $text)->count();
            if ($checkUrl == 0) {
                return substr($text, 0, 100);
            } else {
                return substr($text, 0, 100) . '-' . uniqid();
            }
        }

        if ($request->file('file')) {
            $image = $request->file('file');
            $image_name = uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/images/it_automation/');
            if($image->getClientOriginalExtension()=='gif')
            {
                copy($image->getRealPath(), $destinationPath.$image_name);

            }
            else{
                Image::make($image)->save($destinationPath.$image_name, 80);
            }

            $data = array(
                "seo_url" => slugify($request->title),
                "title" => $request->title,
                "description" => $request->description,
                "summary" => $request->summary,
                "image" => $image_name,
                "knowmore_button" => $request->knowmore_button,
                "button_name" => $request->button_name,
                "button_link" => $request->button_link,
                "created_at" => date("Y-m-d h:i:s")
            );

        } else {

            echo "no file";
        }

        DB::table('it_automation')->insert($data);
        return redirect('admin/business/it_automation')->with("view_msg", "<div class='alert alert-success'>Successfully saved!</div>");


    }

    public function edit($id)
    {
        $data['menu'] = $this->menu;
        $data['sub_menu'] = $this->sub_menu;
        $data['pageTitle'] = 'Edit IT & Automation';
        $data['result'] = DB::table('it_automation')->where('id', '=', $id)->first();
        return view('admin.business.it_automation.edit', $data);
    }


    public function update(Request $request, $id)
    {
        $item = DB::table('it_automation')->where('id', '=', $id)->first();

        if ($item) {
            //-----------------------------------------------------------------------
            if ($request->file('file')) {
                $image = $request->file('file');
                $image_name = uniqid() . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/assets/images/it_automation/');
                if($image->getClientOriginalExtension()=='gif')
                {
                    copy($image->getRealPath(), $destinationPath.$image_name);

                }
                else{
                    Image::make($image)->save($destinationPath.$image_name, 80);
                }
                $image_path = public_path('assets/images/it_automation/') . $item->image;
                if (file_exists($image_path)) {
                    unlink($image_path);//Image Delete
                }

                $data = array(
                    "title" => $request->title,
                    "description" => $request->description,
                    "summary" => $request->summary,
                    "image" => $image_name,
                    "knowmore_button" => $request->knowmore_button,
                    "button_name" => $request->button_name,
                    "button_link" => $request->button_link,
                    "updated_at" => date("Y-m-d h:i:s")
                );

            } else {

                $data = array(
                    "title" => $request->title,
                    "description" => $request->description,
                    "summary" => $request->summary,
                    "knowmore_button" => $request->knowmore_button,
                    "button_name" => $request->button_name,
                    "button_link" => $request->button_link,
                    "updated_at" => date("Y-m-d h:i:s")
                );
            }
            DB::table('it_automation')->where('id', $id)->update($data);
            return redirect('admin/business/it_automation')->with("view_msg", "<div class='alert alert-success'>Successfully updated</div>");

            //-----------------------------------------------------------------------------
        } else {
            return redirect('admin/business/it_automation');
        }

    }

    public function delete($id)
    {
        $item = DB::table('it_automation')->where('id', '=', $id)->first();
        if ($item) {
            //---------------------------------------------
            $table_name = 'it_automation';
            $image_path = public_path('assets/images/it_automation/');
            //-----------------------------------------------------
            $resultImg = DB::table('images')->where('table_name', '=', $table_name)->where('slider_id', '=', $id)->get();
            foreach ($resultImg as $itemImg) {
                if (file_exists($image_path . $itemImg->image)) {
                    unlink($image_path . $itemImg->image);
                }
                DB::table('images')->where('id', $itemImg->id)->delete();
            }

            //------------------------------------------------

            $image_path = public_path('assets/images/it_automation/') . $item->image;
            if (file_exists($image_path)) {
                unlink($image_path);//Image Delete
            }
            DB::table('it_automation')->where('id', $id)->delete();
            return redirect('admin/business/it_automation')->with("view_msg", "<div class='alert alert-success'>Successfully Deleted!</div>");
        } else {
            return redirect('admin/business/it_automation');
        }
    }

    public function uploadImg(Request $request, $ser_id = null)
    {
        $table_name = 'it_automation';
        $success_url = 'admin/business/it_automation';
        $upload_path = '/assets/images/it_automation/';
        $rules = array(
            'file' => 'required|mimes:jpg,jpeg,gif,png |max:3612',
        );

        $messsages = array(
            'required' => 'Please Select image',
            'mimes' => "Please insert image only 'jpg', 'jpeg', 'gif', 'png' format",
            'max' => 'Image should be less than 3 MB',
        );
        //customMessages
        $validate = Validator::make($request->all(), $rules, $messsages);

        if ($validate->fails()) {
            return back()->with('view_msg', "<div class='alert alert-danger'>" . $validate->messages()->first() . "</div>");

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
        $success_url = 'admin/business/it_automation';
        $delete_path = 'assets/images/it_automation/';
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

    public function bus_pdf_upload(Request $request, $bus_type = null)
    {
        $rules = array(
            'file' => 'required|mimes:pdf|max:30612',
        );
        $messsages = array(
            'required' => 'Please Select PDF File',
            'mimes' => "Please insert PDF Format only",
            'max' => 'Image should be less than 30 MB',
        );

        $validate = Validator::make($request->all(), $rules, $messsages);
        if ($validate->fails()) {
            return back()->with('view_msg', "<div class='alert alert-danger'>" . $validate->messages()->first() . "</div>");
        }
        if (!($request->file('file')))
        {
            return back();
        }

        $result = DB::table('business_pdf_files')->where('bus_type', $bus_type)->first();
        if ($result) {
            $file = $request->file('file');
            $file_first_Name = $file->getClientOriginalName();
            $pdf = uniqid() . time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('assets/pdf_files/');
            $file->move($destinationPath, $pdf);

            if (!($result->pdf_file == null || $result->pdf_file == '')) {
                $pdf_path = public_path('assets/pdf_files/') . $result->pdf_file;
                if (file_exists($pdf_path)) {
                    unlink($pdf_path);//Resume Delete
                }
            }

            $data = array(
                "pdf_file" => $pdf,
                "filename" => $file_first_Name,
                //"bus_type" => $bus_type,
            );
            DB::table('business_pdf_files')->where('bus_type', $bus_type)->update($data);
            return back()->with('view_msg', "<div class='alert alert-success'>successfully uploaded</div>");

        } else {
            return back();

        }


    }
    public function bus_pdf_delete($id=null)
    {
        $result = DB::table('business_pdf_files')->where('id',$id)->first();
        if ($result) {
            if (!($result->pdf_file == null || $result->pdf_file == '')) {
                $pdf_path = public_path('assets/pdf_files/') . $result->pdf_file;
                if (file_exists($pdf_path)) {
                    unlink($pdf_path);//Resume Delete
                }
            }
            $data = array("pdf_file" =>'',"filename" =>'');
            DB::table('business_pdf_files')->where('id',$id)->update($data);
            return back()->with('view_msg', "<div class='alert alert-success'>successfully Deleted</div>");
        }
        else
        {
            return back();
        }

    }

}
