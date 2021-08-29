<?php

namespace App\Http\Controllers;

use App\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Country;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $countrys = Country::all();
        return view('dashboard')->with('countrys',$countrys);


    }
    public function profileoverview()
    {
        $users = User::all();
        return view('profileoverview')->with('users',$users);
    }

    public function editinfo(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'company' => 'required',
        ]);


        $userinfo = User::find($id);
        $userinfo->name = $request->input('name');
        $userinfo->phone = $request->input('phone');
        $userinfo->email = $request->input('email');
        $userinfo->company = $request->input('company');
        $userinfo->address = $request->input('address');
        $userinfo->save();
        return back()->with('status','Information Updated..');
    }

    public function changepassword()
    {
        $users = User::all();
        return view('changepassword')->with('users',$users);
    }



    public function updatepassword(Request $request)
    {
        $this->validate($request, [

            'oldpassword' => 'required',
            'newpassword' => 'required',
        ]);
        $id = Auth::user()->id;
        $db_pass = Auth::user()->password;
        $old_pass = $request->oldpassword;
        $new_pass = $request->newpassword;
        $confirm_pass = $request->password_confirmation;

        if(Hash::check($old_pass,$db_pass)){

            if ($new_pass === $confirm_pass)
            {
                User::find($id)->update([
                   'password'=> Hash::make($request->newpassword)
                ]);
                Auth::logout();
                return redirect('login')->with('status','password updated successfully');

            }
            else{
                return redirect()->back()->with('danger','new password and confirm password not matched ');
            }

        }
        else{
            return redirect()->back()->with('error','old password doesnt matched ');
        }
    }

    public function quickrates()
    {
        $countrys = Country::all();
        return view('quickrates')->with('countrys',$countrys);

    }

    public function onlinebooking()
    {

        return view('onlinebooking');

    }

    public function pricecheck(Request $request){
        $from  = $request->input('from');
        $to  = $request->input('to');
        $service  = $request->input('service_type');
        $weight  = $request->input('weight_kg');


        if ($price = Price::where('from','LIKE','%'.$from.'%')
            ->where(  'to','LIKE','%'.$to.'%' )
            ->where( 'service_type','LIKE','%'.$service.'%')
            ->where('weight_kg','>=','%'.$weight.'%' )
            ->get())
        {
            return view('priceresult')->with('price',$price);
        }
        elseif($price = Price::where('from','NOT LIKE','%'.$from.'%')
            ->where(  'to','NOT LIKE','%'.$to.'%' )
            ->where( 'service_type','NOT LIKE','%'.$service.'%')
            ->where('weight_kg','NOT LIKE','%'.$weight.'%' )
            ->get())
        {
            return view('priceresult')->with('price',$price)->with('status',',dvnlzgsFLLSDNL:fnDL');
        }









    }



}
