<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class JobVacanciesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->menu=5;
    }

    public function index()
    {
        $data['menu'] = $this->menu;
        $data['pageTitle'] = 'Job Vacancies';
        $data['count'] = DB::table('jobvacancies')->count();
        $data['result'] = DB::table('jobvacancies')->orderBy('id','desc')->paginate(25);
        return view('admin.jobvacancies.view', $data);
    }

    public function add()
    {
        $data['menu']=$this->menu;
        $data['pageTitle']='Add Job Vacancies';
        return view('admin.jobvacancies.add',$data);
    }
    public function save(Request $request)
    {
            $data=array(
                "title" =>$request->title,
                "jobtype" =>$request->jobtype,
                "location" =>$request->location,
                "summary" =>$request->summary,
                "created_at" => date("Y-m-d h:i:s")
            );

        DB::table('jobvacancies')->insert($data);
        return redirect('admin/jobvacancies')->with("view_msg", "<div class='alert alert-success'>Successfully saved!</div>");


    }
    public function edit($id)
    {
        $data['menu']=$this->menu;
        $data['pageTitle']='Edit Job Vacancies';
        $data['result']=DB::table('jobvacancies')->where('id', '=', $id)->first();
        return view('admin.jobvacancies.edit',$data);
    }



    public function update(Request $request,$id)
    {
        $item=DB::table('jobvacancies')->where('id', '=', $id)->first();

        if($item)
        {

                $data=array(
                    "title" =>$request->title,
                    "jobtype" =>$request->jobtype,
                    "location" =>$request->location,
                    "summary" =>$request->summary,
                    "updated_at" => date("Y-m-d h:i:s")
                );


            DB::table('jobvacancies')->where('id',$id)->update($data);
            return redirect('admin/jobvacancies')->with("view_msg", "<div class='alert alert-success'>Successfully updated</div>");

        }
        else
        {
            return redirect('admin/jobvacancies');
        }

    }

    public function delete($id)
    {
        $item=DB::table('jobvacancies')->where('id', '=', $id)->first();
        if($item)
        {
            DB::table('jobvacancies')->where('id',$id)->delete();
            return redirect('admin/jobvacancies')->with("view_msg", "<div class='alert alert-success'>Successfully Deleted!</div>");
        }
        else
        {
            return redirect('admin/jobvacancies');
        }
    }

}
