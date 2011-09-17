$(document).ready(function () {
  /**** Centering of ranks in regards of quotes ****/
  $('.quote').each(function () {
    var quote_body = $(this).children('.quote_body');
    // We calculate the real height of the .quote_body block and divide it by 2
    var topPadding = (quote_body.height()
      + parseInt(quote_body.css('padding-top')) * 2) / 2
      - $(this).children('.quote_rank p').height() / 2;
    
    // And we affect this value to the rank padding-top to center it verticaly
    $(this).children('.quote_rank').css('margin-top', topPadding);
  });
  
  /**** Rank links "+" and "-" appearation on mouse hover ****/
  $('.quote_rank .rate_symbols').hide();
  $('.quote_rank').hover(function () { // mouse in
    $(this).find('.rate_symbols').fadeIn(300);
  }, function () { // mouse out
    $(this).find('.rate_symbols').fadeOut(300);
  });
});

