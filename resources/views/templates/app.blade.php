<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app-name', 'BURIDA')}}</title>
    <link rel="stylesheet" href="../Template/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
   
   <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Ubuntu:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap');
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

        /* HEADER */
        .top-header{
           padding: 10px 0px;
           background: linear-gradient( #6b6c6d, #5a5c5f);
           text-align: center;
        }
        .top-header .header-content{
            display: flex;
            justify-content: space-between;
           
        }

        .top-header .header-content .icons .icon{
            display: flex;
            justify-content: space-between;
            text-align: center;
        }
        .top-header .header-content .icons .icon a{
            padding: 5px ;
            border: 2px solid #333;
            color: #fff;
        }
        .top-header .header-content .icons .icon a i{
            display: flex;
           font-size: 20px;
           text-align: center;
        }

        .header-content .info{
            display: flex;
            align-items: center;
        }
        .header-content .info a{
            font-size: 17px;
            text-transform: capitalize;
            color: #fff;
            font-weight: 600;
        }

        .header-content .authe{
            display: flex;
            justify-content: space-between;
            text-align: center;
            align-items: center;
        }
        .header-content .authe a{
            font-size: 17px;
            color: #fff;
            font-style: italic;
            padding: 0px 5px;
            font-weight: 600;
        }
        /* navbar */
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
        #about, #about-kokro, #services, #skills, #teams, #contact, footer{
            font-family: 'Poppins', sans-serif;
        }
        .about-mudesko .about-content, .services .serv-content, .skills .skills-content, .teams .teams-content, .contact .contact-content{
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

        /* SKILLS */
        .skills .title::after{
            content: 'My skills';
        }
        .skills .skills-content .column{
            width: calc(50% - 30px);
        }
        .skills .skills-content .left .text{
             font-size: 25px;
             font-weight: 600;
             margin-bottom: 10px;
        }
        .skills .skills-content .left p{
            text-align: justify;
        }
        .skills .skills-content .left a{
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
        .skills .skills-content .left a:hover{
            background: none;
            color: #FF5733;
        }
        .skills .skills-content .right .bars{
            margin-bottom: 15px;
        }
        .skills .skills-content .right .info{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .skills .skills-content .right span{
            font-size: 18px;
            font-weight: 500;
        }
        .skills .skills-content .right .line{
            height: 5px;
            width: 100%;
            background: lightgray;
            position: relative;
        }
        .skills .skills-content .right .line::before{
            content: "";
            position: absolute;
            height: 100%;
            width: 80%;
            left: 0;
            top: 0;
            background: #FF5733;
        }
        .skills .skills-content .right .html::before{
            width: 90%;
        }
        .skills .skills-content .right .css::before{
            width: 80%;
        }
        .skills .skills-content .right .js::before{
            width: 30%;
        }
        .skills .skills-content .right .php::before{
            width: 20%;
        }
        .skills .skills-content .right .mysql::before{
            width: 40%;
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
        /* contact */
        .contact .title::after{
                content: 'get in touch';
        }

        .contact .contact-content .column{
            width: calc(50% - 30px);
        }
        .contact .contact-content .text{
             font-size: 20px;
             font-weight: 600;
             margin-bottom: 10px;
        }

        .contact .contact-content .left .icons{
            margin: 10px 0;
        }

        .contact .contact-content .row{
            display: flex;
            height: 65px;
            align-items: center;
        }

        .contact .contact-content .row .info{
            margin-left: 30px;
        }

         .contact .contact-content .row i{
            font-size: 25px;
            color: #FF5733;
        }

        .contact .contact-content .info .head{
            font-weight: 500;
        }

        .contact .contact-content .info .sub-title{
            color: #333;
        }

        .contact .right form .fields{
            display: flex;
        } 

        .contact .right form .field,
        .contact .right form .fields .field{
            height: 45px;
            width: 100%;
            margin-bottom: 15px;
        }

        .contact .right form .textarea{
           height: 80px;
           width: 100%;
        }
        .contact .right form .name{
            margin-right: 10px;
        } 

        .contact .right form .email{
            margin-left: 10px;
        } 

        .contact .right form .field input,
        .contact .right form .textarea textarea{
            height: 100%;
            width: 100%;
            border: 1px solid lightgrey;
            border-radius: 6px;
            outline: none;
            padding: 0 15px;
            font-size: 17px;
            font-family: 'Poppins', sans-serif;
        }

        .contact .right form .textarea textarea{
            padding-top: 10px;
            resize: none;
        }
        .contact .right form .button{
            height: 47px;
            width: 170px;
        }

        .contact .right form .button button{
            height: 100%;
            width: 100%;
            border: 2px solid #FF5733;
            background: #FF5733;
            color: #fff;
            font-size: 20px;
            font-weight: 500;
            border-radius: 6px;
            cursor: pointer;
            transition:  all 0.3s ease;
        }
        .contact .right form .button button:hover{
            color: #FF5733;
            background: none;
        }

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

        /* STYLING OF RDV   */
        /* barner of template  */
        .barner{
            background: url("/images/list-rdv.png") no-repeat;
        }

        .barner_1{
            background: url("/images/creer-rdv.jpg") no-repeat;
        }

        .ban-rdv{
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            padding: 100px 0 160px 0px;
        }

        .barner-ban{
            display: flex;
            justify-content: center; 
        }
        .barner-ban a{
           font-size: 40px;
           color: #fff;
           font-weight: bold;
        }

        /* flash message  */
        .alert-message{
            display: flex;
            justify-content: center;
            align-items: center;
            background: #1c850e;
            color: #fff;
            margin: 5px;
            padding: 10px;
            border-radius: 15px;
            font-weight: 800px;
            font-weight: bold;
        }
        /* end flash message  */
        
        /* liste des rendez-vous  */
        .section-list-rdv{
            max-width: 100%;
            margin: 5px;
            padding: 10px;
            border: 1px solid #000;
        }
        .section-list-rdv hr{
            height: 5px;
            color: #000;
        }
        .title-list-rdv{
            display: flex;
            justify-content: start;
            font-size: 20px;
            font-weight: bold;
        }

        .form-rdvs{
            display: flex;
            justify-content: center;
        }
        .form-rdvs, .form-list-container a{
            padding: 10px;
        }



        /* creer rendez-vous  */
        .form-creer-section{
            position: relative;
            display: flex;
            justify-content: center;
            height: 50vh;
        }
        .form-container{
            display: flex;
            flex-direction: column;
            width: 20vw;
            padding: 20px;
            border-radius: 25px;
            border: 1px solid #666666;
            box-shadow: 10px 5px 5px 10px rgba(0, 0, 0, 0.06);
        }
        .button-submit{
            display: flex;
            justify-content: center;
        }

        .button-submit button{
            display: flex;
            justify-content: center;
            align-items: center;
            background: #FF5733;
            color: #fff;
            border: 2px solid #FF5733;
            font-weight: 700;
            padding: 10px;
            border-radius: 10px;
            text-transform: uppercase;
            font-size: 13px;
            transition: all 0.3s ease-in-out;
        }
        
        .button-submit button:hover{
            color: #FF5733;
            background: none;
        }

        .form-container .title-rdv a, .title-cellule-details  a{
            color: #ff5733;
            font-weight: 700 ;
        }

        .form-container label, input{
            display: flex;
            justify-content: start;
            width: 100%;
            margin: 2px;
            padding: 2px;
        }

        .form-container label{
            font-family: 'ubuntu';
            font-weight: 500;
        }

        .btn-create-rdv a{
            display: flex;
            justify-content: center;
            align-items: center;
            background: #FF5733;
            color: #fff;
            border: 2px solid #FF5733;
            font-weight: 700;
            padding: 10px;
            border-radius: 10px;
            text-transform: uppercase;
            font-size: 13px;
            transition: all 0.3s ease-in-out;
        }

        .btn-create-rdv a:hover{
            color: #FF5733;
            background: none;
        }

        /* CELLULE STYLING */

        /* list cellules  */
        .section-list-cellules{
            max-width: 100%;
            margin: 5px;
            padding: 10px;
            border: 1px solid #000;
        }

        .title-list-cellules{
            display: flex;
            justify-content: start;
            font-size: 20px;
            font-weight: bold;
        }

        .form-cellules{
            display: flex;
            justify-content: center;
        }
        
        .form-cellules, .form-cellule-container{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-cellules, .form-cellule-container a{
            padding: 10px;
            font-weight: 600;
        }

        .form-cellule-container span{
          background: #ff5733;
          padding: 5px;
          border-radius: 5px;
          font-weight: 800;
          color: #fff;
        }
        /* details cellules  */

        .form-container-details{
            display: flex;
            justify-content: center;
            padding: 5px;
        }

        .form-details{
            display: flex;
            flex-direction: column;
        }

        .bg-details{
            display: flex;
            justify-content: center;
            background: #666666;
        }

         .form-back a{
            display: flex;
            justify-content: center;
            background: #edf2f7;
            color: #ff5733;
            text-transform: capitalize;
            font-weight: 700;
            font-size: 13px;
            margin: 5px;
            border: 1px solid;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <!-- NAVIGATION -->
<div class="scroll-up-btn">
    <i class="fas fa-angle-up"></i>
</div>



    
    <!-- link javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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

    </script>
    @include('templates.navbar')
    @yield('navbar')
    @include('templates.footer')
    @yield('footer')
</body>
</html>
</html>
