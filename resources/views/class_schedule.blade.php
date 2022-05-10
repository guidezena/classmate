<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="styleheet" href="style.css">
    <title>Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppis', sans-serif;

        }

        body {
            min-height: 100vh;
            background: #C9E1D0;
            ;
        }

        .navigation {
            position: fixed;
            top: 20px;
            left: 20px;
            bottom: 20px;
            width: 300px;
            border-radius: 10px;
            box-sizing: initial;
            border-left: 5px solid #84A78E;
            background: white;
            transition: width 0.5;
            color: white;
        }

        .navigation ul {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding-left: 5px;
            padding-top: 40px;
        }

        .navigation ul li {
            position: relative;
            list-style: none;
            width: 100%;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;

        }

        .navigation ul li a {
            position: relative;
            display: block;
            width: 100%;
            display: flex;
            text-decoration: none;
            color: black;
        }

        .navigation ul li.active a {
            color: #333
        }


        .navigation ul li.active {
            background: #C9E1D0;

        }

        .navigation ul li a .icon {
            position: relative;
            display: block;
            min-width: 60px;
            height: 60px;
            line-height: 70px;
            text-align: center;
        }

        .navigation ul li a .icon ion-icon {
            font-size: 1.5em;
        }

        .navigation ul li a .title {
            position: relative;
            display: block;
            padding-left: 10px;
            height: 60px;
            line-height: 60px;
            white-space: normal;
        }

    </style>
</head>

<body>
    <header>

    </header>
    <main>
        
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="navigation">
                        <ul>
                            <li class="list active">
                                <a href="#">
                                    <span class="icon">
                                        <ion-icon name="home-outline"></ion-icon>
                                    </span>
                                    <span class="title"> Home</span>
                                </a>
                            </li>
                            <li class="list">
                                <a href="#">
                                    <span class="icon">
                                        <ion-icon name="book-outline"></ion-icon>
                                    </span>
                                    <span class="title"> Materias</span>
                                </a>
                            </li>
                            <li class="list">
                                <a href="#">
                                    <span class="icon">
                                        <ion-icon name="school-outline"></ion-icon>
                                    </span>
                                    <span class="title"> Horarios</span>
                                </a>
                            </li>
                            <li class="list">
                                <a href="#">
                                    <span class="icon">
                                        <ion-icon name="tv-outline"></ion-icon>
                                    </span>
                                    <span class="title"> Atividades</span>
                                </a>
                            </li>
                            <li class="list">
                                <a href="#">
                                    <span class="icon">
                                        <ion-icon name="school-outline"></ion-icon>
                                    </span>
                                    <span class="title"> Aulas</span>
                                </a>
                            </li>
                            <li class="list">
                                <a href="#">
                                    <span class="icon">
                                        <ion-icon name="tv-outline"></ion-icon>
                                    </span>
                                    <span class="title"> Atividades</span>
                                </a>
                            </li>
                            <li class="list">
                                <a href="#">
                                    <span class="icon">
                                        <ion-icon name="log-out-outline"></ion-icon>
                                    </span>
                                    <span class="title">Sair</span>
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-9" style="background-color: #96BDA1;">
                    <div>
                        <h3>Horarios de Aulas</h3>
                        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Link
                            primário</a>
                        <a href="#" class="btn btn-primary">Visitar</a>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Matéria: Física</h5>
                                    <p class="card-text">Instituição : Escola estadual.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <script>
        let list = document.querySelectorAll('.list');
        for (let i = 0; i < list.length; i++) {
            list[i].onclick = function() {
                let j = 0;
                while (j < list.length) {
                    list[j++].className = 'list';
                }
                list[i].className = 'list active';
            }
        }
    </script>
</body>

</html>
