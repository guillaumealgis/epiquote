$(document).ready(function () {
  $('form.inset-labels-form :input').each(function () {
    // Retrieving each input's label
    var label = $('label[for='+$(this).attr('id')+']');
    
    if (label.length <= 0)
      return;
    
    // Saving input's default color and label's text
    var default_value = label.text();
    var default_color = $(this).css('color');
    
    // Finally removing the label
    label.remove();
    
    // On input focus
    $(this).focus(function () {
      if ($(this).val() == default_value)
      {
        $(this).val('');
        $(this).css('color', default_color);
      }
    });
    
    // On input blur
    $(this).blur(function () {
      if ($(this).val() == '')
      {
        $(this).val(default_value);
        $(this).css('color', '#a0a0a0');
      }
    });
    
    // If at submit we still have some default values, erases them
    var input = $(this);
    $(this).closest('form').submit(function () {
      if (input.val() == default_value)
        input.val('');
    });
    
    
    // Manually trigger a blur event to init the input
    $(this).trigger('blur');
  });
});