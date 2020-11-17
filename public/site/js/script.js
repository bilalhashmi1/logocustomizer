var active;
var HideControls = {
'tl':true,
'tr':true,
'bl':true,
'br':true,
'ml':false,
'mt':false,
'mr':false,
'mb':false,
'mtr':true
};
var gfonts = JSON.parse(gfl);
var canvas = new fabric.Canvas('c',{backgroundColor : "white"});
canvas.setWidth($("#canvas_frame").width());
canvas.setHeight($("#canvas_frame").height());
text = new fabric.Text(
'Logo Text Here', { 
fontFamily: 'Bebas Neue',
fontSize: 60,
centeredScaling: false,
objectCaching:false  });
text.setControlsVisibility(HideControls); 
canvas.setActiveObject(text); 
canvas.add(text); 
canvas.centerObject(text); 
canvas.renderAll();
var svgUrl="{{asset('/site/img/logo-icon.svg')}}";
$( document ).ready(function() {
fabric.loadSVGFromURL(svgUrl, function(objects, options) {
var obj = fabric.util.groupSVGElements(objects, options); 
obj.scaleToHeight(100);
obj.set({
left: (text.left+(text.width/2)-obj.width) ,
top: text.top-100,
// originX: 'center',
// originY: 'center'
});
console.log(obj);
canvas.add(obj);
canvas.renderAll();
});
});
canvas.on("selection:updated", function (e) {
selectedText(e);
});
canvas.on("selection:created", function (e) {
selectedText(e);
});
$(document).on('change keyup','#text_field', function(){
// console.log(canvas.object);
active = canvas.getActiveObject();  
if(active.get('type')=='text'){
active.text=$(this).val(); 
canvas.renderAll();
}
});
$(document).on("click", '.text-gradient',function(e) {
let color1 =$(this).data('color1');
let color2 =$(this).data('color2');
active = canvas.getActiveObject();  
if(active.get('type')=='text'){
var ctx = canvas.getContext('2d');
var gradient = ctx.createLinearGradient(
0,
0, 
0,
text.height);
gradient.addColorStop(0, color1);
gradient.addColorStop(0.02, color2);
active.fill = gradient;
canvas.add(active); 
canvas.renderAll();
}
});
var readFile = function(e) {
inputforupload = e.target;
readerobj = new FileReader();
var imgObj;
readerobj.onload = function(){
var imgElement = document.createElement('img');
imgElement.src = readerobj.result;
imgElement.onload = function() {
var cw = $(".canvas-container").width();
var ch = $(".canvas-container").height();
let scaleWidth = 0.3 * cw;
let scaleHeight = 0.3 * ch;
let scaleCorner = 0.1 * (cw+ch);
var imageinstance = new fabric.Image(imgElement, {
angle: 0,
opacity: 1,
cornerSize: scaleCorner,
});
//  imageinstance.setControlsVisibility(HideControls);
var filter = new fabric.Image.filters.RemoveColor({
threshold: 0.2,
distance:0.5
});
imageinstance.filters.push(filter);
var contrast = new fabric.Image.filters.Contrast({ contrast: 1});
imageinstance.filters.push(contrast);
imageinstance.applyFilters();
canvas.add(imageinstance);
canvas.centerObject(imageinstance);
canvas.renderAll();
};
};
readerobj.readAsDataURL(inputforupload.files[0]);
$('#filereader').val('');
};
/** Upload Image Function end**/
var slug = function(str) {
var $slug = '';
var trimmed = $.trim(str);
$slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
replace(/-+/g, '-').
replace(/^-|-$/g, '');
return $slug.toLowerCase();
}
var temp_id = "";
for(var k = 0; k < gfonts.length; k++){
temp_id=slug(gfonts[k]);
fontoption=`
<option class="fontoptions" id="${temp_id}" style="font-family: '${gfonts[k]}';" value="${gfonts[k]}">${gfonts[k]}</option>
`;
$('#font_select').append(fontoption);
}
/** image filters **/
// document.getElementById('filereader').addEventListener('change', readFile);
// $("#rect").on("click", function(e) {
//   rect = new fabric.Rect({
//     left: 40,
//     top: 40,
//     width: 50,
//     height: 50,      
//     fill: 'transparent',
//     stroke: 'green',
//     strokeWidth: 5,
//   });  
//   canvas.add(rect);
// });
// $("#circ").on("click", function(e) {
//   rect = new fabric.Circle({
//     left: 40,
//     top: 40,
//     radius: 50,     
//     fill: 'transparent',
//     stroke: 'green',
//     strokeWidth: 5,
//   });  
//   canvas.add(rect);
// });
// $("#save").on("click", function(e) {
//   $(".save").html(canvas.toSVG());
// });
$('#compile').click(function(){
$('#myModal').modal('show')
var imgList = '';
var fontoption = '';
//   console.log('imgList');
var j = 0;
$('.multImages').empty();
for(var i = 0; i < gfonts.length; i++) {
var text = canvas.getActiveObject();
// setStyle(text, 'fontFamily', gfonts[i]);
text.fontFamily = "'"+gfonts[i]+"'";
let imgData  = canvas.toDataURL('png');
imgList = `
<div  class="col-md-6">
   <div class="font-wrapper"> <img data-font="${gfonts[i]}" class="fontname" src="${imgData}"/></div>
</div>
`;
$('.multImages').append(imgList);
}
});
$(document).on('click', '.fontname',function(){
let fonttext= $(this).data('font');
var text = canvas.getActiveObject();
// console.log(fonttext);
// setStyle(text, 'fontFamily', fonttext);
text.fontFamily = fonttext;
canvas.renderAll();
$('#myModal').modal('hide');
});
function setStyle(object, styleName, value) {
if (object.setSelectionStyles && object.isEditing) {
var style = { };
style[styleName] = value;
object.setSelectionStyles(style).setCoords();
}
else {
var style = { };
style[styleName] = value;
object.set(style).setCoords();
}
canvas.renderAll();
};
$("#text_btn").on("click", function(e) {
let fontfamily=$('#font_select').val();
text1 = new fabric.Text(
'Logo tagline here', { 
fontFamily: fontfamily,
left: text.left+10, 
top: text.top+50,    
objectCaching:false  });
// canvas.centerObject(text1);
canvas.add(text1);
text1.setControlsVisibility(HideControls);
canvas.setActiveObject(text1);
});
//  Stroke 
$('.outline-color-picker').on('click' , function() {
let fieldtype= $(this).prop("tagName");
let outlineSlider=$('#outline-slider').val();
active = canvas.getActiveObject(); 
if($('#text-outline').is(":checked")){  
if(fieldtype=="SPAN"){
fontcolor= $(this).css("background-color");
$('#picker1').css("background-color",fontcolor);
if(active.get('type')=='text'){
// console.log(fontcolor); 
active.stroke=fontcolor; 
active.strokeWidth=outlineSlider;
canvas.renderAll();
}
}
}else if($('#text-outline').is(":not(:checked)")){
// console.log("Checkbox is unchecked.");
active = canvas.getActiveObject(); 
if(active.get('type')=='text'){
active.stroke=null; 
active.strokeWidth=null;
canvas.renderAll();    
// console.log(canvas); 
}
}
});
$(document).on('change', '#outline-slider ,#outline-color, #text-outline',function(){ 
let outlineColor=$("#outline-color").val();
let outlineSlider=$('#outline-slider').val();
let o = Color(outlineColor);  
$('#picker1').css("background-color",o.toString()); 
if($('#text-outline').is(":checked")){ 
active = canvas.getActiveObject(); 
// console.log(active.get('type'));
if(active.get('type')=='text'){
active.stroke=o.toString(); 
active.strokeWidth=outlineSlider;
canvas.renderAll();    
// console.log(active); 
} 
}
else if($('#text-outline').is(":not(:checked)")){
// console.log("Checkbox is unchecked.");
active = canvas.getActiveObject(); 
if(active.get('type')=='text'){
active.stroke=null; 
active.strokeWidth=null;
canvas.renderAll();    
// console.log(canvas); 
}
}
});
// shadow
$(document).on('change','.textshadow', function(e){
let shadowSpread=$('#spread-slider').val();
let shadowDistanceX=$('#distance-x-slider').val();
let shadowDistanceY=$('#distance-y-slider').val();    
let changeID=$(this).attr('id');
if(changeID=='spread-input'){
let shadowSpread=$(this).val();
console.log(1);
}else if(changeID=='distance-x-input'){
let shadowDistanceX=$(this).val();
console.log(2);
}else if(changeID=='distance-y-input'){
let shadowDistanceY=$(this).val();
console.log(3);
}
let shadowColor=$("#shadow-color").val();
let s = Color(shadowColor);  
$('#picker2').css("background-color",s.toString()); 
$('#spread-input').val(shadowSpread);
$('#distance-y-input').val(shadowDistanceX);
$('#distance-y-input').val(shadowDistanceY);
if($('#text-shadow').is(":checked")){
let c = Color(shadowColor)
// console.log("Checkbox is checked.");
// console.log(c.toString());
active = canvas.getActiveObject(); 
// console.log(active);
if(active.get('type')=='text'){
var shadow = new fabric.Shadow({ 
color: c.toString(), 
blur : shadowSpread,
offsetX: shadowDistanceX,
offsetY: shadowDistanceY, 
});
active.shadow=shadow;  
canvas.renderAll();
}
} else if($(this).is(":not(:checked)")){
// console.log("Checkbox is unchecked.");
active.shadow=null;
canvas.renderAll();
}
});
// 
$(document).on('click','.shadow-color-picker', function(){
let shadowColor=$(this).css("background-color");
let shadowSpread=$('#spread-slider').val();
let shadowDistanceX=$('#distance-x-slider').val();
let shadowDistanceY=$('#distance-y-slider').val();
$('#picker2').css("background-color",shadowColor);  
$('#spread-input').val(shadowSpread);
$('#distance-y-input').val(shadowDistanceX);
$('#distance-y-input').val(shadowDistanceY);
if($('#text-shadow').is(":checked")){
let c = Color(shadowColor)
// console.log("Checkbox is checked.");
// console.log(c.toString());
active = canvas.getActiveObject(); 
// console.log(active);
if(active.get('type')=='text'){
var shadow = new fabric.Shadow({ 
color: c.toString(), 
blur : shadowSpread,
offsetX: shadowDistanceX,
offsetY: shadowDistanceY, 
});
active.shadow=shadow;  
canvas.renderAll();
}
} else if($(this).is(":not(:checked)")){
console.log("Checkbox is unchecked.");
active.shadow=null;
canvas.renderAll();
}
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
if(active.get('type')=='text')
{
active.fontFamily = $(this).val();
canvas.renderAll();
}
});
$(document).on('click', '.text-color-picker',function(){
let textColor=$(this).css("background-color"); 
// console.log(textColor);
// var color = Color().fromRgb(textColor)
$('#picker0').css("background-color",textColor); 
active = canvas.getActiveObject(); 
// $('#font-color-input').val(textColor.rgbToHex()); 
if(active.get('type')=='text'){
active.fill=textColor;
canvas.renderAll();
}
});
$(document).on('change', '#font-color-picker',function(){
let fontColorPicker=$('#font-color-picker').spectrum("get"); 
active = canvas.getActiveObject();
$('#picker0').css("background-color",fontColorPicker.toHexString());  
$('#font-color-input').val(fontColorPicker.toHexString());
if(active.get('type')=='text'){  
active.fill=fontColorPicker.toHexString();
canvas.renderAll();
}
});
//   
$(document).on('change', '#font-color-input',function(){
let fontColorInput=$(this).val();
if (fontColorInput.match(/^\#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/)) {
$('#font-color-picker').val(fontColorInput);
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
resizeCanvas = function() {
var winW = $(window).width(),
winH = $(window).height(),
curW = canvas.getWidth(),
curH = canvas.getHeight(),
canW = winW - 75,
canH = winH - 60;
/*  $wrapper.add('.refs').css({
width: canW,
height: canH
}); */
canvas.setWidth(canW);
canvas.setHeight(canH);
canvas.renderAll();
};
//Resize board
$(window).resize(resizeCanvas);
function selectedText(e){
var slug2 = function(str) {
var $slug2 = '';
var trimmed2 = $.trim(str);
$slug2 = trimmed2.replace(/[^a-z0-9-]/gi, '-').
replace(/-+/g, '-').
replace(/^-|-$/g, '');
return $slug2.toLowerCase();
}
// console.log(e.selected[0].type);
if(e.selected[0].type=='text'){
console.log(e.selected[0]);
// console.log(e.selected[0].strokeWidth);
// console.log(e.selected[0].shadow);
let selectedText= e.selected[0].text;
let selectedFontsize= e.selected[0].fontSize;
let selectedFontFamily= e.selected[0].fontFamily;
console.log(selectedFontFamily);
let opt_id=slug2(selectedFontFamily);
$('#'+opt_id).prop('selected', true);
let selectedTextColor= e.selected[0].fill;
let selectedTextstrokewidth= e.selected[0].strokeWidth;
let selectedTextstrokColor= e.selected[0].stroke;
let selectedTextshadow= e.selected[0].shadow;
$('#font-slider').val(selectedFontsize);
$('#font-input').val(selectedFontsize);
$('#text_field').val(selectedText);
$('#picker0').css('background-color',selectedTextColor);
if(selectedTextstrokColor==null){
$('#text-outline').prop("checked", false);
$('#outline_fields').hide();
}else{
$('#text-outline').prop("checked", true);
$('#outline_fields').show();
$('#picker1').css("background-color",selectedTextstrokColor);
$('#outline-color').spectrum("set", selectedTextstrokColor);
$('#outline-slider').val(selectedTextstrokewidth);
}
if(selectedTextshadow==null){
// console.log("uncheck");
$('#text-shadow').prop("checked", false);
$('#shadow_fields').hide(); 
}else{
$('#text-shadow').prop("checked", true);
$('#shadow_fields').show(); console.log(e.selected[0].shadow.color); 
let selectedshadowcolor= e.selected[0].shadow.color;
let selectedshadowblur= e.selected[0].shadow.blur;
let selectedshadowffsetX= e.selected[0].shadow.offsetX;
let selectedshadowffsetY= e.selected[0].shadow.offsety;
$('#spread-slider').val(selectedshadowblur);
$('#spread-input').val(selectedshadowblur);
$('#distance-x-slider').val(selectedshadowffsetX);
$('#distance-x-input').val(selectedshadowffsetX);
$('#distance-y-slider').val(selectedshadowffsetY);
$('#distance-y-input').val(selectedshadowffsetY);
$('#shadow-color').val(selectedshadowcolor);
$('#picker2').css("background-color",selectedshadowcolor);
}
}
}