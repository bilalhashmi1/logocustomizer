<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{asset('/site/img/favicon.png')}}" />
        
        <link href="{{asset('/site/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/site/css/custom.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/site/css/fontselect-default.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/site/css/color.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" type="text/css">
        <link href="{{asset('/site/css/allfonts.css')}}" rel="stylesheet" type="text/css">
        <link href="http://necolas.github.io/normalize.css/2.0.1/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.1/spectrum.min.css" integrity="sha512-KuSX+43gVS5MEIJD2ewtrFPOHqC1PJnL8o2f5ciggPC0JUZ8XV0QXlfArO1mSzKkVFdRjsBDfrTU96C5SuRfqQ==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"   crossorigin="anonymous" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

        @yield('styles')
    
    </head>

<body>

    <div class="maker-fit-mode">
        @include('layouts.site.includes.navbar')
        
            {{-- Content --}}
            
            @yield('content')
        
        @include('layouts.site.includes.footer')
    </div>
    <!-- Modal -->
    {{-- <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="multImages row">
            </div>
          </div>
        </div>
      </div> --}}
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">See option</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <ul class="fonts--tabs">
                <li class="menu__active-tab"><a><span style="font-family: &quot;Bree Serif&quot;;">TRADITIONAL(SERIF)</span></a></li>
                <li class=""><a><span style="font-family: Bevan;">BOLD</span></a></li>
                <li class=""><a><span style="font-family: &quot;Honey Script&quot;;">VINTAGE</span></a></li>
                <li class=""><a><span style="font-family: Roundo;">MODERN(SANS)</span></a></li>
                <li class=""><a><span style="font-family: Douar;">FUNKY</span></a></li>
                <li class=""><a><span style="font-family: Knewave;">HANDWRITTEN</span></a></li>
                <li class=""><a><span>OTHER</span></a></li>
              </ul>
              <div class="row multImages">
                 
              
              </div>
            <div class="modal-footer text-center">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button id="savefonts" type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
 
    <!-- Bootstrap core JavaScript================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="{{asset('/site/js/custom.js')}}"></script>
    <script src="{{asset('/site/js/color.js')}}"></script>
    <script src="{{asset('/site/js/kendo.all.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/site/js/jquery.fontselect.js')}}"></script> 
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.2.0/fabric.min.js" integrity="sha512-Pdu3zoEng2TLwwjnDne3O7zaeWZfEJHU5B63T+zLtME/wg1zfeSH/1wrtOzOC37u2Y1Ki8pTCdKsnbueOlFlMg==" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.1/spectrum.min.js" integrity="sha512-1aNp9qKP+hKU/VJwCtYqJP9tdZWbMDN5pEEXXoXT0pTAxZq1HHZhNBR/dtTNSrHO4U1FsFGGILbqG1O9nl8Mdg==" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.0.0/fabric.min.js" integrity="sha512-UNjbffhZxF4EJpN3+MmCNzsQLp+Sv8TV9k1j69wQNlXwA0EwaL/AlKhv1on8TCC8kI7+V9VrAPoA0XGFIqE5kA==" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.6/fabric.min.js" integrity="sha512-XcwgBTqf2CXR/nsswCV1e0j9CjXo87APyBsATK2/l7MvTpcIG0QYKA87v5KIJ4RS6ytArv2pWD6UcRorKhYp1A==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    @yield('scripts')

</body> 
</html>