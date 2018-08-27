    @extends('home.home_master')
    @section('home_content')

    <div class="container">
     <div class="row centered">
      <div class="col-sm-4 col-md-4 col-md-offset-4">
                
        <img src="{{asset('public/images/images.png')}}" class="img-thumbnail" alt="Cinque Terre" width="150" height="100"> 
            
         <h2>{{$data->f_name}} {{$data->m_name}} {{$data->l_name}}</h2>
      </div>
     </div>
     <div class="row">
         <div class="col-md-4">
             <h4>Father Name:{{$data->father_name}}</h4>
             <h4>Mother Name:{{$data->mother_name}}</h4>
             <h4>Date Of Birth:{{$data->dob}}</h4>
             Parmanent address:
             <address>
                 house no:{{$data->present_address}},location:,village/thana:,district:,post code:
             </address>
             Present Address:
             <address>

             </address>

         </div>
     </div>
    </div>

    @endsection