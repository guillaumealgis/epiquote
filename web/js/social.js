$('#social_links img').hover(function () {
  $(this).attr('src', $(this).attr('src').replace(/(.*)_white.png/, '$1.png'));
},
function () {
  $(this).attr('src', $(this).attr('src').replace(/(.*).png/, '$1_white.png'));
})