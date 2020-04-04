<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class JobApplications extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->menu=6;
    }

    public function index()
    {
        $data['menu'] = $this->menu;
        $data['pageTitle'] = 'Job Applications';
        $data['count'] = DB::table('job_vacancy_form')->count();
        $data['result'] = DB::table('job_vacancy_form')->orderBy('id','desc')->paginate(25);
        return view('admin.job_applications.view', $data);
    }

    public function delete($id)
    {
        $item=DB::table('job_vacancy_form')->where('id', '=', $id)->first();
        if($item)
        {
            $resume_path=public_path('assets/resume/').$item->resume;
            if (file_exists($resume_path))
            {
                unlink($resume_path);//Resume Delete
            }

            DB::table('job_vacancy_form')->where('id',$id)->delete();
            return redirect('admin/job_applications')->with("view_msg", "<div class='alert alert-success'>Successfully Deleted!</div>");
        }
        else
        {
            return redirect('admin/job_applications');
        }
    }

}
