@extends('layouts.main')

@section('content')

        <!--  -->

        <!-- Desktop HTML -->
        <div class="container-fluid hidden-sm hidden-xs hidden-md" >
            <div class="col-lg-1" style="max-width: 145px;">
                <h2>Time</h2>
                <div class="panel panel-default rawspacing invisiblepanel"><div class="panel-body">08:15<br /> 09:50</div></div>
                <div class="panel panel-default rawspacing invisiblepanel"><div class="panel-body">10:10<br /> 11:45</div></div>
                <div id="breakbar"></div>
                <div class="panel panel-default rawspacing invisiblepanel"><div class="panel-body">13:15<br /> 14:50</div></div>
                <div class="panel panel-default rawspacing invisiblepanel"><div class="panel-body">15:15<br /> 16:50</div></div>
                <div class="panel panel-default rawspacing invisiblepanel"><div class="panel-body">17:00<br /> 19:45</div></div>
            </div>
            <div class="col-lg-11">
                <div class="row">
                    <div class="col-lg-2 rawscroll panelspacing"><h2>Mon</h2><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-lg-2 rawscroll panelspacing"><h2>Tue</h2><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-lg-2 rawscroll panelspacing"><h2>Wed</h2><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-lg-2 rawscroll panelspacing"><h2>Thu</h2><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-lg-2 rawscroll panelspacing"><h2>Fri</h2><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-lg-2 rawscroll panelspacing"><h2 style="color: #72b1ff;" >Sat</h2><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                </div>

                <div class="row">
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing bluepanel"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing "><div class="panel-body modulepane">schedule</div></div></div>
                </div>

                <div id="breakbar"></div>

                <div class="row">
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing bluepanel"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing "><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing bluepanel"><div class="panel-body modulepane">schedule</div></div></div>
                </div>

                <div class="row">
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing bluepanel"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing bluepanel"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing bluepanel"><div class="panel-body modulepane">schedule</div></div></div>
                </div>

                <div class="row">
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing bluepanel"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing bluepanel"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing "><div class="panel-body modulepane">schedule</div></div></div>
                    <div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing bluepanel"><div class="panel-body modulepane">schedule</div></div></div>
                </div>
            </div>
        </div>


        <!-- Mobile HTML -->
        <div class="hidden-lg">
            <div class="container monday">
                <h2>Mon</h2>
                <table class="scheduleTable">
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                </table>
            </div>


            <div class="container monday">
                <h2>Tue</h2>
                <table class="scheduleTable">
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                </table>
            </div>
            <div class="container monday">
                <h2>Wed</h2>
                <table class="scheduleTable">
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                </table>
            </div>
            <div class="container monday">
                <h2>Tue</h2>
                <table class="scheduleTable">
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                    <tr>
                        <td class="timeCol">08:15 09:50</td>
                        <td><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></td>
                    </tr>
                </table>
            </div>

        </div>





@endsection
