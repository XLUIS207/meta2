@extends('layouts.app')
@section('content')
@include('layouts.slider')
<section id="section-work" class="page-section section dark m-0" style="background-color: #58249E;">
    <div class="heading-block center">
        <h2>Our Works</h2>
        <span>Some of the Awesome Projects we've worked on.</span>
    </div>
    <div class="container">

    </div>
</section>

<section id="section-services" class="page-section section m-0 border-0 overflow-hidden">
    <div class="vertical-middle">
        <div class="container clearfix">

            <div class="row align-items-center col-mb-50" data-animate="bounceInLeft">
                <div class="col-md-6">
                    <div class="heading-block" style="padding-top: 40px;">
                        <h2 class="text-v">Bienvenido a meta</h2>
                        <h1 class="text-m">¿Quiénes somos?</h1>
                    </div>
                    <p class="text-justify">Somos una nueva alternativa de inversión, te ofrecemos una innovadora forma
                        de hacer crecer tu dinero con inversiones inmobiliarias.</p>
                    <p class="text-justify">Somos un grupo de socios estratégicos, conformados por Spazio Inmobiliaria,
                        Crece Constructora & Inmobiliaria, Hábitat Inmobiliaria, El Dorado, Meta inclusión financiera.
                    </p>
                    <p class="text-justify">Nos enfocamos en activos del tipo anteproyectos, que aún están en proyección
                        de construcción o habilitación, dando acceso a planes de inversión accequibles para integrar el
                        capital de proyecto. Con nuestra experiencia interna para la selección y análisis de cada
                        proyecto, reducimos riesgos y maximizando el potencial de retorno.</p>
                </div>

                <div class="col-md-6 text-center">
                    <a href="#myModal1" data-lightbox="inline"><img src="images/meta/video.jpg" alt="Icon"
                            data-animate="zoomIn" class="zoomIn animated"></a>
                    {{-- <a href="#myModal1" data-lightbox="inline" class="button button-large button-rounded">Trigger
                        Modal</a> --}}
                </div>
            </div>

            <div class="row col-mb-50 mt-5">
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box fbox-center fbox-plain border-bottom-0" data-animate="bounceInDown"
                        data-delay="50">
                        <a href="#"><img src="images/meta/spazio_1.png" alt="Icon" data-animate="zoomIn"
                                class="zoomIn animated"></a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box fbox-center fbox-plain border-bottom-0" data-animate="bounceInDown"
                        data-delay="100">
                        <a href="#"><img src="images/meta/crece_1.png" alt="Icon" data-animate="zoomIn"
                                class="zoomIn animated"></a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box fbox-center fbox-plain border-bottom-0" data-animate="bounceInDown"
                        data-delay="150">
                        <a href="#"><img src="images/meta/habitat_1.png" alt="Icon" data-animate="zoomIn"
                                class="zoomIn animated"></a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box fbox-center fbox-plain border-bottom-0" data-animate="bounceInDown"
                        data-delay="200">
                        <a href="#"><img src="images/meta/eldorado_1.png" alt="Icon" data-animate="zoomIn"
                                class="zoomIn animated"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="section-work" class="page-section section dark m-0" style="background-color: #460C8E;">

    <div class="container">
        <div class="row justify-content-center col-mb-50">
            <div class="col-sm-6 col-lg-3">
                <div class="feature-box fbox-center fbox-effect border-bottom-0 fadeIn animated" data-animate="fadeIn">
                    <div class="">
                        <img src="images/meta/millones.svg" alt="" height="100px">
                    </div>
                    <div class="counter left counter-small text-v">s/. <span data-from="10" data-to="136.5"
                            data-refresh-interval="9" data-speed="2000">136.5</span></div>
                    <h5>Millones <br> de inversión</h5>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="feature-box fbox-center fbox-effect border-bottom-0 fadeIn animated" data-animate="fadeIn"
                    data-delay="200">
                    <div class="">
                        <img src="images/meta/proyectos.svg" alt="" height="100px">
                    </div>
                    <div class="counter center counter-small text-v"><span data-from="1" data-to="8"
                            data-refresh-interval="3" data-speed="2000">8</span></div>
                    <h5>Proyectos <br> inmobiliarios</h5>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="feature-box fbox-center fbox-effect border-bottom-0 fadeIn animated" data-animate="fadeIn"
                    data-delay="400">
                    <div class="">
                        <img src="images/meta/entregas.svg" alt="" height="100px">
                    </div>
                    <div class="counter center counter-small text-v">+<span data-from="10" data-to="270"
                            data-refresh-interval="4" data-speed="2000">270</span></div>
                    <h5>Propiedades <br> vendidas</h5>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="section-work" class="page-section section dark m-0" style="background-color: #58249E;">

    <div class="container">
        <div class="heading-block heading-b">
            <h1 class="text-v">Beneficios</h1>
        </div>
        <!-- Portfolio Items
        ============================================= -->
        <div id="portfolio" class="portfolio row grid-container g-0" data-layout="fitRows">

            <!-- Portfolio Item: Start -->
            <article class="portfolio-item col-lg-4 col-md-4 col-sm-6 col-12 pf-media pf-icons">
                <!-- Grid Inner: Start -->
                <div class="grid-inner">
                    <!-- Image: Start -->
                    <div class="portfolio-image beneficio">
                        <a href="portfolio-single.html">
                            <img src="images/meta/rentabilidad.png" alt="rentabilidad">
                        </a>
                    </div>
                </div>
                <!-- Grid Inner: End -->
            </article>
            <!-- Portfolio Item: End -->

            <article class="portfolio-item col-lg-4 col-md-4 col-sm-6 col-12 pf-illustrations">
                <div class="grid-inner">
                    <div class="portfolio-image beneficio">
                        <a href="portfolio-single.html">
                            <img src="images/meta/capital.png" alt="capital">
                        </a>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-lg-4 col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
                <div class="grid-inner">
                    <div class="portfolio-image beneficio">
                        <a href="#">
                            <img src="images/meta/beneficios.png" alt="beneficios">
                        </a>

                    </div>

                </div>
            </article>
        </div><!-- #portfolio end -->
    </div>
