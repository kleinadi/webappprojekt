
// AJAX Module search class
var ModuleFinder = function()
{
    jsonOb = {};
    $("#module-search").keyup(function()
    {
        // Get the input field value
        var moduleName = $("#module-search").val();
        console.log(moduleName);
        // Get the Data
        $.getJSON("getModuleList/" + moduleName, function(data)
        {
            jsonOb = data;

        }).done(function()
        {
            // Print the data
            // Build Table
            var table = $('<table class="table table-striped"></table>');

            // Data rows
            if(jsonOb == null || jsonOb.length == 0 )
            {
                var row =
                    '<tr>' +
                        '<td class="table-text"><div>No results...</div></td>' +
                        '<td></td>' +
                        '<td align="right"></td>' +
                    '</tr>';
                table.append(row);
            }
            else
            {
                for(var i = 0; i < jsonOb.length; i++)
                {
                    var row =
                        '<tr>' +
                            '<td class="table-text"><div>'+jsonOb[i].fullname+'</div></td>' +
                            '<td class="table-text">'+jsonOb[i].name+'</td>' +
                            '<td align="right">' +
                                '<form action="settings/joinModule/'+jsonOb[i].id+'" method="GET">' +
                                '<button type="submit" class="btn btn-primary" >Subscribe</button></form>' +
                            '</td>' +
                        '</tr>';
                    table.append(row);
                }
            }
            $('#ajaxLiveList').html(table);

        }).fail(function()
        {
            $('#ajaxLiveList').html("");
        })


    });
}


function addInputField(nextId)
{
    if(nextId < 5) // Max 5 inputs
    {
        if ($("#day" + (nextId - 1)).val() != "null" &
            $("#time" + (nextId - 1)).val() != "null" &
            !$("#day" + nextId).length)
        {
            console.log("here");
            var html = '<div class="form-group">' +
                '<div class="form-group">' +
                '<select class="form-control" name="day' + nextId + '" id="day' + nextId + '" onchange="addInputField(' + (nextId + 1) + ');">' +
                '<option value="">Select Day</option>' +
                '<option value="1">Monday</option>' +
                '<option value="2">Tuesday</option>' +
                '<option value="3">Wednesday</option>' +
                '<option value="4">Thursday</option>' +
                '<option value="5">Friday</option>' +
                '<option value="6">Sat</option>' +
                '</select>' +

                '<select class="form-control" name="time' + nextId + '" id="time' + nextId + '" onchange="addInputField(' + (nextId + 1) + ');">' +
                '<option value="">Select Time</option>' +
                '<option value="1">08:15 - 09:50</option>' +
                '<option value="2">10:10 - 11:45</option>' +
                '<option value="3">13:15 - 14:50</option>' +
                '<option value="4">15:15 - 16:50</option>' +
                '<option value="5">17:00 - 19:45</option>' +
                '</select>' +
                '</div>' +
                '</div>';

            $('#timeDropdowns').append(html);
        }
        else if($("#day" + (nextId - 1)).val() == "null" &
            $("#time" + (nextId - 1)).val() == "null" &
            $("#day" + nextId).length)
        {
            $("#day" + (nextId - 1)).remove();
            $("#time" + (nextId - 1)).remove();
        }
    }
}
