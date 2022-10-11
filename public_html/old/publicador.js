$(document).ready(function()
{
   $("a[href*='#about']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_about').offset().top }, 600, 'linear');
   });
   $("a[href*='#top']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_top').offset().top }, 600, 'linear');
   });
   $("a[href*='#portfolio']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_portfolio').offset().top }, 600, 'linear');
   });
});
