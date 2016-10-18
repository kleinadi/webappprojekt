
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
                                '<button type="submit" class="btn btn-primary" >Selec Module</button></form>' +
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



