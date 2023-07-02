<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="css/style.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>


        body, html {
            height: 100%;
            font-family: 'Nunito';
        }


        .navbar
        {
            background-color: #3e03a6 !important;

        }
        .navbar-brand{
            color: #ffffff !important;
        }

        .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link{
            color: #ffffff !important;
        }

        .bg{
            /* The image used */
            background-image: url("images/humanizing.jpeg");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .fonteli{
            font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace !important;
        }

        .minh-100 {
            height: 100vh;
        }

        .tarjetasbody{
            font-size: 0.7em;
            text-align: justify;
        }

        .bgblog{
            background-image: url("images/bannerblog.jpg");

            /* Full height */


            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .bgcontact{
            background-image: url("images/contact.png");

            /* Full height */


            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1{

            font-size: 1.3em;
        }


    </style>

    <script src="/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>

    <script>


        tinymce.init({
            selector: '.my-editor',
            width: 600,
            height: 300,
            plugins: [
                'advlist','autolink','link','image','lists','charmap','preview','anchor','pagebreak',
                'searchreplace','wordcount','visualblocks','code','fullscreen','insertdatetime','media','nonbreaking',
                'table','emoticons','template','help'
            ],
            toolbar: 'styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
            },
            menubar: 'favs file edit view insert format tools table help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });


    </script>
</head>

<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand fonteli" href="#">Elisa Rivadeneira</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact-us">Contact</a>
            </li>
        </ul>

    </div>
</nav>

<!-- <div class="count-particles">
  <span class="js-count-particles">--</span> particles
</div> -->



@yield('content')
<div class="col-12" height="2%" style="background-color: magenta"></div>
<div  id="footer" class="col-12 footer bg-dark p-3 text-light">
    <div class="col-md-6" >
        Contácto:<br>
        Email: erivadeneiraq@uni.pe<br>
        whatsapp: (+51) 967 717 179

    </div>


</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>





</html>
