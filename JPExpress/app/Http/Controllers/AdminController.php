<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Country;
use App\Traveler;
use App\Price;
class AdminController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users')->with('users',$users);
    }


    public function userChangeStatus(Request $request,$id)
    {
        $users = User::find($id);

        $users->isban = $request->input('isban');
        $users->update();
        return redirect()->back()->with('status','The status of '. $users->name . ' is successfully updated');
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

    public function createtraveller()
    {
        return view('admin.createtraveller');
    }
    public function viewtraveller()
    {
        $traveler = Traveler::all();
        return view('admin.viewtraveller')->with('traveler',$traveler);
    }


    public function travelerstore(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'permanent_address' => 'required',
            'travelling_address' => 'required',
            'passport' => 'image|nullable|max:1999',
            'travel_ticket' => 'image|nullable|max:1999',
            'nid' => 'image|nullable|max:1999',
            'hotel_booking' => 'image|nullable|max:1999',
            'address_number' => 'required',
            'local_guarantor' => 'required',
            'travel_departure_cirtificate' => 'image|nullable|max:1999'
        ]);


        //passport photo upload
        if($request->hasFile('passport')){
            //get file name  with the  extension
            $filenameWithExt = $request->file('passport')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('passport')->getClientOriginalExtension();
            $inputname = 'passport';
            //file name to  store
            $passport = $filename.'_'.time().'_'.$inputname.'.'.$extension;
            //upload image
            $path = $request->file('passport')->storeAs('public/images',$passport);


        }else{
            $passport = 'noimage.jpg';
        }

        //travel ticket photo upload
        if($request->hasFile('travel_ticket')){
            //get file name  with the  extension
            $filenameWithExt = $request->file('travel_ticket')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('travel_ticket')->getClientOriginalExtension();
            $inputname = 'travel_ticket';
            //file name to  store
            $travel_ticket = $filename.'_'.time().'_'.$inputname.'.'.$extension;
            //upload image
            $path = $request->file('travel_ticket')->storeAs('public/images',$travel_ticket);


        }else{
            $travel_ticket = 'noimage.jpg';
        }

        //nid photo upload
        if($request->hasFile('nid')){
            //get file name  with the  extension
            $filenameWithExt = $request->file('nid')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('nid')->getClientOriginalExtension();
            $inputname = 'nid';
            //file name to  store
            $nid = $filename.'_'.time().'_'.$inputname.'.'.$extension;
            //upload image
            $path = $request->file('nid')->storeAs('public/images',$nid);


        }else{
            $nid = 'noimage.jpg';
        }

        //hotel_booking photo upload
        if($request->hasFile('hotel_booking')){
            //get file name  with the  extension
            $filenameWithExt = $request->file('hotel_booking')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('hotel_booking')->getClientOriginalExtension();
            $inputname = 'hotel_booking';
            //file name to  store
            $hotel_booking = $filename.'_'.time().'_'.$inputname.'.'.$extension;
            //upload image
            $path = $request->file('hotel_booking')->storeAs('public/images',$hotel_booking);


        }else{
            $hotel_booking = 'noimage.jpg';
        }

        //travel_departure_cirtificate upload
        if($request->hasFile('travel_departure_cirtificate')){
            //get file name  with the  extension
            $filenameWithExt = $request->file('travel_departure_cirtificate')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('travel_departure_cirtificate')->getClientOriginalExtension();
            $inputname = 'travel_departure_cirtificate';
            //file name to  store
            $travel_departure_cirtificate = $filename.'_'.time().'_'.$inputname.'.'.$extension;
            //upload image
            $path = $request->file('travel_departure_cirtificate')->storeAs('public/images',$travel_departure_cirtificate);


        }else{
            $travel_departure_cirtificate = 'noimage.jpg';
        }



        $traveler = new Traveler();
        $traveler->name = $request->input('name');
        $traveler->email = $request->input('email');
        $traveler->mobile = $request->input('mobile');
        $traveler->permanent_address = $request->input('permanent_address');
        $traveler->travelling_address = $request->input('travelling_address');

        $traveler->passport = $passport;
        $traveler->travel_ticket = $travel_ticket;
        $traveler->nid = $nid;
        $traveler->hotel_booking = $hotel_booking;
        $traveler-> travel_departure_cirtificate = $travel_departure_cirtificate ;

        $traveler->address_number = $request->input('address_number');
        $traveler->local_guarantor = $request->input('local_guarantor');

        $traveler->save();
        return back()->with('status','Traveller Created Successfully...');

    }

    public function traveleredit($id){
        $traveler = Traveler::findOrFail($id);
        return view('admin.updatetraveler')->with('traveler',$traveler);

    }

    public function travelersave(Request $request,Traveler $traveler){




        //passport photo upload
        if($request->hasFile('passport')){
            //get file name  with the  extension
            $filenameWithExt = $request->file('passport')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('passport')->getClientOriginalExtension();
            //file name to  store
            $passport = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('passport')->storeAs('public/images',$passport);


        }

        //travel ticket photo upload
        if($request->hasFile('travel_ticket')){
            //get file name  with the  extension
            $filenameWithExt = $request->file('travel_ticket')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('travel_ticket')->getClientOriginalExtension();
            //file name to  store
            $travel_ticket = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('travel_ticket')->storeAs('public/images',$travel_ticket);


        }

        //nid photo upload
        if($request->hasFile('nid')){
            //get file name  with the  extension
            $filenameWithExt = $request->file('nid')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('nid')->getClientOriginalExtension();
            //file name to  store
            $nid = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('nid')->storeAs('public/images',$nid);


        }

        //hotel_booking photo upload
        if($request->hasFile('hotel_booking')){
            //get file name  with the  extension
            $filenameWithExt = $request->file('hotel_booking')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('hotel_booking')->getClientOriginalExtension();
            //file name to  store
            $hotel_booking = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('hotel_booking')->storeAs('public/images',$hotel_booking);


        }

        //travel_departure_cirtificate upload
        if($request->hasFile('travel_departure_cirtificate')){
            //get file name  with the  extension
            $filenameWithExt = $request->file('travel_departure_cirtificate')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('travel_departure_cirtificate')->getClientOriginalExtension();
            //file name to  store
            $travel_departure_cirtificate = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('travel_departure_cirtificate')->storeAs('public/images',$travel_departure_cirtificate);


        }




        $traveler->name = $request->input('name');
        $traveler->email = $request->input('email');
        $traveler->mobile = $request->input('mobile');
        $traveler->permanent_address = $request->input('permanent_address');
        $traveler->travelling_address = $request->input('travelling_address');

        if($request->hasFile('passport')){
            $traveler->passport = $passport;
        }
        if($request->hasFile('travel_ticket')){
            $traveler->travel_ticket = $travel_ticket;
        }
        if($request->hasFile('nid')){
            $traveler->nid = $nid;
        }
        if($request->hasFile('hotel_booking')){
            $traveler->hotel_booking = $hotel_booking;
        }
        if($request->hasFile('travel_departure_cirtificate')){
            $traveler->travel_departure_cirtificate = $travel_departure_cirtificate ;
        }

        $traveler->address_number = $request->input('address_number');
        $traveler->local_guarantor = $request->input('local_guarantor');

        $traveler->save();
        return back()->with('status','Traveller Updated Successfully...');

    }

    public function travelerdelete(Request $request)
    {

        $traveler = Traveler::findOrFail($request->traveler_id);
        if($traveler->passport != 'null'){

            Storage::delete('public/images/'.$traveler->passport);
        }
        if($traveler->travel_ticket != 'null'){

            Storage::delete('public/images/'.$traveler->travel_ticket);
        }
        if($traveler->nid != 'null'){

            Storage::delete('public/images/'.$traveler->nid);
        }
        if($traveler->hotel_booking != 'null'){

            Storage::delete('public/images/'.$traveler->hotel_booking);
        }
        if($traveler->travel_departure_cirtificate != 'null'){

            Storage::delete('public/images/'.$traveler->travel_departure_cirtificate);
        }
        $traveler->delete();

        return back()->with('status','Traveler Deleted Successfully...');

    }

    public function createprice()
    {
        $countrys = Country::all();
        return view('admin.createprice')->with('countrys',$countrys);
    }

    public function viewprice()
    {
        $countrys = Country::all();
        $price = Price::all();
        return view('admin.viewprice')->with('price',$price)->with('countrys',$countrys);;
    }



    public function pricestore(Request $request){

        $this->validate($request,[
            'from' => 'required',
            'to' => 'required',
            'service_type' => 'required',
            'weight_kg' => 'required',
            'price' => 'required',
        ]);




        $price = new Price();
        $price->from = $request->input('from');
        $price->to = $request->input('to');
        $price->service_type = $request->input('service_type');
        $price->weight_kg = $request->input('weight_kg');
        $price->price = $request->input('price');
        $price->save();
        return back()->with('status','Price Created Successfully...');

    }










    public function priceupdate(Request $request){






        $price = Price::findOrFail($request->price_id);
        $price->from = $request->input('from');
        $price->to = $request->input('to');
        $price->service_type = $request->input('service_type');
        $price->weight_kg = $request->input('weight_kg');
        $price->price = $request->input('price');
        $price->update();

        return back()->with('status','Price Updated Successfully...');
    }



    public function pricedelete(Request $request)
    {

        $price = Price::findOrFail($request->price_id);
        $price->delete();
        return back()->with('status','Price Deleted Successfully...');


    }






}
