$(document).ready(function(){$("#date-added, #date-modified").daterangepicker({singleDatePicker:!0});var e=$("#order-list").DataTable({pageLength:20,colReorder:!0,buttons:["copy","excel","pdf","print"],searching:!1,aLengthMenu:[[10,20,50,-1],[10,20,50,"All"]],order:[[1,"asc"]],columnDefs:[{orderable:!1,targets:[0,7]}]});$("#order-list_wrapper .col-sm-6:eq(1)").addClass("text-right"),e.buttons().container().appendTo("#order-list_wrapper .col-sm-6:eq(1)")});