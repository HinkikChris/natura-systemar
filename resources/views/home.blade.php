<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>natura</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('asset/favicon.ico') }}" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
        <style>
            header.masthead {
                background: linear-gradient(to bottom, rgba(92, 77, 66, 0.4) 0%, rgba(92, 77, 66, 0.8) 100%), url("{{ asset('asset/images/headerimg.jpg') }}");
            }
        </style>
    </head>
    <body id="inicio">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <img class="navbar-logo" src="{{ asset('asset/images/logo.png') }}" alt="">
                <a class="navbar-brand" href="#inicio">Bienestar Natura</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#revista">Revista</a></li>
                        <li class="nav-item"><a class="nav-link nav-botton" href="#registro">Registro</a></li>
                        <li class="nav-item"><a class="nav-link" href="#privacy">Aviso de Privacidad</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-4 h-100 align-items-center justify-content text-center">
                    <div class="col-lg-6">
                        <img class="logoimg" src="{{ asset('asset/images/biglogo.png') }}" alt="">
                        <h1 class="text-white font-weight-bold">Consultoría de Belleza Natura</h1>
                        <a class="btn btn-primary" href="#registro">Regístrate</a>
                    </div>
                </div>
            </div>
        </header>
        <section class="page-section" id="revista">
            <div class="container px-4 px-lg-5">
                <img class="logoimg img-center" src="{{ asset('asset/images/biglogo.png') }}" alt="">
                <h2 class="text-center mt-0">SER CONSULTOR(A) DE BELLEZA NATURA</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-12 text-aling-center">
                        <p class="container-paragraph">
                            Queremos que puedas desarrollarte profesionalmente y de forma emprendedora, accediendo a entrenamientos y capacitaciones que te ayudarán a hacer crecer tu propio negocio, conociendo a personas maravillosas que te acompañarán en este camino y comercializando productos de alta calidad que se diferencian del mercado y reflejan nuestro cuidado con la Naturaleza. <strong class="strong">GENERA INGRESOS DE FORMA INDEPENDIENTE</strong>administrando tu propio negocio. <strong class="strong">ELIGE TU PROPIO HORARIO DE TRABAJO</strong>, al ser tu propio jefe, decide el horario más conveniente para atender tu negocio. Crece profesionalmente y de forma emprendedora. Accede a entrenamientos y capacitación de forma gratuita. Estas herramientas teán permitirán profesionalizar tu negocio. <strong class="strong">GANA PREMIOS EXCLUSIVOS</strong>. Gana productos, premios y concursa por viajes inolvidables con las campañas de incentivo.
                        </p>
                    </div>
                    <video class="container-video" src="{{ asset('asset/videos/video.mp4') }}" controls></video>
                </div>
            </div>
        </section>
        <!-- Call to action-->
        <section class="page-section" id="registro">
            <div class="banner-container">
                <img class="img-banner" src="{{ asset('asset/images/bannerRegistrate.png') }}" alt="">
                <h2 class="register-text">REGÍSTRATE<br><strong>CON NOSOTROS</strong></h2>
            </div>
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2 class="subtitle-register mt-0">Forma parte de nuestra Red de Consultores Natura Amazonía</h2>
                        <p class="text-muted mb-5">Completa el formulario y una vez realizado el registro, nos pondremos en contacto contigo.</p>
                        <hr class="divider-big"/>
                    </div>
                </div>
                <div class="container mt-5">
                    <div class="form-container">
                        <form action="{{ route('consultor.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nombreCompleto" class="form-label">Nombre Completo:</label>
                                <input type="text" name="nombre_completo" class="form-control" id="nombreCompleto">
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="email" class="form-label">Email:<span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="celular" class="form-label">Celular:<span class="text-danger">*</span></label>
                                    <input type="tel" name="celular" class="form-control" id="celular" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="edad" class="form-label">Edad:<span class="text-danger">*</span></label>
                                    <input type="number" name="edad" class="form-control" id="edad" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="republica" class="form-label">¿De qué parte de la República eres?</label>
                                    <input type="text" name="republica" class="form-control" id="republica">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="consultor" class="form-label">¿Eres o fuiste Consultor(a) Natura?<span class="text-danger">*</span></label>
                                    <input type="text" name="consultor" class="form-control" id="consultor" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="motivo" class="form-label">¿Por qué quieres ser Consultor(a) Natura?<span class="text-danger">*</span></label>
                                    <input type="text" name="motivo" class="form-control" id="motivo" required>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer class="container-footer">
            <div class="footer-content">
                <img class="img-banner" src="{{ asset('asset/images/footer.png') }}" alt="">
                <div class="text-overlay">
                    <h2 class="text-center tittle-footer">Suscríbete a nuestra lista de correo y</h2>
                    <p class="text-center paragraf-footer">entérate de todas nuestras novedades</p>
                    <form action="">
                        <div class="col-md-6 form-group mx-auto text-center">
                            <input type="email" class="form-control w-75 mx-auto" id="email" placeholder="Dirección de email" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-footer">Enviar</button>
                    </form>
                </div>
            </div>        
            <div class="small text-center text-footer">&copy;  2025 por Natura Amazonía</div>
        </footer>        
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/simple-lightbox.min.js') }}"></script>
        <script src="{{ asset('js//script.js') }}"></script>
        <script src="{{ asset('js/sb-forms-0.4.1.js') }}"></script>
        @if(session('success'))
            <script>
                Swal.fire({
                    title: '¡Éxito!',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    timer: 3000,
                    confirmButtonText: 'Aceptar'
                });
            </script>
        @endif
    </body>
</html>
