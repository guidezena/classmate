<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Home</title>
</head>

<body class="antialiased">
    <!--
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
@else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                                    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    @endif
                @endauth
            </div>
        @endif
        -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-6 border border-5 text-center" style="background-color: #C9E1D0;">
                    <div style="color: #84A78E">
                        <h1>Acesse sua</h1>
                        <h1>conta</h1>
                    </div>
                    <p>Se já tiver cadastro, insira seu e-mail<br> e senha para acessar a conta</p>


                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <input type="text" class="form-control rounded-pill " style="width: 75%" id="inputEmail"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            
                            <input type="password" class="form-control rounded-pill" style="width: 75%; align-items:flex-end"
                                id="inputPassword" placeholder="Senha">
                            <p style="text-align: right" style="color: #84A78E">Esqueci minha senha</p>
                            
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary">Entrar</button>
                            <p>Não possui cadastro?</p>
                            <a href="#" style="color: #84A78E">Solicitar cadastro</a>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="background-color: #96BDA1;">
                    <h1 class="mt-5 text-center fst-italic" id="textClassmate" style="color: white">CLASSMATE</h1>
                </div>
            </div>
        </div>
    </main>

</body>

</html>

</html>
