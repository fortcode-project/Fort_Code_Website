<style>
    /********** Template CSS **********/
:root {
    --primary: #111827;
    --secondary: #15ACE1;
    --light: #F4F7FE;
    --dark: #14183E;
}


/*** Spinner ***/
#spinner {
    opacity: 0;
    visibility: hidden;
    transition: opacity .5s ease-out, visibility 0s linear .5s;
    z-index: 99999;
}

#spinner.show {
    transition: opacity .5s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
}

.back-to-top {
    position: fixed;
    display: none;
    right: 45px;
    bottom: 45px;
    z-index: 99;
}


/*** Heading ***/
h1,
h2,
h3,
.fw-bold {
    font-weight: 700 !important;
}

h4,
h5,
h6,
.fw-medium {
    font-weight: 500 !important;
}


/*** Button ***/
.btn {
    font-weight: 500;
    transition: .5s;
}

.btn-square {
    width: 38px;
    height: 38px;
}

.btn-sm-square {
    width: 32px;
    height: 32px;
}

.btn-lg-square {
    width: 48px;
    height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
    border-radius: 50px;
}


/*** Navbar ***/
.sticky-top {
    top: -150px;
    transition: .5s;
}

.navbar {
    padding: 11px 0 !important;
    height: 75px;
}

.navbar .navbar-nav .nav-link {
    margin-right: 35px;
    padding: 0;
    color: rgba(255, 255, 255, .7);
    outline: none;
}

.navbar .navbar-nav .nav-link:hover,
.navbar .navbar-nav .nav-link.active {
    color: rgba(255, 255, 255, 1);
}

.navbar .dropdown-toggle::after {
    border: none;
    content: "\f107";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    vertical-align: middle;
    margin-left: 8px;
}

@media (max-width: 991.98px) {
    .navbar .navbar-nav {
        padding: 0 15px;
        background: var(--primary);
    }

    .navbar .navbar-nav .nav-link  {
        margin-right: 0;
        padding: 10px 0;
    }
}

@media (min-width: 992px) {
    .navbar .nav-item .dropdown-menu {
        display: block;
        border: none;
        margin-top: 0;
        top: 150%;
        opacity: 0;
        visibility: hidden;
        transition: .5s;
    }

    .navbar .nav-item:hover .dropdown-menu {
        top: 100%;
        visibility: visible;
        transition: .5s;
        opacity: 1;
    }
}


/*** Hero Header ***/
.hero-header {
    margin-top: -75px;
    background: url(../img/bg-hero.png) center center no-repeat;
    background-size: cover;
}

.hero-header .breadcrumb-item+.breadcrumb-item::before {
    color: var(--light);
}


/*** Section Title ***/
.section-title::before {
    position: absolute;
    content: "";
    width: 45px;
    height: 4px;
    bottom: 0;
    left: 0;
    background: var(--dark);
}

.section-title::after {
    position: absolute;
    content: "";
    width: 4px;
    height: 4px;
    bottom: 0;
    left: 50px;
    background: var(--dark);
}

.section-title.text-center::before {
    left: 50%;
    margin-left: -25px;
}

.section-title.text-center::after {
    left: 50%;
    margin-left: 25px;
}

.section-title h6::before,
.section-title h6::after {
    position: absolute;
    content: "";
    width: 10px;
    height: 10px;
    top: 2px;
    left: 0;
    background: rgba(33, 66, 177, .5);
}

.section-title h6::after {
    top: 5px;
    left: 3px;
}


/*** About ***/
.about-img {
    position: relative;
    overflow: hidden;
}

.about-img::after {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: url(../img/bg-about-img.png) top left no-repeat;
    background-size: contain;
}


/*** Service ***/
.service-item {
    position: relative;
    padding: 45px 30px;
    background: #FFFFFF;
    transition: .5s;
}

.service-item:hover {
    background: var(--primary);
}

.service-item .service-icon {
    margin: 0 auto 20px auto;
    width: 90px;
    height: 90px;
    color: var(--primary);
    background: var(--light);
    transition: .5s;
}

.service-item:hover .service-icon {
    background: #FFFFFF;
}

.service-item h5,
.service-item p {
    transition: .5s;
}

.service-item:hover h5,
.service-item:hover p {
    color: #FFFFFF;
}

.service-item a.btn {
    position: relative;
    display: flex;
    color: var(--primary);
    transition: .5s;
    z-index: 1;
}

.service-item:hover a.btn {
    color: var(--primary);
}

.service-item a.btn::before {
    position: absolute;
    content: "";
    width: 35px;
    height: 35px;
    top: 0;
    left: 0;
    border-radius: 35px;
    background: var(--light);
    transition: .5s;
    z-index: -1;
}

.service-item:hover a.btn::before {
    width: 100%;
    background: var(--light);
}


/*** Feature ***/
.feature {
    background: url(../img/bg-hero.png) center center no-repeat;
    background-size: cover;
}


/*** Newsletter ***/
.newsletter {
    background: url(../img/bg-hero.png) center center no-repeat;
    background-size: cover;
}

@media (min-width: 992px) {
    .newsletter .container {
        max-width: 100% !important;
    }

    .newsletter .newsletter-text  {
        padding-right: calc(((100% - 960px) / 2) + .75rem);
    }
}

@media (min-width: 1200px) {
    .newsletter .newsletter-text  {
        padding-right: calc(((100% - 1140px) / 2) + .75rem);
    }
}

@media (min-width: 1400px) {
    .newsletter .newsletter-text  {
        padding-right: calc(((100% - 1320px) / 2) + .75rem);
    }
}


/*** Case Study ***/
.case-item img {
    transition: .5s;
}
  
.case-item:hover img {
    transform: scale(1.2);
}
  
.case-overlay {
    position: absolute;
    padding: 30px;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    background: linear-gradient(rgba(20, 24, 62, 0), var(--dark));
    z-index: 1;
}

.case-overlay small {
    display: inline-block;
    padding: 3px 15px;
    color: #FFFFFF;
    background: rgba(20, 24, 62, .7);
    border-radius: 25px;
    margin-bottom: 15px;
}

.case-overlay span.btn:hover {
    color: var(--primary);
    background: #FFFFFF;
    border-color: #FFFFFF;
}


/*** FAQs ***/
.accordion .accordion-item {
    border: none;
    margin-bottom: 15px;
}

.accordion .accordion-button {
    background: var(--light);
    border-radius: 2px;
}

.accordion .accordion-button:not(.collapsed) {
    color: #FFFFFF;
    background: var(--primary);
    box-shadow: none;
}

.accordion .accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.accordion .accordion-body {
    padding: 15px 0 0 0;
}

</style>