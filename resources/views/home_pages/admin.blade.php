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
            <a href="{{url('/create-venue')}}" class="btn btn-info btn-lg">Create Venue</a>
          </li>
           <li class="list-group-item active">
			    	<a href="{{url('/create-event')}}" class="btn btn-info btn-lg">Create Event</a>
			    </li>
			    
			    <li class="list-group-item active">
			    	<a href="{{url('/player-performance')}}" class="btn btn-info btn-lg">Player-performance</a>
			    </li>
			    <li class="list-group-item active">
			    	
			    	<a href="{{url('match-info')}}" class="btn btn-info btn-lg" >Match Information</a>
			    </li>
			    {{-- <li class="list-group-item">
			    	<a href="{{url('/club-logout')}}">Logout</a>
			    </li> --}}
			  </ul>
			</div>
			
   			 	
   		</div>

    		 
		</div>
		<!--Education Modal -->
	

		<!--History Modal -->



  
  


</body>
</html>