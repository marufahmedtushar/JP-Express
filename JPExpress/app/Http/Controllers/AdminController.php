<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Country;
class AdminController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users')->with('users',$users);
    }


    public function userChangeStatus(Request $request)
    {
        $users = User::findOrFail($request->user_id);
        $users->isban = $request->isban;
        $users->save();
        return response()->json(['status' => 'User status updated successfully.']);
    }

    public function countrys()
    {

        return view('admin.countryscreate');
    }

    public function countrystore(Request $request)
    {
        $this->validate($request,[
            'country_name' => 'required'

        ]);

        $countrys = new Country();
        $countrys->country_name = $request->input('country_name');
        $countrys->save();

        return back()->with('status','Country Created Successfully...');
    }

    public function viewcountries()
    {

        $country = Country::all();
        return view('admin.viewcountries')->with('country',$country);
    }
}
