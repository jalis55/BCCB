    @extends('home.home_master')
    @section('home_content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container bg-success">
   @if (Session::has('message'))
   <div class="alert alert-success fade-message">
      <p><b>{{ Session::get('message') }}</b></p>
   </div>
   <br />
   <script>
      $(function(){
          setTimeout(function() {
              $('.fade-message').slideUp();
          }, 5000);
         });
   </script>
   @endif

   <form action="{{url('club-data')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="row">
        <a href="{{url('club-login')}}" class="btn btn-primary btn-lg">login</a>
         <div class="col-md-6 col-md-offset-3">
   <h2>Club Registration form</h2>
           
            <hr>
            <div class="form-group">
               <input type="text" name="club_name" class="form-control" id="club_name" placeholder="Enter club name">
            </div>
            <h4>Address</h4>
            <div class="form-group">
               <input type="text" name="club_house" class="form-control" id="club_house" placeholder="Enter house no">
            </div>
            <div class="form-group">
               <input type="text" name="club_location" class="form-control" id="club_location" placeholder="Enter location">
            </div>
            <div class="form-group">
               <input type="text" name="club_village" class="form-control" id="club_village" placeholder="Enter village">
            </div>
             <div class="form-group">
               <input type="text" name="club_thana" class="form-control" id="club_thana" placeholder="Enter thana">
            </div>
             <div class="form-group">
               <input type="text" name="club_district" class="form-control" id="club_district" placeholder="Enter district">
            </div>
            <div class="form-group">
               <input type="text" name="club_postcode" class="form-control" id="club_postcode" placeholder="Enter  postcode">
            </div>
            Date Of Establishment:
            <div class="form-group">
               <input type="date" name="date_of_establishment" class="form-control" id="date_of_establishment">
            </div>
            <div class="form-group">
               <input type="text" name="president" class="form-control" id="president" placeholder="Enter  club precident name">
            </div>
            <div class="form-group">
               <input type="password" name="password" class="form-control" id="password" placeholder="Enter  password">
            </div>

            <div class="form-group">
               <input type="submit" class="btn btn-success" value="Register">
            </div>
         </div>
      </div>
   </form>
</div>

    @endsection