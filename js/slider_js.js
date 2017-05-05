var $item = $('.carousel .item'); 
var $wHauteur = $(window).height();
$item.eq(0).addClass('active');
$item.height($wHauteur); 
$item.addClass('full-screen');

$('.carousel img').each(function() 
{
  var $src = $(this).attr('src');
  var $color = $(this).attr('data-color');
  $(this).parent().css({
    'background-image' : 'url(' + $src + ')',
    'background-color' : $color
  });
  $(this).remove();
});

$(window).on('resize', function ()
{
  $wHauteur = $(window).height();
  $item.height($wHauteur);
});

$('.carousel').carousel
({
  interval: 6000,
  pause: "false"
});