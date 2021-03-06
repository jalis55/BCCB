    @extends('home.home_master')
    @section('home_content')

    <div class="well" style="background: #eeffcc">
        <div class="row" >
            @foreach($data['player_info'] as $row )
             @if($row->club_id==null)
            <div class="col-sm-3">


                <div class="card" style="width:120px">
                           @if($row->image==null)        
        <img src="{{asset('public/images/images.png')}}" class="img-thumbnail" alt="Cinque Terre" width="150" height="100">
        @else 
        <img src="{{$row->image}}" class="img-thumbnail" alt="Cinque Terre" width="150" height="100">
        @endif
                  <div class="card-body">
                    <h4 class="card-title">{{$row->f_name}} {{$row->m_name}} {{$row->l_name}}</h4>
                    <h5><b>Age:</b>
                        <?Php $age = floor((time() - strtotime('$row->dob')) / 31556926);
                            echo $age;
                         ?>
                    </h5>
                    
                    <a href="{{url('/player-details')}}/{{$row->player_id}}" class="btn btn-primary">See Profile</a>
                  </div>
                </div>
                
            </div>
            @endif
           @endforeach
        </div>
    </div>

    @endsection