$(document).ready(function(){
    var i,x = "";
    console.log(b.users[i].name + b.users[i].id);
});
/*
var i,x = "";
    for (i in b.users) {
    x += "<p>" + b.users[i].name + "</p>";
    x += "<p>" + b.users[i].id + "</p>";
    }
    console.log(b.users[i].name + b.users[i].id)
    //document.getElementById("js-h5").innerHTML = x;
 /*   
var table = '<table id="js-table" class="table table-bordered"> </table>';
$('#js-div-table').append(table);
var thead = '<thead id="js-thead"></thead>';
$(thead).appendTo('#js-table');
var tr = '<tr id="js-tr-head"></tr>';
$(tr).appendTo('#js-thead');
var th = '<th> id </th> <th> name </th> <th> email </th> <th> password </th> <th> created_at </th> <th> updated_at </th>';
$(th).appendTo('#js-tr-head');

var tbody = '<tbody id="#js-tbody"></tbody>';
$('#js-thead').after(tbody);
var trbody = '<tr id="js-tr-body"></tr>';
$(trbody).appendTo('tbody');
var tdbody = '<td></td>';
$(tdbody).appendTo('#js-tr-body');

/*$(document).ready(function () {
    var b;
    $.ajax({
        dataType: "json",
        url: 'data.js',
        data: data,
        success: function (b) {
            console.log(b.user[1].name);
        }
    });
});*/
