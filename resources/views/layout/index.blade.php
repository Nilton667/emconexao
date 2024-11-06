<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
        <title>Em Conexão</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="{{ asset('line/1.3.0/css/line-awesome.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    </head>
    <body class="font-sans antialiased">
        <div class="preload">
            <div class="w-100 text-center">
                    <img style="width: 100px!important;" src="{{ asset('img/marca.png') }}">
            </div>
        </div>
        <div class="onload">
            <div class="container pt-3 pb-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img style="width: 300px;" class="p-2 img-fluid" src="{{ asset('img/logo.png') }}" alt="Logo">
                    </div>
                    <div class="col-12 col-md-6 d-flex flex-column align-items-end justify-content-end">
                        <div class="lang d-flex flex-row justify-end">
                            <a href="javascript:void(0)" onclick="setLang('pt')"><img class="active" src="{{ asset('img/pt.png') }}" alt="lang"></a>
                            <a href="javascript:void(0)" onclick="setLang('en')"><img src="{{ asset('img/en.png') }}" alt="lang"></a>
                        </div>
                        <div class="contacto-home d-flex flex-row">
                            <span ><i class="las la-phone"></i> <a href="tel:00244935074974">(+244) 935 074 974</a></span>
                            <span><i class="las la-envelope"></i> <a href="mailto:geral@emconexao.co.ao">geral@emconexao.co.ao</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg nav-header">
                <div class="container">
                  <a class="navbar-brand" href="#"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/sobre">Sobre Nós</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/contacto">Contacto</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>

            @yield('content')
            <br>
            <footer>
                <div class="p-4 container">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <br>
                            <img width="300" src="{{ asset('img/logo_preto.png') }}">
                            <br>
                        </div>
                        <div class="col-12 col-md-3">
                            <br>
                            <h5>Mais Informação</h5>
                            <div class="divider"></div>
                        </div>
                        <div class="col-12 col-md-3">
                            <br>
                            <h5>Contactos</h5>
                            <div class="divider"></div>
                        </div>
                        <div class="col-12 col-md-3">
                            <br>
                            <h5>Siga-nos</h5>
                            <div class="divider"></div>
                        </div>
                    </div>
                </div>
                <div class="copyColor">
                    <div class="container">
                        <div class="row m-0">
                            <div class="col-12">
                                <p class="m-0 text-light p-3">©{{ date('Y') }} Em Conexão Lda, Todos os direitos reservados.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
