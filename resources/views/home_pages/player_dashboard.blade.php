<!DOCTYPE html>
<html lang="en">
<head>
  <title>Player DashBoard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  	li{
  		height:80px;
  		width: 100%;
  		
  		text-align: center;
  		background: green;
  	}
  	a{
  		padding-top: 10px;
  	}

  </style>
</head>
<body style="background: 	#000d1a;">
 
<div class="container" >
	   
           @if (Session::has('message'))
    <div class="alert alert-success fade-message">
         <p style="text-align: center;"><b>{{ Session::get('message') }}</b></p>
    </div><br />

    <script>
    $(function(){
        setTimeout(function() {
            $('.fade-message').slideUp();
        }, 4000);
       });
    </script>
        @endif
  
	<br><br>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="card" style="width: 25rem;">
  			 <div class="card-header">
    			
  			 </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item active">
			    	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#edu">Add Education info</button>
			    </li>
			    
			    <li class="list-group-item active">
			    	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#history">Add Previous History</button>
			    </li>
			 
			    <li class="list-group-item active">
			    	
			    	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit Best Performance</button>
			    </li>
			    <li class="list-group-item">
			    	<a href="{{url('/player-logout')}}">Logout</a>
			    </li>
			  </ul>
			</div>
			
   			 	
   		</div>
    		 
		</div>
		<!--Education Modal -->
<div id="edu" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Educational Information</h4>

      </div>
      <div class="modal-body">
        <form action="{{url('/add-education')}}" method="post">
        	{{csrf_field()}}
        	                    <div class="form-group">
        	                    	<input type="hidden" name="player_id" value="{{$player_id}}">
                        <input required type="text" name="degree_name" class="form-control input-sm" id="degree_name" placeholder="Degree Name">
                    </div>
                    
                        
                                <div class="form-group">
                                    <input required type="text" name="inst_name" class="form-control input-sm" id="inst_name" placeholder="Institute/Department">
                                </div>
                         
                                <div class="form-group">
                                    <input required type="text" name="board" class="form-control input-sm" id="board" placeholder="Board/University">
                                </div>
                            
                        
                        
                            
                                <div class="form-group">
                                    <input required type="text" name="year" class="form-control input-sm" id="year" placeholder="Year">
                                </div>
                            
                                <div class="form-group">
                                    <input required type="text" name="result" class="form-control input-sm" id="result" placeholder="Result">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block" id="result" placeholder="Result">
                                </div>
                          

                    
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>	

		<!--History Modal -->
<div id="history" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Previous History</h4>

      </div>
      <div class="modal-body">
        <form action="{{url('/add-history')}}" method="post">
        	{{csrf_field()}}
        	                     
                    <div class="form-group">
						<input type="hidden" name="player_id" value="{{$player_id}}">
                        <input required type="text" name="p_clubName" class="form-control" id="p_clubName" placeholder="Club Name">
                        <input required type="text" name="from" class="form-control" id="from" placeholder="From">
                        <input required type="text" name="to" class="form-control" id="to" placeholder="To">
                        <input required type="text" name="total_run" class="form-control" id="total_run" placeholder="Total runs">
                        <input required type="text" name="total_wicket" class="form-control" id="total_wicket" placeholder="Total wickets">
                        <small>Team Leader</small>
                        <div class="form-group">
                            <select name="team_leader" class="form-control" id="team_leader">Team Leader
                                <option value="0">--</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>

                        </div>
                        <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-block">
                        </div>

                    </div>
                          

                    
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</div>
  
  


</body>
</html>