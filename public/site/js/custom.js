$(document).ready(function() {
    $('.tabs-list div:first').addClass('maker-sidebar__tab-button--active'),
    $('.tab-content .show-content:first').addClass('active');
   
   $('.tabs-list div').click(function(e) {
       event.preventDefault();
       if(!$(this).hasClass('maker-sidebar__tab-button--active')) {
           var tabIndex = $(this).index();
           var nthChild = tabIndex + 1;
           
           $('.tabs-list div.maker-sidebar__tab-button--active').removeClass('maker-sidebar__tab-button--active');
           $(this).addClass('maker-sidebar__tab-button--active');
           $('.tab-content .tab-pane').removeClass('active');
           $('.tab-content .tab-pane:nth-child('+ nthChild +')').addClass('active');
       }
   })
})