<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Netflix</title>
        <link rel="stylesheet" href="netflix.css"/>
        <link rel="shortcut icon" href="favicon.ico"/> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url("{{asset('bg.jpg')}}");
                
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .header{
                
                position: absolute;
                width: 100%;
                z-index: 1;
                padding: 20px;
                
            }
            .gradient{

                background: rgba(0, 0, 0, 0.3);
                background-image: linear-gradient(
                    to top,
                        rgba(0,0,0,0.8) 0,
                        rgba(0,0,0,0) 60%,
                        rgba(0,0,0,0.8) 100%);
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
            }
            .loginbox{

                background-color: rgba(0, 0, 0, 0.8);
                position: absolute;
                top: 0%;
                left: 25%;
                padding: 150px;
                margin: 100px;
                border-radius: 10px;
                color: #ffffff;
            }

            .input{

                padding: 20px;
                margin: 20px;
                width: 100%;
                border-radius: 10px;
            }

            .button{

                background-color: red;
                padding: 15px;
                width: 100%;
                border-radius: 10px; 
                color: white;
            }

            
        </style>

        {{-- <link href="{{asset('css/netflix.css')}}" rel="stylesheet" type="text/css" /> --}}
    </head>
    <body>
        <header class="header">
            <img src="netflix.svg" alt="Netflix" draggable="false"/>
        </header>
        <main>
            <div class="gradient"></div>
        </main>

        <div class="loginbox">
            <h1>Entrar</h1>
                <input type="email" placeholder="Email ou número de telefone">
                <br><br>
                <input type="password" placeholder="Senha">
                <br><br>
                <button class="button">Entrar</button>
        </div>
    </body>
</html>
