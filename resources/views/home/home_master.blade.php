<!DOCTYPE html>
<html>
   <head>
      <title>{{Route::currentRouteName()}}</title>
      <link href="{{asset('public/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
      <!-- Custom Theme files -->
      <!--theme-style-->
      <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
      <!--//theme-style-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
      <!--fonts-->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>

      <!--//fonts-->
      <script src="{{asset('public/assets/js/responsiveslides.min.js')}}"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
           $("#slider2").responsiveSlides({
             auto: true,
             pager: true,
             speed: 300,
             namespace: "callbacks",
           });
         });
      </script>
   </head>
   <body>
      <!--header-->
      <div class="header">
         <div class="header-bottom-top">
            <div class="container">
               <div class="search">	
                  <input type="text" value="Search website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
                  <input type="submit"  value="">	
               </div>
               <div class="clearfix"> </div>
               <div class="header-bottom">
                  <div class="logo">
                     <a href="{{url('/')}}"><img src="{{asset('public/assets/images/cricket.png')}}" alt=" " /></a>
                  </div>
                  <div class="top-nav">
                     <span class="menu"> </span>
                     <ul>
                        
                        <li class="{{ (\Request::route()->getName() == 'BCCB') ? 'active' : '' }}" >
                           <a href="{{url('/')}}" class="scroll">Home</a>
                        </li>
                        <li><a href="about.html" class="scroll"> About</a></li>
                        <li><a href="teams.html" class="scroll">Team</a></li>
                        <li class="{{ (\Request::route()->getName() == 'Players') ? 'active' : '' }}">
                           <a href="{{url('players')}}" class="scroll">Players</a>
                        </li>
                        <li class="{{ (\Request::route()->getName() == 'Player registration') ? 'active' : '' }}">
                           <a href="{{url('player-registration')}}" class="scroll">Register</a>
                        </li>
                        <li class="{{ (\Request::route()->getName() == 'Player login') ? 'active' : '' }}">
                           <a href="{{url('player-login')}}" class="scroll">Player Login</a>
                        </li>
                     </ul>
                     <!--script-->
                     <script>
                        $("span.menu").click(function(){
                        	$(".top-nav ul").slideToggle(500, function(){
                        	});
                        });
                     </script>
                  </div>
                  <div class="clearfix"> </div>
               </div>
            </div>
         </div>
      </div>
      {{-- content --}}
      @yield('home_content')
      <!--footer-->
      
   </body>
</html>