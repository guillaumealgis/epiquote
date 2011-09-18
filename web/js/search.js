$(document).ready(function () {
  $('#search').hide();
  $('#menu_search a').click(function (event) {
    event.preventDefault();
    
    $('#search').slideToggle(500);
    $('#search input[type=text]').focus();
  });
});