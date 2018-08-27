<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Player;
use DB;
use Session;

class PlayerController extends Controller
{
    public function index(Request $request)
    {
    	$data=array();
			$data['f_name']=$request->f_name;
			$data['m_name']=$request->m_name;
			$data['l_name']=$request->l_name;
			$data['father_name']=$request->father_name;
			$data['mother_name']=$request->mother_name;
			$data['dob']=$request->dob;

			//present address
			$addr=array();
			$addr['t_houseNO']=$request->t_houseNO;
			$addr['t_location']=$request->t_location;
			$addr['t_village']=$request->t_village;
			$addr['t_thana']=$request->t_thana;
			$addr['t_district']=$request->t_district;
			$addr['t_postCode']=$request->t_postCode;
			$data['present_address']=json_encode($addr);

			//parmanet address
			$addr1=array();
			$addr1['p_houseNO']=$request->p_houseNO;
			$addr1['p_location']=$request->p_location;
			$addr1['p_village']=$request->p_village;
			$addr1['p_thana']=$request->p_thana;
			$addr1['p_district']=$request->p_district;
			$addr1['p_postCode']=$request->p_postCode;
			$data['parmanent_address']=json_encode($addr1);
			$data['email']=$request->email;
			$data['password']=md5('$request->password');
			$data['player_sign']=$request->player_sign;
			$data['signature_date']=$request->signature_date;
			$data['membership']=$request->membership;
			DB::table('players')->insert($data);//player information

			$player=DB::table('players')->where('email',$request->email)->first();
			$player_id=$player->player_id;
			
			
			$edu['degree_name']=$request->degree_name;
			$edu['inst_name']=$request->inst_name;
			$edu['board']=$request->board;
			$edu['year']=$request->year;
			$edu['result']=$request->result;
			$edu['player_id']=$player_id;
			DB::table('educations')->insert($edu);//educational information


			$his['p_clubName']=$request->p_clubName;
			$his['from']=$request->from;
			$his['to']=$request->to;
			$his['total_run']=$request->total_run;
			$his['total_wicket']=$request->total_wicket;
			$his['team_leader']=$request->team_leader;
			$his['player_id']=$player_id;
			DB::table('previous_histories')->insert($his);//previous history

			$bp['b_clubName']=$request->b_clubName;
			$bp['b_opClubName']=$request->b_opClubName;
			$bp['b_eventId']=$request->b_eventId;
			$bp['b_matchId']=$request->b_matchId;
			$bp['b_runs']=$request->b_runs;
			$bp['b_wickets']=$request->b_wickets;
			$bp['player_id']=$player_id;
			DB::table('best_performances')->insert($bp);//best performence
			Session::flash('message','Registration successful');
			return Redirect::to('/player-registration');
		    	
    }
    public function players()
    {
    	$data['player_info']=DB::table('players')->get();
    	return view('home_pages.players')->with('data',$data);
    }
    public function player_detail($id){
    	 ini_set('memory_limit','256M');
    	$player_info=DB::table('players')->where('player_id',$id)->first();
    	$data['edu_info']=DB::table('educations')->where('player_id',$id)->orderBy('year','desc')->get();
    	$data['prev_info']=DB::table('previous_histories')->where('player_id',$id)->get();
    	$performence=DB::table('best_performances')->where('player_id',$id)->first();
		$t_address=json_decode($player_info->present_address);
		$p_address=json_decode($player_info->parmanent_address);
		
    	return view('home_pages.players_details')->with('player_data',$player_info)->with('t_add',$t_address)
    	->with('p_add',$p_address)->with('perform',$performence)->with('data',$data);
    }
    public function player_login()
    {
    	return view('home_pages.player_login');
    }
    public function player_login_check(Request $request)
    {
    	$this->auth_check();
    	$email=$request->email;
    	$password=$request->password;
    	$result=DB::table('players')
    	       ->select('*')
    	       ->where('email','=',$email)
    	       ->where('password','=',md5($password))
    	       ->first();


    	if($result)
    	{
    		session::put('player_id',$result->player_id);
    		//session::put('admin_name',$result->admin_name);
    		return redirect::to('home_pages.player_dashboard');

    	}
    	else
    	{

    		session::flash('message','invalid email or password');
    		return redirect::to('player-login');
    	}
    }
    public function auth_check()
    {
        session_start();
        $player_id=session::get('player_id');
        if($player_id !=NULL)
         {
            return redirect::to('player-login')->send();
         }   
       
    }

}
