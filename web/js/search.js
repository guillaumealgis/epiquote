$(document).ready(function () {
  
  var slider_pos = null;
  
  $('#search').hide();
  $('#menu_search a').click(function (event) {
    event.preventDefault();
    
    $('#search').slideToggle(500);
    // If the indicator isn't present on this pagem do nothing with it
    if ($('#menu_indicator').length > 0)
    {
      // If the search panel is not open
      if ($('#search').height() <= 1)
      {
        // This saves the horizontal background position of the indicator
        slider_pos = $('#menu_indicator').css('background-position');
        slider_pos = slider_pos.substr(0, slider_pos.indexOf(' '));
        // We slide the indicator to the "search" position
        $('#menu_indicator').animate({
          'background-position': '350px'
        }, 500);
        $('#search input').focus();
      }
      else
      {
        // When closing the search panel we slide the indicator back to
        // its original position
        $('#menu_indicator').animate({
          'background-position': slider_pos
        }, 500);
      }
    }
  });
});