var table = '<table id="js-table"></table>';
$('#js-div-table').append(table);

var thead = '<thead id="js-thead"></thead>';
$(thead).appendTo('#js-table');

var tr = '<tr id="js-tr-head"></tr>';
$(tr).appendTo('#js-thead');

var th = '<th> Số TT </th> <th> Tên </th> <th> Email </th>';
$(th).appendTo('#js-tr-head');

var tbody = '<tbody></tbody>';
$('#js-thead').after(tbody);

var trbody = '<tr id="trBody"></tr>';
$(trbody).appendTo('tbody');

var thBody = '<th> 1 </th>';
var tdBody = '<td> Lan </td> <td> abc@gamil </td>';
$('#trBody').append(thBody,tdBody);

var trbody1 = '<tr id="trBody1"></tr>';
$(trbody1).appendTo('tbody');

var thBody1 = '<th> 2 </th>';
var tdBody1 = '<td> Mai </td> <td> sds@gmail </td>';
$('#trBody1').append(thBody1,tdBody1);