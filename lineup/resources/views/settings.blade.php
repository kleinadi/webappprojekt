@extends('layouts.main')


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="container-fluid" style="text-align: center;"><h1>Settings</h1></div>

            <div class="container">
                <!-- Display Validation Errors -->
                @include('errors.errors')
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Select Modules
                </div>

                <div class="panel-body">
                    Find and add the modules you want to show on your schedule.<br/>
                    If not present feel free to create a new one.<br />
                    <br />
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control " id="module-search" placeholder="Search Modules" />

                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>

                    <div id="ajaxLiveList">

                    </div>

                </div>
                <script language="javascript">
                    var moduleFinder = new ModuleFinder();
                </script>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Add new Module
                </div>

                <div class="panel-body">
                    Create a new Module to be added. Your entry will be available to everyone.<br />
                    Please make sure that your information is correct.<br />
                    <br />

                    <form>
                        <div class="form-group">
                            <label for="modulName">Name:</label>
                            <input type="email" class="form-control" id="email" placeholder="i.e. MAS_A">
                        </div>
                        <div class="form-group">
                            <label for="fullName">Full Name:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="i.e. Mehrdimensionale Analysis">
                        </div>
                        <div class="form-group">
                            <label for="professor">Professor:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="i.e. Hugo Reyes">
                        </div>
                        <div class="form-group">
                            <label for="room">Room:</label>

                            <input type="password" class="form-control" id="pwd" placeholder="i.e. A1.3">

                        </div>

                        <div id="timeDropdowns">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="sel1">Times:</label>
                                    <select class="form-control" id="day0" onchange="addInputField(1);">
                                        <option value="null">Select Day</option>
                                        <option value="1">Monday</option>
                                        <option value="2">Tuesday</option>
                                        <option value="3">Wednesday</option>
                                        <option value="3">Thursday</option>
                                        <option value="3">Friday</option>
                                        <option value="3">Sat</option>
                                    </select>

                                    <select class="form-control" id="time0" onchange="addInputField(1);">
                                        <option value="null">Select Time</option>
                                        <option value="1">08:15 - 09:50</option>
                                        <option value="3">10:10 - 11:45</option>
                                        <option value="2">13:15 - 14:50</option>
                                        <option value="2">15:15 - 16:50</option>
                                        <option value="2">17:00 - 19:45</option>
                                    </select>
                                </div>
                            </div>
                        </div>





                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Module</button>
                        </div>
                    </form>


                </div>

            </div>


        </div>
    </div>



@endsection
