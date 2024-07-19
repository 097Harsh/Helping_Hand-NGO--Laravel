<?php

namespace App\Http\Controllers;

use App\Mail\donationemail;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Area;
use App\Models\Role;
use App\Models\Contact;
use App\Models\User;
use App\Models\Feedback;
use App\Models\MoneyDonation;
use Mail;

class Users extends Controller
{
    //Home page
    public function index(){
        $users = User::where('role_id','=','2')->count();
        $volunteer = User::where('role_id','=','3')->count();
        $donation = Donation::where('status','=','Completed')->count();
        $m_donation = MoneyDonation::where('payment_status', 'Completed')->sum('amt');
        return view('user.home',compact('users','volunteer','donation','m_donation'));
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
        $categorys = Category::where('cat_id', '!=', '3')->get();
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

    public function MoneyDonation(){
        return view('user.money_donation');
    }
    public function PaymentPage(Request $request,$id){
        //in this function we collect data from MoneyDonation function and that data we would send to payment page for storing information who payment and go to success page to store data
        ini_set('memory_limit', '1024M');
        $amt = $request['amt'];$msg = $request['desc'];$name = $request['d_name'];
        $user = User::find($id);
        $email = $user->email;
        $contact = $user->contact;
        $m_donation = new MoneyDonation();
        $m_donation->amt = $amt;
        $m_donation->d_name = $name;
        $m_donation->msg = $msg;
        $m_donation->d_date = now();
        $m_donation->payment_status = "Pending";
        $m_donation->user_id = $id;
        $m_donation->cat_id = 3;
        $m_donation->save();
            /*echo "$email<br>$contact";die;
            echo "<pre>";print_r($user);die;
            echo "$id<br>$amt<br>$name<br>$msg";die;
            echo "<pre>";print_r($request);die; */
        
         // Get the last inserted ID
        $donationId = $m_donation->m_id;

        return view('user.payment',compact('amt','msg','name','id','email','contact','donationId'));
    }
    public function success($id){
       // echo $id;die;
        $m_doantion =  DB::table('money_donation')
        ->where('m_id', $id)
        ->update(['payment_status' => 'Completed']);
        //email 

        $donor = MoneyDonation::find($id);
        $userid = $donor->user_id;
        $amt = $donor->amt;
        $user = User::find($userid);
        $email = $user->email;
        
         //email sending protion
         $toemail = $email;
         $msg = "Hello, thank you for donating that amount:".$amt;
         $subject = "Thank you for donating";
         Mail::to($toemail)->send(new donationemail($msg,$subject));
 
 

        return redirect()->route('home')->with('payment_success','Donation Successfully...');
    }
    public function MyDonation($id){
        //  echo $id;die;
        $donations = Donation::where('user_id',$id)
        ->where('status','Pending')
        ->get();
        //echo "<pre>";print_r($donations);die;
        $data = compact('donations');
        return view('user.my_donation')->with($data);
    }
    public function MyMoneyDonation($id){
        $m_donations = MoneyDonation::where('user_id',$id)->get();
        //echo "<pre>";print_r($m_donations);die;
        $data = compact('m_donations');
        return view('user.my_money_donation')->with($data);
    }
    //Cancle Donation request
    public function CancleRequest($id){
        //echo $id;die;
        $donation = DB::table('donation')->where('D_id',$id)
                    ->update(['status' => 'Cancle']);
        return redirect()->route('home')->with('cancle','DOnation request cancled...');
    }
    //Edit profile
    public function EditProfile($id)
    {
        //  echo $id;die;
        $user = User::find($id);
        //echo "<pre>";print_r($user);die;
        $data = compact('user');
        return view('user.edit_profile')->with($data);
    }
}
