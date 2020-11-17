@extends('layouts.site.app') 
@section('styles')
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
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
.color-picker-wrapper{
    display: inline;
}
.color-picker-wrapper .sp-replacer.sp-light{
    POSITION: ABSOLUTE;
    Z-INDEX: 999;
    BACKGROUND-COLOR: TRANSPARENT;
    BORDER: 0;
    height: 35px;
}
.color-picker-wrapper .sp-preview{
    visibility: hidden;
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
                        <article class="tab-pane container active" id="tab-panel-1">
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
                            <p class="color-inputpicker">
                                <input type="text" id="font-color-input" class="font-color-input input-text" placeholder="#000000">
                                <div class="color-pickerPopup">
                                    <span id="picker0" class="color-picker picker" style="background-color: black;"></span>
                                    <div id="popup-overlay1" class="popup-overlay" style="display: none;">
                                        <div class="popup-content">
                                            {{-- <button class="closeX">X</button>  --}}
                                            <p class="mb-1">New Color</p>
                                            <div class="color-picker-wrapper">
                                            <input class="color-picker add-color "  value="rgb(255, 0, 0)" style="background-color: rgb(255, 255, 255);" type='text' id="font-color-picker" />
                                                <span id="" class="text-color-picker color-picker add-color"  ></span>       
                                            </div>
                                            <p class="mb-1">Recommended Color</p>

                                            <span id="" class="color-picker text-color-picker" data-color="rgb(250, 125, 127);" style="background-color: rgb(250, 125, 127);"></span>
                                            <span id="" class="color-picker text-color-picker" data-color="rgb(129, 5, 10);" style="background-color: rgb(129, 5, 10);"></span>
                                            <span id="" class="color-picker text-color-picker" data-color="rgb(148, 6, 13);" style="background-color: rgb(148, 6, 13);"></span>
                                            <span id="" class="color-picker text-color-picker" data-color="rgb(147, 7, 13);" style="background-color: rgb(147, 7, 13);"></span>
                                            
                                    
                                            
                                            <p class="mt-4 mb-1">Default Color</p>
                                            <span id="" class="color-picker text-color-picker" data-color="rgb(0, 0, 0);" style="background-color: rgb(0, 0, 0);"></span>
                                            <span id="" class="color-picker text-color-picker" data-color="rgb(84, 84, 85);" style="background-color: rgb(84, 84, 85);"></span>
                                            <span id="" class="color-picker text-color-picker" data-color="rgb(115, 115, 115);" style="background-color: rgb(115, 115, 115);"></span>
                                            <span id="" class="color-picker text-color-picker" data-color="rgb(165, 165, 165);" style="background-color: rgb(165, 165, 165);"></span>
                                            <span id="" class="color-picker text-color-picker" data-color="rgb(217, 217, 216);" style="background-color: rgb(217, 217, 216);"></span>
                                            <span id="" class="color-picker text-color-picker" data-color="rgb(255, 255, 255);" style="background-color: rgb(255, 255, 255);"></span>
                                            <span id="" class="color-picker text-color-picker" data-color="rgb(253, 89, 92);" style="background-color: rgb(253, 89, 92);"></span>
                                            <span id="" class="color-picker text-color-picker" data-color="rgb(252, 106, 195);" style="background-color: rgb(252, 106, 195);"></span>
                                            <span id="" class="color-picker text-color-picker" data-color="rgb(202, 113 228);" style="background-color: rgb(202, 113 228);"></span>
                                            
                                            
                                            
                                            <br/>
                                            <p class="mt-4 mb-1">Gradient Color</p>
											<span id="" class="color-picker text-gradient" data-color1="rgb(252, 227, 138)" data-color2="rgb(243, 129, 129)"  style="background: linear-gradient(rgb(252, 227, 138), rgb(243, 129, 129));"></span>
											<span id="" class="color-picker text-gradient" data-color1="rgb(248, 77, 158)" data-color2="rgb(255, 116, 117)"  style="background: linear-gradient(rgb(248, 77, 158), rgb(255, 116, 117));"></span>
											<span id="" class="color-picker text-gradient" data-color1="rgb(23, 234, 217)" data-color2="rgb(96, 120, 234)"  style="background: linear-gradient(rgb(23, 234, 217), rgb(96, 120, 234));"></span>
											<span id="" class="color-picker text-gradient" data-color1="(rgb(98, 39, 116)" data-color2="rgb(197, 51, 100)"  style="background: linear-gradient(rgb(98, 39, 116), rgb(197, 51, 100));"></span>
											<span id="" class="color-picker text-gradient" data-color1="rgb(113, 23, 234)" data-color2="rgb(234, 96, 96)"  style="background: linear-gradient(rgb(113, 23, 234), rgb(234, 96, 96));"></span>
											<span id="" class="color-picker text-gradient" data-color1="rgb(180, 236, 81)" data-color2="rgb(66, 147, 33)"  style="background: linear-gradient(rgb(180, 236, 81), rgb(66, 147, 33));"></span>
											<span id="" class="color-picker text-gradient" data-color1="rgb(250, 217, 97)" data-color2="rgb(247, 107, 28)"  style="background: linear-gradient(rgb(250, 217, 97), rgb(247, 107, 28));"></span>
											<span id="" class="color-picker text-gradient" data-color1="(rgb(245, 81, 95)" data-color2="rgb(159, 4, 27)"  style="background: linear-gradient(rgb(245, 81, 95), rgb(159, 4, 27));"></span>
											<span id="" class="color-picker text-gradient" data-color1="(rgb(48, 35, 174)" data-color2="rgb(200, 109, 215)"  style="background: linear-gradient(rgb(48, 35, 174), rgb(200, 109, 215));"></span>
											<span id="" class="color-picker text-gradient" data-color1="rgb(66, 230, 149)" data-color2="rgb(59, 178, 184)"  style="background: linear-gradient(rgb(66, 230, 149), rgb(59, 178, 184));"></span>
											<span id="" class="color-picker text-gradient" data-color1="(rgb(91, 36, 122)" data-color2="rgb(27, 206, 223)"  style="background: linear-gradient(rgb(91, 36, 122), rgb(27, 206, 223));"></span>
											<span id="" class="color-picker text-gradient" data-color1="gb(101, 121, 155)" data-color2="rgb(94, 37, 99)"  style="background: linear-gradient(rgb(101, 121, 155), rgb(94, 37, 99));"></span>
										
                                        </div>
                                        <button class="done">Done</button>
                                    </div>
                                </div>
                            </p>
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
                                        <span id="picker1" class="color-picker picker" style="background-color: #ff0000;"></span>
                                    </div> 

                                            <div class="popup-overlay" style="display: none;">
                                                <div class="popup-content">
                                                    {{-- <button class="closeX">X</button>  --}}
                                                    <p class="mb-1">New Color</p>
                                                    <div class="color-picker-wrapper">
                                                        <input class="color-picker add-color"  value="rgb(255, 0, 0)" style="background-color: rgb(255, 255, 255);" type='text' id="outline-color" />
                                                        <span id="" class="shadow-color-picker color-picker add-color"  ></span>       
                                                    </div>
                                                    <p class="mb-1">Recommended Color</p>

                                                    <span id="" class="color-picker outline-color-picker" data-color="rgb(250, 125, 127);" style="background-color: rgb(250, 125, 127);"></span>
                                                    <span id="" class="color-picker outline-color-picker" data-color="rgb(129, 5, 10);" style="background-color: rgb(129, 5, 10);"></span>
                                                    <span id="" class="color-picker outline-color-picker" data-color="rgb(148, 6, 13);" style="background-color: rgb(148, 6, 13);"></span>
                                                    <span id="" class="color-picker outline-color-picker" data-color="rgb(147, 7, 13);" style="background-color: rgb(147, 7, 13);"></span>
                                                    
                                            
                                                    
                                                    <p class="mt-4 mb-1">Default Color</p>
                                                    <span id="" class="color-picker outline-color-picker" data-color="rgb(0, 0, 0);" style="background-color: rgb(0, 0, 0);"></span>
                                                    <span id="" class="color-picker outline-color-picker" data-color="rgb(84, 84, 85);" style="background-color: rgb(84, 84, 85);"></span>
                                                    <span id="" class="color-picker outline-color-picker" data-color="rgb(115, 115, 115);" style="background-color: rgb(115, 115, 115);"></span>
                                                    <span id="" class="color-picker outline-color-picker" data-color="rgb(165, 165, 165);" style="background-color: rgb(165, 165, 165);"></span>
                                                    <span id="" class="color-picker outline-color-picker" data-color="rgb(217, 217, 216);" style="background-color: rgb(217, 217, 216);"></span>
                                                    <span id="" class="color-picker outline-color-picker" data-color="rgb(255, 255, 255);" style="background-color: rgb(255, 255, 255);"></span>
                                                    <span id="" class="color-picker outline-color-picker" data-color="rgb(253, 89, 92);" style="background-color: rgb(253, 89, 92);"></span>
                                                    <span id="" class="color-picker outline-color-picker" data-color="rgb(252, 106, 195);" style="background-color: rgb(252, 106, 195);"></span>
                                                    <span id="" class="color-picker outline-color-picker" data-color="rgb(202, 113 228);" style="background-color: rgb(202, 113 228);"></span>
                                                    
                                                    
                                                    
                                                    <br/>
                                                </div>
                                                <button class="done">Done</button>
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
                                <div class="color-pickerPopup">
                                    <span id="picker2" class="color-picker picker" style="background-color: #ff0000;"></span>
                                    <div class="popup-overlay">
                                        <div class="popup-content">
                                            {{-- <button class="closeX">X</button>  --}}
                                            <p class="mb-1">New Color</p>
                                            <div class="color-picker-wrapper">
                                                <input type='text' class="color-picker  textshadow" value="rgb(4, 0, 0)" id="shadow-color" style="background-color: rgb(255, 255, 255);" />
                                                <span id="" class="shadow-color-picker color-picker add-color"  ></span>    
                                            </div>
                                            <p class="mb-1">Recommended Color</p>
                                           
                                            <span id="" class="shadow-color-picker color-picker"   style="background-color: rgb(250, 125, 127);"></span>
                                            <span id="" class="shadow-color-picker color-picker"   style="background-color: rgb(129, 5, 10);"></span>
                                            <span id="" class="shadow-color-picker color-picker"   style="background-color: rgb(148, 6, 13);"></span>
                                            <span id="" class="shadow-color-picker color-picker"   style="background-color: rgb(147, 7, 13);"></span>
                                            
                                            
                                            <p class="mt-4 mb-1">Default Color</p>
                                            <span id="" class="shadow-color-picker color-picker"  style="background-color: rgb(0, 0, 0);"></span>
                                            <span id="" class="shadow-color-picker color-picker"  style="background-color: rgb(84, 84, 85);"></span>
                                            <span id="" class="shadow-color-picker color-picker"  style="background-color: rgb(115, 115, 115);"></span>
                                            <span id="" class="shadow-color-picker color-picker"  style="background-color: rgb(165, 165, 165);"></span>
                                            <span id="" class="shadow-color-picker color-picker"  style="background-color: rgb(217, 217, 216);"></span>
                                            <span id="" class="shadow-color-picker color-picker"  style="background-color: rgb(255, 255, 255);"></span>
                                            <span id="" class="shadow-color-picker color-picker"  style="background-color: rgb(253, 89, 92);"></span>
                                            <span id="" class="shadow-color-picker color-picker"  style="background-color: rgb(252, 106, 195);"></span>
                                            <span id="" class="shadow-color-picker color-picker"  style="background-color: rgb(202, 113 228);"></span>
                                            <span id="" class="shadow-color-picker color-picker"  style="background-color: rgb(139, 91, 251);"></span>
                                            
                                            
                                              
                                        </div>
                                        <button class="done" >Done</button>
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
                <div id="canvas_frame" class="canvas_frame maker-canvas-frame mbm canvas-editor" style="width: 50%; height:100%;">
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
      console.log(gfonts.length);
    WebFont.load({
                google: { 
                       families: gfonts
                 } 
     }); 
</script> 

<script>
    
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
    // create a wrapper around native canvas element (with id="c")
var canvas = new fabric.Canvas('c',{backgroundColor : "white"});
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
     
    var svgUrl="{{asset('/site/img/logo-icon.svg')}}"; 
    fabric.loadSVGFromURL(svgUrl, function(objects, options) {
    var obj = fabric.util.groupSVGElements(objects, options); 
    obj.scaleToHeight(100);
    obj.set({
        
        left: (text.left+(text.width/2)-obj.width) ,
        top: text.top-100,
     
    
    });

    canvas.add(obj); 
    canvas.renderAll();
 
  
 
});
canvas.on('object:scaling', function(event) {
    if(event.target){
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
        
        $("#font-input, #font-slider").val(event.target.fontSize);
        }
    }
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
        var gradient = ctx.createLinearGradient( 0, 0,  0, text.height);
        gradient.addColorStop(0, color1);
        gradient.addColorStop(0.45, color2);
        active.fill = gradient;
        $('#font-color-input').val('');
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
     
    fontoption=`<option class="fontoptions" id="${temp_id}" style="font-family: '${gfonts[k]}';" value="${gfonts[k]}">${gfonts[k]}</option>`;
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
    imgList = `<div  class="col-md-6"><div class="font-wrapper"> <img data-font="${gfonts[i]}" class="fontname" src="${imgData}"/></div></div>`;
    
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
    var fontOutline='rgb(255,0,0)';
    //  Stroke 
    $('.outline-color-picker').on('click' , function() {
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
                        if($(this).prop("id")=='outline-color'){
                            fontOutline=$("#outline-color").val();

                        }
                        
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
    // shadow
    var shadowColor='rgb(0,0,0)';
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
    // 
    $(document).on('click','.shadow-color-picker', function(){
            
            
            
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
            let selectedshadowffsetY= e.selected[0].shadow.offsetY;
            console.log('teext shod y'+selectedshadowffsetY);
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

 
</script>
@endsection
@endsection
