    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app-name', 'BURIDA-BUREAU-IVOIRIEN-DU-DROIT-D\'AUTEUR')}}</title>
        <link rel="stylesheet" href="../Template/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Ubuntu:wght@300&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,700;1,400&display=swap');
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}


            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                text-decoration: none;
            }
            html{
                scroll-behavior: smooth;
            }

            body {
                font-family: 'Ubuntu', sans-serif;
            }

                /* scroll */
                .scroll-up-btn{
                position: fixed;
                height: 45px;
                width: 42px;
                background: #FF5733;
                right: 30px;
                bottom: 10px;
                text-align: center;
                line-height: 45px;
                color: #fff;
                font-size: 30px;
                border: 2px solid #FF5733;
                border-radius: 6px;
                cursor: pointer;
                opacity: 0;
                pointer-events: none;
                z-index: 9999;
                transition: all 0.3s ease;
            }
        .scroll-up-btn:hover{
            color: #FF5733;
            background: none;
        }
        .scroll-up-btn.show{
            opacity: 1;
            pointer-events: auto;
            bottom: 30px;
        }
            .max-width{
                max-width: 1300px;
                padding: 0 80px;
                margin: auto;
            }


            /* NAVIGATION navbar */
            .navbar{
               position: relative;
               width: 100%;
               background: #FF5733;
               font-family: 'Ubuntu', sans-serif;
               transition: all 0.3s ease;
               z-index: 99;
            }

            .navbar.sticky{
                position: fixed;
                top: 0;
                padding: 15px 0;
                background: #FF5733;
                box-shadow: 0px 3px 6px 3px rgba(0, 0, 0, 0.06);
            }
            .navbar .max-width{
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .navbar .logo a{
                color: #fff;
                font-size: 35px;
                font-weight: 600;
            }
            .navbar .menu > li{
                position: relative;
                list-style: none;
                display: inline-block;
            }
            .navbar .menu > li > a{
                color: #fff;
                font-size: 18px;
                font-weight: 600;
                margin-left: 25px;
                text-transform: uppercase;
            }

            .navbar .menu li ul{
                position: absolute;
                display: none;
                left: 0;
                right: 0;
                top: 100%;
                width: 120px;
                background: lightslategrey;
                text-align: center;
                transition: all 0.7s ease;
                border-radius: 5px;
            }

            .menu >li >ul >li >a {
                text-transform: uppercase;
                font-size: 12px;
                color: #fff;
                cursor: pointer;

            }

            .menu > li > ul > li:hover{
                background: #333;
            }
            .navbar .menu li ul li{
                list-style: none;
                padding: 7px 7px;
                cursor: pointer;
                border-radius: 5px;
                transition: all 0.3s ease;

            }
            .menu li:hover ul{
                display:block;
            }

            .menu-btn{
                color: #fff;
                font-size: 25px;
                cursor: pointer;
                display: none;
            }

            .authe{
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .authe a{
                color: #fff;
                font-size: 18px;
                font-weight: 600;
                margin-left: 25px;
                text-transform: uppercase;
                font-style: italic;
            }
            /* LOGO  */


            /* home slider */
            .home{
                display: flex;
                background: linear-gradient(#FF5733, #5a5c5f);
                height: 100vh;
                min-height: 500px;
                font-family: 'Ubuntu', sans-serif;
            }
            .home .max-width{
                margin: auto 0 auto 40px;
            }

            /* about mudesko */
            section{
                padding: 100px 0;
            }
            section .title{
                position: relative;
                text-align: center;
                font-size: 40px;
                font-weight: 500;
                margin-bottom: 60px;
                padding-bottom: 20px;
                font-family: 'Ubuntu', sans-serif;
            }
            section .title::before{
                content: '';
                position: absolute;
                bottom: 0px;
                left: 50%;
                width: 150px;
                height: 3px;
                background: #111;
                transform: translateX(-50%);
            }
            section .title::after{
                content: '';
                position: absolute;
                bottom: -7px;
                left: 50%;
                font-size: 15px;
                color: #FF5733;
                font-weight: 700;
                background: #fff;
                transform: translateX(-50%);
            }

            #about, #about-kokro, #services, #connexion-social, #skills, #teams, #contact, footer{
                font-family: 'Poppins', sans-serif;
            }

            .about-mudesko .about-content, .services .serv-content, .skills .skills-content, .teams .teams-content, .contact .contact-content, .connexion-social-content{
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
            }

            /* ABOUT MUDESKO */
            .about-mudesko .title::after{
                 content: 'Qui sommes-nous';
            }

            .about-mudesko .about-content .left {
                width: 45%;
            }

            .about-mudesko .about-content .left img{
                height: 400px;
                width: 400px;
                object-fit: cover;
                background: lightgray;
                border-radius: 6px;
            }
            .about-mudesko .about-content .right{
                width: 55%;
            }

            .about-mudesko .about-content .right .text{
                font-size: 25px;
                font-weight: 600;
                margin-bottom: 10px;
            }
            .about-mudesko .about-content .right .text span{
                color: #FF5733;
            }
            .about-mudesko .about-content .right p{
                text-align: justify;
            }
            .about-mudesko .about-content .right .link-mudesko{
               display: inline-block;
               background: #FF5733;
               color: #fff;
               text-transform: uppercase;
               font-size: 13px;
               font-weight: 500;
               padding: 12px 15px;
               margin-top: 20px;
               border-radius: 6px;
               border:  2px solid #FF5733;
               transition: all 0.3s ease-in-out;
            }
            .about-mudesko .about-content .right .link-mudesko:hover{
                color: #FF5733;
                background: none;
            }

            /* About kokro-kouassikro */
            /* services */
            .services, .teams{
                color: #fff;
                background: #111;
            }
            .services .title::before, .teams .title::before{
                background: #fff;
            }
            .services .title::after, .teams .title::after{
                content: 'Nos services';
                background: #111;
            }
            .services .serv-content .card{
                width: calc(33% - 20px);
                background: #222;
                text-align: center;
                border-radius: 6px;
                padding: 20px 25px;
                transition: all .3s ease;
            }
            .services .serv-content .card:hover{
                background: #FF5733;
            }
            .services .serv-content .card .box{
                transition: all .3s ease;
            }
            .services .serv-content .card:hover .box{
                transform: scale(1.05);
            }
            .services .serv-content .card i{
                font-size: 50px;
                color: #FF5733;
                transition: color 0.3s ease;
            }
            .services .serv-content .card:hover i{
                color: #fff;
            }
            .services .serv-content .card .text{
                font-size: 25px;
                font-weight: 500;
                margin: 10px 0 7px 0;
            }

            /* teams */
            .teams .title::after{
                    content: 'my teams';
            }
            .teams .carousel .card{
                background: #222;
                border-radius: 6px;
                padding: 25px 35px;
                text-align: center;
                transition: all 0.3s ease;
            }
            .teams .carousel .card:hover{
                background: #FF5733;
            }
            .teams .carousel .card .box{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center ;
                transition: all 0.3s ease;
            }
            .teams .carousel .card:hover .box{
                transform: scale(1.05);
            }
            .teams .carousel .card .text{
                font-size: 25px;
                font-weight: 500;
                margin: 10px 0 7px 0;
            }
            .teams .carousel .card img{
                height: 150px;
                width: 150px;
                object-fit: cover;
                border-radius: 50%;
                border: 5px solid #FF5733;
            }
            .teams .carousel .card:hover img{
                background: #fff;
            }
            .owl-dots{
                text-align: center;
                margin-top: 20px;
            }
            .owl-dot{
                height: 13px;
                width: 13px;
                margin: 0 5px;
                outline: none !important;
                border-radius: 50%;
                border: 2px solid #FF5733 !important;
            }
            .owl-dot.active{
                width: 35px;
                border-radius: 14px;
            }
            .owl-dot.active,
            .owl-dot:hover{
                background: #FF5733 !important;
            }

            /* CONNEXION  */


            footer{
                display: flex;
                justify-content: center;
                background:  #111;
                padding: 20px 23px;
            }
            footer span{
                color: #fff;
            }
            footer span a{
                color: #FF5733;
                text-decoration: none
            }
            footer span a:hover{
                text-decoration: underline;
            }
            /* responsive media query start */

            @media (max-width: 1300px){
                .home .max-width{
                    margin-left: 0px;
                }
                .menu-btn{
                    display: block;
                    z-index: 999;
                }
                .menu-btn i.active::before{
                    content: "\f00d";
                }
                .navbar .menu{
                    position: fixed;
                    background: #111;
                    height: 100vh;
                    width: 100%;
                    left: -100%;
                    top: 0;
                    text-align: center;
                    padding-top: 80px;
                    transition: all 0.3s ease;
                }
                .navbar .menu.active{
                    left: 0;
                }
                .navbar .menu li{
                    display: block;
                }

                .navbar .menu >li >a{
                    display: inline-block;
                    margin:  20px 0;
                    font-size: 25px;
                }
                .navbar .menu > li >ul > li >a{
                    font-size: 15px;
                }
                .max-width{
                    width: 95%;
                }
            }
            @media (max-width: 1104px){

                .about-mudesko .about-content .left img{
                height: 350px;
                width: 350px;
                }

                .home .max-width{
                    margin-left: 0px;
                }
            }
            @media (max-width: 991px){
                .max-width{
                    padding: 0 50px;
                }
            }
            @media (max-width :  947px) {

                .about-mudesko .about-content .column,
                .contact .contact-content .column{
                    width: 100%;
                }
                .about-mudesko .about-content .left{
                    display: flex;
                    justify-content: center;
                    margin: 0 auto 60px;
                }
                .about-mudesko .about-content .right{
                    flex: 100%;

                }
                .services .serv-content .card{
                    width: calc(50% - 10px);
                    margin-bottom: 20px;
                }

                .skills .skills-content .column,
                .contact .contact-content .column{
                  width: calc(50% - 30px);
                  margin-bottom: 20px;
                }
            }

            @media (max-width: 690px){
                .max-width{
                    width: 75%;
                    padding: 0 23px;
                }
                .about-mudesko .about-content .left img{
                    height: 250px;
                    width: 250px;
                }
                .services .serv-content .card, .skills .skills-content .column,  .contact .contact-content .column{
                    width: 100%;
                }
            }

            /* @media (max-width: 500px){
                .max-width{
                    padding: 0 50px;
                }
            } */

            /* connexion */
            .connexion-social{
               padding: 100px 0;
            }
            .connexion-social{
                background: linear-gradient(#FF5733, #5a5c5f);
                color: #fff;
            }
            .connexion-social-content .title a{
                font-size: 40px;
            }

            .connexion-social-content .form-social{
                font-size: 40px;
            }
        </style>
    </head>
    <body>
        <!-- NAVIGATION -->
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
        <nav class="navbar">
            <div class="max-width">
                <div class="logo"><a href="#">BURI<span>DA</span></a></div>
                <ul class="menu">
                    <li><a href="/">Accueil</a></li>
                    <li><a href="{{route ('rdvs.liste')}}">Prise de rendez-vous</a></li>
                    <li><a href="{{ route('cellules.liste')}}">cellule</a></li>
                    <li><a href="{{ route('bu.liste')}}">bureau</a></li>
                    <li><a href="{{ route('documentalistes.liste')}}">documentaliste</a></li>
                    {{-- <li><a href="#">Devenir membre</a></li> --}}
                </ul>
                <div class="authe">
                    @auth
                        <a href="{{ url('/dashboard') }}">Tableau de bord</a>
                    @else
                        <a href="{{ route('login') }}">Se connecter</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">S'inscrire</a>
                        @endif
                    @endauth
                </div>
                <div class="menu-btn">
                   <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>

     <!-- SLIDER -->
        <section class="home" id="home">
            <div class="max-width">
                <div class="home-content">
                    <div class="text">Bienvenue sur le site du <span>Burida</span></div>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="about-mudesko" id="about">
            <div class="max-width">
                <h2 class="title">A propos </h2>
                <div class="about-content">
                     <div class="column left">
                         <img src="images/presi.png" alt="" srcset="">
                     </div>
                     <div class="column right">
                        <div class="text">Bienvenue au <span class="typing"></span></div>
                       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi ex nam repellat quod culpa, explicabo soluta blanditiis cumque fuga magnam provident id, non vero harum, laborum tempore voluptatum officia eligendi!</p>
                         <a class="link-mudesko" href="" class="link-mudesko hover:text-gray-50">en savoir plus <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                    </div>
                     </div>
                </div>
        </section>

        <!-- END ABOUT -->
        <section>
            <div class="max-width">

            </div>
        </section>
            <!-- OEUVRES -->

            <!-- END OEUVRES -->

        <!-- SERVICES -->
        <section class="services" id="services">
            <div class="max-width">
                <h2 class="title">Services </h2>
                <div class="serv-content">
                    <div class="card">
                        <div class="box">
                            <i class="fas fa-music"></i>
                            <div class="text">Music</div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, distinctio cumque, praesentium qui rerum quas suscipit voluptatibus doloribus aliquid dolore nostrum quia architecto molestias sunt laudantium, repellendus ipsam animi dolores.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <i class="fas fa-video"></i>
                            <div class="text">Audiovisuelle</div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, distinctio cumque, praesentium qui rerum quas suscipit voluptatibus doloribus aliquid dolore nostrum quia architecto molestias sunt laudantium, repellendus ipsam animi dolores.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <i class="fas fa-book"></i>
                            <div class="text">Literrature</div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, distinctio cumque, praesentium qui rerum quas suscipit voluptatibus doloribus aliquid dolore nostrum quia architecto molestias sunt laudantium, repellendus ipsam animi dolores.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <i class="fas fa-chess-board"></i>
                            <div class="text">Art de la scene</div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, distinctio cumque, praesentium qui rerum quas suscipit voluptatibus doloribus aliquid dolore nostrum quia architecto molestias sunt laudantium, repellendus ipsam animi dolores.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <i class="fas fa-film"></i>
                            <div class="text">Art visuel</div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, distinctio cumque, praesentium qui rerum quas suscipit voluptatibus doloribus aliquid dolore nostrum quia architecto molestias sunt laudantium, repellendus ipsam animi dolores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SERVICES -->

        {{-- PROJETS  --}}
        <section id="projets" class="projets">
            <div class="max-width">
                h2.
            </div>
        </section>
        {{-- END PROJETS  --}}

        {{-- CONNECTION --}}
        <div class="connexion-social" id="connexion-social">
            <div class="max-width">
                <div class="connexion-social-content">
                    <div class="title">
                        <a>Soyez toujours connectés</a><br>
                        <span>Suivez-nous sur les differents plateforme </span>
                    </div>
                    <div class="form-social" data-aos="fade-left" data-aos-duration="1000">
                        <a href="https://www.facebook.com/buridaofficiel" target="bank"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/BuridaOfficiel" target="bank"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fab fa-youtube    "></i></a>
                        {{-- <a href="#"><i class="fab fa-youtube"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- END CONNECTION  --}}

        <!-- footer section start -->
        <footer>
            <span>Créer par le <a href="#">BURIDA</a> | <span class="fas fa-copyright"></span>2022 Tous droits reservés </span>
        </footer>
        <!-- link javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="{{asset('js/app.js')}}"></script>

        <script>
        // navigation
       $(document).ready(function () {
           $(window).scroll(function () {
               if (this.scrollY > 20)  {
                   $('.navbar').addClass("sticky");
               } else {
                   $('.navbar').removeClass("sticky");
               }
               if(this.scrollY > 500){
                    $('.scroll-up-btn').addClass("show");
                }
                else{
                    $('.scroll-up-btn').removeClass("show")
                }
           });
        //    navigation menu deroulant

        $('.menu li ul').hide();
        $('.menu li').hover(function () {
                $(this).children("ul").slideDown(0);

            }, function () {
                $(this).children("ul").slideUp(0);
            }
        );
        //    slide-up script
        $('.scroll-up-btn').click(function(){
                $('html').animate({scrollTop: 0});
        });
        //    toogle menu/navbar script
        $('.menu-btn').click(function () {
            $('.navbar .menu').toggleClass("active");
            $('menu-btn i').toggleClass("active");

        });

        // owl carousel

        $('.carousel').owlCarousel({
            margin: 20,
            loop: true,
            autoplayTimeOut: 2000,
            autoplayHoverPause: true,
            responsive :{
                0:{
                    items: 1,
                    nav: false
                },
                600:{
                    items: 2,
                    nav: false
                },
                1000:{
                    items: 3,
                    nav: false
                }
            }
        });

        var typed = new Typed(".typing", {

        strings: ["BURIDA", "BUREAU IVOIRIEN DU DROIT D'AUTEUR"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true,
        });

        var typed = new Typed(".typing-1", {

        strings: ["kokro-kouassikro"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true,
        });

       });

       AOS.init();

        </script>
    </body>
    </html>
</html>
