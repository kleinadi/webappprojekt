@extends('layouts.main')


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">



            <h1>Settings</h1>

            <div class="container">
                <!-- Display Validation Errors -->
                @include('errors.errors')
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Add Module</div>

                <div class="panel-body">
                    Search modules
                    <input type="text" name="moduleSearch" id="module-search" class="form-control">
                </div>
                <script type="text/javascript" language="javascript">
                    $("#module-search").keyup(function()
                    {
                        console.log("Here i am");
                    })
                </script>
            </div>
        </div>
    </div>
@endsection
