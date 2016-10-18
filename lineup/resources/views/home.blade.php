@extends('layouts.main')

@section('content')
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="text-align: center;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-title">Empty Popup</h1>
                </div>
                <div class="modal-body">





                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>

        </div>
    </div>

    <div class="row">

                <div class="panel-body">
                    You are logged in!
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open Modal</button>
                </div>
    </div>
@endsection
