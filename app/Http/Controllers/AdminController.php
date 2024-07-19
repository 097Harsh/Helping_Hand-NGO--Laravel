<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Donation;
use App\Models\Feedback;
use Faker\Provider\sl_SI\Company;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Area;
use App\Models\City;
use App\Models\MoneyDonation;


class AdminController extends Controller
{
    //
    public function dashboard(){
        //echo "hi <br>";
        $users = User::where('role_id','=','2')->count();
        $volunteer = User::where('role_id','=','3')->count();
        $donation = Donation::where('status','=','Completed')->count();
        $m_donation = MoneyDonation::where('payment_status', 'Completed')->sum('amt');
        //echo "<pre>";print_r($donation);die;
        return view('admin.dashboard',compact('users','volunteer','donation','m_donation'));
    }
    //All category function 
    public function all_category(){
        //we pass all category into return view when we fetch record from Database...
        $categorys = Category::all();
        /* echo "<pre>";
        print_r($category);die; */
        $date = compact('categorys');
        return view('admin.all_cat')->with($date);
    }
    //Add Category
    public function add_cat(){
      
        return view('admin.add_cat');
    }
    //store category
    public function store_cat(Request $request){
       // echo "<pre>";
        //print_r($request);
        $name = $request['name'];
        $category = new Category();
        $category->cat_name = $name;
        $category->save();
        return redirect()->route('ShowCategory')->with('success','Category Added');
    }
     //delete category
     public function delete_category(Request $request,$id){
        //print_r($id);die;
        $category = Category::find($id);
        //print_r($category);die;
        if ($category) {
            $category->delete();
            return redirect()->route('ShowCategory')->with('error', 'Category Deleted .');
        } else {
            return redirect()->route('ShowCategory')->with('error', 'Category not found.');
        }
    }
    //update category
    public function edit_category($id){
        $category = Category::find($id);
        if(is_null($category)){
            return redirect()->route('ShowCategory');
        }else{
            //echo "hi";die;
           $data = compact('category');
           //echo "<pre>"; print_r($data);echo "</pre>";die;
           return view('admin.update_Cat')->with($data);
        }
    }
    public function update_cat($id,Request $request){
        /*echo "<pre>"; 
        print_r($request); 
        echo "</pre>";die;*/
        $name = $request['name'];
        //echo $name;die;
        $category = Category::find($id);
        /*echo "<pre>"; 
        print_r($category); 
        echo "</pre>";die;*/
        if ($category) {
            // Update the category properties
            $category->cat_name = $name;
            $category->save();
            return redirect()->route('ShowCategory')->with('update', 'Category Was Updated');
        }
    }
    //view users
    public function ShowUsers(){
        $users=User::where('role_id',2)->paginate(5);
        
        $date = compact('users');
        return view('admin.all_user')->with($date);
    }
    //view user profile
    public function ViewProfile($id){
        $user = User::find($id);    
        if(is_null($user)){
            return redirect()->route('ViewUser');
        }else{
            //echo "hi";die;
            $city_id = $user->city_id;
            $area_id = $user->area_id;
            //echo $area_id;die;
            $city = City::find($city_id);
            $area = Area::find($area_id);
           $data = compact('user','city','area');
           //echo "<pre>"; print_r($data);echo "</pre>";die;
           return view('admin.view_user_profile')->with($data);
        }
    }
    //view volunteer
    public function ShowVolunteer(){
        $users=User::where('role_id',3)->paginate(5);

        $date = compact('users');
        return view('admin.all_volunteer')->with($date);
    }
    //view user profile
    public function ViewVolunteerProfile($id){
        $user = User::find($id);    
        if(is_null($user)){
            return redirect()->route('ViewUser');
        }else{
            $city_id = $user->city_id;
            $area_id = $user->area_id;
            //echo $area_id;die;
            $city = City::find($city_id);
            $area = Area::find($area_id);
           $data = compact('user','city','area');
           //echo "<pre>"; print_r($data);echo "</pre>";die;
           return view('admin.view_volunteer')->with($data);
        }
    }
    //view Feed-Back
    public function ShowFeedBack(){
        $feedbacks = Feedback::select('feedback.f_id', 'feedback.rating', 'feedback.message', 'feedback.user_id', 'users.user_id', 'users.name', 'users.email')
        ->join('users', 'feedback.user_id', '=', 'users.user_id')
        ->paginate(10);
        //echo "<pre>";print_r($feedbacks);die;
        $date = compact('feedbacks');
        return view('admin.all_feedback')->with($date);
    }
    //All inquirys 
    public function ShowInqury(){
        $contacts = Contact::paginate(10);
        $date = compact('contacts');
        return view('admin.all_inq')->with($date);
    }
    //Show Pending Donation Request
    public function PendingDonation(){
        $donations = Donation::select('donation.d_id','donation.contact_name','donation.contact_person','donation.address','donation.donation_date','donation.user_id','users.user_id','users.name')
                    ->join('users','donation.user_id','=','users.user_id')
                    ->where('donation.status','=','Pending')
                    ->paginate(10);
        //  echo "<pre>";print_r($donation);die;
        $data = compact('donations');
        return view('admin.PendingDoantion')->with($data);
    }
    //Show Details about Donation
    public function PendingDonationDetails($id){
        $donation = Donation::select('donation.d_id','donation.Title','donation.Description','donation.address','donation.donation_date','donation.status','donation.From_time', 'donation.To_Time','donation.contact_name','donation.contact_person','donation.user_id','donation.cat_id', 'users.user_id','users.name','city.city_name','area.area_name', 'category.cat_name')
        ->join('users', 'donation.user_id', '=', 'users.user_id')
        ->join('city', 'donation.city_id', '=', 'city.city_id') // Assuming donation has city_id as foreign key
        ->join('area', 'donation.area_id', '=', 'area.area_id') // Assuming donation has area_id as foreign key
        ->join('category', 'donation.cat_id', '=', 'category.cat_id') // Assuming donation has cat_id as foreign key
        ->where('donation.d_id', '=', $id)
        ->first();
        //  echo "<pre>";print_r($donation);die;
        
        $data = compact('donation');
        return view('admin.viewDonationRequest')->with($data);
    }
    // Show Completed Donation Request  
    public function CompleteDonation(){
        $donations = Donation::select('donation.d_id','donation.contact_name','donation.contact_person','donation.address','donation.donation_date','donation.user_id','users.user_id','users.name')
        ->join('users','donation.user_id','=','users.user_id')
        ->where('donation.status','=','Completed')
        ->paginate(10);
        //  echo "<pre>";print_r($donation);die;
        $data = compact('donations');
        return view('admin.CompletedDonation')->with($data);

    }

    //money donation
    public function MoneyDonation(){
        $moneys = MoneyDonation::where('payment_status','Completed')->paginate(5);
        $data = compact('moneys');
        return view('admin.Money_dontion')->with($data);
    }
}
