@extends('layouts.site.app') 
@section('content')
<section class="maker-container">
    <div class="maker-rhs-container">
        <div class="maker-sidebar">
            <div class="maker-sidebar__tab-body-container should-translate">
                <div class="maker-sidebar__tab-body" style="min-height: auto; overflow: hidden scroll;">
                    <div class="tab-content">
                        <article class="tab-pane container active" id="tab-panel-1">
                            <h2>Edit text here</h2>
                            <hr/>
                            <input type="text" id="text_field" class="input-text" placeholder="Ariga">
                            <button title="Add text" id="text_btn" class="btn btn-secondary">+ Add text</button>
                            <p>&nbsp;</p>
                            <hr/>
                            <h2>Font / Style</h2>

                            
                                <input class="select-input" id="font-family" type="text" />
                            
                            {{-- <select class="select-input">
                                <option>Roundo</option>
                                <option>Russo One</option>
                                <option>RR Beaver</option>
                            </select> --}}
                            {{-- <button title="Add text" class="btn btn-secondary">See option ></button> --}}
                            <br>
                            <p class="color-inputpicker">
                                <input type="text" id="font-color-input" class="input-text" placeholder="#000000">
                                <span> 
                                    <input type="text" id="font-color-picker" value="ffffff">
                                </span>
                                
                                {{-- <span id="" style="background-color: #ff0000;"></span> --}}
                            </p>
                            
                            <p class="color-inputpicker">
                                <h3>FONT SIZE (PX)</h3>
                                <input type="range" id="font-slider" class="range-slider" min="1" max="50" value="25">
                                <input type="text" id="fontpx" class="input-text input-count" placeholder="35">
                            </p>
                            
                            <label class="checkbox-container">Font Outline
                              <input type="checkbox" id="text-outline" >
                              <span class="checkmark"></span>
                            </label>
                            {{-- <span id="" class="color-picker" style="background-color: #ff0000;"></span><br/> --}}
                            <div id="outline_fields" style="display: none">

                            <input type='text' id="outline-color" value="rgb(255, 0, 0)" />
                            <input type="range" id="outline-slider" class="range-slider" min="1" max="50" value="25">
                            
                            <p>&nbsp;</p>
                            </div>
                            
                            <label class="checkbox-container">Shadow
                              <input type="checkbox" id="text-shadow"  class="textshadow text-type" >
                              <span class="checkmark"></span>
                            </label>
                            
                            {{-- <span id="shadow-color" class="color-picker" style="background-color: #ff0000;"></span><br/> --}}
                            <div id="shadow_fields" style="display: none">
                                <input type='text' class="textshadow" id="shadow-color" value="rgb(255, 0, 0)" />
                                <div class="row">
                                    <div class="col-lg-4 pt-2">
                                        <p class="mb-0">SPREAD</p>
                                    </div>
                                    <div class="col-lg-8">
                                    <input type="range" id="spread-slider" class="textshadow range-slider" min="1" max="50" value="3"> 
                                    <input type="text" id="spread-input" class="input-text input-count" placeholder="35">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 pt-2">
                                        <p class="mb-0">DISTANCE - X</p>
                                    </div>
                                    <div class="col-lg-8">
                                    <input type="range" id="distance-x-slider" class="textshadow range-slider" min="1" max="50" value="25"> 
                                    <input type="text" id="distance-x-input" class="input-text input-count" placeholder="35">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 pt-2">
                                        <p class="mb-0">DISTANCE - Y</p>
                                    </div>
                                    <div class="col-lg-8">
                                    <input type="range" id="distance-y-slider" class="textshadow range-slider" min="1" max="50" value="25"> 
                                    <input type="text" id="istance-y-input" class="input-text input-count" placeholder="35">
                                    </div>
                                </div>
                            </div>
                            
                            
                        </article>
                        <article class="tab-pane container" id="tab-panel-2">
                            <h2>Edit Logo Colours</h2>
                            <hr/>
                            <p class="mb-1">Recommended Color</p>
                            <span id="" class="color-picker add-color" style="background-color: rgb(255, 255, 255);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(250, 125, 127);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(129, 5, 10);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(148, 6, 13);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(147, 7, 13);"></span>
                            
                            <p class="mt-4 mb-1">Logo Color</p>
                            <span id="" class="color-picker" style="background-color: rgb(252, 103, 106);"></span>
                            
                            <p class="mt-4 mb-1">Default Color</p>
                            <span id="" class="color-picker" style="background-color: rgb(0, 0, 0);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(84, 84, 85);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(115, 115, 115);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(165, 165, 165);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(217, 217, 216);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(255, 255, 255);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(253, 89, 92);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(252, 106, 195);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(202, 113 228);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(139, 91, 251);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(85, 118, 251);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(64, 184, 252);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(253, 145, 85);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(254, 189, 97);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(254, 221, 100);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(202, 227, 109);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(130, 214, 96);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(99, 224, 229);"></span>
                            
                            <p class="mt-4 mb-1">Gradient Color</p>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(252, 227, 138), rgb(243, 129, 129));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(248, 77, 158), rgb(255, 116, 117));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(23, 234, 217), rgb(96, 120, 234));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(98, 39, 116), rgb(197, 51, 100));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(113, 23, 234), rgb(234, 96, 96));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(180, 236, 81), rgb(66, 147, 33));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(250, 217, 97), rgb(247, 107, 28));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(245, 81, 95), rgb(159, 4, 27));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(48, 35, 174), rgb(200, 109, 215));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(66, 230, 149), rgb(59, 178, 184));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(91, 36, 122), rgb(27, 206, 223));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(101, 121, 155), rgb(94, 37, 99));"></span>
                        </article>
                        <article class="tab-pane container" id="tab-panel-3">
                            <h2>Edit Background</h2>
                            <hr/>
                            <p class="mb-1">New Color</p>
                            <span id="" class="color-picker" style="background-color: rgb(255, 255, 255);">+</span>
                            
                            <p class="mt-4 mb-1">Recommended Color</p>
                            <span id="" class="color-picker" style="background-color: rgb(250, 125, 127);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(129, 5, 10);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(148, 6, 13);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(147, 7, 13);"></span>
                            
                            <p class="mt-4 mb-1">Logo Color</p>
                            <span id="" class="color-picker" style="background-color: rgb(252, 103, 106);"></span>
                            
                            <p class="mt-4 mb-1">Default Color</p>
                            <span id="" class="color-picker" style="background-color: rgb(0, 0, 0);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(84, 84, 85);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(115, 115, 115);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(165, 165, 165);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(217, 217, 216);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(255, 255, 255);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(253, 89, 92);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(252, 106, 195);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(202, 113 228);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(139, 91, 251);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(85, 118, 251);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(64, 184, 252);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(253, 145, 85);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(254, 189, 97);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(254, 221, 100);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(202, 227, 109);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(130, 214, 96);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(99, 224, 229);"></span>
                            
                            <p class="mt-4 mb-1">Gradient Color</p>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(252, 227, 138), rgb(243, 129, 129));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(248, 77, 158), rgb(255, 116, 117));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(23, 234, 217), rgb(96, 120, 234));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(98, 39, 116), rgb(197, 51, 100));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(113, 23, 234), rgb(234, 96, 96));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(180, 236, 81), rgb(66, 147, 33));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(250, 217, 97), rgb(247, 107, 28));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(245, 81, 95), rgb(159, 4, 27));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(48, 35, 174), rgb(200, 109, 215));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(66, 230, 149), rgb(59, 178, 184));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(91, 36, 122), rgb(27, 206, 223));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(101, 121, 155), rgb(94, 37, 99));"></span>
                        </article>
                        <article class="tab-pane container" id="tab-panel-4">
                            <h2>Edit Layout</h2>
                            <hr/>
                            <div class="maker-toolbar">
                                <button class="maker-tool--box"><img class="img-responsive" src="{{asset('/site/img/ic-left.png')}}" alt="" /><br/>Left</button> 
                                <button class="maker-tool--box"><img class="img-responsive" src="{{asset('/site/img/ic-right.png')}}" alt="" /><br/>right</button> 
                                <button class="maker-tool--box"><img class="img-responsive" src="{{asset('/site/img/ic-top.png')}}" alt="" /><br/>top</button> 
                                <button class="maker-tool--box"><img class="img-responsive" src="{{asset('/site/img/ic-bottom.png')}}" alt="" /><br/>Bottom</button>
                                <button class="maker-tool--box"><img class="img-responsive" src="{{asset('/site/img/ic-reset.png')}}" alt="" /><br/>Reset</button>
                            </div>
                        </article>
                        <article class="tab-pane container" id="tab-panel-5">
                            <h2>Add Shapes</h2>
                            <hr/>
                            <button title="Add text" class="btn btn-secondary">Add Shape</button>
                            <p>&nbsp;</p>
                            <hr/>
                            <h2>Edit Shapes Colour</h2>
                            <p class="mb-1">Recommended Color</p>
                            <span id="" class="color-picker" style="background-color: rgb(250, 125, 127);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(129, 5, 10);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(148, 6, 13);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(147, 7, 13);"></span>
                            
                            <p class="mt-4 mb-1">Logo Color</p>
                            <span id="" class="color-picker" style="background-color: rgb(252, 103, 106);"></span>
                            
                            <p class="mt-4 mb-1">Default Color</p>
                            <span id="" class="color-picker" style="background-color: rgb(0, 0, 0);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(84, 84, 85);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(115, 115, 115);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(165, 165, 165);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(217, 217, 216);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(255, 255, 255);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(253, 89, 92);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(252, 106, 195);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(202, 113 228);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(139, 91, 251);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(85, 118, 251);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(64, 184, 252);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(253, 145, 85);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(254, 189, 97);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(254, 221, 100);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(202, 227, 109);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(130, 214, 96);"></span>
                            <span id="" class="color-picker" style="background-color: rgb(99, 224, 229);"></span>
                            
                            <p class="mt-4 mb-1">Gradient Color</p>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(252, 227, 138), rgb(243, 129, 129));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(248, 77, 158), rgb(255, 116, 117));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(23, 234, 217), rgb(96, 120, 234));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(98, 39, 116), rgb(197, 51, 100));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(113, 23, 234), rgb(234, 96, 96));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(180, 236, 81), rgb(66, 147, 33));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(250, 217, 97), rgb(247, 107, 28));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(245, 81, 95), rgb(159, 4, 27));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(48, 35, 174), rgb(200, 109, 215));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(66, 230, 149), rgb(59, 178, 184));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(91, 36, 122), rgb(27, 206, 223));"></span>
                            <span id="" class="color-picker" style="background: linear-gradient(rgb(101, 121, 155), rgb(94, 37, 99));"></span>
                        </article>
                    </div>
                </div>
            </div> 
            <div class="maker-sidebar__tab-nav">
            <div class="maker-sidebar__tab-button-container tabs-list">
                <div class="maker-sidebar__tab-button">
                    <div class="maker-sidebar__tab-button-caption"><img class="img-responsive" src="{{asset('/site/img/text-icon.svg')}}" alt="" /><br/>Text</div>
                </div>
                <div class="maker-sidebar__tab-button">
                    <div class="maker-sidebar__tab-button-caption"><img class="img-responsive" src="{{asset('/site/img/icon-logo.svg')}}" alt="" /><br/>Logo</div>
                </div>
                <div class="maker-sidebar__tab-button">
                    <div class="maker-sidebar__tab-button-caption"><img class="img-responsive" src="{{asset('/site/img/icon-bg.svg')}}" alt="" /><br/>Background</div>
                </div>
                <div class="maker-sidebar__tab-button">
                    <div class="maker-sidebar__tab-button-caption"><img class="img-responsive" src="{{asset('/site/img/icon-layout.svg')}}" alt="" /><br/>Layout</div>
                </div>
                <div class="maker-sidebar__tab-button">
                    <div class="maker-sidebar__tab-button-caption"><img class="img-responsive" src="{{asset('/site/img/icon-shapes.svg')}}" alt="" /><br/>Shapes</div>
                </div>
            </div>
               {{-- <ul class="nav nav-tabs left-tabs">
                    <li class="nav-item">
                        <a class="nav-link active text-center" href="#tab-panel-1" data-toggle="tab"><img class="img-responsive" src="{{asset('/site/{{asset('/site/img/icon-text.png')}}" alt="" /><br/>Text</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="#tab-panel-2" data-toggle="tab"><img class="img-responsive" src="{{asset('/site/{{asset('/site/img/icon-logo.png')}}" alt="" /><br/>Logo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="#tab-panel-3" data-toggle="tab"><img class="img-responsive" src="{{asset('/site/{{asset('/site/img/icon-bg.png')}}" alt="" /><br/>Background</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="#tab-panel-4" data-toggle="tab"><img class="img-responsive" src="{{asset('/site/{{asset('/site/img/icon-layout.png')}}" alt="" /><br/>Layout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="#tab-panel-5" data-toggle="tab"><img class="img-responsive" src="{{asset('/site/{{asset('/site/img/icon-shapes.png')}}" alt="" /><br/>Shapes</a>
                    </li>
                </ul>	 --}}
            </div>
        </div>
    </div>
    <div class="maker-lhs-container">
        <div class="canvas-container">
            <div class="canvas-container-header"><!----></div> 
            <div class="canvas-container-body"><!----> 
                <div id="canvas_frame" class="canvas_frame maker-canvas-frame mbm canvas-editor" style="width: 600px; height:600px;">
                    <canvas id="c"></canvas>
                    
                </div>
            </div> 
            <div class="canvas-container-footer"></div>
        </div>
        <div class="maker-action">
            <div class="maker-toolbar text-center">
                <button class="maker-tool maker-tool--reset"><img class="img-responsive" src="{{asset('/site/img/icon-reset.svg')}}" alt="" /> Reset</button>
                <button class="maker-tool maker-tool--undo"><img class="img-responsive" src="{{asset('/site/img/icon-undo.svg')}}" alt="" /> Undo</button>
                <button class="maker-tool maker-tool--redo"><img class="img-responsive" src="{{asset('/site/img/icon-redo.svg')}}" alt="" /> Redo</button>
                <button id="delete_btn" class="maker-tool maker-tool--delete"><img class="img-responsive" src="{{asset('/site/img/icon-delete.svg')}}" alt="" /> Delete</button>
                <button class="maker-tool maker-tool--layer"><img class="img-responsive" src="{{asset('/site/img/icon-layer.svg')}}" alt="" /> Layer</button>
                <button class="maker-tool maker-tool--opacity"><img class="img-responsive" src="{{asset('/site/img/icon-opacity.svg')}}" alt="" /> Opacity</button>
            </div>
        </div>
    </div>
