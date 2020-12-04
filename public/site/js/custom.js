$(document).ready(function() {
    var fontColorchanged="#000000";
    var GC=0;
    var color1;
    var color2;
    var BgColor="#ffffff";
    var bckcolor1;
    var bckcolor2;
    var PathColor="#ffffff";
    var pathcolor1;
    var pathcolor2;
    // background color or gradient flag variable
    var bckcolor=0;
    // logo color or gradient flag variable
    var logocolor=0;
    var pathid;
    $('.tabs-list div:first').addClass('maker-sidebar__tab-button--active'),
    $('.tab-content .show-content:first').addClass('active');
    $(document).on('click','.tabs-list div',function(e){
    event.preventDefault();
    if(!$(this).hasClass('maker-sidebar__tab-button--active')) {
    var tabIndex = $(this).index();
    var nthChild = tabIndex + 1;
    $('.tabs-list div.maker-sidebar__tab-button--active').removeClass('maker-sidebar__tab-button--active');
    $(this).addClass('maker-sidebar__tab-button--active');
    type=$(this).data('customtype');
    if(type=="logo" || type=="Heading"){
    selectcanvasobject(type);
    canvas.renderAll();
    }
    $('.tab-content .tab-pane').removeClass('active');
    $('.tab-content .tab-pane:nth-child('+ nthChild +')').addClass('active');
    }
    })
    $(document).on('click','.color-picker', function() {
    $('.popup-overlay').hide();
    $parent_box = $(this).closest('.color-pickerPopup');
    $parent_box.siblings().find('.popup-overlay').hide();
    $parent_box.find('.popup-overlay').toggle();
    });
    $(document).on('click','.cancel', function(e) {
    $(".popup-overlay").hide();
    });
    $('#donebuttontext').on('click', function() {
    if(GC==0){
    fontcolortext(fontColorchanged);
    $('#picker0').css("background",""); 
    $('#picker0').css("background-color",fontColorchanged); 
    $('#font-color-input').val(fontColorchanged); 
    $('.popup-overlay').hide();

    }else if(GC==1){

    active = canvas.getActiveObject();  
    if(active.get('type')=='text'){
    var ctx = canvas.getContext('2d');
    var gradient = ctx.createLinearGradient( 0, 0,  0, text.height);
    gradient.addColorStop(0, color1);
    gradient.addColorStop(0.45, color2);
    active.fill = gradient;
    $('#font-color-input').attr('value', ''); 
    $('#font-color-input').val(''); 
    $('#font-color-input').attr("placeholder", `${color1}, ${color2})`);
    $('#picker0').css({background: `linear-gradient(${color1}, ${color2})`});
    canvas.add(active); 
    canvas.renderAll();
    $('.popup-overlay').hide();

    }


    }
    });
    /* initialize color pickerwidgets*/ 
    var x =kendo.init($("#textfontcolor")); 
    $(" .cancel").click(function(e) {
    $(".popup-overlay").hide();
    });
    var flatColorPicker = $("#flatcolorpicker").data("kendoFlatColorPicker");
    flatColorPicker.value("rgb(0,0,0)");
    flatColorPicker.bind("change", function(e) {

    fontColorchanged=e.value;
    GC=0;


    });
    $("#shadow-color").kendoColorPicker({
    value:'rgb(4, 0, 0)',

    });
    $("#outline-color").kendoColorPicker({


    });
    $(document).on("click", '.text-gradient',function(e) {
    GC=1;
    $('.text-gradient').removeClass('active');
    $(this).addClass('active');
    color1 =$(this).data('color1');
    color2 =$(this).data('color2');

    });

    /* canvas background color picker */
    var backgroundcolorpicker =kendo.init($("#canvas_background_color"));
    var backgroundColorPicker = $("#canvas_background_color_picker").data("kendoFlatColorPicker");
    backgroundColorPicker.value("rgb(0,0,0)");
    backgroundColorPicker.bind("change", function(e) {
    BgColor=e.value;
    bckcolor=0;
    });
    /* canvas background color picker End */
    /* canvas Background color Done Button Function */
    $(document).on('click','#backgroundbtn',function(e) {
    e.preventDefault();
    if(bckcolor==0){
    canvas.backgroundColor=BgColor;
    canvas.renderAll();
    $('#picker5').css("background-color",BgColor); 

    }else if(bckcolor==1){
    let ctx = canvas.getContext('2d');
    let  bckgradient = ctx.createLinearGradient( 0, 0,  0, canvas.height);
    bckgradient.addColorStop(0, bckcolor1);
    bckgradient.addColorStop(0.45, bckcolor2); 
    $('#picker5').css({background: `linear-gradient(${bckcolor1}, ${bckcolor2})`});
    canvas.backgroundColor=bckgradient;
    canvas.renderAll();
    }
    $('.popup-overlay').hide();

    });
    /* canvas Background color Done Button Function End*/

    /* Logo Color Picker Modal */
    var logocolormodal =kendo.init($("#logo-color"));     
    var logoColorPicker = $("#logocolorpicker").data("kendoFlatColorPicker");
    logoColorPicker.value("rgb(0,0,0)");
    logoColorPicker.bind("change", function(e) {
    $('.logo-gradient').removeClass('active');
    PathColor=e.value;
    logocolor=0;
    });
    /* Logo Color Picker Modal End */
    /* Logo Color Done Button Function */
    $(document).on('click','#donebuttonlogo',function(e) {
    e.preventDefault();
    if(logocolor==0){
    setlogopathcolor(pathid,PathColor,0);
    $(`#svg-picker-${pathid}`).css("background-color",PathColor); 
    }else if(logocolor==1){
    setlogopathcolor(pathid,PathColor,1);
    $(`#svg-picker-${pathid}`).css({background: `linear-gradient(${pathcolor1}, ${pathcolor2})`});
    }
    canvas.renderAll();
    canvas.requestRenderAll(); 
    $('.popup-overlay').hide();
    $('.logo-gradient').removeClass('active');

    });
    /* Logo Color Done Button Function End */

    $(document).on("click", '.logo-gradient',function(e) {
    logocolor=1;
    $('.logo-gradient').removeClass('active');
    $(this).addClass('active');
    pathcolor1 =$(this).data('color1');
    pathcolor2 =$(this).data('color2');

    });
    $(document).on("click", '.canvas-gradient',function(e) {
    bckcolor=1;
    $('.canvas-gradient').removeClass('active');
    $(this).addClass('active');
    bckcolor1 =$(this).data('color1');
    bckcolor2 =$(this).data('color2');

    });

    $( ".stroke-color-container .gradient-color" ).remove();
    $( ".shadow-color-container .gradient-color" ).remove();
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

    $('.font-color-container').on('click', '.outline-color-picker',function(){
    let textColor=$(this).css("background-color"); 
    $('#picker0').css("background-color",textColor); 
    active = canvas.getActiveObject(); 
    $('#font-color-input').val(rgba2hex(textColor)); 
    if(active.get('type')=='text'){
    active.fill=textColor;
    canvas.renderAll();
    }
    });
    var shadowColor="rgb(4, 0, 0";
    $(document).on('change','.textshadow', function(e){
    let shadowSpread=$('#spread-slider').val();
    let shadowDistanceX=$('#distance-x-slider').val();
    let shadowDistanceY=$('#distance-y-slider').val();    
    let shadowColor=$('#shadow-color').val();    
    if($('#text-shadow').is(":checked")){ 
    active = canvas.getActiveObject(); 
    if(active.get('type')=='text'){
    let s = Color(shadowColor);   
    $('#picker2').css("background-color",s.toString()); 
    $('#spread-input').val(shadowSpread);
    $('#distance-y-input').val(shadowDistanceX);
    $('#distance-y-input').val(shadowDistanceY);
    var shadow = new fabric.Shadow({ 
                    color: s.toString(), 
                    blur : shadowSpread,
                    offsetX: shadowDistanceX,
                    offsetY: shadowDistanceY, 
                });

    active.shadow=shadow;  
    canvas.renderAll();
    }
    } else if($(this).is(":not(:checked)")){ 
    active.shadow=null;
    canvas.renderAll();

    }

    });

    $('.stroke-color-container').on('click' , '.outline-color-picker' ,function() {

    let fieldtype= $(this).prop("tagName");
    let outlineSlider=$('#outline-slider').val();
    active = canvas.getActiveObject(); 
    if($('#text-outline').is(":checked")){  
    if(fieldtype=="SPAN"){
    fontOutline= $(this).css("background-color");
    $('#picker1').css("background-color",fontOutline);
    if(active.get('type')=='text'){
        active.stroke=fontOutline; 
        active.strokeWidth=outlineSlider;
        canvas.renderAll();
    }
    }
    }else if($('#text-outline').is(":not(:checked)")){
    active = canvas.getActiveObject(); 
    if(active.get('type')=='text'){
        active.stroke=null; 
        active.strokeWidth=null;
        canvas.renderAll();
    }

    }
    });
    $(document).on('change', '#outline-slider ,#outline-color, #text-outline',function(){ 
    if($('#text-outline').is(":checked")){ 
    active = canvas.getActiveObject();
    if(active.get('type')=='text'){
    fontOutline=$("#outline-color").val();
    let outlineSlider=$('#outline-slider').val();
    let o = Color(fontOutline);  
    $('#picker1').css("background-color",o.toString());
    active.stroke=o.toString(); 
    active.strokeWidth=outlineSlider;
    canvas.renderAll();   
    } 
    }else if($('#text-outline').is(":not(:checked)")){
    active = canvas.getActiveObject(); 
    if(active.get('type')=='text'){
    active.stroke=null; 
    active.strokeWidth=null;
    canvas.renderAll();  
    }
    }
    });
    $(document).on('click', '.fontname',function(){
    let fonttext= $(this).data('font');
    var text = canvas.getActiveObject();
    let opt_id=slug(fonttext);
    $('#'+opt_id).prop('selected', true);
    text.fontFamily = fonttext;
    canvas.renderAll();
    $('#myModal').modal('hide');


    });
    var lastleft;
    $("#text_btn").on("click", function(e) {
    let fontfamily=$('#font_select').val();
    let lasttextadded=getlasttext();
    let texttop=lasttextadded.top+lasttextadded.fontSize;
    text1 = new fabric.Text('Logo tagline here', { 
    fontFamily: fontfamily,
    fontSize: 40,
    // left: lasttextadded.left, 
    // top: texttop,  
    textAlign: 'center',
    lockUniScaling: true,  
    objectCaching:false  
    });
    if(texttop+40>canvas.height){
    texttop=10;
    }
    if(lasttextadded.customType == 'Heading'){
    lastleft = lasttextadded.width+lasttextadded.left/2 - text1.width;
    }else{
    lastleft=lasttextadded.left;
    }
    text1.top=texttop;
    text1.left=lastleft;
    canvas.add(text1);
    text1.setControlsVisibility(HideControls);
    canvas.setActiveObject(text1);
    });
    $('#compile').click(function(){
    $('#myModal').modal('show')
    var imgList = '';
    var fontoption = '';
    var j = 0;
    $('.multImages').empty();
    for(var i = 0; i < gfonts.length; i++) {
    var text = canvas.getActiveObject();
    // setStyle(text, 'fontFamily', gfonts[i]);
    text.fontFamily = "'"+gfonts[i]+"'";
    let imgData  = canvas.toDataURL('png');
    imgList = `<div  class="col-md-6"><div class="font-wrapper"> <img data-font="${gfonts[i]}" class="fontname" src="${imgData}"/></div></div>`;
    $('.multImages').append(imgList);
    }
    });
    $(document).on('click', '.svg-path-picker',function(){
    pathid= $(this).data('customid');
    });
    $('.fontsize').on('keyup  change' , function(e) {
    active = canvas.getActiveObject();
    let font_Size=$(this).val();   
    if(font_Size>=200){
    font_Size=200;
    }
    $('#font-slider').val(font_Size);
    $('#font-input').val(font_Size);
    if(active.get('type')=='text'){
    if(font_Size==200){
    active.set("fontSize",199);
    }else{
    active.set("fontSize",font_Size);
    }
    $('#font-input').val(font_Size);
    canvas.renderAll();
    }
    });
    $('#font_select').on('change' , function() {
    active = canvas.getActiveObject();
    if(active.get('type')=='text'){ 
    active.fontFamily = $(this).val();
    canvas.renderAll();
    }
    $('#select2-font_select-container').css('fontFamily',$(this).val());
    });
    $(document).on('change', '#font-color-input',function(){
    let fontColorInput=$(this).val();
    if (fontColorInput.match(/^\#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/)) {
    let flatColorPicker1 = $("#flatcolorpicker").data("kendoFlatColorPicker");
    flatColorPicker1.value("rgb(0,0,0)");
    $('#picker0').css("background-color",fontColorInput);
    active = canvas.getActiveObject(); 
    if(active.get('type')=='text'){
    active.fill=fontColorInput;
    canvas.renderAll();
    }
    }else{
    $('#font-color-input').val(null);
    }
    });
    function fontcolortext(color){
    active = canvas.getActiveObject(); 
    if(active.get('type')=='text'){
    active.fill=color;
    canvas.renderAll();
    }
    }
    function getlasttext(){
    let lasttext;
    for (let index = 0; index < canvas._objects.length; index++) {
    if(canvas._objects[index].get('type')=='text'){
    lasttext=canvas._objects[index];
    }
    }
    return lasttext;

    }
    function setlogopathcolor(pid,pcolor,colortype){
    for (let j = 0; j < canvas._objects.length; j++) {
    if(canvas._objects[j].get('customType')=='logo'){
    if (canvas._objects[j].isSameColor && canvas._objects[j].isSameColor() || !canvas._objects[j]._objects) {  
    if(colortype==0){
        canvas._objects[j].set("fill", pcolor);
        console.log(pcolor);
        return true;
    }else if(colortype==1){
        let ctx = canvas.getContext('2d');
        let  logogradient = ctx.createLinearGradient( 0, 0,  0,  canvas._objects[j].height);
        logogradient.addColorStop(0, pathcolor1);
        logogradient.addColorStop(0.45, pathcolor2);  
        canvas._objects[j].set("fill", logogradient);
        console.log(pcolor);
        return true;
    }
    }else if(canvas._objects[j]._objects){
    for (var i = 0; i < canvas._objects[j]._objects.length; i++) {
        if(canvas._objects[j]._objects[i].customId==pid){ 
            if(colortype==0){
                canvas._objects[j]._objects[i].set("fill", pcolor);
                console.log(pcolor);
                return true;
            }else if(colortype==1){
                let ctx = canvas.getContext('2d');
                let  logogradient = ctx.createLinearGradient( 0, 0,  0,  canvas._objects[j]._objects[i].height);
                logogradient.addColorStop(0, pathcolor1);
                logogradient.addColorStop(0.45, pathcolor2);  
                canvas._objects[j]._objects[i].set("fill", logogradient);
                console.log(logogradient);
                return true;
            }
        }
    }
    }
    }
    }
    }
    function selectcanvasobject(type){
    canvas.getObjects().forEach(function(o) {
    if(o.customType == type) {
    canvas.setActiveObject(o);
    }
    });
    }
    $('.popup-overlay').removeClass("popupfake");  
    $('.popup-overlay').hide();
    $('#tab-panel-2').removeClass("active");  
    $(document).on('click','#select2-font_select-container, .select2-selection__arrow',function(){
    $('.select2-results__option').each(function(){
    let fonts=$(this).html();
    $(this).css('fontFamily',fonts);
    });
    });



})