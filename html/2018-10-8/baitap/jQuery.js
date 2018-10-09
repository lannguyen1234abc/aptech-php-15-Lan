$(document).ready(function(){
    $('#js-div-table').before('<h1 class="d-flex justify-content-center text-danger">' + b.message + '</h1>') ;
});

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


var u = b.users;
u.forEach(function(user, i) {
    var trBody = '<tr id="js-tr-body-' + i + '"></tr>';
    $(trBody).appendTo('tbody');

    var tdBody = ' <td>' + user.id + '</td>' + '<td>' + user.name + '</td>' + '<td>' + user.email + '</td>' + '<td>' + user.password + '</td>' + '<td>' + user.created_at + '</td>' + '<td>' + user.updated_at + '</td>';
    $('#js-tr-body-' + i).append(tdBody);
});

