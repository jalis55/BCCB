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
		<div class="col-md-4">
			<div class="card" style="width: 25rem;">
  			 <div class="card-header">
    			
  			 </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item active">
			    	<a href="{{url('/players')}}" class="btn btn-info btn-lg">Players</a>
			    </li>
			    
			    <li class="list-group-item active">
			    	<a href="{{url('/create-team')}}/{{$club_id}}" class="btn btn-info btn-lg">Create Team</a>
			    </li>
			    <li class="list-group-item active">
			    	
			    	<a href="" class="btn btn-info btn-lg" >Club Players</a>
			    </li>
			    <li class="list-group-item">
			    	<a href="{{url('/club-logout')}}">Logout</a>
			    </li>
			  </ul>
			</div>
			
   			 	
   		</div>
      <div class="col-md-6">
            <div class="bg-success">
             <h3>Club Teams</h3>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Team id</th>
                    <th>Action</th>
                    
                  </tr>
                 </thead>
                <tbody>
                    
                @foreach($teams['team'] as $row)
                  <tr>
                    <td>{{$row->team_id}}</td>
                    <td><a href="{{url('add-team-players')}}/{{$row->team_id}}">add player</a></td>

                  </tr>
                @endforeach
                </tbody>
               </table>
           </div>

        
      </div>
    		 
		</div>
		<!--Education Modal -->
	

		<!--History Modal -->


</div>
  
  


</body>
</html>