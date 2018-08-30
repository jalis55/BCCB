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
  <form action="{{url('/match-info-data')}}" method="post">
    {{csrf_field()}}
      <div class="row">

    <div class="col-md-4 col-md-offset-4">
                      
                    <h2>Match Information</h2>
                    <div class="form-group">

                        <input  type="text" name="event_id" class="form-control" placeholder="Enter event id">
                    </div>
                    <div class="form-group">
                      
                        <input  type="text" name="venue_id" class="form-control" placeholder="Enter venue id">
                    </div>

                    <div class="form-group">
                        <input required type="date" name="date_of_match" class="form-control">
                    </div>

                    <div class="form-group">
                        <input required type="text" name="match_id" class="form-control" id="match_id" placeholder="Enter match id">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="man_of_match" class="form-control" id="total_wicket" placeholder="Enter man of the match">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="umpires" class="form-control" id="" placeholder="Enter umpires name">
                    </div>
                    

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                    </div>
                    


                    </div>

                
      
          
      </div>
         
    </div>
    
  </form>




</div>
  
  


</body>
</html>