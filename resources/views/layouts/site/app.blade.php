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
        <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.1/spectrum.min.css" integrity="sha512-KuSX+43gVS5MEIJD2ewtrFPOHqC1PJnL8o2f5ciggPC0JUZ8XV0QXlfArO1mSzKkVFdRjsBDfrTU96C5SuRfqQ==" crossorigin="anonymous" />
      
    
        {{-- @yield('styles') --}}
    
    </head>

<body>

    <div class="maker-fit-mode">
        @include('layouts.site.includes.navbar')
        
            {{-- Content --}}
            
            @yield('content')
        
        @include('layouts.site.includes.footer')
    </div>
    <!-- Bootstrap core JavaScript================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="{{asset('/site/js/custom.js')}}"></script>
    <script src="{{asset('/site/js/color.js')}}"></script>
    <script type="text/javascript" src="{{asset('/site/js/jquery.fontselect.js')}}"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.2.0/fabric.min.js" integrity="sha512-Pdu3zoEng2TLwwjnDne3O7zaeWZfEJHU5B63T+zLtME/wg1zfeSH/1wrtOzOC37u2Y1Ki8pTCdKsnbueOlFlMg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.1/spectrum.min.js" integrity="sha512-1aNp9qKP+hKU/VJwCtYqJP9tdZWbMDN5pEEXXoXT0pTAxZq1HHZhNBR/dtTNSrHO4U1FsFGGILbqG1O9nl8Mdg==" crossorigin="anonymous"></script>
    
    @yield('scripts')

</body>
</html>