</section>
@section('scripts')
<script>
    
$("#shadow-color").spectrum({
    color: "#f00"
});
$("#outline-color").spectrum({
    color: "#f00" 
});
$("#font-color-picker").spectrum({
    color: "black"
});

</script>
<script>

   
    // create a wrapper around native canvas element (with id="c")
var canvas = new fabric.Canvas('c',{backgroundColor : "white"});


    var cheight= $( ".canvas_frame" ).height();
    var cwidth= $( ".canvas_frame" ).width();
    canvas.setWidth(cheight);
    canvas.setHeight(cwidth);
    
    
var active;
$("#text_btn").on("click", function(e) {
text = new fabric.IText(
          $('#text_field').val(), { 
          left: 100, 
          top: 100,    
          objectCaching:false  });

      canvas.add(text);
      canvas.setActiveObject(text);
});

/** Load Font Families **/


$('#font-family').fontselect();
  $('.font-select').on('keyup', '.fs-search-input' , function() {
    var input, filter, ul, li, a, i, txtValue;
    filter = $(this).val().toUpperCase();
    ul = document.getElementById("fa-result-ul");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {

      txtValue = li[i].textContent || li[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
  });
  
  $(document).on('change', '#outline-slider , #text-outline',function(){ 
      let outlineColor=$("#outline-color").val();
      let outlineSlider=$('#outline-slider').val();
           

            if($('#text-outline').is(":checked")){ 
                let o = Color(outlineColor); 
                 active = canvas.getActiveObject(); 
                // console.log(active.get('type'));
                if(active.get('type')=='i-text'){
                   active.stroke=o.toString(); 
                   active.strokeWidth=outlineSlider;
                   canvas.renderAll();    
                   console.log(active); 
                }
                
               
            }
            else if($('#text-outline').is(":not(:checked)")){
                console.log("Checkbox is unchecked.");
                active = canvas.getActiveObject(); 
                if(active.get('type')=='i-text'){
                   active.stroke=null; 
                   active.strokeWidth=null;
                   canvas.renderAll();    
                   console.log(canvas); 
                }
                
            }
    

 });

  $('#font-slider').on('change' , function(e) {
    active = canvas.getActiveObject();
    console.log(active.get('type'));
    if(active.get('type')=='i-text'){
        
        let font_Size=$(this).val();
        active.set("fontSize",font_Size);
        $('#fontpx').val(font_Size);
        canvas.renderAll();
    }
  });

 $('#text-shadow').on('click',function(){
        
        $('#shadow_fields').slideToggle();
 });
 $('#text-outline').on('click',function(){
        
        $('#outline_fields').slideToggle();
 });
 $(document).on('change','.textshadow', function(){
            let shadowColor=$("#shadow-color").val();
            let shadowSpread=$('#spread-slider').val();
            let shadowDistanceX=$('#distance-x-slider').val();
            let shadowDistanceY=$('#distance-y-slider').val();

            $('#spread-input').val(shadowSpread);
            $('#distance-y-input').val(shadowDistanceX);
            $('#distance-y-input').val(shadowDistanceY);

          
         
            if($('#text-shadow').is(":checked")){
                let c = Color(shadowColor)
                console.log("Checkbox is checked.");
                console.log(c.toString());
                active = canvas.getActiveObject(); 
                console.log(active);
                
                if(active.get('type')=='i-text'){
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

  $('#font-family').on('change' , function() {
    active = canvas.getActiveObject();
    if(active.get('type')=='i-text')
    {
    active.fontFamily = $(this).val();
    canvas.renderAll();
    }

  });
  $('#font-color-picker').on('change' , function() {
      let fontColorPicker=$('#font-color-picker').spectrum("get");
      let fontColorInput=$('#font-color-input').val();
    //   if (fontColorInput.match(/^\#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/)) {
        active = canvas.getActiveObject();
       
    
    $('#font-color-input').val(fontColorPicker.toHexString());

    if(active.get('type')=='i-text'){
        // console.log(fontcolor);
        active.fill=fontColorPicker.toHexString();
        canvas.renderAll();
    }
    
  });


  
//   document.getElementById('font-family').onchange = function() {
//   if (this.value !== 'Times New Roman') {
//     loadAndUse(this.value);
//   } else {
//     canvas.getActiveObject().set("fontFamily", this.value);
//     canvas.requestRenderAll();
//   }
// };

  

// // create a rectangle object
// var rect = new fabric.Rect({
//   left: 100,
//   top: 100,
//   fill: 'red',
//   width: 20,
//   height: 20
// });

// // "add" rectangle onto canvas
// canvas.add(rect);




</script>
@endsection
@endsection
