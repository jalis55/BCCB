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
  <form action="{{url('team-data')}}" method="post">
    {{csrf_field()}}
      <div class="row">

    <div class="col-md-4 col-md-offset-4">
                      
                    <h2>Create Teams</h2>

                    <div class="form-group">
                        <input required type="text" name="team_leader_id" class="form-control" id="team_leader_id" placeholder="Enter team leader id">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="team_leader_name" class="form-control" id="team_leader_name" placeholder="Enter team leader name">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="coach_id" class="form-control" id="coach_id" placeholder="Enter coach id">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="coach_name" class="form-control" id="coach_name" placeholder="Enter coach_name">
                    </div>
          <div class="bg-success">
             <h3>Club Players</h3>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Player id</th>
                    <th>Player Name</th>
                    <th>Action</th>
                    <th>Captain</th>
                    
                  </tr>
                 </thead>
                <tbody>
                    
                @foreach($data['player'] as $row)
                  <tr>
                    <td>{{$row->fp_player_id}}</td>
                    <td>{{$row->fp_first_name}} {{$row->fp_middle_name}} {{$row->fp_last_name}}</td>
                    <td>
                      @if($row->team_id==null)<a href="" class="btn btn-success">Add to team</a>
                      @else
                      <a href="" class="btn btn-danger">remove</a>
                      @endif
                    </td>

                  </tr>
                @endforeach
                </tbody>
               </table>
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