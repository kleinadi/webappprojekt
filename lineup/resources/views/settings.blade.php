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
                    Add Module
                </div>

                <div class="panel-body">

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


            </div>
        </div>
    </div>

    <script language="javascript">
        var moduleFinder = new ModuleFinder();
    </script>

@endsection
