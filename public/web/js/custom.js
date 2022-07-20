// Custom Date Picker
// INCLUDE JQUERY & JQUERY UI 1.12.1
var dateToday = new Date();
$( function() {
	$( "#datepicker, #datepicker2" ).datepicker({
    language: "id",
		dateFormat: "dd-mm-yy",
		duration: "fast",
    // minDate: dateToday,
    showStatus: true,
	});
});

/* global bootstrap: false */
(function () {
  'use strict'
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})();

function tampilkan(){
  $()
  // $('.datepickerr').removeClass( "hidden","invisible","none" );
  $('.datepickerr').datepicker({
    language: "id",
    dateFormat: "dd-mm-yy",
    duration: "fast",
    todayHighlight: true,
    toggleActive: true,
    prevText: "Earlier",
    showStatus: true,
  });
  // $('.datepickerr').css('display', 'none');
}