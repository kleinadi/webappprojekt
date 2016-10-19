/**
 * Created by feder on 19.10.2016.
 */
function CreateTable()
{
    /**
     * Populate the Time Raw
     * @type {string}
     */
    var timepanels = '<h2>Time</h2>'+
        '<div class="panel panel-default rawspacing invisiblepanel"><div class="panel-body">08:15 - 09:50</div></div>'+
        '<div class="panel panel-default rawspacing invisiblepanel"><div class="panel-body">10:10 - 11:45</div></div>'+
        '<div id="breakbar"></div>'+
        '<div class="panel panel-default rawspacing invisiblepanel"><div class="panel-body">13:15 - 14:50</div></div>'+
        '<div class="panel panel-default rawspacing invisiblepanel"><div class="panel-body">15:15 - 16:50</div></div>'+
        '<div class="panel panel-default rawspacing invisiblepanel"><div class="panel-body">17:00 - 19:45</div></div>';
    $('#timeraw').append(timepanels);

    /**
     * Populate the schedule with modules Panels
     * @type {string}
     */
    var modulepanelsraw1 = '<div class="row">'+
            '<div class="col-md-2 rawscroll panelspacing"><h2>Mon</h2><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><h2>Tue</h2><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><h2>Wed</h2><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><h2>Thu</h2><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><h2>Fri</h2><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><h2>Sat</h2><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
        '</div>';
    $('#columnscroll').append(modulepanelsraw1);

    var modulepanelsraw2 = '<div class="row">'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing bluepanel"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing bluepanel"><div class="panel-body modulepane">schedule</div></div></div>'+
        '</div>';
    $('#columnscroll').append(modulepanelsraw2);


    var modulepanelsbreak = '<div id="breakbar"></div>';
        $('#columnscroll').append(modulepanelsbreak);

    var modulepanelsraw3 = '<div class="row">'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing bluepanel"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing bluepanel"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
        '</div>';
    $('#columnscroll').append(modulepanelsraw3);

    var modulepanelsraw4 = '<div class="row">'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing bluepanel"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
        '</div>';
    $('#columnscroll').append(modulepanelsraw4);

    var modulepanelsraw5 = '<div class="row">'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
            '<div class="col-md-2 rawscroll panelspacing"><div class="panel panel-default rawspacing"><div class="panel-body modulepane">schedule</div></div></div>'+
        '</div>';
    $('#columnscroll').append(modulepanelsraw5);


}