</section>

<section id="section-work" class="page-section section dark m-0" style="background-color: #7A38C6;">

    <div class="container">
        <div class="heading-block heading-v">
            <h1 class="">Planes de inversión</h1>
        </div>
        <!-- Portfolio Items
        ============================================= -->
        <div id="portfolio" class="portfolio row grid-container g-0" data-layout="fitRows">

            <!-- Portfolio Item: Start -->
            <article class="portfolio-item col-lg-4 col-md-4 col-sm-6 col-12 pf-media pf-icons">
                <!-- Grid Inner: Start -->
                <div class="grid-inner">
                    <!-- Image: Start -->
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img id="inversion" src="images/meta/bronce.png" alt="bronce">
                        </a>
                    </div>
                </div>
                <!-- Grid Inner: End -->
            </article>
            <!-- Portfolio Item: End -->

            <article class="portfolio-item col-lg-4 col-md-4 col-sm-6 col-12 pf-illustrations">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img id="inversion" src="images/meta/oro.png" alt="oro">
                        </a>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-lg-4 col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="#">
                            <img id="inversion" src="images/meta/plata.png" alt="plata">
                        </a>
                    </div>

                </div>
            </article>
        </div><!-- #portfolio end -->
    </div>
</section>

<section id="section-work" class="page-section section dark m-0" style="background-color: #58249E;">

    <div class="container">
        <div class="heading-block heading-b">
            <h1 class="text-v">Proceso de ser inversionista</h1>
        </div>
        <div class="row justify-content-center col-mb-50">
            <div class="col-sm-6 col-lg-2">
                <div class="feature-box fbox-center fbox-effect border-bottom-0 fadeIn animated" data-animate="fadeIn">
                    <div class="fbox-icon">
                        <img src="images/meta/oficina.svg" alt="" height="50px">
                    </div>
                    <div class="counter left counter-small text-v">0<span data-from="10" data-to="01"
                            data-refresh-interval="4" data-speed="2000">01</span></div>
                    <h5>Oficinas</h5>
                </div>
            </div>

            <div class="col-sm-6 col-lg-2">
                <div class="feature-box fbox-center fbox-effect border-bottom-0 fadeIn animated" data-animate="fadeIn"
                    data-delay="200">
                    <div class="fbox-icon">
                        <img src="images/meta/ejecutivo.svg" alt="" height="50px">
                    </div>
                    <div class="counter center counter-small text-v">0<span data-from="10" data-to="02"
                            data-refresh-interval="4" data-speed="2000">02</span></div>
                    <h5>Ejecutivos</h5>
                </div>
            </div>

            <div class="col-sm-6 col-lg-2">
                <div class="feature-box fbox-center fbox-effect border-bottom-0 fadeIn animated" data-animate="fadeIn"
                    data-delay="400">
                    <div class="fbox-icon">
                        <img src="images/meta/plan.svg" alt="" height="50px">
                    </div>
                    <div class="counter center counter-small text-v">0<span data-from="10" data-to="03"
                            data-refresh-interval="4" data-speed="2000">03</span></div>
                    <h5>Planes</h5>
                </div>
            </div>

            <div class="col-sm-6 col-lg-2">
                <div class="feature-box fbox-center fbox-effect border-bottom-0 fadeIn animated" data-animate="fadeIn"
                    data-delay="600">
                    <div class="fbox-icon">
                        <img src="images/meta/cta.svg" alt="" height="50px">
                    </div>
                    <div class="counter center counter-small text-v">0<span data-from="10" data-to="04"
                            data-refresh-interval="4" data-speed="2000">04</span></div>
                    <h5>CTA</h5>
                </div>
            </div>

            <div class="col-sm-6 col-lg-2">
                <div class="feature-box fbox-center fbox-effect border-bottom-0 fadeIn animated" data-animate="fadeIn"
                    data-delay="800">
                    <div class="fbox-icon">
                        <img src="images/meta/notaria.svg" alt="" height="50px">
                    </div>
                    <div class="counter center counter-small text-v">0<span data-from="10" data-to="05"
                            data-refresh-interval="4" data-speed="2000">05</span></div>
                    <h5>Notaría</h5>
                </div>
            </div>

        </div>
    </div>
</section>

@include('layouts.contact')

<!-- Modal -->
<div class="modal1 mfp-hide" id="myModal1">
    <div class="block mx-auto" style="background-color: rgb(0, 0, 0); max-width: 90%;">
        <div class="text-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tisu2JTYylk"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</div>
@endsection
