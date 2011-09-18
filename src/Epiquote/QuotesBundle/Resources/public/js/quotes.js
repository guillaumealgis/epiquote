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
  
  /**** Asynchronous quotes loading with "Load more quotes" button ****/
  // If js is activated we change the button text from "Next page" to "Load more quotes"
  $('#block_more a').html('Load more quotes');
  
  function loadMoreQuotes(url, callback)
  {
    $.ajax({
      url: url,
      type: 'GET',
      success: function (quotes) {
        var nb_quotes = $(quotes).siblings('.quote').length;
        if (nb_quotes > 0)
          $(quotes).insertAfter($('.quote:last')).hide().slideDown(800);
        callback(nb_quotes < 10); // 10 is the $max_quotes_per_page value
      }
    });
  }
  
  // This is a ugly global flag to know if we are already loading quotes or not
  loading_quotes = false;
  $('#block_more a').click(function (event) {
    // Block the click
    event.preventDefault();
    
    // The click must do nothing if we are already loading data
    if (loading_quotes)
      return;
    else
      loading_quotes = true;
    
    // We generate the link for the next page
    var url = $('#block_more a').attr('href');
    var page = parseInt(url.substr(url.lastIndexOf('/') + 1));
    // This find the page number in the url
    // (before the "?" or at the end of the url) and increment it
    var link = url.replace(/\/[0-9]+(\?.*)?$/, '/' + (page + 1) + '$1');
    $('#block_more a').attr('href', link);
    
    // Saving last quote to remove separator later
    var last_quote = $('.quote:last');
    
    // Adding ajax loader gif to button
    $(this).addClass('loading');
    var default_val = $(this).html();
    $(this).html('Loading...');
    
    // Ajax call
    loadMoreQuotes(url, function (no_more_quote) {
      if (no_more_quote)
      {
        $('#block_more').fadeOut(300);
      }
      else
      {
        // Data is loaded
        // Restoring button
        $('#block_more a').removeClass('loading');
        $('#block_more a').html(default_val);

        // Add a separator to the 'old' last quote
        last_quote.removeClass('no-separator');

        // We set the loading quotes flag to false
        loading_quotes = false;
      }
    });
  });
});

