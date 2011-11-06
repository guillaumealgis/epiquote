$(document).ready(function () {
  $('#quote_author').autocomplete({
    source: $('#autocomplete_author').text(),
    minLength: 2,
    delay: 200,
    autoFocus: true
  });
});