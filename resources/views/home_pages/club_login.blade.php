 @extends('home.home_master')
 @section('home_content')
    <br>
<div class="row">

	<div class="col-md-4 col-md-offset-4 bg-success">
		<center> Login Here</center>
		<form action="{{url('/club-login-check')}}" method="post">
			 {{csrf_field()}}
			<input type="text" placeholder="club name" name="club_name" class="form-control" required=""><br>
			<input type="password" placeholder="password" name="password" class="form-control" required="">
			<br>
			<input type="submit" class="btn btn-success btn-block">
			  
           			@if (Session::has('message'))
    			<div class="alert alert-danger fade-message">
         			<p><b>{{ Session::get('message') }}</b></p>
   				 </div><br />

				    <script>
				    $(function(){
				        setTimeout(function() {
				            $('.fade-message').slideUp();
				        }, 3000);
				       });
				    </script>
       				 @endif
    		  
		</form>
		

		
	</div>
	
</div>
<br>

   

 @endsection