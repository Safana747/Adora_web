<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class PartnershipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->menu=7;
    }

    public function index()
    {
        $data['menu'] = $this->menu;
        $data['pageTitle'] = 'Partnership';
        $data['count'] = DB::table('become_partner_form')->count();
        $data['result'] = DB::table('become_partner_form')->orderBy('id','desc')->paginate(25);
        return view('admin.partnership.view', $data);
    }

    public function delete($id)
    {
        $item=DB::table('become_partner_form')->where('id', '=', $id)->first();
        if($item)
        {

            DB::table('become_partner_form')->where('id',$id)->delete();
            return redirect('admin/partnership')->with("view_msg", "<div class='alert alert-success'>Successfully Deleted!</div>");
        }
        else
        {
            return redirect('admin/partnership');
        }
    }
}
