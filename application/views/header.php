
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fedex - Tu compañia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- GOOGLE API -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzfw1KvVx4RgrJGDJ9FOzVd4tIgS-nDT8&libraries=places&callback=initMap">
    </script>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>plantilla/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plantilla/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>plantilla/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url(); ?>plantilla/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>plantilla/css/style.css" rel="stylesheet">
</head>

<body  style="background-image: url('<?php echo base_url("assets/imagen/logo.gif"); ?>')";
            background-size: cover;
            background-repeat: no-repeat;>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>+012 345 6789</span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>fedex_usuarios@fedex.com</span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Siguenos:</span>
                    <a class="btn btn-link text-light" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="https://twitter.com/?lang=es"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href="https://ec.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="<?php echo site_url(); ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0">BIENVENIDOS</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo site_url();?>/welcome/nosotros" class="nav-item nav-link active">NOSOTROS</a>
                <!-- <a href="about.html" class="nav-item nav-link">About</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SUCURSALES</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="<?php echo site_url(); ?>/sucursales/direcciones" class="dropdown-item">REPORTE GENERAL</a>
                        <a href="<?php echo site_url(); ?>/ecuadores/direccion" class="dropdown-item">REPORTE SUCURSAL 1</a>
                        <a href="<?php echo site_url(); ?>/espanas/direccion" class="dropdown-item">REPORTE SUCURSAL 2</a>
                        <a href="<?php echo site_url(); ?>/estadoss/direccion" class="dropdown-item">REPORTE SUCURSAL 3</a>
                        <a href="<?php echo site_url(); ?>/colombias/direccion" class="dropdown-item">REPORTE SUCURSAL 4</a>
                        <a href="<?php echo site_url(); ?>/panamas/direccion" class="dropdown-item">REPORTE SUCURSAL 5</a>
                    </div>
                </div>
                <!-- <a href="<?php echo site_url();?>/sucursales/direcciones" class="nav-item nav-link">SUCURSALES</a> -->
                <!-- <a href="project.html" class="nav-item nav-link">Projects</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">CLIENTES</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="<?php echo site_url(); ?>/clientes/nuevo" class="dropdown-item">NUEVO</a>
                        <a href="<?php echo site_url(); ?>/clientes/index" class="dropdown-item">LISTADO DE CLIENTES</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ENTREGAS</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="<?php echo site_url(); ?>/destinos/nuevo" class="dropdown-item">NUEVO</a>
                        <a href="<?php echo site_url(); ?>/destinos/index" class="dropdown-item">RUTA DE ENTREGAS</a>
                    </div>
                </div>
                <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
            </div>
            <!-- <a href="" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
    </nav>
    <!-- Navbar End -->
