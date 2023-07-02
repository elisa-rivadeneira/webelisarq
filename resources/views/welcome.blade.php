@extends('layouts.app')
@section('content')
    <!-- <div class="bg">
    </div> -->

    <!-- particles.js container -->
<div id="particles-js">
<div class="heading">
            <h1>Software Developer</h1>
            <h3>PHP / Laravel  / SQL Server / JavaScript / ExtJS /Jquery
            </h3>
        </div>

</div>




<!-- scripts -->
<script src="js/particles.js"></script>
<script src="js/appjs.js"></script>

<!-- stats.js -->
<!-- <script src="js/lib/stats.js"></script> -->
<script>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>

    <div class="container">
        <div class="col-12 text-center pt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="col-12 text-center pt-5">
                    <h1 class="display-one mt-5">Desarrollo de Software a Medida y Desarrollo Web Peru</h1>
                    <p> En esta sección resumo mis proyectos favoritos en los que he trabajado recientemente, así mismo hay una sección para que me conozcas un poco mas. Soy especialista en Desarrollo Web, Marketing Digital y Desarrollo de software a medida en Laravel, entre los trabajos que puedo destacar están sistemas de gestion, así como emisión de protocolos y certificados . En este sitio también encontrarás muchos tips y documentación que actualizaré con el tiempo In sha Allah. Si tiene preguntas o quiere hablar, envíeme un correo electrónico..</p>
                    <br>
                    <a href="/portfolio" class="btn btn-outline-primary">Ver Portafolio</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-12 text-center pt-5">
                    <img src="images/elisarq.jpg">
                </div>
            </div>

        </div>
    </div>

        <div class="row col-md-12 text-center p-0">

           <div class="col-md-6" >
                <div class="card col-12 m-3" >
                    <img class="card-img-top" src="images/desarrollosoftware.jpeg" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Desarrollo de Software</h5>
                        <p class="card-text">Desarrollo software a medida y con los requerimientos específicos de cada empresa. </p>

                    </div>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="card col-12 m-3" >
                    <img class="card-img-top" src="images/paginasweb.png" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Páginas Web</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="card col-12 m-3" >
                    <img class="card-img-top" src="images/marketingdigital.jpg" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Marketing Digital</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="card col-12 m-3">
                    <img class="card-img-top" src="images/clasesvirtuales.jpg" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Crea tu Curso Online</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection
