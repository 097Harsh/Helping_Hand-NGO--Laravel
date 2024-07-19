<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Area;
use App\Models\Role;
use App\Models\Contact;
use App\Models\Feedback;

class User extends Controller
{
    //Home page
    public function index(){
        return view('user.home');
    }
    public function about(){
        return view('user.about');

    }

    //Contact
    public function contact(){
        return view('user.contact');
    }
    //store inqury information
    public function store_contact(Request $request){
        $contact = new Contact();
        /*  echo "<pre>";
        print_r($request);die;  */
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->contact = $request['contact'];
        $contact->message = $request['msg'];
        $contact->save();
        return redirect()->route('home')->with('contact','Inqury sended...');
    }
    //register
    public function register(){
        $citys = City::all();
        $areas = Area::all();
        $roles = Role::where('role_id', '!=', '1')->get();
        $data = compact('citys','areas','roles');
        /*  echo "<pre>";
        $data = compact('city','area','role');
        print_r($data);echo "<pre>";die;    */
        return view('user.register')->with($data);
    }
    //login
    public function login(){
        $roles = Role::all();
        $data = compact('roles');
        return view('user.login')->with($data);
    }
    //feedback 
    public function feedback(){
        return view('user.feedback');

    }
    public function store_feedback(Request $request,$id){
        /*  echo $id;
        echo "<pre>";
        print_r($request);  */
        $feedback = new Feedback();
        $feedback->user_id = $id;
        $feedback->rating = $request['rating'];
        $feedback->message = $request['comment'];
        $feedback->save();
        return redirect()->route('home')->with('feedback','Feedback sended successfully...');
    }
    //Donation - form
    public function Donation(){
        $categorys = Category::where('cat_id', '!=', '3')->get();;
        $citys = City::all();
        $areas = Area::all();
        $data = compact('citys','areas','categorys');
        return view('user.donation')->with($data);
    }
    //store donation information
    public function store_donation(Request $request,$id){
        // Increase memory limit if needed
        ini_set('memory_limit', '1024M');
        /*  echo $id;
        echo "<pre>";
        print_r($request);die;  */
        $donation = new Donation();
        $donation->Title = $request['title'];
        $donation->Description = $request['desc'];
        $donation->address = $request['add'];
        $donation->donation_date = $request['date'];
        $donation->status = "Pending";
        $donation->From_time = $request['dtime'];
        $donation->To_Time = $request['etime'];
        $donation->contact_name = $request['c_name'];
        $donation->contact_person = $request['c_number'];
        $donation->city_id = $request['city_id'];
        $donation->area_id = $request['area_id'];
        $donation->user_id = $id;
        $donation->cat_id = $request['cat_id'];
        $donation->save();
        return redirect()->route('home')->with('donation','Donation request send...');
    }
}
