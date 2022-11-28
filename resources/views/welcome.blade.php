<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>¡Supérate! Universities</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="../images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <style type="text/css">
            /*=====================================
            reset estilos
            no es necesario que copies esto
            =====================================*/
            
            html {
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
                text-size-adjust: 100%;
                line-height: 1.4;
            }
            
            
            * {
                margin: 0;
                padding: 0;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            
            body {
                color: #404040;
                font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;
            }
            
            /*=====================================
            estilos de la utilidad
            Copiar esto
            =====================================*/
            .contenedor-fondo-animado {
                display: block;
                height: 100vh;
                width: 100%
                background: linear-gradient(#39BBDC, #FF3192);
                color: #fff;
                position: relative;
                overflow: hidden;
            }
            .seccion-contenido {
                display: flex;
                width: 100%;
                height: 100vh;
                align-items: center;
                justify-content: center;
            }
            .seccion-contenido .contenido {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 100%;
                max-width: 800px;
                text-align: center;
                z-index: 5;
            }
            .seccion-contenido .contenido h4 {
                font-size: 4rem;
                margin-bottom: 2.5rem;
                font-family: Lucida Handwriting;
            }
            .seccion-contenido .contenido p {
                font-style: italic;
                font-size: 1.75rem;
                margin-bottom: 3.5rem;
                font-family: Gill Sans MT;
            }
            .seccion-contenido .contenido h4,
            .seccion-contenido .contenido p {
                text-shadow: 0 0 5px rgba(0, 0, 0, .2);
            }
            .seccion-contenido .contenido ul {
                list-style: none;
            }
            .seccion-contenido .contenido ul a {
                display: block;
                text-decoration: none;
                color: inherit;
                font-size: 1.2em;
                padding: 15px;
                border-radius: 12px;
                transition: all ease-in 100ms;
                transform: translateY(0)
            }
            .seccion-contenido .contenido ul a:hover {
                transform: translateY(-.5rem);
            }
            .seccion-contenido .contenido li:nth-child(1) a {
                border: 3px solid #E86BFF;
            }
            .seccion-contenido .contenido li:nth-child(2) a {
                border: 3px solid #90BAFF;
            }
            .seccion-contenido .contenido li:nth-child(3) a {
                border: 3px solid #FF5071;
            }
            .seccion-contenido .contenido ul li {
                display: inline-block;
            }
            .seccion-contenido .contenido ul li + li {
                margin-left: 2.5rem;
            }
            
            /* animacion */
            .animacion {
                z-index: 1;
            }
            span.cuatro,
            span.dos,
            span.tres,
            span.uno {
                border: 0;
                display: block;
                position: absolute;
                bottom: 0;
                left: 0;
                background-color: #fff;
                animation: vuela 7s linear infinite normal both;
            }
            span.uno {
                width: 100px;
                height: 100px;
                background-color: #E86BFF;
                bottom: -100px;
            }
            span.dos {
                width: 70px;
                height: 70px;
                background-color: #90BAFF;
                bottom: -70px;
            }
            span.tres {
                width: 50px;
                height: 50px;
                background-color: #FF5071;
                bottom: -50px;
            }
            span.cuatro {
                width: 20px;
                height: 20px;
                background-color: #67F3D4;
                bottom: -20px;
            }
            @keyframes vuela {
                from {
                    transform: rotate(0deg);
                    bottom: 0;
                    opacity: 0;
                }
                5% {
                    opacity: 1;
                }
                60% {
                    opacity: 1;
                }
                to {
                    transform: rotate(360deg);
                    bottom: calc(100% + 100px);
                    opacity: 0;
                }
            }
            /* secuencia y orden */
            .animacion span:nth-child(1) {
                left: 20%;
                animation-delay: 3s;
            }
            .animacion span:nth-child(2) {
                left: 50%;
            }
            .animacion span:nth-child(3) {
                left: 35%;
                animation-delay: 5s;
            }
            .animacion span:nth-child(4) {
                left: 75%;
                animation-delay: 1s;
            }
            .animacion span:nth-child(6) {
                left: 85%;
                animation-delay: 3s;
            }
            .animacion span:nth-child(7) {
                left: 90%;
                animation-delay: 5s;
            }
            .animacion span:nth-child(8) {
                left: 65%;
            }
            .animacion span:nth-child(9) {
                left: 60%;
            }
            .animacion span:nth-child(10) {
                left: 75%;
                animation-delay: 6s;
            }
            .animacion span:nth-child(11) {
                left: 10%;
            }
            .animacion span:nth-child(12) {
                left: 45%;
                animation-delay: 3s;
            }
            </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarte</a>
                        @endif
                    @endauth
                </div>
            @endif
            <section class="contenedor-fondo-animado">
                <div class="animacion">
                    <!--  -->
                    <span class="uno"></span>
                    <span class="dos"></span>
                    <span class="tres"></span>
                    <span class="cuatro"></span>
                    <!--  -->
                    <span class="uno"></span>
                    <span class="dos"></span>
                    <span class="tres"></span>
                    <span class="cuatro"></span>
                    <!--  -->
                    <span class="uno"></span>
                    <span class="dos"></span>
                    <span class="tres"></span>
                    <span class="cuatro"></span>
                </div>
                <div class="seccion-contenido">
                    <div class="contenido">
                        <h1>Bienvenido a ¡Supérate! Universities</h1>
                        <font color="#D5D7F9"><h2>Nos encanta tenerte aquí - <a href="login">Inicia sesión</a> o <a href="register">regístrate</a></h2></font><br>
                        <img src="../images/logo.png" width="200" height="200">
                    </div>
                </div>
            </section>
            <!--====  End of html  ====-->
            
            <!--=============================
            redes sociales fijadas en pantalla
            No es necesario que copies esto!
            ==============================-->
            <style>
            .mensaje a {
                color: inherit;
                margin-right: .5rem;
                display: inline-block;
            }
            .mensaje a:hover {
                color: #309B76;
                transform: scale(1.4)
            }
            </style>
            <div class="mis-redes" style="display: block;position: fixed;bottom: 1rem;left: 1rem; opacity: 0.5; z-index: 1000;">
                <p style="font-size: .75rem;">Apock graficos</p>
                <div>
                    <a target="_blank" href="https://www.facebook.com/ApockGraficos"><i class="fab fa-facebook-square"></i></a>
                    <a target="_blank" href="https://twitter.com/ApockGraficos"><i class="fab fa-twitter"></i></a>
                    <a target="_blank" href="https://www.instagram.com/ApockGraficos"><i class="fab fa-instagram"></i></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UC15DkMZQ80aoW_Rqk4n2T_w"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </body>
</html>
