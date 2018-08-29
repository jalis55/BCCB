<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class ClubController extends Controller
{
    public function index()
    {
    	return view('home_pages.clubs');
    }
    public function register_club(Request $request)
    {
    	$data=array();
		$data['club_name']=$request->club_name;
		$data['date_of_establishment']=$request->date_of_establishment;
		$data['club_house']=$request->club_house;
		$data['club_location']=$request->club_location;
		$data['club_village']=$request->club_village;
		$data['club_thana']=$request->club_thana;
		$data['club_district']=$request->club_district;
		$data['club_postcode']=$request->club_postcode;
		$data['president']=$request->president;
		$data['password']=md5($request->password);
		DB::table('clubs')->insert($data);
		Session::flash('message','Data added successfuly');
		return Redirect::to('/clubs');
    }
    public function club_login()
    {

    	return view('home_pages.club_login');
    }
    public function club_login_check(Request $request)
    {
    	$this->authCheck();
    	$club_name=$request->club_name;
    	$password=$request->password;
    	$result=DB::table('clubs')
    	       ->select('*')
    	       ->where('club_name','=',$club_name)
    	       ->where('password','=',md5($password))
    	       ->first();


    	if($result)
    	{
    		session::put('club_id',$result->club_id);
    		//session::put('admin_name',$result->admin_name);
    		return redirect::to('club-dashboard');

    	}
    	else
    	{

    		session::flash('message','invalid email or password');
    		return redirect::to('club-login');
    	}
    }
    public function club_dashboard()
    {
    	$this->auth_check();
    	return view('home_pages.club_dashboard');

    }
     public function club_logout()
    {
        Session::flash('club_id','');
        Session::flash('message','you have logged out successfully');
        return redirect::to('club-login');
    }
    //contract
    public function contract($id)
    {
    	$player_id=$id;
    	$club_id=session::get('club_id');
    	$data['player']=DB::table('players')->select('*')->where('player_id',$player_id)->first();
    	$data['club']=DB::table('clubs')->select('*')->where('club_id',$club_id)->first();
    	return view('home_pages.contract')->with('data',$data);
    }
    public function contract_data(Request $request)
    {
    	$data=array();
		$data['club_id']=$request->club_id;
		$data['club_name']=$request->club_name;
		$data['fp_first_name']=$request->f_name;
		$data['fp_middle_name']=$request->m_name;
		$data['fp_last_name']=$request->l_name;
		$data['fp_player_id']=$request->player_id;
		$data['sp_first_name']=$request->sp_first_name;
		$data['sp_middle_name']=$request->sp_middle_name;
		$data['sp_last_name']=$request->sp_last_name;
		$data['designation']=$request->designation;
		$data['start_date']=$request->start_date;
		$data['end_date']=$request->end_date;
		$data['contract_amount']=$request->contract_amount;
		$data['witness_one']=$request->witness_one;
		$data['witness_two']=$request->witness_two;
		// print_r($data);
		// die("Time to leave");
		DB::table('contracts')->insert($data);
		DB::table('players')->where('player_id',$request->player_id)->update(['club_id' => $request->club_id]);
		return Redirect::to('/players');
		
    }


    //end contract

    public function auth_check()
    {
        session_start();
        $club_id=session::get('club_id');
        if($club_id ==NULL)
         {
            return redirect::to('club-login')->send();
         }   
       
    }
    public function authCheck()
    {
        session_start();
        $club_id=session::get('club_id');
        if($club_id !=NULL)
         {
            return redirect::to('club-login')->send();
         }   
       
    }
}
