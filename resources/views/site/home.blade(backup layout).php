@extends('layouts.site.app') 
@section('styles')
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
select, option {
  font: -moz-pull-down-menu;
}
/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}  
.sp-dd{
    display: none;
}
.font-wrapper {
    /* max-width: 380px; */
    width: 100%;


}
.font-wrapper img{
    width: 100%;
    object-fit: contain;
}
.k-slider-track{
    width:100% !important;

}
.k-flatcolorpicker .k-color-value {
    margin: 0 35px 0 0;
}
.k-selected-color-display {
    border-radius: 5px;
}
.k-flatcolorpicker :nth-child(1) { order: 3; }
.k-flatcolorpicker :nth-child(2) { order: 1; }
.k-flatcolorpicker :nth-child(3) { order: 2; }
.k-flatcolorpicker :nth-child(4) { order: 4; }

.k-flatcolorpicker .k-controls {

    padding-bottom: 5px;
}
.k-button.k-primary.apply{color:#000;padding:0.2rem 2.5rem;margin:0 5px;border:1px solid #8d8d8d;background:#fff}
.k-button.k-primary.apply:hover{background:#efefef;color:#000}
.k-button.cancel{color:#000;padding:0.2rem 2.5rem;margin:0 5px;border:1px solid #8d8d8d;background:#fff}
.k-button.cancel:hover{background:#efefef;color:#000}
span.active {
    border: 4px solid #010101;
}
#tab-panel-2 .popup-content {
    padding-left: 10px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    top: 8px;
}
span#select2-font_select-container {
    padding-top: 2px;
    line-height: 1.75;
}
span.select2-selection.select2-selection--single {
    -webkit-box-sizing: border-box;  
    box-sizing: border-box;
    width: 100%;
    border: 1px solid #d0d0d0;
    height: 2.6rem;
    padding: 8px 19px 8px 8px;
    border-radius: .1875rem;
    font-size: 1rem;
    -webkit-transition: border-color .25s ease-in-out,-webkit-box-shadow .5s;
    transition: border-color .25s ease-in-out,-webkit-box-shadow .5s;
    transition: box-shadow .5s,border-color .25s ease-in-out;
    transition: box-shadow .5s,border-color .25s ease-in-out,-webkit-box-shadow .5s;
}
.select2-container {
    margin: 0 10px 8px 0px;
}
span.select2-selection.select2-selection--single:focus{
    outline: unset;
}
/* .color-picker-wrapper{
    display: inline;
}
.color-inputpicker .sp-replacer.sp-light{
    POSITION: ABSOLUTE;
    Z-INDEX: 999;
    BACKGROUND-COLOR: TRANSPARENT;
    BORDER: 0;
    height: 35px;
    top: 0;
    right: 0;
}
.color-inputpicker .sp-preview{
    visibility: hidden;
}
.color-pickerPopup{
    position: relative;
}
.color-pickerPopup .sp-replacer.sp-light {
    position: absolute;
    Z-INDEX: 999;
    BACKGROUND-COLOR: TRANSPARENT;
    BORDER: 0;
    top: 0;
    height: 35px;
}
.color-pickerPopup  .sp-preview{
    visibility: hidden;
}

button.sp-choose{
    padding: 5px 28px 5px 28px;

}
a.sp-cancel {
    font:  normal 12px "Lucida Grande","Lucida Sans Unicode","Lucida Sans",Geneva,Verdana,sans-serif;
    text-decoration: none;
    background-color: #eee;
    background-image: -webkit-linear-gradient(top,#eee,#ccc); 
    background-image: -moz-linear-gradient(top,#eee,#ccc);
    background-image: -ms-linear-gradient(top,#eee,#ccc);
    background-image: -o-linear-gradient(top,#eee,#ccc);
    background-image: linear-gradient(to bottom,#eee,#ccc);
    border: 1px solid #ccc;
    border-bottom: 1px solid #bbb;
    border-radius: 3px;
    color: #333;
    font-size: 14px;
    line-height: 1;
    padding: 2px 28px 2px 28px;
    text-align: center;
    text-shadow: 0 1px 0 #eee;
    vertical-align: middle;
} */
.canvas_frame{
    width:75%;
    height:100%;
}
@media only screen and (max-width: 1024px) {
  .canvas_frame {
    /* width:500px;
    height:500px; */
  }
}
@media only screen and (max-width: 565px) {
  .canvas_frame {

    width:100%;
    height:400px;
  }
}
@media only screen and (max-width: 380px) {
  .canvas_frame {

    width:100%;
    height:300px;
  }
}
@media only screen and (max-width: 1330px) {
	 .canvas_frame {
   /* // width: 50%; */
/* height:100%; */
}
  }
  
</style>
@endsection
@section('content')
<section class="maker-container">
    <div class="maker-rhs-container">
        <div class="maker-sidebar">
            <div class="maker-sidebar__tab-body-container should-translate">
                <div class="maker-sidebar__tab-body" style="min-height: auto; overflow: hidden scroll;">
                    <div class="tab-content">
                        <article class="tab-pane container active " id="tab-panel-1">
                            <h2>Edit text here</h2>
                            <hr/>
                            <input type="text" id="text_field" class="input-text" value="Logo Text Here" placeholder="Ariga">
                            <button title="Add text" id="text_btn" class="btn btn-secondary">+ Add text</button>
                            <p>&nbsp;</p>
                            <hr/>
                            
                            <h2>Font / Style</h2>

                            
                                {{-- <input class="select-input" id="font-family" type="text" /> --}}
                            
                            <select id="font_select" class="select-input">
                                
                            </select>
                            <button title="Add text" id="compile" class="btn btn-secondary">See option ></button>
                            <br>
                            <div class="font-style-picker">
                                <div class="color-pickerPopup">
                                    <p class="color-inputpicker">
                                        <input id="font-color-input" type="text" class="input-text" placeholder="#000000">
                                     
                                        <span id="picker0" class="color-picker picker" style="background-color: #000000;"></span>
                                    </p>
									
									<div class="popup-overlay popupfake">
										<div class="popup-content">
                                            <div id="textfontcolor">
                                                <div class="demo-section k-content">
													<div class="box-col"> 
                                                        <div id="flatcolorpicker" data-role="flatcolorpicker"></div>      
													</div>
                                                    <div class="gradient-color">
                                                        <p class="mt-4 mb-1">Gradient Color</p>
                                                        <span class="color-picker text-gradient" data-color1="rgb(252, 227, 138)" data-color2="rgb(243, 129, 129)" style="background: linear-gradient(rgb(252, 227, 138), rgb(243, 129, 129));"></span>
                                                        <span class="color-picker text-gradient" data-color1="rgb(248, 77, 158)" data-color2="rgb(255, 116, 117)" style="background: linear-gradient(rgb(248, 77, 158), rgb(255, 116, 117));"></span>
                                                        <span class="color-picker text-gradient" data-color1="rgb(23, 234, 217)" data-color2="rgb(96, 120, 234)" style="background: linear-gradient(rgb(23, 234, 217), rgb(96, 120, 234));"></span>
                                                        <span class="color-picker text-gradient" data-color1="rgb(98, 39, 116)" data-color2="rgb(197, 51, 100)" style="background: linear-gradient(rgb(98, 39, 116), rgb(197, 51, 100));"></span>
                                                        <span class="color-picker text-gradient" data-color1="rgb(113, 23, 234)" data-color2="rgb(234, 96, 96)" style="background: linear-gradient(rgb(113, 23, 234), rgb(234, 96, 96));"></span>
                                                        <span class="color-picker text-gradient" data-color1="rgb(180, 236, 81)" data-color2="rgb(66, 147, 33)" style="background: linear-gradient(rgb(180, 236, 81), rgb(66, 147, 33));"></span>
                                                        <span class="color-picker text-gradient" data-color1="rgb(250, 217, 97)" data-color2="rgb(247, 107, 28)" style="background: linear-gradient(rgb(250, 217, 97), rgb(247, 107, 28));"></span>
                                                        <span class="color-picker text-gradient" data-color1="rgb(245, 81, 95)" data-color2="rgb(159, 4, 27)" style="background: linear-gradient(rgb(245, 81, 95), rgb(159, 4, 27));"></span>
                                                        <span class="color-picker text-gradient" data-color1="rgb(48, 35, 174)" data-color2="rgb(200, 109, 215)" style="background: linear-gradient(rgb(48, 35, 174), rgb(200, 109, 215));"></span>
                                                        <span class="color-picker text-gradient" data-color1="rgb(66, 230, 149)" data-color2="rgb(59, 178, 184)" style="background: linear-gradient(rgb(66, 230, 149), rgb(59, 178, 184));"></span>
                                                        <span class="color-picker text-gradient" data-color1="rgb(91, 36, 122)" data-color2="rgb(27, 206, 223)" style="background: linear-gradient(rgb(91, 36, 122), rgb(27, 206, 223));"></span>
                                                        <span class="color-picker text-gradient" data-color1="rgb(101, 121, 155)" data-color2="rgb(94, 37, 99)" style="background: linear-gradient(rgb(101, 121, 155), rgb(94, 37, 99));"></span>
                                                    </div>
                                                    <p class="text-center mt-3">
                                                        <button id="donebuttontext"class="btn btn-primary donebtn">DONE</button>
                                                        <button class="btn btn-primary donebtn cancel">CANCEL</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
                            </div>
                            
                            <p class="color-inputpicker">
                                <h3>FONT SIZE (PX)</h3>
                                <input type="range" id="font-slider" class="fontsize range-slider" min="1" max="200" value="60">
                                <input type="number" id="font-input" class="fontsize input-text input-count" min="1" max="200" value="60" placeholder="35">
                            </p>
                            <div class="checkbox-outer">
                                <div class="checkbox-container">
                                <label class="checkbox-label">Font Outline
                                <input type="checkbox" id="text-outline" >
                                
                                <span class="checkmark"></span></label>
                                </div>
                            </div>
                            
                            
                               
                            
                              <div id="outline_fields" style="display: none;">
                                <div class="row">
                                        <div class="color-pickerPopup">
                                            <div class="col-md-2 col-sm-2">  
                                                <input class="color-picker add-color"  value="rgb(255, 0, 0)" style="background-color: rgb(255, 255, 255);" type='text' id="outline-color" />

                                            </div> 

                                             
                                        </div>
                                    <div class="col-md-8 col-sm-8" style="top: 8px;">
                                         <input type="range" id="outline-slider" class="range-slider" min="1" max="30" value="2">

                                    </div>
                                
                                </div>
                                 
                            
                            <p>&nbsp;</p>
                            </div>
                            <div class="checkbox-outer">
                                <div class="checkbox-container"> 
                                    <label  class="checkbox-label">Drop Shadow
                                        <input type="checkbox" id="text-shadow"  class="textshadow text-type" >
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            
                            {{-- <span id="shadow-color" class="color-picker" style="background-color: #ff0000;"></span><br/> --}}
                            <div id="shadow_fields" style="display: none">
                                <div class="row">
                                <div class="color-pickerPopup">
                                    <div class="col-md-2 col-sm-2">  
                                    <input type='text' class="color-picker  textshadow"   id="shadow-color" style="background-color:rgb(4, 0, 0);" />

                                </div>    
                            </div>    
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 pt-2">
                                        <p class="mb-0">SPREAD</p>
                                    </div>
                                    <div class="col-lg-8">
                                    <input type="range" id="spread-slider" class="spread textshadow range-slider" min="1" max="50" value="3"> 
                                    <input type="number" id="spread-input" class="spread textshadow input-text input-count" value="3" placeholder="35">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 pt-2">
                                        <p class="mb-0">DISTANCE - X</p>
                                    </div>
                                    <div class="col-lg-8">
                                    <input type="range" id="distance-x-slider" class="distance-x textshadow range-slider" min="1" max="400" value="1"> 
                                    <input type="number" id="distance-x-input" class="distance-x textshadow input-text input-count" value="1" placeholder="35">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 pt-2">
                                        <p class="mb-0">DISTANCE - Y</p>
                                    </div>
                                    <div class="col-lg-8">
                                    <input type="range" id="distance-y-slider" class="distance-y textshadow range-slider" min="1" max="400" value="1"> 
                                    <input type="number" id="distance-y-input" class="distance-y textshadow input-text input-count" value="1" placeholder="35">
                                    </div>
                                </div>
                            </div>
                            
                            
                        </article>
                        <article class=" tab-pane container active " id="tab-panel-2">
                            <h2>Edit Logo Colours</h2>
                            <hr/>
                            <div class="logo-colors">
                                <div class="color-pickerPopup">
                                    <div id="logo-colors-spans" >
                                        <div class="popup-overlay popupfake" style="">
                                            <div class="popup-content">
                                                <div id="logo-color"> 
                                                    <div class="demo-section k-content">
                                                        <div class="box-col">
                                                            <div id="logocolorpicker" data-role="flatcolorpicker"></div>      
                                                        </div>
                                                        <div class="gradient-color">
                                                            <p class="mt-4 mb-1">Gradient Color</p>
                                                            <span class="color-picker logo-gradient" data-color1="rgb(252, 227, 138)" data-color2="rgb(243, 129, 129)" style="background: linear-gradient(rgb(252, 227, 138), rgb(243, 129, 129));"></span>
                                                            <span class="color-picker logo-gradient" data-color1="rgb(248, 77, 158)" data-color2="rgb(255, 116, 117)" style="background: linear-gradient(rgb(248, 77, 158), rgb(255, 116, 117));"></span>
                                                            <span class="color-picker logo-gradient" data-color1="rgb(23, 234, 217)" data-color2="rgb(96, 120, 234)" style="background: linear-gradient(rgb(23, 234, 217), rgb(96, 120, 234));"></span>
                                                            <span class="color-picker logo-gradient" data-color1="rgb(98, 39, 116)" data-color2="rgb(197, 51, 100)" style="background: linear-gradient(rgb(98, 39, 116), rgb(197, 51, 100));"></span>
                                                            <span class="color-picker logo-gradient" data-color1="rgb(113, 23, 234)" data-color2="rgb(234, 96, 96)" style="background: linear-gradient(rgb(113, 23, 234), rgb(234, 96, 96));"></span>
                                                            <span class="color-picker logo-gradient" data-color1="rgb(180, 236, 81)" data-color2="rgb(66, 147, 33)" style="background: linear-gradient(rgb(180, 236, 81), rgb(66, 147, 33));"></span>
                                                            <span class="color-picker logo-gradient" data-color1="rgb(250, 217, 97)" data-color2="rgb(247, 107, 28)" style="background: linear-gradient(rgb(250, 217, 97), rgb(247, 107, 28));"></span>
                                                            <span class="color-picker logo-gradient" data-color1="rgb(245, 81, 95)" data-color2="rgb(159, 4, 27)" style="background: linear-gradient(rgb(245, 81, 95), rgb(159, 4, 27));"></span>
                                                            <span class="color-picker logo-gradient" data-color1="rgb(48, 35, 174)" data-color2="rgb(200, 109, 215)" style="background: linear-gradient(rgb(48, 35, 174), rgb(200, 109, 215));"></span>
                                                            <span class="color-picker logo-gradient" data-color1="rgb(66, 230, 149)" data-color2="rgb(59, 178, 184)" style="background: linear-gradient(rgb(66, 230, 149), rgb(59, 178, 184));"></span>
                                                            <span class="color-picker logo-gradient" data-color1="rgb(91, 36, 122)" data-color2="rgb(27, 206, 223)" style="background: linear-gradient(rgb(91, 36, 122), rgb(27, 206, 223));"></span>
                                                            <span class="color-picker logo-gradient" data-color1="rgb(101, 121, 155)" data-color2="rgb(94, 37, 99)" style="background: linear-gradient(rgb(101, 121, 155), rgb(94, 37, 99));"></span>
                                                        </div>
                                                        <p class="text-center mt-3">
                                                            <button id="donebuttonlogo"class="btn btn-primary donebtn">DONE</button>
                                                            <button class="btn btn-primary donebtn cancel">CANCEL</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="tab-pane container" id="tab-panel-3">
                            <h2>Edit Background</h2>
                            <hr/>
                            <p class="mb-1">Background Color</p>
                            <div class="font-style-picker">
                                <div class="color-pickerPopup">
                                    
                                      <span id="picker5" class="color-picker picker" style="background-color: #ffffff;"></span>
                                    
                                   <div class="popup-overlay ">
                                      <div class="popup-content">
                                         <div id="canvas_background_color">
                                            <div class="demo-section k-content">
                                               <div class="box-col">
                                                  <div id="canvas_background_color_picker" data-role="flatcolorpicker"></div>
                                               </div>
                                               <div class="gradient-color">
                                                  <p class="mt-4 mb-1">Gradient Color</p>
                                                  <span class="color-picker canvas-gradient" data-color1="rgb(252, 227, 138)" data-color2="rgb(243, 129, 129)" style="background: linear-gradient(rgb(252, 227, 138), rgb(243, 129, 129));"></span>
                                                  <span class="color-picker canvas-gradient" data-color1="rgb(248, 77, 158)" data-color2="rgb(255, 116, 117)" style="background: linear-gradient(rgb(248, 77, 158), rgb(255, 116, 117));"></span>
                                                  <span class="color-picker canvas-gradient" data-color1="rgb(23, 234, 217)" data-color2="rgb(96, 120, 234)" style="background: linear-gradient(rgb(23, 234, 217), rgb(96, 120, 234));"></span>
                                                  <span class="color-picker canvas-gradient" data-color1="rgb(98, 39, 116)" data-color2="rgb(197, 51, 100)" style="background: linear-gradient(rgb(98, 39, 116), rgb(197, 51, 100));"></span>
                                                  <span class="color-picker canvas-gradient" data-color1="rgb(113, 23, 234)" data-color2="rgb(234, 96, 96)" style="background: linear-gradient(rgb(113, 23, 234), rgb(234, 96, 96));"></span>
                                                  <span class="color-picker canvas-gradient" data-color1="rgb(180, 236, 81)" data-color2="rgb(66, 147, 33)" style="background: linear-gradient(rgb(180, 236, 81), rgb(66, 147, 33));"></span>
                                                  <span class="color-picker canvas-gradient" data-color1="rgb(250, 217, 97)" data-color2="rgb(247, 107, 28)" style="background: linear-gradient(rgb(250, 217, 97), rgb(247, 107, 28));"></span>
                                                  <span class="color-picker canvas-gradient" data-color1="rgb(245, 81, 95)" data-color2="rgb(159, 4, 27)" style="background: linear-gradient(rgb(245, 81, 95), rgb(159, 4, 27));"></span>
                                                  <span class="color-picker canvas-gradient" data-color1="rgb(48, 35, 174)" data-color2="rgb(200, 109, 215)" style="background: linear-gradient(rgb(48, 35, 174), rgb(200, 109, 215));"></span>
                                                  <span class="color-picker canvas-gradient" data-color1="rgb(66, 230, 149)" data-color2="rgb(59, 178, 184)" style="background: linear-gradient(rgb(66, 230, 149), rgb(59, 178, 184));"></span>
                                                  <span class="color-picker canvas-gradient" data-color1="rgb(91, 36, 122)" data-color2="rgb(27, 206, 223)" style="background: linear-gradient(rgb(91, 36, 122), rgb(27, 206, 223));"></span>
                                                  <span class="color-picker canvas-gradient" data-color1="rgb(101, 121, 155)" data-color2="rgb(94, 37, 99)" style="background: linear-gradient(rgb(101, 121, 155), rgb(94, 37, 99));"></span>
                                               </div>
                                               <p class="text-center mt-3">
                                                  <button id="backgroundbtn"class="btn btn-primary donebtn">DONE</button>
                                                  <button class="btn btn-primary donebtn cancel">CANCEL</button>
                                               </p>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                        </article>
                        <article class="tab-pane container" id="tab-panel-4">
                            <h2>Edit Layout</h2>
                            <hr/>
                            <div class="maker-toolbar">
                                <button onclick="layout('left')" class="maker-tool--box"><img class="img-responsive" src="{{asset('/site/img/ic-left.png')}}" alt="" /><br/>Left</button> 
                                <button onclick="layout('right')" class="maker-tool--box"><img class="img-responsive" src="{{asset('/site/img/ic-right.png')}}" alt="" /><br/>right</button> 
                                <button onclick="layout('top')" class="maker-tool--box"><img class="img-responsive" src="{{asset('/site/img/ic-top.png')}}" alt="" /><br/>top</button> 
                                <button onclick="layout('bottom')" class="maker-tool--box"><img class="img-responsive" src="{{asset('/site/img/ic-bottom.png')}}" alt="" /><br/>Bottom</button>
                                <button onclick="layout('reset')" class="maker-tool--box"><img class="img-responsive" src="{{asset('/site/img/ic-reset.png')}}" alt="" /><br/>Reset</button>
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
                    <div class="maker-sidebar__tab-button" data-customType="Heading" id="text-tab-button">
                        <div class="maker-sidebar__tab-button-caption"><img class="img-responsive" src="{{asset('/site/img/text-icon.svg')}}" alt="" /><br/>Text</div>
                    </div>
                    <div class="maker-sidebar__tab-button" data-customType="logo" id="logo-tab-button">
                        <div class="maker-sidebar__tab-button-caption"><img class="img-responsive" src="{{asset('/site/img/icon-logo.svg')}}" alt="" /><br/>Logo</div>
                    </div>
                    <div class="maker-sidebar__tab-button" data-customType="" id="bg-tab-button">
                        <div class="maker-sidebar__tab-button-caption"><img class="img-responsive" src="{{asset('/site/img/icon-bg.svg')}}" alt="" /><br/>Background</div>
                    </div>
                    <div class="maker-sidebar__tab-button" data-customType="" id="layout-tab-button">
                        <div class="maker-sidebar__tab-button-caption"><img class="img-responsive" src="{{asset('/site/img/icon-layout.svg')}}" alt="" /><br/>Layout</div>
                    </div>
                    <div class="maker-sidebar__tab-button" data-customType="" id="shape-tab-button">
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
                <div id="canvas_frame" class="canvas_frame maker-canvas-frame mbm canvas-editor " >
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
<script src="{{asset('/site/js/googlefonts.json')}}" ></script> 
{{-- <script type="text/javascript" src="{{asset('/site/js/script.js')}}"></script>  --}}
<script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script> 

<script> 
    var gfonts = JSON.parse(gfl);
    //   console.log(gfonts.length);
    WebFont.load({
                google: { 
                       families: gfonts
                 } 
     }); 
</script> 

<script>
    
var active;
var svgadded;
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
    // create a wrapper around native canvas element (with id="c")
var canvas = new fabric.Canvas('c',{backgroundColor : "white"});
var allText=[];
canvas.setWidth($("#canvas_frame").width());
canvas.setHeight($("#canvas_frame").height());

 var defaultLeft="";
 var defaultTop="";
text = new fabric.Text(
            'Logo Text Here', { 
            fontFamily: 'Arial',
            fontSize: 60,
            textAlign: 'center', 
            centeredScaling: false,
            lockUniScaling: true,
            objectCaching:false  });

    //     canvas.add(text);
        text.customType='Heading';
    //   canvas.centerObject(text);
    text.setControlsVisibility(HideControls);


        canvas.setActiveObject(text);
        // text._clearCache();

        // console.log(text);
        canvas.add(text);
      canvas.centerObject(text);
      canvas.renderAll();
        
      defaultLeft =text.left;
      defaultTop =text.top;
     
    var svgUrl="{{asset('/site/img/castle.svg')}}"; 
    fabric.loadSVGFromURL(svgUrl, function(objects, options) {
    var obj = fabric.util.groupSVGElements(objects, options); 
    obj.scaleToHeight(100);
    obj.set({
        
        left: (text.left+(text.width/2)-obj.width) ,
        top: text.top-100,
     
    
    });
     
    obj.customType='logo';
    var svgColor="";
    // console.log(obj._objects);
    if (obj.isSameColor && obj.isSameColor() || !obj._objects) {
            // obj.fill='#008000';
            // console.log(obj.fill);
            svgColor=`<span id="svg-picker-0" data-customid="0" class="color-picker svg-path-picker" style="background-color: ${obj.fill};"></span>`;
            $('#logo-colors-spans').append(svgColor);
             
                obj.customId=0;
                // debugger;

                 
        } else if (obj._objects) {
            for (var i = 0; i < obj._objects.length; i++) {
                
                if (typeof obj._objects[i].fill === 'string'){
                    svgColor=`<span id="svg-picker-${i+1}" data-customid="${i+1}" class="color-picker svg-path-picker" style="background-color: ${obj._objects[i].fill};"></span>`;
                $('#logo-colors-spans').append(svgColor);
                obj._objects[i].customId=i+1;
                console.log("bbbb");
                console.log(obj._objects[i].fill);
                   
                }else{
                svgColor=`<span id="svg-picker-${i+1}" data-customid="${i+1}" class="color-picker svg-path-picker" style="background-color: ${obj._objects[i].fill};"></span>`;
                $('#logo-colors-spans').append(svgColor);
                obj._objects[i].customId=i+1;
                console.log("bbbb");
                console.log(obj._objects[i].fill);


                }

                

            }
        }
     
    canvas.add(obj); 
    canvas.renderAll();
    svgadded=obj;
    console.log(canvas);
 
    
 
});
canvas.on('object:scaling', function(event) {
    if(event.target){
        // console.log(event.target.height);
        if(event.target.type=='text'){ 
            // $("#font-input, #font-slider ").val((event.target.fontSize * event.target.scaleX).toFixed(0));
        } 
    }
});
canvas.on('object:modified', function(event) {
     
     
    if (event.target) {
        if(event.target.type=='text'){
            // console.log('beforescalex='+event.target.fontSize);
        event.target.fontSize *= event.target.scaleX;
        // console.log('afterscalex='+event.target.fontSize);
        // console.log('final='+event.target.fontSize.toFixed(0));
            let finalfontsize=event.target.fontSize.toFixed(0);
            if(finalfontsize>=200){
                finalfontsize=200;
            }
        event.target.fontSize = finalfontsize;
        event.target.scaleX = 1;
        event.target.scaleY = 1;
        event.target._clearCache();
        // console.log('tofixed='+event.target.fontSize.toFixed(0));
        // console.log('scaleX='+event.target.scaleX);
         

        if(finalfontsize==199){
            $("#font-input, #font-slider").val(200);

        }else{
                $("#font-input, #font-slider").val(finalfontsize);

        }
        }
    }
});
canvas.on("selection:updated", function (e) {
    // console.log(e.selected[0].width);
    $('.tab-content .tab-pane').removeClass('active');
    $('.tabs-list div.maker-sidebar__tab-button--active').removeClass('maker-sidebar__tab-button--active');
 
    if(e.selected[0].type=='text'){
        selectedText(e); 
        $('#tab-panel-1').addClass('active');
        $('#text-tab-button').addClass('maker-sidebar__tab-button--active');
    }else  if(e.selected[0].get('customType')=='logo'){
        
        $('#tab-panel-2').addClass('active');
        $('#logo-tab-button').addClass('maker-sidebar__tab-button--active');
        
    }
});
canvas.on("selection:created", function (e) {
    console.log("created");
    $('.tab-content .tab-pane').removeClass('active');
    $('.tabs-list div.maker-sidebar__tab-button--active').removeClass('maker-sidebar__tab-button--active');

    if(e.selected[0].type=='text'){
        selectedText(e);
        $('#tab-panel-1').addClass('active');
        $('#text-tab-button').addClass('maker-sidebar__tab-button--active');
    }else  if(e.selected[0].get('customType')=='logo'){
        $('#tab-panel-2').addClass('active');
        $('#logo-tab-button').addClass('maker-sidebar__tab-button--active');
    }
});
canvas.on("selection:cleared", function (e) {
     
    $('.tab-content .tab-pane').removeClass('active');
    $('.tabs-list div.maker-sidebar__tab-button--active').removeClass('maker-sidebar__tab-button--active');
    $('#tab-panel-3').addClass('active');
    $('#bg-tab-button').addClass('maker-sidebar__tab-button--active');
     
});

$(document).on('change keyup','#text_field', function(){
    // console.log(canvas.object);
    active = canvas.getActiveObject();  
    if(active.get('type')=='text'){
        
    active.text=$(this).val(); 
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
     
    fontoption=`<option class="fontoptions ${gfonts[k]}" id="${temp_id}" style="font-family: '${gfonts[k]}';" value="${gfonts[k]}">${gfonts[k]}</option>`;
    $('#font_select').append(fontoption);

}
$('#font_select').select2({
    minimumResultsForSearch: Infinity
});
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
    $('#select2-font_select-container').css('fontFamily',$(this).val());
  });


  $(document).on('change', '#font-color-picker',function(){
       
      let fontColorPicker=$('#font-color-picker').val(); 
        active = canvas.getActiveObject();
    $('#picker0').css("background-color",fontColorPicker.toHexString());  
    $('#font-color-input').val(fontColorPicker.toHexString());

    if(active.get('type')=='text'){  
        active.fill=fontColorPicker.toHexString();
        canvas.renderAll();
    }
    
  });
  
  $(document).on('change', '#font-color-input',function(){
      let fontColorInput=$(this).val();
     
      if (fontColorInput.match(/^\#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/)) {
        let flatColorPicker1 = $("#flatcolorpicker").data("kendoFlatColorPicker");
     
        flatColorPicker1.value("rgb(0,0,0)");
        
        // $('#font-color-picker').val(fontColorInput);
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
   /** Delete Active Object **/
  $(document).on('click', '#delete_btn' ,function() {
    if (canvas.getActiveObject()) {
      canvas.remove(canvas.getActiveObject());
    }
  });
  $(document).keydown(function(event){
    if (event.which == 46) {
      if (canvas.getActiveObject()) {
        canvas.remove(canvas.getActiveObject());
      }
    }
  });
  /** Delete Active Object **/
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
    
        // console.log(e.selected[0]);
        // console.log(e.selected[0].strokeWidth);
        // console.log(e.selected[0].shadow);
        let selectedText= e.selected[0].text;
        let selectedFontsize= e.selected[0].fontSize;
        let selectedFontFamily= e.selected[0].fontFamily;
        // console.log(selectedFontFamily);
        let opt_id=slug2(selectedFontFamily);
        $('#'+opt_id).prop('selected', true);
        let selectedTextColor= e.selected[0].fill;
        let selectedTextstrokewidth= e.selected[0].strokeWidth;
        let selectedTextstrokColor= e.selected[0].stroke;
        let selectedTextshadow= e.selected[0].shadow;
        if(selectedFontsize==199){
            $("#font-input, #font-slider").val(200);

            }else{
            $("#font-input, #font-slider").val(selectedFontsize);

            }
        $('#text_field').val(selectedText);
        $('#picker0').css('background-color',selectedTextColor);
        $('#font-color-input').val(selectedTextColor);

        if(selectedTextstrokColor==null){
            $('#text-outline').prop("checked", false);
            $('#outline_fields').hide();
            $('#picker1').css("background-color",'rgb(1,0,0)');
            $('#outline-color').kendoColorPicker("value", 'rgb(1,0,0)');
            $('#outline-slider').val(2);

        }else{
            $('#text-outline').prop("checked", true);
            $('#outline_fields').show();
            $('#picker1').css("background-color",selectedTextstrokColor);
            $('#outline-color').kendoColorPicker("value", selectedTextstrokColor);
            $('#outline-slider').val(selectedTextstrokewidth);

        }
        if(selectedTextshadow==null){
            // console.log("uncheck");
            $('#text-shadow').prop("checked", false);
            $('#shadow_fields').hide(); 
            $('#spread-slider').val(3);
            $('#spread-input').val(3);
            $('#distance-x-slider').val(1);
            $('#distance-x-input').val(1);
            $('#distance-y-slider').val(1);
            $('#distance-y-input').val(1);
            $('#shadow-color').kendoColorPicker("value",  'rgb(4,0,0)');
        }else{
            $('#text-shadow').prop("checked", true);
            $('#shadow_fields').show(); console.log(e.selected[0].shadow.color); 
            let selectedshadowcolor= e.selected[0].shadow.color;
            let selectedshadowblur= e.selected[0].shadow.blur;
            let selectedshadowffsetX= e.selected[0].shadow.offsetX;
            let selectedshadowffsetY= e.selected[0].shadow.offsetY;
            // console.log('teext shod y'+selectedshadowffsetY);
            $('#spread-slider').val(selectedshadowblur);
            $('#spread-input').val(selectedshadowblur);
            $('#distance-x-slider').val(selectedshadowffsetX);
            $('#distance-x-input').val(selectedshadowffsetX);
            $('#distance-y-slider').val(selectedshadowffsetY);
            $('#distance-y-input').val(selectedshadowffsetY);
            $('#shadow-color').kendoColorPicker("value", selectedshadowcolor);
            $('#picker2').css("background-color",selectedshadowcolor);


        }
        
    
}
function rgba2hex(orig) {
    var a, isPercent,
    rgb = orig.replace(/\s/g, '').match(/^rgba?\((\d+),(\d+),(\d+),?([^,\s)]+)?/i),
    alpha = (rgb && rgb[4] || "").trim(),
    hex = rgb ?
    (rgb[1] | 1 << 8).toString(16).slice(1) +
    (rgb[2] | 1 << 8).toString(16).slice(1) +
    (rgb[3] | 1 << 8).toString(16).slice(1) : orig;

    if (alpha !== "") {
        a = alpha;
    } else {
        a = 01;
    }
    // multiply before convert to HEX
    a = ((a * 255) | 1 << 8).toString(16).slice(1)
    hex = hex + a;
    return (hex && hex.length === 8) ? "#" +hex : hex;

}
active1= canvas.getActiveObject();
// console.log(active1);
// var sel = canvas.getObjects() ;
        let oldwidth=canvas._offset.left;
        // let oldheight=$('#canvas_frame').height();
        var sizeWidth = [];
        var sizeHeight = [];
        var index=0;
        if($(window).width() <768 ){
      //     $('.canvas-container-body').height($('#canvas_frame').height()+40);
         }
         if($(window).width() <468 ){
     
             
         }
              
if($(window).width() < 550)
{
    handle_resize();
}

$(window).resize(function() {
    
 if (canvas.getWidth() != $("#canvas_frame").width() && $(window).width() <= 1380 ) {
//    console.log('frame width');
//    console.log($("#canvas_frame").width());
//     console.log('canvas width');
//    console.log(canvas.width);
            var scaleMultiplier = $("#canvas_frame").width() / canvas.width;
           
            var objects = canvas.getObjects();
            for (var i in objects) {
                // console.log('object scale x');
                //  console.log(objects[i].scaleX );
                objects[i].scaleX = objects[i].scaleX * scaleMultiplier;
                objects[i].scaleY = objects[i].scaleY * scaleMultiplier;
                objects[i].left = objects[i].left * scaleMultiplier;
                objects[i].top = objects[i].top * scaleMultiplier;
                objects[i].setCoords();
            }
//   console.log(scaleMultiplier);
            canvas.setWidth(canvas.getWidth() * scaleMultiplier);
            canvas.setHeight(canvas.getHeight() * scaleMultiplier);
            canvas.renderAll();
            canvas.calcOffset();
        
 }

            index++;
});
function rescale_canvas_if_needed(){
    var optimal_dimensions = [500,500];
    var scaleFactorX=window.innerWidth/optimal_dimensions[0];
    var scaleFactorY=window.innerHeight/optimal_dimensions[1];
    if(scaleFactorX <  scaleFactorY && scaleFactorX < 1) {
        canvas.setWidth(optimal_dimensions[0] *scaleFactorX);
        canvas.setHeight(optimal_dimensions[1] *scaleFactorX);
      //  canvas.setZoom(scaleFactorX);
         canvas.zoomToPoint(new fabric.Point(canvas.width / 2, canvas.height / 2), canvas.getZoom() * scaleFactorX);
    } else if(scaleFactorX >  scaleFactorY && scaleFactorY < 1){
        canvas.setWidth(optimal_dimensions[0] *scaleFactorY);
        canvas.setHeight(optimal_dimensions[1] *scaleFactorY);
        //canvas.setZoom(scaleFactorY);
        canvas.zoomToPoint(new fabric.Point(canvas.width / 2, canvas.height / 2), canvas.getZoom() * scaleFactorY);
    }else {
        canvas.setWidth(optimal_dimensions[0] );
        canvas.setHeight(optimal_dimensions[1] );
        //canvas.setZoom(1);
           canvas.zoomToPoint(new fabric.Point(canvas.width / 2, canvas.height / 2), canvas.getZoom() * 1);
    }

    canvas.calcOffset();
    canvas.renderAll();
}

 
function handle_resize(){
    $(".canvas-container").hide();
    rescale_canvas_if_needed();
    $(".canvas-container").show();               
     
}
var resizeId = null;
/*$(function() {
    $(window).resize(function() {
        if(resizeId != null)
        clearTimeout(resizeId);
        resizeId = setTimeout(handle_resize, 500);
     });
    console.log( "ready!" );

    resizeId = setTimeout(handle_resize, 500);
}); */
var layoutType;
var resetCanvas="";
var txtTop=canvas.height/4;
var sel1;
var state=0;
function layout(type){

    
       
 layoutType=type;
 if(state==0){
    myjson = JSON.stringify(canvas);
    state++;
 }
         
if(layoutType=="left"){
    // canvas.clear().renderAll();
    // canvas.loadFromJSON(myjson);
    // canvas.renderAll();
    
   
    svgadded.scaleToHeight(txtTop);
    svgadded.set('left',(svgadded.width*svgadded.scaleX));
    svgadded.set('top',canvas.height/2);
    svgadded.set('originX','right');
    svgadded.set('originY','center');
    text.set('fontSize',txtTop);
    
    
    
    svgadded.setCoords();
    text.setCoords();

    canvas.renderAll(); 
    // active = canvas.getActiveObject();  
    let totaltxt=canvas._objects.length-1;
    
    var headTop=svgadded.top;
    
    let sizeTxt=(txtTop/totaltxt);
        
    
    $.each( canvas._objects, function( key, value ) {
         
        
       if(canvas._objects[key].get('type')=='text'){
        allText.push(canvas._objects[key]);
        if(canvas._objects[key].customType == 'Heading'){

            canvas._objects[key].set('fontSize',sizeTxt.toFixed(0));
            // canvas._objects[key].left=svgadded.left+(svgadded.width*svgadded.scaleX);
            canvas._objects[key].set('left',svgadded.left);
            

            canvas._objects[key].set('top',headTop);
            canvas._objects[key].set('originX','left');
            canvas._objects[key].set('originY','center');
            headTop = canvas._objects[key].top;
            canvas._objects[key].setCoords();
            canvas.renderAll();
             
             
                
        }else{
            // canvas._objects[key].set('fontSize',(sizeTxt/2).toFixed(0));
            // // canvas._objects[key].left=svgadded.left+(svgadded.width*svgadded.scaleX);
            // canvas._objects[key].set('left',svgadded.left);

            // if(canvas._objects[key-1].get('type')=='text'){
            //    canvas._objects[key].set('top',headTop+canvas._objects[key-1].height);


            // }else{
            //    canvas._objects[key].set('top',headTop+canvas._objects[key-2].height);


            // }
            // // canvas._objects[key].set('originX','left');
            // // canvas._objects[key].set('originY','center');
            // headTop = canvas._objects[key].top;
            // canvas._objects[key].setCoords();
            // canvas.renderAll();
             
             


        }
            

       }
    //    console.log(canvas);


    });
         
            //    if(state==1){
            //         canvas.clear().renderAll();
            //         canvas.loadFromJSON(myjson);
            //         canvas.renderAll();
            //     }
        // canvas.discardActiveObject();

        //  sel1 = new fabric.ActiveSelection(allText, {
        //   canvas: canvas,
        //   top: svgadded.top,
        //   left: svgadded.left,
        //   originX:'left',
        //   originY:'center',
        //   dirty:true,

        // });
        
        
        // sel1.setCoords();
        
        $.each( allText, function( key, value ) {
        
            console.log(allText[key]);

        });
        canvas.setActiveObject(sel1);

        // canvas.discardActiveObject();
        canvas.requestRenderAll();
        canvas.renderAll();
        console.log("L SVG TOP"+svgadded.top);
        console.log("L group TOP"+sel1.top);
  


     
}else if(layoutType=="right"){
     
    // console.log(canvas);
    svgadded.scaleToHeight(txtTop);
    svgadded.set('left',canvas.width-(svgadded.width*svgadded.scaleX+30));
    svgadded.set('top',(canvas.height/2));
    svgadded.set('originX','left');
    svgadded.set('originY','center');
    text.set('fontSize',txtTop);
    
     
    
    svgadded.setCoords();
    text.setCoords();

    canvas.renderAll(); 
    // active = canvas.getActiveObject();  
    let totaltxt=canvas._objects.length-1;
    
    var headTop=svgadded.top;
    
    let sizeTxt=(txtTop/totaltxt);
        

    $.each( canvas._objects, function( key, value ) {
       if(canvas._objects[key].get('type')=='text'){
        allText.push(canvas._objects[key]);
        if (canvas._objects[key].customType == 'Heading'){

            canvas._objects[key].set('fontSize',sizeTxt.toFixed(0));
            canvas._objects[key].set('left',svgadded.left);
            canvas._objects[key].set('top',headTop);
            canvas._objects[key].set('originX','right');
            canvas._objects[key].set('originY','center');
            // canvas._objects[key].originY='center';
            headTop = canvas._objects[key].top;
            canvas._objects[key].setCoords();
            canvas.renderAll(); 
            console.log("head left"+canvas._objects[key].left);
                
        }else{
            canvas._objects[key].set('fontSize',(sizeTxt/2).toFixed(0));
            canvas._objects[key].set('left',svgadded.left);

            if(canvas._objects[key-1].get('type')=='text'){
            canvas._objects[key].set('top',headTop+canvas._objects[key-1].height);


            }else{
            canvas._objects[key].set('top',headTop+canvas._objects[key-2].height);


            }
            canvas._objects[key].set('originX','right');
            canvas._objects[key].set('originY','center');
            headTop = canvas._objects[key].top;
            canvas._objects[key].setCoords();
            // canvas.renderAll(); 
             


        }
            

        }



    });
     
        canvas.discardActiveObject();
        sel1 = new fabric.ActiveSelection(allText, {
          canvas: canvas,
          top: svgadded.top,
          left: svgadded.left,
          originX:'right' ,
          originY:'center' ,
          dirty:true,
        });
        canvas.setActiveObject(sel1);
        
        // sel1.setCoords();
       
        canvas.requestRenderAll();

        // canvas.discardActiveObject();
        canvas.renderAll();

        console.log("r SVG TOP"+svgadded.top);
        console.log("r group TOP"+sel1.top);

    

     

     
}else if(layoutType=="top"){
    svgadded.scaleToHeight(txtTop);
    svgadded.left=canvas.width/2 ;
    svgadded.top=canvas.height/2;
    svgadded.originX='center';
    svgadded.originY='bottom';
    text.fontSize=txtTop;
    
    console.log(svgadded.left+svgadded.width);
    
    svgadded.setCoords();
    text.setCoords();

    canvas.renderAll(); 
    active = canvas.getActiveObject();  
    let totaltxt=canvas._objects.length-1;
    
    var headTop=svgadded.top;
    var headLeft=svgadded.left;
    
    let sizeTxt=(txtTop/totaltxt);
        

    $.each( canvas._objects, function( key, value ) {
       if(canvas._objects[key].get('type')=='text'){
        if (canvas._objects[key].customType == 'Heading'){

            canvas._objects[key].fontSize=sizeTxt.toFixed(0);
            // canvas._objects[key].left=svgadded.left;
            // canvas._objects[key].top=svgadded.top ;
            // canvas._objects[key].originX='center'; 
            // canvas._objects[key].originY='top';
            headTop = canvas._objects[key].top;
            headLeft = canvas._objects[key].left;
            canvas._objects[key].setCoords();
            canvas.renderAll(); 
            console.log("head left"+canvas._objects[key].left);
                
        } else{
            canvas._objects[key].fontSize=(sizeTxt/2).toFixed(0);;
            // canvas._objects[key].top=headTop;
            

            if(canvas._objects[key-1].get('type')!=='text'){
            // canvas._objects[key].top=headTop+canvas._objects[key-2].height;

            }else{
            // canvas._objects[key].top=headTop+canvas._objects[key-1].height;

            }
            // canvas._objects[key].left=headLeft;
            // canvas._objects[key].originX='center';
            // canvas._objects[key].originY='top';
            headTop = canvas._objects[key].top;
            canvas._objects[key].setCoords();
            canvas.renderAll(); 
             


            }
            

       }
       console.log(canvas);


    });


}else if(layoutType=="bottom"){
    
    svgadded.scaleToHeight(txtTop);
    svgadded.left=canvas.width/2 ;
    svgadded.top=canvas.height/2;
    svgadded.originX='center';
    svgadded.originY='top';
    text.fontSize=txtTop;
    
    console.log(svgadded.left+svgadded.width);
    
    svgadded.setCoords();
    text.setCoords();

    canvas.renderAll(); 
    active = canvas.getActiveObject();  
    let totaltxt=canvas._objects.length-1;
    
    var headTop=svgadded.top;
    var headLeft=svgadded.left;
    
    let sizeTxt=(txtTop/totaltxt);
        

    $.each( canvas._objects, function( key, value ) {
       if(canvas._objects[key].get('type')=='text'){
        if (canvas._objects[key].customType == 'Heading'){

            canvas._objects[key].fontSize=sizeTxt.toFixed(0);
            canvas._objects[key].left=svgadded.left;
            canvas._objects[key].top=svgadded.top ;
            canvas._objects[key].originX='center';
            canvas._objects[key].originY='bottom';
            // canvas._objects[key].originY='center';
            headTop = canvas._objects[key].top;
            headLeft = canvas._objects[key].left;
            canvas._objects[key].setCoords();
            canvas.renderAll(); 
            console.log("head left"+canvas._objects[key].left);
                
        }else{
            canvas._objects[key].fontSize=(sizeTxt/2).toFixed(0);;
            // canvas._objects[key].top=headTop;
            

            if(canvas._objects[key-1].get('type')!=='text'){
            canvas._objects[key].top=headTop-canvas._objects[key-2].height;

            }else{
            canvas._objects[key].top=headTop-canvas._objects[key-1].height;

            }
            canvas._objects[key].left=headLeft;
            canvas._objects[key].originX='center';
            canvas._objects[key].originY='bottom';

            headTop = canvas._objects[key].top;
            canvas._objects[key].setCoords();
            canvas.renderAll(); 
             


            }
            

       }
       console.log(canvas);


    });


}else if(layoutType=="reset"){
    console.log("reset");


}


canvas.renderAll(); 

}
</script>
@endsection
@endsection
