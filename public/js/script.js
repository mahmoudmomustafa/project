$(document).ready(function () {
   //Customer select
   // $("#customerSelect").select2({
   //    minimumInputLength: 1
   // });
   // // show customer info
   // $('#customerSelect').change(function () {
   //    $('.customerInfo').slideDown();
   // });
   // // sidebar
   // $('#sidebarToggle').click(function(){
   //    $("body").toggleClass("sidebar-toggled"),
   //    $(".sidebar").toggleClass("toggled"), 
   //    $(".sidebar").hasClass("toggled") &&
   //    $(".sidebar .collapse").collapse("hide")
   // });
   $('.toggle').click(function () {
      $('.side').toggleClass('trans');
   });
});