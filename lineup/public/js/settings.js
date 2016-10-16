// AJAX Module search
jsonOb = {};
$("#module-search").keyup(function()
{
    console.log("Here i am");
})

$("#modules-search").keyup(function()
{
    // Get the input field value
    var moduleName = $("#task-name").val();

    // Get the Data
    $.getJSON("https://laravel.dev/ajaxList/" + taskName, function(data)
    {
        jsonOb = data;
    })

    // Print the data
    // Build Table
    var table = $('<table class="table table-striped task-table"></table>');
    table.append(
        '<thead>' +
        '<th>Task</th>' +
        '<th></th>' +
        '</thead>' +
        '<tbody>');
    // Data rows
    for(var i = 0; i < jsonOb.length; i++)
    {
        var row =
            '<tr>' +
            '<td class="table-text"><div>'+jsonOb[i].name+'</div></td>' +
            '<td align="right">' +
            '<form action="/task/'+jsonOb[i].id+'" method="GET">' +
            '<button type="submit" class="btn btn-danger" >Delete Task</button></form>' +
            '</td>' +
            '</tr>';
        table.append(row);
    }
    $('#ajaxLiveList').html(table);
});