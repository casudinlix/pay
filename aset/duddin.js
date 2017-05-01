

var table = $('#example').DataTable({
"dom": '<"toolbar">frtip'
});
$("div.toolbar").html('<input id="date_range" type="text">');


//END of the data table

// Date range script - Start of the sscript
$("#date_range").daterangepicker({
autoUpdateInput: false,
"showDropdowns": true,
locale: {
  "cancelLabel": "Clear",
}

});

$("#date_range").on('apply.daterangepicker', function(ev, picker) {
    $(this).val(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format('YYYY-MM-DD'));
  table.draw();
});

$("#date_range").on('cancel.daterangepicker', function(ev, picker) {
    $(this).val('');
  table.draw();
});


// Date range script - END of the script

$.fn.dataTableExt.afnFiltering.push(
function( oSettings, aData, iDataIndex ) {

var grab_daterange = $("#date_range").val();
var give_results_daterange = grab_daterange.split(" to ");
  var filterstart = give_results_daterange[0];
  var filterend = give_results_daterange[1];
  var iStartDateCol = 3; //using column 2 in this instance
  var iEndDateCol = 3;
  var tabledatestart = aData[iStartDateCol];
  var tabledateend= aData[iEndDateCol];


  if ( !filterstart && !filterend )
  {
      return true;
  }
  else if ((moment(filterstart).isSame(tabledatestart) || moment(filterstart).isBefore(tabledatestart)) && filterend === "")
  {
      return true;
  }
  else if ((moment(filterstart).isSame(tabledatestart) || moment(filterstart).isAfter(tabledatestart)) && filterstart === "")
  {
      return true;
  }
  else if ((moment(filterstart).isSame(tabledatestart) || moment(filterstart).isBefore(tabledatestart)) && (moment(filterend).isSame(tabledateend) || moment(filterend).isAfter(tabledateend)))
  {
      return true;
  }
  return false;
});
