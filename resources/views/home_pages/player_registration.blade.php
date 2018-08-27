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
        <h2>Player Registration form</h2></hr>
        <form action="{{url('player-data')}}" method="post">
           {{csrf_field()}}
            <div class="row">
                <div class="col-md-3">
                    Information
                    <div class="form-group">
                        <input required type="text" name="f_name" class="form-control" id="f_name" placeholder="Enter first name">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="m_name" class="form-control" id="m_name" placeholder="Enter middle name">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="l_name" class="form-control" id="l_name" placeholder="Enter last name">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="father_name" class="form-control" id="father_name" placeholder="Enter father name">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="mother_name" class="form-control" id="mother_name" placeholder="Enter mother name">
                    </div>
                    Date of birth:
                    <div class="form-group">
                       <input type="date" name="dob" class="form-control" id="dob">
                    </div>

                </div>
                <div class="col-md-4">
                    Present address
                    <div class="form-inline">
                        <div class="form-group">
                            <input required type="text" na requiredme="t_houseNO" class="form-control input-sm" id="t_houseNO" placeholder="house no">
                        </div>
                        <div class="form-group">
                            <input required type="text" name="t_locat requiredion" class="form-control input-sm" id="t_location" placeholder="location ">
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <input required type="text" name="t_ requiredvillage" class="form-control input-sm" id="t_village" placeholder="village/street">
                        </div>
                        <div class="form-group">
                            <input required type="tex requiredt" name="t_thana" class="form-control input-sm" id="t_thana" placeholder="thana">
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <input required type="text" name="t_dist requiredrict" class="form-control input-sm" id="t_district" placeholder="district">
                        </div>
                        <div class="form-group">
                            <input required type="text" name="t_postC requiredode" class="form-control input-sm" id="t_postCode" placeholder="post code">
                        </div>
                    </div>
                    <br> Parmanent address
                    <div class="form-inline">
                        <div class="form-group form-inline">
                            <input required type="text" na requiredme="p_houseNO" class="form-control input-sm" id="p_houseNO" placeholder="house no">
                        </div>
                        <div class="form-group">
                            <input required type="text" name="p_loca requiredtion" class="form-control input-sm" id="p_location" placeholder="location">
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <input required type="text" name="p_ requiredvillage" class="form-control input-sm" id="p_village" placeholder="village/street">
                        </div>
                        <div class="form-group">
                            <input required type="tex requiredt" name="p_thana" class="form-control input-sm" id="p_thana" placeholder="thana">
                        </div>
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <input required type="text" name="p_dist requiredrict" class="form-control input-sm" id="p_district" placeholder="district">
                        </div>
                        <div class="form-group">
                            <input required type="text" name="p_postC requiredode" class="form-control input-sm" id="p_postCode" placeholder="post code">
                        </div>
                    </div>
                    Educational Qualifications
                    <div class="form-group">
                        <input required type="text" name= required"degree_name" class="form-control input-sm" id="degree_name" placeholder="Degree Name">
                    </div>
                    <div class="form-inline">
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input required type="text" name="inst_name" class="form-control input-sm" id="inst_name" placeholder="Institute/Department">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input required type="text" name="boar requiredd" class="form-control input-sm" id="board" placeholder="Board/University">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input required type="te requiredxt" name="year" class="form-control input-sm" id="year" placeholder="Year">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input required type="text" name=" requiredresult" class="form-control input-sm" id="result" placeholder="Result">
                                </div>
                            </td>
                        </tr>

                    </div>

                </div>
                <div class="col-md-3">
                    Previous History
                    <div class="form-group">

                        <input required type="text" name="p_clubName" class="form-control" id="p_clubName" placeholder="Club Name">
                        <input required type="text" name="from" class="form-control" id="from" placeholder="From">
                        <input required type="text" name="to" class="form-control" id="to" placeholder="To">
                        <input required type="text" name="total_run" class="form-control" id="total_run" placeholder="Total runs">
                        <input required type="text" name="total_wicket" class="form-control" id="total_wicket" placeholder="Total wickets">
                        <small>Team Leader</small>
                        <div class="form-group">
                            <select name="team_leader" class="form-control" id="team_leader">Team Leader
                                <option value="0">--</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>

                        </div>

                    </div>

                    Best Performance
                    <div class="form-group">

                        <input required type="text" n requiredame="b_clubName" class="form-control input-sm" id="b_clubName" placeholder="Club Name">
                        <input required type="text" name="b_opClubName" class="form-control input-sm" id="b_opClubName" placeholder="Oppnent Club Name">
                        <input required type="text"  requiredname="b_eventId" class="form-control input-sm" id="b_eventId" placeholder="Event Id">
                        <input required type="text"  requiredname="b_matchId" class="form-control input-sm" id="b_matchId" placeholder="Match Id">
                        <input required type="te requiredxt" name="b_runs" class="form-control input-sm" id="b_runs" placeholder="Runs">
                        <input required type="text" required name="b_wickets" class="form-control input-sm" id="b_wickets" placeholder="Wickets">

                    </div>

                </div>
                <div class="col-md-2">

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Membership select</label>
                        <select name="membership" class="form-control" id="exampleFormControlSelect1">
                            <option value="0">--</option>
                            <option value="iccb">ICCB</option>
                            <option value="bccb">BCCB</option>
                            <option value="accb">ACCB</option>
                            <option value="others">others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input required type="text" name="player_sign" class="form-control" id="player_sign" placeholder="player signature">
                        <input required type="text" name="signature_date" class="form-control" id="signature_date" placeholder="date">

                    </div>
                    <div class="form-group">
                        <input required type="text" name="email" class="form-control" id="player_sign" placeholder="enter email">
                        <input required type="password" name="password" class="form-control" id="password" placeholder="enter password">
                        <input required type="password" name="password2" class="form-control" id="password2" placeholder="re-enter password">
                        <p id="validate-status"></p>

                    </div>



                </div>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Register">

        </form>
    </div><br>
    <script>
         $(document).ready(function() {
         $("#password2").keyup(validate);
        });


        function validate() {
            var password = $("#password").val();
            var password2 = $("#password2").val();
            if(password == password2) {
                $("#validate-status").html("Match").css("color","green").addClass("alert alert-success");}
            else {
                $("#validate-status").html("not match").css("color","red").addClass("alert alert-danger");}
             }
    </script>
    @endsection