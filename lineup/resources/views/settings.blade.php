@extends('layouts.main')


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="container-fluid" style="text-align: center;"><h1>Settings</h1></div>

            <div class="container">
                <!-- Display Validation Errors -->
                @include('errors.errors')
            </div>

            <!-- Show confirmation if needed -->
            <?php
            use App\Http\Controllers\SettingsController;
            $settingsController = new SettingsController();

            if(isset($_GET['successfullyAdded']) and $_GET['successfullyAdded'] == "true")
            {
                echo '
                    <div class="alert alert-info">
                        <strong>Success:</strong> The module has been added.</strong>
                    </div>
                    ';
            }
            if(isset($_GET['successfullyJoined']) and $_GET['successfullyJoined'] == "false")
            {
                echo '
                    <div class="alert alert-danger">
                        <strong>Wait a minute:</strong> You have already subscribed to this module.</strong>
                    </div>
                    ';
            }
            if(isset($_GET['successfullyDeleted']) and $_GET['successfullyDeleted'] == "true")
            {
                echo '
                    <div class="alert alert-info">
                        <strong>Success:</strong> You have unsubscribe the module.</strong>
                    </div>
                    ';
            }

            ?>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel" style="text-align: center;">Warning!</h4>
                        </div>
                        <div class="modal-body">
                            This module has just been added to the database. Please ensure that the filled data is correct. By doing this
                            you are making Lineup a better place to be!<br /><br />

                            <form action="/settings/addModuleToDb" method="POST">
                                {{ csrf_field() }}
                                <?php
                                    if(isset($_GET['moduleReview']))
                                    {
                                        $settingsController->reviewModule($_GET['moduleReview']);
                                    }
                                ?>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
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
            </div><div class="panel panel-default">
                <div class="panel-heading">
                    Subscribed Modules
                </div>

                <div class="panel-body">
                    <?php
                        $settingsController->joinedModuleList();
                        ?>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Add new Module
                </div>

                <div class="panel-body">
                    Create a new Module to be added. Your entry will be available to everyone.<br />
                    Please make sure that your information is correct.<br />
                    <br />

                    <form action="/settings/addModuleToDb" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="modulName">Name:</label>
                            <input type="text" class="form-control" name="moduleName" placeholder="i.e. MAS_A">
                        </div>
                        <div class="form-group">
                            <label for="fullName">Full Name:</label>
                            <input type="text" class="form-control" name="fullName" placeholder="i.e. Mehrdimensionale Analysis">
                        </div>
                        <div class="form-group">
                            <label for="professor">Professor:</label>
                            <input type="text" class="form-control" name="professor" placeholder="i.e. Hugo Reyes">
                        </div>
                        <div class="form-group">
                            <label for="room">Room:</label>

                            <input type="text" class="form-control" name="room" placeholder="i.e. A1.3">

                        </div>


                        <div id="timeDropdowns">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="sel1">Times:</label>
                                    <select class="form-control" name="day0" id="day0" onchange="addInputField(1);">
                                        <option value="">Select Day</option>
                                        <option value="1">Monday</option>
                                        <option value="2">Tuesday</option>
                                        <option value="3">Wednesday</option>
                                        <option value="3">Thursday</option>
                                        <option value="3">Friday</option>
                                        <option value="3">Sat</option>
                                    </select>

                                    <select class="form-control" name="time0" id="time0" onchange="addInputField(1);">
                                        <option value="">Select Time</option>
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
                            <button type="submit" class="btn btn-primary" id="addModuleSubmit">Add Module</button>
                        </div>

                    </form>


                </div>

            </div>


        </div>
    </div>



@endsection
