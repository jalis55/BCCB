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
        $data=session::get('club_id');
        $club['team']=DB::table('teams')->where('club_id',$data)->get();
    	return view('home_pages.club_dashboard')->with('club_id',$data)->with('teams',$club);

    }
     public function club_logout()
    {
        Session::flash('club_id','');
        Session::flash('message','you have logged out successfully');
        return redirect::to('club-login');
    }
    //team
    public function create_team($id)
    {

        $data['player']=DB::table('contracts')->select('*')->where('club_id',$id)->get();
        return view('home_pages.create_team')->with('club_id',$id);
    }
    public function team_data(Request $request)
    {
        $data=array();
        $data['club_id']=$request->club_id;
        $data['team_formation_date']=$request->team_formation_date;
        $data['coach_id']=$request->coach_id;
        $data['coach_name']=$request->coach_name;
        $data['team_leader_id']=$request->team_leader_id;
        $data['team_leader_name']=$request->team_leader_name;
        $data['player']=$request->player_id;
        #$data['player_name']=$request->player_name;

        DB::table('teams')->insert($data);
        return redirect::to('club-dashboard');


    }
    public function add_team_player($id)
    {
        return view('home_pages.add_team_player');
    }
    public function add_venue()
    {
        return view('home_pages.create_venue');

    }
    public function venue_data(Request $request)
    {
        $data=array();
        $data['venue_id']=$request->venue_id;
        $data['venue_name']=$request->venue_name;
        DB::table('venues')->insert($data);
        return redirect::to('/admin');
    }
    public function add_event()
    {
        return view('home_pages.create_event');
    }
    public function event_data(Request $request)
    {
        $data=array();
        $data['event_id']=$request->event_id;
        $data['location']=$request->event_name;
        DB::table('events')->insert($data);
        return redirect::to('admin');
    }
    public function player_performance()
    {
        return view('home_pages.player_perform');
    }
    public function player_performance_data(Request $request)
    {
       
        $data=array();
        $data['match_id']=$request->match_id;
        $data['venue_id']=$request->venue_id;
        $data['date_of_match']=$request->date_of_match;
        $data['player_id']=$request->player_id;
        $data['total_run']=$request->total_run;
        $data['total_wicket']=$request->total_wicket;
        $data['comment']=$request->comment;
        DB::table('player_performance')->insert($data);
        return redirect::to('admin');

    }
    public function match_info()
    {
        return view('home_pages.match_info');
    }
    public function match_info_data(Request $request)
    {
        $data=array();
        $data['match_id']=$request->match_id;
        $data['venue_id']=$request->venue_id;
        $data['event_id']=$request->event_id;
        $data['date_of_match']=$request->date_of_match;
       
        $data['man_of_match']=$request->man_of_match;
        $data['umpires']=$request->umpires;
        DB::table('matches')->insert($data);
        return redirect::to('admin');

    }
    public function payment()
    {
        return view('home_pages.payment');
    }
    public function payment_data(Request $request)
    {
        $data=array();
        $data['serial_id']=$request->serial_id;
        $data['due_date']=$request->due_date;
        $data['payment_date']=$request->payment_date;
        $data['amount']=$request->amount;
        DB::table('payments')->insert($data);
        return redirect::to('payment');
        
    }

    public function admin()
    {
        return view('home_pages.admin');
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
