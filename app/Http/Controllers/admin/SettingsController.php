<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->menu=10;

    }

    public function edit()
    {
        $data['menu']=$this->menu;
        $data['pageTitle']='Settings';
        $id=1;
        $data['result']=DB::table('users')->where('id', '=', $id)->first();
        return view('admin.settings.settings',$data);
    }



    public function update(Request $request)
    {

        $id=1;
        $item=DB::table('users')->where('id', '=', $id)->first();

        if($item)
        {
                $data=array(
                    "name" =>$request->name,
                    "email" =>$request->email,
                    "password" =>Hash::make($request->password),
                    "updated_at" => date("Y-m-d h:i:s")
                );

            DB::table('users')->where('id',$id)->update($data);
            return redirect('admin/settings')->with("view_msg", "<div class='alert alert-success'>Successfully updated</div>");

        }
        else
        {
            return redirect('admin/settings');
        }

    }
}
