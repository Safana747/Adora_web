<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WebController extends Controller
{
    public function index()
    {
        $data['landing'] = DB::table('landing')->orderBy('id','desc')->get();
        $data['newthoughts'] = DB::table('newthoughts')->orderBy('id','desc')->get();
        $data['ongoingprojects'] = DB::table('ongoingprojects')->orderBy('id','desc')->get();
        $data['casestudies'] = DB::table('casestudies')->orderBy('id','desc')->get();
        $data['clients'] = DB::table('clients')->orderBy('id','desc')->get();
        $data['social_responsabilities'] = DB::table('social_responsabilities')->orderBy('id', 'desc')->get();



        return view('site.index',$data);
    }
    public function company()
    {
        $data['teams'] = DB::table('teams')->orderBy('id','desc')->get();
        $data['group_of_companies'] = DB::table('group_of_companies')->orderBy('id','desc')->get();
        $data['social_responsabilities'] = DB::table('social_responsabilities')->orderBy('id','desc')->get();
        $data['awards'] = DB::table('awards')->orderBy('id','desc')->get();
        $data['social_responsabilities'] = DB::table('social_responsabilities')->orderBy('id', 'desc')->get();



        return view('site.company',$data);
    }
    public function contact()
    {
        return view('site.contact');
    }
    public function our_brands()
    {
        $data['brands'] = DB::table('brands')->orderBy('id','desc')->get();
        return view('site.our_brands',$data);
    }

    //business
    public function ourbusiness()
    {
        $data['business'] = DB::table('business')->orderBy('id','asc')->get();
        return view('site.ourbusiness',$data);
    }

    public function it_automation()
    {
        $data['it_automation'] = DB::table('it_automation')->orderBy('id','asc')->get();
        return view('site.business.it_automation',$data);
    }
    public function consulting()
    {
        $data['consulting'] = DB::table('consulting')->orderBy('id','asc')->get();
        return view('site.business.consulting',$data);
    }
    public function contracting()
    {
        $data['contracting'] = DB::table('contracting')->orderBy('id','asc')->get();
        return view('site.business.contracting',$data);
    }
    public function trading()
    {
        $data['trading'] = DB::table('trading')->orderBy('id','asc')->get();
        return view('site.business.trading',$data);
    }
    public function marketing_operations()
    {
        $data['operations'] = DB::table('operations')->orderBy('id','asc')->get();
        return view('site.business.marketing_operations',$data);
    }


    //business partnership
    public function become_partner()
    {
        return view('site.oppurtunities.become_partner');
    }
    public function job_vacancies()
    {
        $data['jobvacancies'] = DB::table('jobvacancies')->orderBy('id','desc')->get();

        return view('site.oppurtunities.job_vacancies',$data);
    }
    public function job_vacancies_submit(Request $request)
    {
        $file = $request->file('file');
        $file_first_Name=$file->getClientOriginalName();
        $cv=uniqid() . time() . '.' . $file->getClientOriginalExtension();
        $destinationPath = public_path('assets/resume/');
        $file->move($destinationPath, $cv);


        $data=array(
            "name" =>$request->name,
            "email" =>$request->email,
            "phone" =>$request->phone,
            "job_title" =>$request->job_title,
            "applyingfor" => $request->applyingfor,
            "resume" => $cv,
            "filename" => $file_first_Name,
            "created_at" => date("Y-m-d h:i:s")

        );


        DB::table('job_vacancy_form')->insert($data);
            return redirect('job_vacancies')->with('view_msg', '<div class="alert alert-success"><i class="fa fa-check" aria-hidden="true"></i>Thank you! Your Application Submit successfully</div>');

    }


    public function become_partner_submit(Request $request)
    {

        $data=array(
            "name" =>$request->name,
            "email" =>$request->email,
            "phone" =>$request->phone,
            "address" => $request->address,
            "description" => $request->description,
            "created_at" => date("Y-m-d h:i:s")
        );


        DB::table('become_partner_form')->insert($data);
        return redirect('become_partner')->with('view_msg', '<div class="alert alert-success"><i class="fa fa-check" aria-hidden="true"></i> Thank you for your interest! Our representative will contact you shortly!</div>');
    }
    public function home_single($seo_url=null)
    {
        $item=DB::table('landing')->where('seo_url', $seo_url)->first();
        if($item) {
            $data['landing_first'] = $item;
            $data['landing'] = DB::table('landing')->orderBy('id', 'desc')->get();
            return view('site.single', $data);
        }
        else
        {
            return redirect('/');
        }
    }
    public function newthought_single($seo_url=null)
    {
        $item=DB::table('newthoughts')->where('seo_url', $seo_url)->first();
        if($item) {
            $data['landing_first'] = $item;
            $data['newthoughts'] = DB::table('newthoughts')->orderBy('id', 'desc')->get();
            return view('site.knowmore.newthought_single', $data);
        }
        else
        {
            return redirect('/');
        }

    }
    public function ongoingproject_single($seo_url=null)
    {
        $item=DB::table('ongoingprojects')->where('seo_url', $seo_url)->first();
        if($item) {
            $data['landing_first'] = $item;
            $data['ongoingprojects'] = DB::table('ongoingprojects')->orderBy('id', 'desc')->get();
            return view('site.knowmore.ongoingprojects_single', $data);
        }
        else
        {
            return redirect('/');
        }

    }
    public function casestudy_single($seo_url=null)
    {
        $item=DB::table('casestudies')->where('seo_url', $seo_url)->first();
        if($item) {
            $data['landing_first'] = $item;
            $data['casestudies'] = DB::table('casestudies')->orderBy('id', 'desc')->get();
            return view('site.knowmore.casestudy_single', $data);
        }
        else
        {
            return redirect('/');
        }

    }
    public function social_responsibilities_single($seo_url=null)
    {
        $item=DB::table('social_responsabilities')->where('seo_url', $seo_url)->first();
        if($item) {
            $data['landing_first'] = $item;
            $data['social_responsabilities'] = DB::table('social_responsabilities')->orderBy('id', 'desc')->get();
            return view('site.knowmore.social_responsibilities_single', $data);
        }
        else
        {
            return redirect('/');
        }

    }
    public function awards_single($seo_url=null)
    {
        $item=DB::table('awards')->where('seo_url', $seo_url)->first();
        if($item) {
            $data['landing_first'] = $item;
            $data['awards'] = DB::table('awards')->orderBy('id', 'desc')->get();
            return view('site.knowmore.awards_single', $data);
        }
        else
        {
            return redirect('/');
        }

    }
    public function it_single($seo_url=null)
    {
        $item=DB::table('it_automation')->where('seo_url', $seo_url)->first();
        if($item) {
            $data['landing_first'] = $item;
            $data['it_automation'] = DB::table('it_automation')->orderBy('id', 'desc')->get();
            return view('site.knowmore.it_single', $data);
        }
        else
        {
            return redirect('/');
        }

    }
    public function consulting_single($seo_url=null)
    {
        $item=DB::table('consulting')->where('seo_url', $seo_url)->first();
        if($item) {
            $data['landing_first'] = $item;
            $data['consulting'] = DB::table('consulting')->orderBy('id', 'desc')->get();
            return view('site.knowmore.consulting_single', $data);
        }
        else
        {
            return redirect('/');
        }
    }
    public function contracting_single($seo_url=null)
    {
        $item=DB::table('contracting')->where('seo_url', $seo_url)->first();
        if($item) {
            $data['landing_first'] = $item;
            $data['contracting'] = DB::table('contracting')->orderBy('id', 'desc')->get();
            return view('site.knowmore.contracting_single', $data);
        }
        else
        {
            return redirect('/');
        }
    }
    public function trading_single($seo_url=null)
    {
        $item=DB::table('trading')->where('seo_url', $seo_url)->first();
        if($item) {
            $data['landing_first'] = $item;
            $data['trading'] = DB::table('trading')->orderBy('id', 'desc')->get();
            return view('site.knowmore.trading_single', $data);
        }
        else
        {
            return redirect('/');
        }
    }
    public function operations_single($seo_url=null)
    {
        $item=DB::table('operations')->where('seo_url', $seo_url)->first();
        if($item) {
            $data['landing_first'] = $item;
            $data['operations'] = DB::table('operations')->orderBy('id', 'desc')->get();
            return view('site.knowmore.operations_single', $data);
        }
        else
        {
            return redirect('/');
        }
    }

}
