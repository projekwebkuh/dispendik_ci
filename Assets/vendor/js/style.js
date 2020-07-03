$(function () {
  // Sidebar toggle behavior
  $('#sidebarCollapse').on('click', function () {
    $('#sidebar, #content').toggleClass('active');
  });
});

$(document).ready(function () {
  $("#my-calendar").zabuto_calendar({ language: "en" });
});