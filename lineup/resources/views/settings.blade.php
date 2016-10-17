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
                    Create a new Module to be added to the list.<br />
                    Please make sure that your information is correct.<br />
                    <br />


                </div>

            </div>


        </div>
    </div>



@endsection
