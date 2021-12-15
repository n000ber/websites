$(document).ready(function()
{    
    AOS.init();
    window.addEventListener('load', AOS.refresh);

    //Click event handler for nav-items
    $('.nav-item').on('click',function(){

      //Remove any previous active classes
      $('.nav-item').removeClass('active');

      //Add active class to the clicked item
      $(this).addClass('active');
    });
});
