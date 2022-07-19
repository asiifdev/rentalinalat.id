// Custom Date Picker
// INCLUDE JQUERY & JQUERY UI 1.12.1
var dateToday = new Date();
$( function() {
	$( "#datepicker, #datepicker2" ).datepicker({
		dateFormat: "dd-mm-yy",
		duration: "fast",
    minDate: dateToday,
	});
});

/* global bootstrap: false */
(function () {
  'use strict'
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()