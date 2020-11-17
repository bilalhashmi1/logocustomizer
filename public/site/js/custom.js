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



$('.color-picker').on('click', function() {
    $('.popup-overlay').hide();
	$parent_box = $(this).closest('.color-pickerPopup');
	$parent_box.siblings().find('.popup-overlay').hide();
	$parent_box.find('.popup-overlay').toggle();
});
$(".closeX").click(function(e) {
  $(".popup-overlay").hide();
});
$('.done').on('click', function() {
    $('.popup-overlay').hide();
});

   
$("#shadow-color").spectrum({
    color: "rgb(4, 0, 0)"
});
$("#outline-color").spectrum({
    color: "#f00" 
});
$("#font-color-picker").spectrum({
    color: "black"
});
$('#text-shadow').on('click',function(){
        
        $('#shadow_fields').slideToggle();
});
 $('#text-outline').on('click',function(){
        
        $('#outline_fields').slideToggle();
 });
 $('.spread').on('keyup  change' , function(e) {
         let spread=$(this).val();  
        $('#spread-slider').val(spread);
        $('#spread-input').val(spread); 
 });
 $('.distance-x').on('keyup  change' , function(e) {
         let distanceX=$(this).val();  
        $('#distance-x-slider').val(distanceX);
        $('#distance-x-input').val(distanceX); 
 });
 $('.distance-y').on('keyup  change' , function(e) {
         let distanceY=$(this).val();  
        $('#distance-y-slider').val(distanceY);
        $('#distance-y-input').val(distanceY); 
 });


})