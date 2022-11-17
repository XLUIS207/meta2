@extends('layouts.app')
@section('content')
@include('layouts.slider2')
<section id="section-work" class="page-section section dark m-0" style="background-color: #DCF4E9;">

    <div class="container">
        <div class="row align-items-center col-mb-50">
            <div class="col-md-6" data-animate="fadeInLeft">
                <div class="heading-block heading-v">
                    <h1 class="text-m">Invierte</h1>
                    <span class="text-subtitulos text-v">y obtén la mejor <br>
                        rentabilidad.</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-box fbox-lg fbox-effect mb-4" data-animate="fadeInRight">
                    <div class="fbox-icon fbox-v">
                        <img src="images/meta/mision.svg" alt="" height="50px">
                        {{-- <a href="#"><i class="icon-screen i-alt"></i></a> --}}
                    </div>
                    <div class="fbox-content">
                        <h2 class="text-titulos">MISIÓN</h2>
                        <p class="text-black text-justify">Somos un empresa que busca inversionistas de capital, para
                            ejecutar proyectos inmobiliarios.</p>
                    </div>
                </div>
                <div class="feature-box fbox-lg fbox-effect mb-4" data-animate="fadeInRight">
                    <div class="fbox-icon fbox-v">
                        <img src="images/meta/vision.svg" alt="" height="50px">
                    </div>
                    <div class="fbox-content">
                        <h2 class="text-titulos">VISIÓN</h2>
                        <p class="text-black text-justify">Ser reconocida como una entidad que brinde confianza y
                            seguridad a la sociedad, generando liderazgo en el sector financiero e inmobiliario en el
                            sur del Perú.</p>
                    </div>
                </div>
                <div class="feature-box fbox-lg fbox-effect" data-animate="fadeInRight">
                    <div class="fbox-icon fbox-v">
                        <img src="images/meta/valores.svg" alt="" height="50px">
                    </div>
                    <div class="fbox-content">
                        <h2 class="text-titulos">VALORES</h2>
                        <ul class="text-black">
                            <li>Transparencia</li>
                            <li>Integridad</li>
                            <li>Confianza</li>
                            <li>Responsabilidad</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-work" class="page-section section dark m-0" style="background-color: #7A38C6;">

    <div class="container">
        <div class="row align-items-center col-mb-50">

            <div class="col-md-6" data-animate="fadeInLeft">
                <div class="heading-block heading-b" style="padding-top: 40px;">
                    <h1 class="text-v">¿Qué podemos <br>
                        hacer por ti?</h1>
                </div>
                <div class="negative">
                    <img src="images/meta/image1.png" alt="Image" data-animate="fadeInRight"
                        class="fadeInRight animated">
                </div>

            </div>
            <div class="col-md-6 text-justify">
                <p class=" text-white">En meta inclusión financiera puedes invertir en nuestros proyectos inmobiliarios,
                    que se encuentran en diferentes etapas de construcción.</p>
                <p class=" text-white">Desde una etapa inicial levantamiento de capital, anteproyectos o en lista cero;
                    hasta proyectos en pozo, construcción o a estrenar.</p>
                <p class=" text-white">Lo más importante es que en META brindamos planes de inversión con las mejores
                    tasas del mercado actual.</p>
            </div>

        </div>
    </div>
</section>

<section id="section-work" class="page-section section dark m-0" style="background-color: #58249E;">

    <div class="container">
        <div class="" data-animate="fadeInLeft">
            <div class="heading-block heading-v">
                <h1 class="">Socios estratégicos</h1>
            </div>
        </div>
        <!-- Portfolio Items
        ============================================= -->
        <div id="portfolio" class="portfolio row grid-container g-0" data-layout="fitRows">

            <!-- Portfolio Item: Start -->
            <article class="portfolio-item col-lg-3 col-md-3 col-sm-6 col-12 pf-media pf-icons"
                data-animate="backInRight">
                <!-- Grid Inner: Start -->
                <div class="grid-inner">
                    <!-- Image: Start -->
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="images/meta/spazio.png" alt="Open Imagination">
                        </a>
                    </div>
                    <!-- Image: End -->
                    <!-- Decription: Start -->
                    <div class="portfolio-desc line-v line-b">
                        <p>Venta de <br>terrenos</p>
                    </div>
                    <!-- Description: Start -->
                </div>
                <!-- Grid Inner: End -->
            </article>
            <!-- Portfolio Item: End -->

            <article class="portfolio-item col-lg-3 col-md-3 col-sm-6 col-12 pf-illustrations"
                data-animate="backInRight">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="images/meta/crece.png" alt="Locked Steel Gate">
                        </a>
                    </div>
                    <div class="portfolio-desc line-v">
                        <p>Venta de <br>departamentos</p>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-lg-3 col-md-3 col-sm-6 col-12 pf-graphics pf-uielements"
                data-animate="backInRight">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="images/meta/habitat.png" alt="Mac Sunglasses">
                        </a>
                    </div>
                    <div class="portfolio-desc line-v">
                        <p>Gestión de Proyectos <br>
                            y Corretaje Inmobiliario</p>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-lg-3 col-md-3 col-sm-6 col-12 pf-graphics pf-uielements"
                data-animate="backInRight">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="images/meta/eldorado.png" alt="Mac Sunglasses">
                        </a>
                    </div>
                    <div class="portfolio-desc line-v">
                        <p>Alimentos</p>
                    </div>
                </div>
            </article>
        </div><!-- #portfolio end -->
    </div>
</section>
@include('layouts.contact')

@endsection
