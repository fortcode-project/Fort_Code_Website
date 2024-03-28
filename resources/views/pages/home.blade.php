@extends('layouts.site.app')
@section('title', 'Inicial - Fort-Codedev')
@section('content')
    @include('components.style')
    @include('components.navbar')
    @include('components.form')
    @include('components.product')
    @include('sweetalert::alert')

    <section id="hero" class="hero d-flex align-items-center section-bg section-t">
        <div class="container">
            @foreach ($hero as $item)
                <div class="row justify-content-end gy-5">
                    <div class="col-lg-5 order-1 order-lg-1 d-flex flex-column align-items-lg-start text-center text-lg-start"
                        style="text-align: end;">
                        <div class="descri">
                            <h2 data-aos="fade-up">
                                {{ $item->title }}
                            </h2>
                            <p data-aos="fade-up" data-aos-delay="100">
                                {{ $item->description }}.
                            </p>
                            <button style="width: 300px;font-size: 1rem;font-weight: 600" type="button" data-aos="fade-up" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Adira já gratuitamente
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- main -->
    <main id="main">
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">
                    @foreach ($info as $item)
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="why-box text-dark" style="background: var(--color); height: 23rem;">
                                <div style="margin-top: 2.5rem;">
                                    <h3 style="color: var(--letra);">
                                        {{ $item->title }}
                                    </h3>
                                    <p style="color: var(--letra);">
                                        {{ $item->description }}
                                    </p>
                                </div>
                            </div>
                        </div><!-- End Why Box -->
                    @endforeach

                    <div class="col-lg-8 d-flex align-items-center">
                        <div class="row gy-4">
                            @foreach ($details as $item)
                                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                                    <div
                                        class="icon-box d-flex flex-column justify-content-center align-items-center detalhes">
                                        <div style="height: 250px">
                                            <h4 style="color: var(--color);">
                                                {{ $item->title }}
                                            </h4>
                                            <p style="color: var(--color);">
                                                {{ $item->description }}
                                            </p>
                                        </div>

                                        <div>
                                            <a href="#" style="background-color: #0b539a;" class="btn btn-primary"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">Adira já
                                                gratuitamente</a>
                                        </div>
                                    </div>
                                </div><!-- End Icon Box -->
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services-mf pt-5 route">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a fw-bold">
                                Produto Fort-Code
                            </h3>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Website Clássico</h2>
                                <p class="s-description text-center">
                                    Perfeito para quem quer marcar a sua presença online e
                                    profissionalizar o seu ofício na internet.
                                    Empresas, freelancers, criativos
                                </p>
                                <a href="#" style="background-color: #0b539a" class="btn btn-primary px-4 py-2"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 1rem;font-weight: 600">Adira já gratuitamente</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="features">
            <div class="container">

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                    <div class="col-md-5">
                        <img src="{{asset('site/assets/img/pc.png')}}" class="img-fluid" alt="A sua rede está lenta para o carregamento da 
                        imagem ou o seu navegador não suporte para exibir a imagem">
                    </div>
                    <div class="col-md-7">
                        <h3 class="text-capitalize mb-4">Benefícios do Pacote Website Clássico</h3>
                        <ul>
                            <li><i class="bi bi-check"></i> Website com modelo clássico Fort-Code</li>
                            <li><i class="bi bi-check"></i> Painel para controlar o conteúdo do seu website clássico</li>
                            <li><i class="bi bi-check"></i> Website no ar dentro de 5 dias úteis</li>
                            <li><i class="bi bi-check"></i> Hospedagem complementar (permite clientes acederem o seu site)
                            </li>
                            <li><i class="bi bi-check"></i> Sub-domínio Fort-Code (caso não precise ou queira um
                                domínio próprio)</li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

            </div>
        </section>
        <!-- End Features Section -->
        
        <!-- Project Section -->
        <section class="project mb-4" style="margin-top: -100px;">
            <div class="container-fluid ">
                <div class="container justify-content-center">
                    <div class="text-center mb-5">
                        <h1 class="mb-3">Nossos Modelos de Website Clássico</h1>
                        <p style="font-size: 1rem;">Websites clássicos intuitivos para profissionalizar e tornar a sua empresa mais visível na internet</p>
                    </div>

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12 col-md-3 col-lg-4" >
                                <a href="https://portfolio.fortcodedev.com/" target="_blank" class="card">
                                    <img src="{{ asset('site/assets/img/port.png') }}" class="card-img-top">
                                    <div class="card-body">
                                        <h3>Portfólio</h3>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-md-3 col-lg-4">
                                <a href="https://servico.fortcodedev.com/" target="_blank" class="card">
                                    <img src="{{ asset('site/assets/img/servico.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h3>Serviço</h3>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-md-3 col-lg-4">
                                <a href="https://servico.fortcodedev.com/" target="_blank" class="card">
                                    <img src="{{ asset('site/assets/img/produto.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h3>Serviço</h3>
                                    </div>
                                </a>{{-- --}}
                            </div>
                            {{-- <div class="col-12 col-md-3 col-lg-4">
                                <a href="https://produto.fortcodedev.com/" target="_blank" class="card">
                                    <img src="{{ asset('site/assets/img/produto.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h3>Produto</h3>
                                    </div>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-white" id="detalhesite">
            <div class="container-fluid">
                <div class="container">
                    <div style="margin-bottom: 40px;">
                        <h2>Porquê ter um website?</h2>
                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-md-6 col-sm-12 d-flex flex-column align-items-start">
                                <div class="d-flex g-2">
                                    <div style="margin-top: 5.25px;"><i class="bi bi-circle-fill me-2"></i></div>
                                    <div><p class="ps-0">Canal de vendas aberto 24H por dia todo ano</p></div>
                                </div>

                                <div class="d-flex g-2">
                                    <div style="margin-top: 5.25px;"><i class="bi bi-circle-fill me-2"></i></div>
                                    <div><p class="ps-0">Contacto 24H por dia com clientes</p></div>
                                </div>

                                <div class="d-flex g-2">
                                    <div style="margin-top: 5.25px;"><i class="bi bi-circle-fill me-2"></i></div>
                                    <div><p class="ps-0">Maior visibilidade a potenciais clientes</p></div>
                                </div>

                                <div class="d-flex g-2">
                                    <div style="margin-top: 5.25px;"><i class="bi bi-circle-fill me-2"></i></div>
                                    <div><p class="ps-0">Expanção do seu mercado de actuação</p></div>
                                </div>

                                <div class="d-flex g-2">
                                    <div style="margin-top: 5.25px;"><i class="bi bi-circle-fill me-2"></i></div>
                                    <div><p class="ps-0">Promoção focada nos seus produtos e serviços</p></div>
                                </div>

                                <div class="d-flex g-2">
                                    <div style="margin-top: 5.25px;"><i class="bi bi-circle-fill me-2"></i></div>
                                    <div><p class="ps-0">Grande diferencial em relação aos seus concorrentes</p></div>
                                </div>

                                <div class="d-flex g-2">
                                    <div style="margin-top: 5.25px;"><i class="bi bi-circle-fill me-2"></i></div>
                                    <div><p class="ps-0">Mais credibilidade para sua empresa/marca</p></div>
                                </div>

                                <a data-aos="fade-up" href="#" class="btn btn-primary py-3 mt-2"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 300px;font-size: 1rem;font-weight: 600">Adira
                                    já gratuitamente</a>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <img src="{{ asset('site/assets/img/demo.png') }}" style="width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="d-flex">
                    <div>
                        <div class="col-sm-12 section-header d-flex justify-content-md-center justify-content-sm-center">
                            <p class="fw-bold">Somos a Fort-Code</p>
                        </div>

                        <div class="row gy-4">
                            <div class="col-lg-7 position-relative about-img" data-aos="fade-up" data-aos-delay="150">
                            </div>
                            <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                                @foreach ($about as $item)
                                    <div class="content ps-0 ps-lg-5">
                                        <p>
                                            {{ $item->p1 }}
                                        </p>
                                        <ul>
                                            <li><i class="bi bi-check"></i>Fornecer soluções e inovações digitais que
                                                avancem a economia angolana para a prosperidade de todos os angolanos. </li>
                                            <li><i class="bi bi-check"></i>Ser a marca de referência e parceiro de
                                                eleição em serviços digitais.</li>
                                            <li><i class="bi bi-check"></i>Permitir que as empresas angolanas adotem
                                                facilmente soluções digitais.</li>
                                        </ul>
                                        <p>
                                            {{ $item->p2 }}
                                        </p>

                                        <div class="position-relative mt-4">
                                            <img src="{{ (!empty($fundo->image)) ? asset('storage/'.$fundo->image) : '' }}" class="img-fluid"
                                                alt="">
                                            <div class="call-us position-absolute rounded-2">
                                                <a href="#" style="background-color: #0b539a; z-index:999;"
                                                    class="btn btn-primary px-3 py-2 fs-5 cursor-pointer"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Adira já
                                                    gratuitamente</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div>

                        <div id="carouselExampleSlidesOnly" style="margin-left: 5px" class="carousel slide"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($Vertical as $item)
                                    <div class="carousel-item active">
                                        <a href="{{ $item->link }}" target="_blank">
                                            <div style=" height:700px">
                                                <img src="{{ url("/storage/{$item->image}") }}" style="height: 100%" />
                                                <div
                                                    style="position: absolute; top:5px; width:10px; height: 10px; right:28px;">
                                                    <i class="bi bi-info-circle-fill cursor-pointer"
                                                        style="color: #2492ff"
                                                        title="Está Publicidade é de inteira responsabilidade da Fort-Code"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Section -->

        @include('components.contact')
    </main>
    <!-- End main -->

    <div class="container-fluid mb-2">
        <div class="container position-relative">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($Horizontal as $item)
                        <div class="carousel-item active">
                            <a href="{{ $item->link }}" target="_blank">
                                <div style="width: 100%">
                                    <img src="{{ url("/storage/{$item->image}") }}" alt="" style="width:100%">
                                    <div style="position: absolute; top:5px; width:10px; height: 10px; right:28px;"><i
                                            class="bi bi-info-circle-fill cursor-pointer" style="color: #ffffff"
                                            title="Está Publicidade é de inteira responsabilidade da Fort-Code"></i></div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection