$(document).ready(function() {
    var fontColorchanged="#000000";
    var GC=0;
    var color1;
    var color2;
    var BgColor="#ffffff";
    var bckcolor1;
    var bckcolor2;
    // background color or gradient flag variable
    var bckcolor=0;
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
    $(".cancel").click(function(e) {
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
            $('#picker').css({background: `linear-gradient(${color1}, ${color2})`});
            canvas.add(active); 
            canvas.renderAll();
            $('.popup-overlay').hide();

            }
            

        }
    });
    
    //   $("#font-color-picker").kendoColorPicker({
         
    // });
    // initialize widgets
        var x =kendo.init($("#textfontcolor"));
     
      
         $('.popup-overlay').hide();
         $('.popup-overlay').removeClass("popupfake");
      
     $(" .cancel").click(function(e) {
        $(".popup-overlay").hide();
      });
     var flatColorPicker = $("#flatcolorpicker").data("kendoFlatColorPicker");
     flatColorPicker.value("rgb(0,0,0)");
    //  console.log(flatColorPicker);

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
    
    // canvas background color
    var backgroundcolorpicker =kendo.init($("#canvas_background_color"));     
    var backgroundColorPicker = $("#canvas_background_color_picker").data("kendoFlatColorPicker");
    backgroundColorPicker.value("rgb(0,0,0)");
    backgroundColorPicker.bind("change", function(e) {
              
                BgColor=e.value;
                bckcolor=0;
 
        });
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
    $(document).on("click", '.canvas-gradient',function(e) {
        bckcolor=1;
        $('.canvas-gradient').removeClass('active');
        $(this).addClass('active');
        bckcolor1 =$(this).data('color1');
        bckcolor2 =$(this).data('color2');
        
    });

    // $('.stroke-color-container .sp-input').after(`<div class="recommended-color" >
    // <p class="mb-1">Recommended Color</p>
    // <span id="" class="color-picker outline-color-picker" data-color="rgb(250, 125, 127);" style="background-color: rgb(250, 125, 127);"></span>
    // <span id="" class="color-picker outline-color-picker" data-color="rgb(129, 5, 10);" style="background-color: rgb(129, 5, 10);"></span>
    // <span id="" class="color-picker outline-color-picker" data-color="rgb(148, 6, 13);" style="background-color: rgb(148, 6, 13);"></span>
    // <span id="" class="color-picker outline-color-picker" data-color="rgb(147, 7, 13);" style="background-color: rgb(147, 7, 13);"></span>
    // </div>`);
    // $('.shadow-color-container .sp-input').after(`<div class="recommended-color" >
    // <p class="mb-1">Recommended Color</p>
    // <span id="" class="color-picker outline-color-picker" data-color="rgb(250, 125, 127);" style="background-color: rgb(250, 125, 127);"></span>
    // <span id="" class="color-picker outline-color-picker" data-color="rgb(129, 5, 10);" style="background-color: rgb(129, 5, 10);"></span>
    // <span id="" class="color-picker outline-color-picker" data-color="rgb(148, 6, 13);" style="background-color: rgb(148, 6, 13);"></span>
    // <span id="" class="color-picker outline-color-picker" data-color="rgb(147, 7, 13);" style="background-color: rgb(147, 7, 13);"></span>
    // </div>`);
    
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
        // console.log(rgba2hex(textColor));
        // var color = Color().fromRgb(textColor)
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
            // console.log("Checkbox is unchecked.");
            active.shadow=null;
            canvas.renderAll();
            
        }
        
        });
    
    $('.stroke-color-container').on('click' , '.outline-color-picker' ,function() {
            console.log("fffff");
            let fieldtype= $(this).prop("tagName");
            let outlineSlider=$('#outline-slider').val();
            active = canvas.getActiveObject(); 
            if($('#text-outline').is(":checked")){  
                if(fieldtype=="SPAN"){
                    fontOutline= $(this).css("background-color");
                    $('#picker1').css("background-color",fontOutline);
                    
                    if(active.get('type')=='text'){
                        // console.log(fontOutline); 
                        active.stroke=fontOutline; 
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
             
        if($('#text-outline').is(":checked")){ 
            active = canvas.getActiveObject(); 
            // console.log(active.get('type'));
            if(active.get('type')=='text'){
                 
                    fontOutline=$("#outline-color").val();
    
                 
                
                let outlineSlider=$('#outline-slider').val();
                let o = Color(fontOutline);  
                $('#picker1').css("background-color",o.toString());
                active.stroke=o.toString(); 
                active.strokeWidth=outlineSlider;
                canvas.renderAll();    
             
    
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
    
    $(document).on('click', '.fontname',function(){
        let fonttext= $(this).data('font');
        var text = canvas.getActiveObject();
        let opt_id=slug(fonttext);
            $('#'+opt_id).prop('selected', true);
         
        // console.log(fonttext);
       // setStyle(text, 'fontFamily', fonttext);
        text.fontFamily = fonttext;
        canvas.renderAll();
        $('#myModal').modal('hide');
    
    
    });
     var lastleft;
    $("#text_btn").on("click", function(e) {
        let fontfamily=$('#font_select').val();
        let lasttextadded=getlasttext();
        let texttop=lasttextadded.top+lasttextadded.fontSize;
        
        
        console.log('sss'+texttop);
        text1 = new fabric.Text(
            'Logo tagline here', { 
            fontFamily: fontfamily,
            fontSize: 40,
            // left: lasttextadded.left, 
            // top: texttop,  
            textAlign: 'center',
            lockUniScaling: true,  
            objectCaching:false  });
        // canvas.centerObject(text1);
        if(texttop+40>canvas.height){
            texttop=10;
        }
        console.log(text1.width);
        if(lasttextadded.customType == 'Heading'){
            // lastleft=(lasttextadded.left+((lasttextadded.width/2)-text1.width));
            lastleft = lasttextadded.width+lasttextadded.left/2 - text1.width;
        }else{
            lastleft=lasttextadded.left;
        }
        text1.top=texttop;
        text1.left=lastleft;
        canvas.add(text1);
        text1.setControlsVisibility(HideControls);
        canvas.setActiveObject(text1);
        
       console.log(canvas);
         
         
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
    })