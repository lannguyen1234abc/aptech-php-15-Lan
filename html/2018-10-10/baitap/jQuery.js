$(document).ready(function(){
    $('button').click(function(){
        $.get('http://101.0.86.110:6699/api/v1/posts?page=2', function(response){
            var row = '<div id="js-row" class="row"></div>';
            $('#js-div').append(row);
            var carddeck = '<div id="js-card-deck" class="card-deck"></div>';
            $(carddeck).appendTo('#js-row');
            var card = '<div id="js-card" class="card"></div>';
            $(card).appendTo('#js-card-deck');

            var data = response.data.posts.data;
            console.log(data);



/*
for (i=0; i<response.users.length; i++){
    var trBody = '<tr id="js-tr-body-' + response.users[i].id + '"></tr>';
    $(trBody).appendTo('tbody');

    var tdBody = ' <td>' + response.users[i].id + '</td>' + '<td>' + response.users[i].name + '</td>' + '<td>' +response.users[i].email + '</td>' + '<td>' + response.users[i].password + '</td>' + '<td>' + response.users[i].created_at + '</td>' + '<td>' + response.users[i].updated_at + '</td>';
    $('#js-tr-body-' + i).append(tdBody);
}   */ 
    });
});
});



    