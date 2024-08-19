<?php

namespace App\Http\Controllers;
use App\Mail\DonationReceipt;
use App\Models\User;
use App\Models\Donation;
use App\Models\volunteer_acceptance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

class VolunteerController extends Controller
{
    public function volunteer_feedback(){
      
        return view('volunteer.volunteer_feedback');
    }
    //to show all donation post
    public function show_donation_post($id){
        //  echo $id;die;
        $user = User::find($id);
        //  echo "<pre>";print_r($user);die;
        $city_id = $user->city_id;
        $area_id = $user->area_id;
        //  echo "$city_id<br>$area_id";
        //logic query 
        $records = DB::table('donation')
                    ->where('city_id', '=', $city_id)
                    ->where('area_id', '=', $area_id)
                    ->where('status', '=', 'Pending')
                    ->get();
    
        //  echo "<pre>";print_r($records);die;
       
        return view('volunteer.post_donation',['records' => $records]);
    }
    public function Dontaion_Details($id){
        $donation = Donation::find($id);
        //echo "<pre>";print_r($donation);die;
        return view('volunteer.donation_details',['donation' => $donation]);
    }
    //Accept the donation post from volnteer side
    public function Accept_Donation($id,$v_id){
        $donation = Donation::find($id);
        $post = Donation::where('D_id', $id)->update(['status' => 'Accepted']);

        $insert = new volunteer_acceptance();
        $insert->D_id = $id;
        $insert->user_id = $v_id;
        $insert->datetime = now();
        $insert->status = "Accepted";
        $insert->received_datetime = null;
        //$insert->received_message = "";
        $insert->delivery_datetime = null;
        //$insert->delivery_message = "";
        $insert->save();
        return redirect()->route('home')->with('Accept','Donation Request Accepted...');
    }

    //My post it menas in donatiomn post which volunteer accept donation that all post it show in this page
    public function Mypost($id){
        $records = DB::table('volunteer_acceptance')
                        ->join('donation', 'volunteer_acceptance.D_id', '=', 'donation.D_id')
                        ->where('volunteer_acceptance.user_id', $id)
                        ->select('volunteer_acceptance.*', 'donation.*')
                        ->get();

        //echo "<pre>";print_r($records);die;
        return view('volunteer.mypost',['records' => $records]);
    }
    //received donation post update query
    public function ReceviedDonation($id){
        $record = volunteer_acceptance::where('D_id',$id)
                                        ->update([
                                            'status'=>'Recevied',
                                            'received_datetime' => now()
                                        ]);
        $donation = Donation::where('D_id',$id)
                                    ->update([
                                        'status'=>'Recevied'
                                    ]);
        return redirect()->route('home')->with('Recevied','You successfully Recevied donation...');                            

    }
    //Delivered donation and send email to user donation donate into ngo successfully message with...
    public function DeliveredDonation($id){
       
        $record = volunteer_acceptance::where('D_id',$id)
                                        ->update([
                                            'status'=>'Delivered',
                                            'delivery_datetime' => now()
                                        ]);
        $donation = Donation::where('D_id',$id)
                                    ->update([
                                        'status'=>'Delivered'
                                    ]);

        //now process to send email first find user according donatino into donation table
        $donor = Donation::find($id);
        $user_id = $donor->user_id;
        $user = User::find($user_id);
        $email = $user->email;
        //email sending protion
        $toemail = $email;
        $msg = "your Donation has been successfully delivered in NGO, Thank you for donation us. ";
        $subject = "Your kindness changes lives";
        Mail::to($toemail)->send(new DonationReceipt($msg,$subject));
        return redirect()->route('home')->with('Doantion_success','Donation Successfully...');
    }
}