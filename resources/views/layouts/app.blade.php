<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    
</head>
<body>
    <header>    
        @section('sidebar')
    </header>
    <div class="container-fluid fondo-app">
        <div class="row">
            <div class="col-0 col-sm-0 col-md-3 col-xl-3 Fondo-nav">
                <div class="mt-5">
                    <div class="text-center">
                        <img src="{{ asset('imagenes/g-rated-6009.jpg') }}" alt="mi foto" class="img-fluid">
                        <h2 class="text-secondary mt-1">Gustavo Muñoz</h2>
                        <hr>
                        <ul class="redesSociales">
                            <li><a href="https://www.facebook.com/HERPYPALMA" class="redes face" target="_blank"></a></li>
                            <li><a href="https://www.instagram.com/gatroxm/?hl=es-la" class="redes twit" target="_blank"></a></li>
                            <li><a href="https://twitter.com/GatroxM" class="redes inst" target="_blank"></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=573133976999" target="_blank" onmousedown="dataLayer.push({'event': 'eventTracker', 'eventCat': 'Links Externos', 'eventAct': 'Clic', 'eventLbl': 'api.whatsapp.com/send?phone=573133976999', 'eventVal': 0});" class="redes wath" target="_blank"></a></li>
                        </ul>
                        <hr>
                    </div>
                    
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-9 col-xl-9 Fondo-panel" >
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @yield('script')
</body>

</html>