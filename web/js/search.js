$(document).ready(function () {
  
  var slider_pos = null;
  
  $('#search').hide();
  $('#menu_search a').click(function (event) {
    event.preventDefault();
    
    $('#search').slideToggle(500);
    if ($('#search').height() <= 1)
    {
      // This save the horizontal background position of the indicator
      slider_pos = $('#menu_indicator').css('background-position');
      slider_pos = slider_pos.substr(0, slider_pos.indexOf(' '));
      $('#menu_indicator').animate({
        'background-position': '350px'
      }, 500);
      $('#search input').focus();
    }
    else
    {
      $('#menu_indicator').animate({
        'background-position': slider_pos
      }, 500);
    }
  });
});