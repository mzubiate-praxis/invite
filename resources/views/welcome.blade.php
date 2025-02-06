<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parallax website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/main.css" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body, html
        {
            height: 100%;
            margin: 0;
            font-size: 16px;
            font-family:'Karla', sans-serif;
            line-height: 1.8em;
            font-weight: 400;
            color: #666;
        }

        @media only screen and (max-width: 600px) {
            .letter-hello {
                font-size: 60px !important;
            }

            .letter-hello-div {
                margin-top: 70px !important;
            }

            .img-funko-src {
                width: 500px !important;
                margin-left: 10px !important;
            }

            .img-funko-src-div {
                margin-top: 30px !important;
            }

            .date-title {
                font-size: 46px !important; 
            }

            .date-title span {
                font-size: 65px !important; 
            }

            .div-xv {
                margin-top: 20px !important;
            }

            .div-xv span {
                font-size: 30px !important;
            }

            .div-name span{
                font-size: 65px !important;
                color: #282e34;
            }

            .box-time {
                width: 80px !important;
                height: 80px !important;
            }

            .span-left {
                margin-left: 2px !important;
            }

            .section {
                padding: 50px 10px !important;
            }

            .sec3 {
                padding: 10px 20px !important;
            }

            .box-time-text {
                font-size: 20px !important;
            }

            .span-text-box {
                margin-left: 5px !important;
                font-size: 10px !important;
            }

            .img2
            {
                background-size: 500px 400px !important;
                height: 200px !important;
            }

            .sec1 h2 {
                font-size: 20px !important;
            }

            .thank-text {
                font-size: 50px !important;
            }

            .text-02, .text-03, .text-04 {
                font-size: 20px !important;
            }

            .location-text {
                font-size: 50px !important;
            }

            .gallery-text {
                font-size: 40px !important;
                font-weight: 600;
            }

            .gallery-text-02 {
                margin-top: 20px !important;
                font-size: 40px !important;
                font-weight: 600 !important;
            }

            .money {
                margin-top: 30px;
            }

            .form-asist {
                margin-top: 30px;
            }
        }

        @font-face {
            font-family: VeraSeBd;
            src: url({{URL::asset('/fonts/Remington.ttf')}});
        }

        @font-face {
            font-family: Bird;
            src: url({{URL::asset('/fonts/Birds.ttf')}});
        }

        @font-face {
            font-family: Madina;
            src: url({{URL::asset('/fonts/Madina.ttf')}});
        }

        .gallery-text {
            font-family: VeraSeBd;
        }

        .img1,.img2,.img3
        {
            position: relative;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .img1
        {
            background-image: url('../img/1.png');
            min-height:100%;
        }
        .img2
        {
            background-image: url('../img/img2.png');
            background-size: 1280px 700px;
            min-height:150px;
            height: 300px;
        }
        .img3
        {
            background-image: url('../Images/img3.jpg');
            min-height:300px;
            padding: 30px 10px;
        }
        .section
        {
            text-align: center;
            padding: 50px 80px;
        }
        .sec1
        {
            background-color: #282e34;
        }

        .sec1 h2 {
            font-size: 30px;
            color: white;
            font-family: "Handlee", cursive;
        }

        .sec2
        {
            background-color: #282e34;
            color: #ddd;
        }

        .sec3
        {
            background-color: #282e34;
            color: #ddd;
        }
        .txt
        {
            position: absolute;
            top: 50%;
            width: 100%;
            text-align: center;
            color: #000;
            font-size: 27px;
            letter-spacing: 8px;
        }
        .txt .border
        {
            background-color: #111;
            color: #fff;
            padding: 20px;

        }
        .txt .border.trans{
            background-color: transparent;
        }

        .letter-hello {
            font-family: VeraSeBd;
            font-size: 55px;
            font-weight: 900;
            color: #282e34;
            animation: 1.5s ease 0s infinite beat;
        }
        .letter-hello-div {
            margin-top: 35px;
        }

        .img-funko-src {
            width: 220px;
            text-align: -webkit-center;
            position: relative;
            margin-left: 10px;
        }

        .img-funko-src-div {
            margin-top: 20px;
        }

        .grid-funko {
            text-align: -webkit-center;
        }

        .date-title {
            color: rgb(0, 0, 0);
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 60px;
            margin-top: 20px;
        }
        .date-title-div {
            margin-top: 30px;
        }

        .date-title span {
            color: #282e34;
            font-size: 80px; 
            font-weight: 800;
        }

        .line-black {
            background-color: rgb(0, 0, 0); 
            height: 3px;
        }

        .img-kitty {
            width: 50px;
        }

        .div-img-kitty {
            position: relative;
            text-align: -webkit-center;
            bottom: 175px;
        }

        .div-xv {
            font-size: 30px;
            margin-top: 10px;
        }

        .div-xv span {
            text-decoration: underline;
        }

        .div-name {
            margin-top: 35px;
        }

        .div-name span{
            font-family: Bird;
            font-weight: 800;
            font-size: 70px;
        }

        .box-time {
            align-items: center;
            display: flex;
            height: 100px;
            justify-content: center;
            width: 160px;
            background: #ffffff;
            color: #4c4c4c;
            border-radius: 20px;
        }

        .box-time-text {
            font-size: 40px;
        }

        .span-left {
            margin-left: 50px;
        }

        .span-text-box {
            margin-left: 10px; 
            font-weight: 600;
        }

        .text-mothers {
            font-family: Madina;
            font-size: 40px;
            color: #000
        }

        .thank-text {
            font-size: 70px;
            font-family: VeraSeBd;
            font-weight: 700;
        }

        .text-02 {
            font-size: 30px;
            font-family: "Handlee", cursive;
        }

        .img-xv {
            width: 200px;
            border-radius: 10px;
        }

        .text-church {
            font-size: 30px;
            font-family: VeraSeBd;
            font-weight: 700;
            columns: #000000;
        }

        .location-text {
            font-size: 70px;
            font-family: VeraSeBd;
            font-weight: 700;
        }

        .text-03 {
            font-family: "Handlee", cursive;
            font-size: 30px;
        }

        .gallery-text {
            font-size: 70px;
            font-family: VeraSeBd;
            font-weight: 700;
        }

        .gallery-text-02 {
            font-size: 70px;
            font-family: VeraSeBd;
            font-weight: 700;
            margin-top: 50px;
        }

        .text-04 {
            margin-top: 40px;
            font-family: "Handlee", cursive;
            font-size: 30px;
        }

        .img-regalo {
            width: 80px;
        }
        .img-amazon {
            width: 200px;
        }
        
        .regalo-text {
            margin-top: 20px;
            font-family: "Handlee", cursive;
            font-size: 25px;
        }

        .input-code {
            width: 300px;
            font-size: 20px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .input-normal {
            width: 300px;
            font-size: 15px;
        }

        .label-code {
            font-family: "Handlee", cursive;
            color: #fff;
            font-size: 17px;
        }
    </style>
    
</head>
<body>
    <div class="img1" style="text-align: -webkit-center">
        <div class="grid grid-cols-1 gap-1">
            <div class="letter-hello-div">
                <span class="letter-hello">
                    ¡Hello!
                </span>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-1">
            <div class="img-funko-src-div">
                <img class="img-funko-src" src="{{URL::asset('/img/funko-yareli01.png')}}" alt="">
            </div>
        </div>
        <div class="grid grid-cols-1 gap-1">
            <div class="date-title-div">
                <span class="date-title">
                    Sábado <span>01</span> Marzo
                </span>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-1">
            <div class="line-black"></div>
        </div>
        <div class="grid grid-cols-1 gap-1">
            <div class="div-xv">
                <span>
                    MIS XV AÑOS
                </span>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-1">
            <div class="div-name">
                <span>
                    Yareli Valdez Moreno
                </span>
            </div>
        </div>
    </div>
    <section class="section sec1">
        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
            <h2>
                Baile, trago y comida, son los elegidos para celebrar los 15 años de esta dulce niña. Te invitamos a bailar hasta el amanecer rodeados de familia.
            </h2>
        </div>
        <div class="grid grid-cols-1 gap-1" style="margin-top: 50px;">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                <div style="display: inline-block; ">
                    <div class="box-time">
                        <span class="box-time-text" id="days"></span><span class="span-text-box">DIAS</span>
                    </div>
                </div>
                <div class="span-left" style="display: inline-block;">
                    <div class="box-time">
                        <span class="box-time-text" id="hours"></span><span class="span-text-box">HORAS</span>
                    </div>
                </div>
                <div class="span-left" style="display: inline-block;">
                    <div class="box-time">
                        <span class="box-time-text" id="minutes"></span><span class="span-text-box">MIN</span>
                    </div>
                </div>
                <div class="span-left" style="display: inline-block;">
                    <div class="box-time">
                        <span class="box-time-text" id="seconds"></span><span class="span-text-box">SEG</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="img2">
    </div>
    <section class="section sec2">
        <div class="grid grid-cols-1 gap-1" style="text-align: -webkit-center">
            <div>
                <p class="thank-text">
                    ¡Gracias!
                </p>
                <p class="text-02" style="margin-top: 50px; margin-bottom: 50px;">
                    Hace 15 años Dios me bendijo con la vida y una familia maravillosa. Acompáñanos a celebrar juntos mis XV años
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-1" style="text-align: -webkit-center">
            <div>
                <div data-aos="flip-up" data-aos-duration="1700" class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl tracking-tight text-mothers">
                            Mi Mamá
                        </h5>
                    </a>
                    <p style="color: #282e34">
                        Karen Moreno Ávila
                    </p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-1" style="margin-top: 20px; text-align: -webkit-center">
            <div>
                <div data-aos="flip-down" data-aos-duration="1700" class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl tracking-tight text-mothers">
                            Mis Padrinos
                        </h5>
                    </a>
                    <p style="color: #282e34">
                        Mónica Avila Sánchez <br/>& <br/>Miguel  Angel  Ramírez Ramírez
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="img3">
        <div class="grid grid-cols-1 gap-1" style="text-align: -webkit-center; margin-bottom: 30px;;">
            <p class="location-text">
                Ubicación del Evento
            </p>
            <p class="text-03" style="margin-top: 30px;">
                Tanto la <strong>Ceremonia</strong> como el <strong>Evento</strong> se llevaran acabo en el <strong>SALÓN EMPERADOR, </strong>ubicado en: 
            </p><br/>
            <p class="text-03">
                Av. 1ro de Mayo 9, Adolfo Ruiz Cortines, 55050 Ecatepec de Morelos, Méx.
            </p>
            <p style="margin-top: 20px;">
                <a target="_blank" href="https://www.google.com/maps/place/Sal%C3%B3n+Emperador/@19.597616,-99.0320855,17z/data=!3m1!4b1!4m6!3m5!1s0x85d1f1ae4ca4bb0d:0x53713a7b3f492658!8m2!3d19.597616!4d-99.0320855!16s%2Fg%2F1tpps9d3?entry=ttu&g_ep=EgoyMDI1MDExNC4wIKXMDSoASAFQAw%3D%3D">
                    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        <span>
                            <svg style="display: inline-block; width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                            </svg>                          
                        </span>
                        <strong>Google Maps</strong>
                    </button>
                </a>
            </p>
        </div>
        <div class="grid grid-cols-2 gap-2" >
            <div style="text-align: -webkit-center">
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <p>
                        <img class="img-xv" src="{{URL::asset('/img/iglesia.png')}}" alt="">
                    </p>
                    <p class="text-church">
                        Ceremonia
                    </p>
                    <p style="text-align: -webkit-left; margin-top: 30px;">
                        <span>
                            <svg style="display: inline-block; width: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                            </svg>
                            06:30 P.M.
                        </span>
                    </p>
                </div>
            </div>
            <div style="text-align: -webkit-center;">
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <p>
                        <img class="img-xv" src="{{URL::asset('/img/xv.png')}}" alt="">
                    </p>
                    <p class="text-church">
                        Recepción
                    </p>
                    <p style="text-align: -webkit-left; margin-top: 30px;">
                        <span>
                            <svg style="display: inline-block; width: 25px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                            </svg>
                            07:30 P.M.
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="section sec3">
        <div class="grid grid-cols-1 gap-1" style="margin-top: 20px;">
            <p class="gallery-text">
                Galeria de Fotos
            </p>
            <p class="text-04">
                Los instantes mágicos se convierten en recuerdos inolvidables que duran para siempre
            </p>
        </div>
        <div style="margin-top: 30px; margin-bottom: 30px;" id="gallery" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                 <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{URL::asset('/img-yareli/01.jpg')}}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{URL::asset('/img-yareli/02.jpg')}}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section> --}}
    <div class="img3" style="text-align: -webkit-center;background-color: #282e34;padding-top: 100px;padding-bottom: 100px;">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <div>
                <div data-aos="flip-left" data-aos-duration="1000" class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <p>
                        <img class="img-regalo" src="{{URL::asset('/img/regalo.png')}}" alt="">
                    </p>
                    <p class="regalo-text">
                        Regalo físico
                    </p>
                    <p style='font-family: "Handlee", cursive;'>
                        Agradecemos tu regalo físico el día del evento
                    </p><br/>
                </div>
            </div>
            <div>
                <div data-aos="flip-right" data-aos-duration="1000" class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 money">
                    <p>
                        <img class="img-regalo" src="{{URL::asset('/img/deposito.png')}}" alt="">
                    </p>
                    <p class="regalo-text">
                        Gift money
                    </p>
                    <p style='font-family: "Handlee", cursive;'>
                        <strong>Santander</strong>
                    </p>
                    <p style='font-family: "Handlee", cursive;'>
                        Karen Moreno Ávila
                    </p>
                    <p style='font-family: "Handlee", cursive;'>
                        Clabe: 83274283974239847389274
                    </p>
                </div>
            </div>
            <div>
                <div data-aos="flip-right" data-aos-duration="1000" class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 money">
                    <p>
                        <img class="img-amazon" src="{{URL::asset('/img/amazon.png')}}" alt="">
                    </p>
                    <p class="regalo-text">
                        Mesa de regalos
                    </p>
                    <p style='font-family: "Handlee", cursive;'>
                        <strong>AMAZON</strong>
                    </p>
                    <p style='font-family: "Handlee", cursive;'>
                        <br>
                    </p>
                    <p style='font-family: "Handlee", cursive;' class="text-xl font-bold">
                        <a target="_blank" href="https://www.amazon.com.mx/registries/gl/guest-view/31TC71CU16FY6">CLICK AQUÍ</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="section sec3">
        <div class="grid grid-cols-1 md:grid-cols-2" style="text-align: -webkit-center;">
            <div>
                <p class="gallery-text-02">
                    Confirma tu
                </p>
                <p class="gallery-text" style="margin-top: 30px">
                    asistencia
                </p>
                <p style="margin-top: 30px;" class="text-02">
                    Nos encantaría contar con tu presencia en este día especial, por favor confirma tu asistencia lo antes posible
                </p>
            </div>
            <div class="form-asist">
                <div class="m-5">
                    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white label-code">
                        Código de Invitado
                    </label>
                    <input id="code" type="text" class="input-code block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500 text-center">
                </div>
                <div style="margin-top: 20px;">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white label-code">
                        Nombre Completo
                    </label>
                    <input type="text" id="name" class="text-center input-normal bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500">
                </div>
                <div style="margin-top: 10px;">
                    <label for="assists" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white label-code">
                        Número de Asistentes
                    </label>
                    <input value="0" type="number" id="assists" class="text-center input-normal bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500">
                </div>
                <div style="margin-top: 15px;">
                    <button id="save" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        <strong>Enviar</strong>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        AOS.init();
    </script>
