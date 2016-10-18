@extends('layouts.main')

@section('content')

        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
            <div class="col-xs-5 col-md-2" style="min-width: 150px">
                <div class="panel panel-default">
                        <div class="panel-body">08:15 - 10:10</div>
                </div>
            </div>
            <div class="col-xs-7 col-md-10" id="columnscroll">
                <div class="row">
                    <div class="col-md-2 rawscroll">
                        <div class="panel panel-default"><div class="panel-body panelboarder">schedule</div></div>
                    </div>
                    <div class="col-md-2 rawscroll">
                        <div class="panel panel-default"><div class="panel-body panelboarder">schedule</div></div>
                    </div>
                    <div class="col-md-2 rawscroll">
                        <div class="panel panel-default"><div class="panel-body panelboarder">schedule</div></div>
                    </div>
                    <div class="col-md-2 rawscroll">
                        <div class="panel panel-default"><div class="panel-body panelboarder">schedule</div></div>
                    </div>
                    <div class="col-md-2 rawscroll">
                        <div class="panel panel-default"><div class="panel-body panelboarder">schedule</div></div>
                    </div>
                    <div class="col-md-2 rawscroll">
                        <div class="panel panel-default"><div class="panel-body panelboarder">schedule</div></div>
                    </div>

                </div>
            </div>
        </div>


@endsection
