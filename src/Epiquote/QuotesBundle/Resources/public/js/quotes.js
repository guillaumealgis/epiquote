$(document).ready(function () {
  /**** Centering of ranks in regards of quotes ****/
  $('.quote').each(function () {
    var quote_body = $(this).children('.quote_body');
    // We calculate the real height of the .quote_body block and divide it by 2
    var topPadding = (quote_body.height()
      + parseInt(quote_body.css('padding-top'))
      + parseInt(quote_body.css('padding-bottom'))) / 2
      - $(this).children('.quote_rank p').height() / 2;
    
    // And we affect this value to the rank padding-top to center it verticaly
    $(this).children('.quote_rank').css('margin-top', topPadding);
  });
  
  /**** Rank links "+" and "-" appearation on mouse hover ****/
  // Can't use hide() as it will use display: none; property
  // and disrupt the elements' positions
  $('.quote_rank .rate_symbols').fadeTo(0, 0.1);
  $('.quote_rank').hover(function () { // mouse in
    $(this).find('.rate_symbols').fadeTo(300, 1);
  }, function () { // mouse out
    $(this).find('.rate_symbols').fadeTo(300, 0.1);
  });
});

