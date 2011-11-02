$(document).ready(function () {  
  /**** Asynchronous quotes loading with "Load more quotes" button ****/
  // If js is activated we change the button text from "Next page" to "Load more quotes"
  $('#more-quotes-button a').html('Charger les quotes suivantes');
  
  function loadMoreQuotes(url, callback)
  {
    $.ajax({
      url: url,
      type: 'GET',
      success: function (quotes) {
        var nb_quotes = $(quotes).siblings('.quote').length;
        if (nb_quotes > 0)
        {
          $(quotes).insertAfter($('.quote:last')).hide().slideDown(800);
        }
        callback(nb_quotes < 10); // 10 is the $max_quotes_per_page value
      }
    });
  }
  
  // This is a ugly global flag to know if we are already loading quotes or not
  loading_quotes = false;
  $('#more-quotes-button a').click(function (event) {
    // Block the click
    event.preventDefault();
    
    // The click must do nothing if we are already loading data
    if (loading_quotes)
      return;
    else
      loading_quotes = true;
    
    // We generate the link for the next page
    var url = $('#more-quotes-button a').attr('href');
    var page = parseInt(url.substr(url.lastIndexOf('/') + 1));
    // This find the page number in the url
    // (before the "?" or at the end of the url) and increment it
    var link = url.replace(/\/[0-9]+(\?.*)?$/, '/' + (page + 1) + '$1');
    $('#more-quotes-button a').attr('href', link);
    
    // Saving last quote to remove separator later
    var last_quote = $('.quote:last');
    
    // Adding ajax loader gif to button
    $(this).addClass('loading');
    var default_val = $(this).html();
    $(this).html('Chargement...');
    
    // Ajax call
    loadMoreQuotes(url, function (no_more_quote) {
      if (no_more_quote)
      {
        $('#more-quotes-button').fadeOut(300);
      }
      else
      {
        // Data is loaded
        // Restoring button
        $('#more-quotes-button a').removeClass('loading');
        $('#more-quotes-button a').html(default_val);

        // Add a separator to the 'old' last quote
        last_quote.removeClass('no-separator');

        // We set the loading quotes flag to false
        loading_quotes = false;
      }
    });
  });
});

