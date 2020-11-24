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
    $(".cancel").click(function(e) {
      $(".popup-overlay").hide();
    });
    $('.donebtn').on('click', function() {
        $('.popup-overlay').hide();
    });
    
    //   $("#font-color-picker").kendoColorPicker({
         
    // });
    // initialize widgets
	 kendo.init($("#textfontcolor"));
     $(" .cancel").click(function(e) {
        $(".popup-overlay").hide();
      });
     var flatColorPicker = $("#flatcolorpicker").data("kendoFlatColorPicker");
         flatColorPicker.bind("change", function(e) {
               
               
              fontcolortext(e.value);
              $('#picker0').css("background-color",e.value); 
              $('#font-color-input').val(e.value); 
        
         });
    
    
       
    $("#shadow-color").kendoColorPicker({
         value:'rgb(4, 0, 0)',
    
    });
    $("#outline-color").kendoColorPicker({
         
    
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
    $(document).on("click", '.text-gradient',function(e) {
        
        let color1 =$(this).data('color1');
        let color2 =$(this).data('color2');
        active = canvas.getActiveObject();  
        if(active.get('type')=='text'){
            var ctx = canvas.getContext('2d');
            var gradient = ctx.createLinearGradient( 0, 0,  0, text.height);
            gradient.addColorStop(0, color1);
            gradient.addColorStop(0.45, color2);
            active.fill = gradient;
            $('#font-color-input').val(color1+','+color2);
            $('#picker0').css({background: `linear-gradient(${color1}, ${color2})`});
            canvas.add(active); 
            canvas.renderAll();
    
        }
    });
    $('.shadow-color-container').on('click','.outline-color-picker', function(){
                
                
                
        if($('#text-shadow').is(":checked")){
            shadowColor=$(this).css("background-color");
        let shadowSpread=$('#spread-slider').val();
        let shadowDistanceX=$('#distance-x-slider').val();
        let shadowDistanceY=$('#distance-y-slider').val();
        $('#picker2').css("background-color",shadowColor);  
        $('#spread-input').val(shadowSpread);
        $('#distance-y-input').val(shadowDistanceX);
        $('#distance-y-input').val(shadowDistanceY);
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
    $(document).on('change','.textshadow', function(e){
        let shadowSpread=$('#spread-slider').val();
        let shadowDistanceX=$('#distance-x-slider').val();
        let shadowDistanceY=$('#distance-y-slider').val();    
        let changeID=$(this).attr('id');
        if(changeID=='spread-input'){
        let shadowSpread=$(this).val();
        // console.log(1);
        }else if(changeID=='distance-x-input'){
        let shadowDistanceX=$(this).val();
        // console.log(2);
        
        }else if(changeID=='distance-y-input'){
        let shadowDistanceY=$(this).val();
        // console.log(3);
        
        } else if(changeID=='shadow-color'){
        shadowColor=$(this).val();
         
        }
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
    $("#text_btn").on("click", function(e) {
        let fontfamily=$('#font_select').val();
    
        text1 = new fabric.Text(
            'Logo tagline here', { 
            fontFamily: fontfamily,
            left: defaultLeft+10, 
            top: defaultTop+50,  
            textAlign: 'center',
            lockUniScaling: true,  
            objectCaching:false  });
        // canvas.centerObject(text1);
        canvas.add(text1);
        text1.setControlsVisibility(HideControls);
    
        canvas.setActiveObject(text1);
    });

    function fontcolortext(color){
        active = canvas.getActiveObject(); 
        
        if(active.get('type')=='text'){
             
            active.fill=color;
            canvas.renderAll();
        }
    }
    
    })