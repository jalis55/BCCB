    @extends('home.home_master')
    @section('home_content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container bg-success">
           @if (Session::has('message'))
    <div class="alert alert-success fade-message">
         <p><b>{{ Session::get('message') }}</b></p>
    </div><br />

    <script>
    $(function(){
        setTimeout(function() {
            $('.fade-message').slideUp();
        }, 5000);
       });
    </script>
        @endif
        <h2>Player Contract form</h2></hr>
        <form action="{{url('contract-data')}}" method="post" enctype="multipart/form-data">
           {{csrf_field()}}
            <div class="row">
                <div class="col-md-4">
                    
                    <div class="form-group">
                        club id
                        <input required type="text" name="club_id" class="form-control" id="club_id" value="{{$data['club']->club_id}}"  readonly>
                    </div>
                    <div class="form-group">
                        club name
                        <input required type="text" name="club_name" class="form-control" id="club_name" value="{{$data['club']->club_name}}"  readonly>
                    </div>
                    ------first party------
                    <div class="form-group">
                        first name
                        <input required type="text" name="f_name" class="form-control" id="f_name" value="{{$data['player']->f_name}}"  readonly>
                    </div>
                    <div class="form-group">
                        middle name
                        <input required type="text" name="m_name" class="form-control" id="m_name" value="{{$data['player']->m_name}}"  readonly>
                    </div>
                    <div class="form-group">
                        last name
                        <input required type="text" name="l_name" class="form-control" id="l_name" value="{{$data['player']->l_name}}"  readonly>
                    </div>
                    <div class="form-group">
                        player id
                        <input required type="text" name="player_id" class="form-control" id="player_id" value="{{$data['player']->player_id}}"  readonly>
                    </div>


                </div>

                <div class="col-md-8">
                    ------Second Party------
                    <div class="form-group">

                        <input required type="text" name="sp_first_name" class="form-control" id="sp_first_name" placeholder="Enter first name">
                        <input required type="text" name="sp_middle_name" class="form-control" id="sp_middle_name" placeholder="Enter middle name">
                        <input required type="text" name="sp_last_name" class="form-control" id="sp_last_name" placeholder="Enter last name">
                        <input required type="text" name="designation" class="form-control" id="designation" placeholder="Enter designation">

                        

                    </div>
                    Contract Period 
                    
                        
                        <div class="form-group">
                            Start date
                            <input required type="date" name="start_date" class="form-control input-sm" id="start_date">
                        </div>
                        <div class="form-group">
                           End date
                            <input required type="date" name="end_date" class="form-control input-sm" id="end_date">
                        </div>
                  

                    <div class="form-group">
                        
                        <input required type="text" name="contract_amount" class="form-control input-sm" id="contract_amount" placeholder="Enter contract amount">
                        Witness
                        <input required type="text" name="witness_one" class="form-control input-sm" id="witness_one" placeholder="Enter witness_one">
                        <input required type="text"  name="witness_two" class="form-control input-sm" id="witness_two" placeholder="Enter Withness two">
                        

                    </div>

                </div>

            </div>
            <input type="submit" class="btn btn-success btn-block" value="Register">

        </form>
    </div>

    @endsection