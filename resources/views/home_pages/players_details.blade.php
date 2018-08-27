    @extends('home.home_master')
    @section('home_content')
    <style>
        .capi{
            text-transform: capitalize;
        }
    </style>
    <div class="well" style="background: #ccffe6">
     <div class="row centered">
      <div class="col-sm-4 col-md-4 col-md-offset-4">
                
        <img src="{{asset('public/images/images.png')}}" class="img-thumbnail" alt="Cinque Terre" width="150" height="100"> 
            
         <h2 class="capi">{{$player_data->f_name}} {{$player_data->m_name}} {{$player_data->l_name}}</h2>
      </div>
     </div><hr>
     <div class="row">

         <div class="col-md-5" >
             <h3>Abouts</h2>
             <h4>Father Name:<span class="capi">{{$player_data->father_name}}</span></h4>
             <h4>Mother Name:<span class="capi">{{$player_data->mother_name}}</span></h4>
             <h4>Date Of Birth:<span class="capi">{{$player_data->dob}}</span></h4>
             <h4>Member Of:<span class="capi">{{$player_data->membership}}</span></h4>
             <h4>Email:<span class="">{{$player_data->email}}</span></h4>
             <br>
             <u><b>Parmanent address:</b></u>
             <p>
                 House no:<?php print_r($p_add->p_houseNO);?><br>
                 Location:<?php print_r($p_add->p_location);?><br>
                 Village/thana:<?php print_r($p_add->p_village);?><br>
                 District:<?php print_r($p_add->p_thana);?><br>
                 Post code:<?php print_r($p_add->p_postCode);?>
             </p>
             <br>
             <u><b>Present address:</b></u>
             <p>
                 House no:<?php print_r($t_add->t_houseNO);?><br>
                 Location:<?php print_r($t_add->t_location);?><br>
                 Village/thana:<?php print_r($t_add->t_village);?><br>
                 District:<?php print_r($t_add->t_thana);?><br>
                 Post code:<?php print_r($t_add->t_postCode);?>
             </p>
             
             

         </div>
         <div class="col-md-7">
           <div class="bg-success">
             <h3>Academic Background</h3>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Degree Name</th>
                    <th>Institution Name</th>
                    <th>Board</th>
                    <th>Result</th>
                    <th>Year</th>
                  </tr>
                 </thead>
                <tbody>
                    
                @foreach($data['edu_info'] as $row)
                  <tr>
                    <td>{{$row->degree_name}}</td>
                    <td>{{$row->inst_name}}</td>
                    <td>{{$row->board}}</td>
                    <td>{{$row->result}}</td>
                    <td>{{$row->year}}</td>
                  </tr>
                @endforeach
                </tbody>
               </table>
           </div>
           <div class="bg-success">
             <h3>Previous History</h3>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Club Name</th>
                    <th>From-To</th>
                    <th>Total Runs</th>
                    <th>Total Wickets</th>
                    <th>Captain</th>
                  </tr>
                 </thead>
                <tbody>
                    
                @foreach($data['prev_info'] as $row)
                  <tr>
                    <td>{{$row->p_clubName}}</td>
                    <td>{{$row->from}}-{{$row->to}}</td>
                    <td>{{$row->total_run}}</td>
                    <td>{{$row->    total_wicket}}</td>
                    <td>
                        @if($row->team_leader==0)
                         NO
                        @else
                         YES
                        @endif
                    </td>
                  </tr>
                @endforeach
                </tbody>

               </table>
           </div>
           <div class="bg-success">
               <h3>Previous History</h3>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Club Name</th>
                    <th>From-To</th>
                    <th>Total Runs</th>
                    <th>Total Wickets</th>
                    <th>Captain</th>
                  </tr>
                 </thead>
                <tbody>
                    
                @foreach($data['prev_info'] as $row)
                  <tr>
                    <td>{{$row->p_clubName}}</td>
                    <td>{{$row->from}}-{{$row->to}}</td>
                    <td>{{$row->total_run}}</td>
                    <td>{{$row->    total_wicket}}</td>
                    <td>
                        @if($row->team_leader==0)
                         NO
                        @else
                         YES
                        @endif
                    </td>
                  </tr>
                @endforeach
                </tbody>
               </table>
           </div>
           <div class="bg-success">    
               <h3>Best Performance</h3>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Club Name</th>
                    <th>Opponent Club Name</th>
                    <th>Match Id</th>
                    <th>Event Id</th>
                    <th>Runs</th>
                    <th>Wickets</th>
                  </tr>
                 </thead>
                <tbody>
                    
                
                  <tr>
                    <td>{{$perform->b_clubName}}</td>
                    <td>{{$perform->b_opClubName}}</td>
                    <td>{{$perform->b_eventId}}</td>
                    <td>{{$perform->b_matchId}}</td>
                    <td>{{$perform->b_runs}}</td>
                    <td>{{$perform->b_wickets}}</td>
                  </tr>
               
                </tbody>
               </table>
           </div>    

         </div>
     </div>
    </div>

    @endsection