</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {

      //===
      // VARIABLES
      //===
      const DATE_TARGET = new Date('03/01/2025 6:30 PM');
      // DOM for render
      const SPAN_DAYS = document.querySelector('span#days');
      const SPAN_HOURS = document.querySelector('span#hours');
      const SPAN_MINUTES = document.querySelector('span#minutes');
      const SPAN_SECONDS = document.querySelector('span#seconds');
      // Milliseconds for the calculations
      const MILLISECONDS_OF_A_SECOND = 1000;
      const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
      const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
      const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24

      //===
      // FUNCTIONS
      //===

      /**
      * Method that updates the countdown and the sample
      */
      function updateCountdown() {
          // Calcs
          const NOW = new Date()
          const DURATION = DATE_TARGET - NOW;
          const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
          const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
          const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
          const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
          // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)

          // Render
          SPAN_DAYS.textContent = REMAINING_DAYS;
          SPAN_HOURS.textContent = REMAINING_HOURS;
          SPAN_MINUTES.textContent = REMAINING_MINUTES;
          SPAN_SECONDS.textContent = REMAINING_SECONDS;
      }

      //===
      // INIT
      //===
      updateCountdown();
      // Refresh every second
      setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
    });

    $("#save").click(function (e) {
        e.preventDefault();
        var code = $('#code').val();
        var name = $('#name').val();
        var assists = $('#assists').val();

        if (code == '' || name == '' || assists == '' || assists == 0) {
            Swal.fire({
                title: 'Campos incompletos',
                text: 'Debes llenar todos los campos del formulario',
                icon: 'error',
                confirmButtonText: 'Cerrar'
            });
        } else {
            var token = '{{csrf_token()}}';
            var data={
                code:code,
                name:name,
                assists:assists,
                _token:token
            };
    
            $.ajax({
                type: "post",
                url: "{{route('store.code')}}",
                data: data,
                success: function (data) {
                    if(data.status) {
                        Swal.fire({
                            title: '¡Gracias por tu confirmación!',
                            text: 'Te esperamos en el evento',
                            icon: 'success',
                            confirmButtonText: 'Cerrar'
                        });
                    } else {
                        Swal.fire({
                            title: 'Lo sentimos',
                            text: 'El código no existe o ya se encuentra en uso',
                            icon: 'error',
                            confirmButtonText: 'Cerrar'
                        });
                    }
                }
            });
        }

    });
  </script>
</html>