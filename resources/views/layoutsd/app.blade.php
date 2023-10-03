<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="Webinning" name="author">
        <!-- {{ asset('assets/main.css') }} -->
        <!-- Theme CSS -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('assets/css/theme.bundle.css') }}" id="stylesheetLTR">
        <link rel="stylesheet" href="{{ asset('assets/css/theme.rtl.bundle.css') }}" id="stylesheetRTL">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" as="style"
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
        <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');"
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">

        <!-- no-JS fallback -->
        <noscript>
            <link rel="stylesheet"
                href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
        </noscript>

        <script>
            // Theme switcher

                let themeSwitcher = document.getElementById('themeSwitcher');

                const getPreferredTheme = () => {
                    if (localStorage.getItem('theme') != null) {
                        return localStorage.getItem('theme');
                    }

                    return document.documentElement.dataset.theme;
                };

                const setTheme = function (theme) {
                    if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                        document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
                    } else {
                        document.documentElement.dataset.theme = theme;
                    }

                    localStorage.setItem('theme', theme);
                };

                const showActiveTheme = theme => {
                    const activeBtn = document.querySelector(`[data-theme-value="${theme}"]`);

                    document.querySelectorAll('[data-theme-value]').forEach(element => {
                        element.classList.remove('active');
                    });

                    activeBtn && activeBtn.classList.add('active');

                // Set button if demo mode is enabled
                    document.querySelectorAll('[data-theme-control="theme"]').forEach(element => {
                        if (element.value == theme) {
                            element.checked = true;
                        }
                    });
                };

                function reloadPage() {
                    window.location = window.location.pathname;
                }


                setTheme(getPreferredTheme());

                if(typeof themeSwitcher != 'undefined') {
                    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                        if(localStorage.getItem('theme') != null) {
                            if (localStorage.getItem('theme') == 'auto') {
                                reloadPage();
                            }
                        }
                    });

                    window.addEventListener('load', () => {
                        showActiveTheme(getPreferredTheme());

                        document.querySelectorAll('[data-theme-value]').forEach(element => {
                            element.addEventListener('click', () => {
                                const theme = element.getAttribute('data-theme-value');

                                localStorage.setItem('theme', theme);
                                reloadPage();
                            })
                        })
                    });
                }
        </script>
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/favicon/favicon.ico') }}" sizes="any">
        {{--
        <link rel="icon" href="./assets/favicon/favicon.ico" sizes="any"> --}}

        <!-- Demo script -->
        <script>
            var themeConfig = {
                        theme: JSON.parse('"light"'),
                        isRTL: JSON.parse('false'),
                        isFluid: JSON.parse('true'),
                        sidebarBehaviour: JSON.parse('"fixed"'),
                        navigationColor: JSON.parse('"inverted"')
                    };

                    var isRTL = localStorage.getItem('isRTL') === 'true',
                        isFluid = localStorage.getItem('isFluid') === 'true',
                        theme = localStorage.getItem('theme'),
                        sidebarSizing = localStorage.getItem('sidebarSizing'),
                        linkLTR = document.getElementById('stylesheetLTR'),
                        linkRTL = document.getElementById('stylesheetRTL'),
                        html = document.documentElement;

                    if (isRTL) {
                        linkLTR.setAttribute('disabled', '');
                        linkRTL.removeAttribute('disabled');
                        html.setAttribute('dir', 'rtl');
                    } else {
                        linkRTL.setAttribute('disabled', '');
                        linkLTR.removeAttribute('disabled');
                        html.removeAttribute('dir');
                    }
        </script>

        <!-- Page Title -->
        <title>@yield('title')</title>
    </head>


    <body>

        <!-- THEME CONFIGURATION -->
        <script>
            let themeAttrs = document.documentElement.dataset;

                    for(let attr in themeAttrs) {
                        if(localStorage.getItem(attr) != null) {
                            document.documentElement.dataset[attr] = localStorage.getItem(attr);

                            if (theme === 'auto') {
                                document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';

                                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                                    e.matches ? document.documentElement.dataset.theme = 'dark' : document.documentElement.dataset.theme = 'light';
                                });
                            }
                        }
                    }
        </script>
        <!-- NAVIGATION -->
        <nav id="mainNavbar" class="navbar navbar-vertical navbar-expand-lg scrollbar bg-dark navbar-dark">

            <!-- Theme configuration (navbar) -->
            <script>
                let navigationColor = localStorage.getItem('navigationColor'),
                                navbar = document.getElementById('mainNavbar');

                            if(navigationColor != null && navbar != null) {
                                if(navigationColor == 'inverted') {
                                    navbar.classList.add('bg-dark', 'navbar-dark');
                                    navbar.classList.remove('bg-white', 'navbar-light');
                                } else {
                                    navbar.classList.add('bg-white', 'navbar-light');
                                    navbar.classList.remove('bg-dark', 'navbar-dark');
                                }
                            }
            </script>
            <div class="container-fluid">
                <!-- Brand -->
                <a class="navbar-brand" href="./index.html">
                    <img src="./assets/images/logo-small.svg" class="navbar-brand-img logo-light logo-small" alt="..."
                        width="19" height="25">
                    <img src="./assets/images/logo.svg" class="navbar-brand-img logo-light logo-large" alt="..." width="125"
                        height="25">

                    <img src="./assets/images/logo-dark-small.svg" class="navbar-brand-img logo-dark logo-small" alt="..."
                        width="19" height="25">
                    <img src="./assets/images/logo-dark.svg" class="navbar-brand-img logo-dark logo-large" alt="..."
                        width="125" height="25">
                </a>

                <!-- Navbar toggler -->
                <a href="javascript: void(0);" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#sidenavCollapse" aria-controls="sidenavCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </a>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenavCollapse">

                    <!-- Navigation -->
                    <ul class="navbar-nav mb-lg-7">
                        {{-- Inicio --}}
                        <li class="nav-item">
                            <a class="nav-link " href="./calendar.html">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon"
                                    height="18" width="18">
                                    <defs>
                                        <style>
                                            .a {
                                                fill: none;
                                                stroke: currentColor;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 1.5px;
                                            }
                                        </style>
                                    </defs>
                                    <title>calendar</title>
                                    <rect class="a" x="0.752" y="3.75" width="22.5" height="19.5" rx="1.5" ry="1.5" />
                                    <line class="a" x1="0.752" y1="9.75" x2="23.252" y2="9.75" />
                                    <line class="a" x1="6.752" y1="6" x2="6.752" y2="0.75" />
                                    <line class="a" x1="17.252" y1="6" x2="17.252" y2="0.75" />
                                </svg>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li class="nav-item w-100">
                            <hr>
                        </li>
                        {{-- Menu Clientes --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link active" href="#dashboardsCollapse" data-bs-toggle="collapse" role="button"
                                aria-expanded="true" aria-controls="dashboardsCollapse">
                                <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.753,13.944v8.25h6v-6a1.5,1.5,0,0,1,1.5-1.5h1.5a1.5,1.5,0,0,1,1.5,1.5v6h6v-8.25"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" />
                                    <path d="M.753,12.444,10.942,2.255a1.5,1.5,0,0,1,2.122,0L23.253,12.444" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" />
                                </svg>
                                <span>Menú Clientes</span>
                            </a>
                            <div class="collapse show" id="dashboardsCollapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="./index.html" class="nav-link ">
                                            <span>Clientes</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./dashboard-ecommerce.html" class="nav-link ">
                                            <span>Encargados</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- MENU PROVEEDORES --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#pagesCollapse" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="pagesCollapse">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon"
                                    height="18" width="18">
                                    <defs>
                                        <style>
                                            .a {
                                                fill: none;
                                                stroke: currentColor;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 1.5px;
                                            }
                                        </style>
                                    </defs>
                                    <title>common-file-double-1</title>
                                    <path class="a" d="M17.25,23.25H3.75a1.5,1.5,0,0,1-1.5-1.5V5.25" />
                                    <rect class="a" x="5.25" y="0.75" width="16.5" height="19.5" rx="1" ry="1" />
                                </svg>


                                <span>Menu Proveedores</span>
                            </a>
                            <div class="collapse " id="pagesCollapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="/proveedores" class="nav-link ">
                                            <span>Proveedores</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./satelites" class="nav-link ">
                                            <span>Satelites</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./planes" class="nav-link ">
                                            <span>Planes</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </li>

                        {{-- Remotas --}}
                        <li class="nav-item">
                            <a class="nav-link " href="./chat.html">
                                <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.25,18.75a1.5,1.5,0,0,1-1.5-1.5V9.75a1.5,1.5,0,0,1,1.5-1.5h10.5a1.5,1.5,0,0,1,1.5,1.5v7.5a1.5,1.5,0,0,1-1.5,1.5h-1.5v4.5l-4.5-4.5Z"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" />
                                    <path
                                        d="M6.75,12.75l-3,3v-4.5H2.25a1.5,1.5,0,0,1-1.5-1.5V2.25A1.5,1.5,0,0,1,2.25.75h10.5a1.5,1.5,0,0,1,1.5,1.5v3"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" />
                                </svg>
                                <span>Remota Satelital</span>
                            </a>
                        </li>
                        {{-- Mikrotik --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#emailCollapse" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="emailCollapse">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon"
                                    height="18" width="18">
                                    <defs>
                                        <style>
                                            .a {
                                                fill: none;
                                                stroke: currentColor;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 1.5px;
                                            }
                                        </style>
                                    </defs>
                                    <title>envelope</title>
                                    <rect class="a" x="0.75" y="4.5" width="22.5" height="15" rx="1.5" ry="1.5" />
                                    <line class="a" x1="15.687" y1="9.975" x2="19.5" y2="13.5" />
                                    <line class="a" x1="8.313" y1="9.975" x2="4.5" y2="13.5" />
                                    <path class="a" d="M22.88,5.014l-9.513,6.56a2.406,2.406,0,0,1-2.734,0L1.12,5.014" />
                                </svg>
                                <span>Mikrotik Satelital</span>
                            </a>
                            <div class="collapse " id="emailCollapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="./inbox.html" class="nav-link ">
                                            <span>Inbox</span>
                                            <span class="badge text-bg-primary badge-circle ms-3">7</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./read-email.html" class="nav-link ">
                                            <span>Read Email</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- Administracion --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#tasksCollapse" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="tasksCollapse">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    class="nav-link-icon" height="18" width="18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M5.25 10.511H10.5" />
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M5.25 14.261H8.25" />
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M5.25 18.011H8.25" />
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="M9.75 23.25H2.25C1.85218 23.25 1.47064 23.092 1.18934 22.8107C0.908035 22.5294 0.75 22.1478 0.75 21.75V6C0.75 5.60218 0.908035 5.22064 1.18934 4.93934C1.47064 4.65804 1.85218 4.5 2.25 4.5H6C6 3.50544 6.39509 2.55161 7.09835 1.84835C7.80161 1.14509 8.75544 0.75 9.75 0.75C10.7446 0.75 11.6984 1.14509 12.4017 1.84835C13.1049 2.55161 13.5 3.50544 13.5 4.5H17.25C17.6478 4.5 18.0294 4.65804 18.3107 4.93934C18.592 5.22064 18.75 5.60218 18.75 6V8.25" />
                                    <path stroke="currentColor" stroke-width="1.5"
                                        d="M9.75 4.51099C9.54289 4.51099 9.375 4.34309 9.375 4.13599C9.375 3.92888 9.54289 3.76099 9.75 3.76099" />
                                    <path stroke="currentColor" stroke-width="1.5"
                                        d="M9.75 4.51099C9.95711 4.51099 10.125 4.34309 10.125 4.13599C10.125 3.92888 9.95711 3.76099 9.75 3.76099" />
                                    <g>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5"
                                            d="M17.25 23.25C20.5637 23.25 23.25 20.5637 23.25 17.25C23.25 13.9363 20.5637 11.25 17.25 11.25C13.9363 11.25 11.25 13.9363 11.25 17.25C11.25 20.5637 13.9363 23.25 17.25 23.25Z" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5"
                                            d="M19.9239 15.505L17.0189 19.379C16.9543 19.4649 16.8721 19.536 16.7776 19.5873C16.6832 19.6387 16.5789 19.6692 16.4717 19.6768C16.3645 19.6844 16.2569 19.6689 16.1562 19.6313C16.0555 19.5937 15.964 19.535 15.8879 19.459L14.3879 17.959" />
                                    </g>
                                </svg>
                                <span>Administracion</span>
                            </a>
                            <div class="collapse " id="tasksCollapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="./cuentas" class="nav-link ">
                                            <span>Cuentas</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./#" class="nav-link ">
                                            <span>Cuentas por Cobrar</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./#" class="nav-link ">
                                            <span>Cuentas por Pagar</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./#" class="nav-link ">
                                            <span>Relizar pago</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./#" class="nav-link ">
                                            <span>Técnicos</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item w-100">
                            <hr>
                        </li>

                        {{-- Configuracion --}}
                        <li class="nav-item">
                            <a href="./docs/index.html" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon"
                                    height="18" width="18">
                                    <path
                                        d="M22.627 14.87 15 22.5l-3.75.75.75-3.75 7.631-7.63a2.113 2.113 0 0 1 2.991 0l.009.008a2.116 2.116 0 0 1-.004 2.992zM8.246 20.25h-6a1.5 1.5 0 0 1-1.5-1.5V2.25a1.5 1.5 0 0 1 1.5-1.5h15a1.5 1.5 0 0 1 1.5 1.5V9m-10.5-3.75h6m-9 4.5h9m-9 4.5h7.5"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" />
                                </svg>
                                <span>Configuracion</span>
                                <span class="badge text-bg-primary rounded-pill ms-auto">v1.4</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./docs/accordion.html" class="nav-link">
                                <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.91,6.953,12.7,1.672a1.543,1.543,0,0,0-1.416,0L1.076,6.953a.615.615,0,0,0,0,1.094l10.209,5.281a1.543,1.543,0,0,0,1.416,0L22.91,8.047a.616.616,0,0,0,0-1.094Z"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" />
                                    <path d="M.758,12.75l10.527,5.078a1.543,1.543,0,0,0,1.416,0L23.258,12.75" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" />
                                    <path d="M.758,17.25l10.527,5.078a1.543,1.543,0,0,0,1.416,0L23.258,17.25" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" />
                                </svg>
                                <span>Perfiles</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./docs/accordion.html" class="nav-link">
                                <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.91,6.953,12.7,1.672a1.543,1.543,0,0,0-1.416,0L1.076,6.953a.615.615,0,0,0,0,1.094l10.209,5.281a1.543,1.543,0,0,0,1.416,0L22.91,8.047a.616.616,0,0,0,0-1.094Z"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" />
                                    <path d="M.758,12.75l10.527,5.078a1.543,1.543,0,0,0,1.416,0L23.258,12.75" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" />
                                    <path d="M.758,17.25l10.527,5.078a1.543,1.543,0,0,0,1.416,0L23.258,17.25" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" />
                                </svg>
                                <span>Usuarios</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End of Navigation -->

                    <!-- Info box -->
                    {{-- <div class="help-box rounded-3 py-5 px-4 text-center mt-auto">
                        <img src="./assets/images/illustrations/upgrade-illustration.svg" alt="..." class="img-fluid mb-4"
                            width="160" height="160">
                        <h6>Upgrade to explore<br> <span class="emphasize">premium</span> features</h6>

                        <!-- Button -->
                        <a class="btn w-100 btn-sm btn-primary" href="javascript: void(0);">Upgrade to Business</a>
                    </div> --}}
                </div>
                <!-- End of Collapse -->
            </div>
        </nav>
        <main>
            <header class="container-fluid d-flex py-6 mb-4">

                <!-- Search -->
                <form class="d-none d-md-inline-block me-auto">
                    <div class="input-group input-group-merge">

                        <!-- Input -->
                        <input type="text" class="form-control bg-light-green border-light-green w-250px"
                            placeholder="Search..." aria-label="Search for any term">

                        <!-- Button -->
                        <span class="input-group-text bg-light-green border-light-green p-0">

                            <!-- Button -->
                            <button class="btn btn-primary rounded-2 w-30px h-30px p-0 mx-1" type="button"
                                aria-label="Search button">
                                <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.750 9.812 A9.063 9.063 0 1 0 18.876 9.812 A9.063 9.063 0 1 0 0.750 9.812 Z"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" transform="translate(-3.056 4.62) rotate(-23.025)" />
                                    <path d="M16.221 16.22L23.25 23.25" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                </svg>
                            </button>
                        </span>
                    </div>
                </form>

                <!-- Top buttons -->
                <div class="d-flex align-items-center ms-auto me-n1 me-lg-n2">

                    <!-- Dropdown -->
                    <div class="dropdown" id="themeSwitcher">
                        <a href="javascript: void(0);"
                            class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px link-secondary"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            data-bs-offset="0,0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="18" width="18">
                                <g>
                                    <path
                                        d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z"
                                        style="fill: currentColor" />
                                    <path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z"
                                        style="fill: currentColor" />
                                    <path
                                        d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z"
                                        style="fill: currentColor" />
                                    <path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z" style="fill: currentColor" />
                                    <path
                                        d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z"
                                        style="fill: currentColor" />
                                    <path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z"
                                        style="fill: currentColor" />
                                    <path
                                        d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z"
                                        style="fill: currentColor" />
                                    <path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z" style="fill: currentColor" />
                                    <path
                                        d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z"
                                        style="fill: currentColor" />
                                </g>
                            </svg>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <button type="button" class="dropdown-item active" data-theme-value="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18"
                                        width="18">
                                        <g>
                                            <path
                                                d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z"
                                                style="fill: currentColor" />
                                            <path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z"
                                                style="fill: currentColor" />
                                            <path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z"
                                                style="fill: currentColor" />
                                            <path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z"
                                                style="fill: currentColor" />
                                            <path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z"
                                                style="fill: currentColor" />
                                        </g>
                                    </svg>
                                    Light mode
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item" data-theme-value="dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18"
                                        width="18">
                                        <path
                                            d="M19.57,23.34a1,1,0,0,0,0-1.9,9.94,9.94,0,0,1,0-18.88,1,1,0,0,0,.68-.94,1,1,0,0,0-.68-.95A11.58,11.58,0,0,0,8.88,2.18,12.33,12.33,0,0,0,3.75,12a12.31,12.31,0,0,0,5.11,9.79A11.49,11.49,0,0,0,15.61,24,12.55,12.55,0,0,0,19.57,23.34ZM10,20.17A10.29,10.29,0,0,1,5.75,12a10.32,10.32,0,0,1,4.3-8.19A9.34,9.34,0,0,1,15.59,2a.17.17,0,0,1,.17.13.18.18,0,0,1-.07.2,11.94,11.94,0,0,0-.18,19.21.25.25,0,0,1-.16.45A9.5,9.5,0,0,1,10,20.17Z"
                                            style="fill: currentColor" />
                                    </svg>
                                    Dark mode
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item" data-theme-value="auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18"
                                        width="18">
                                        <path
                                            d="M24,12a1,1,0,0,0-1-1H19.09a.51.51,0,0,1-.49-.4,6.83,6.83,0,0,0-.94-2.28.5.5,0,0,1,.06-.63l2.77-2.76a1,1,0,1,0-1.42-1.42L16.31,6.28a.5.5,0,0,1-.63.06A6.83,6.83,0,0,0,13.4,5.4a.5.5,0,0,1-.4-.49V1a1,1,0,0,0-2,0V4.91a.51.51,0,0,1-.4.49,6.83,6.83,0,0,0-2.28.94.5.5,0,0,1-.63-.06L4.93,3.51A1,1,0,0,0,3.51,4.93L6.28,7.69a.5.5,0,0,1,.06.63A6.83,6.83,0,0,0,5.4,10.6a.5.5,0,0,1-.49.4H1a1,1,0,0,0,0,2H4.91a.51.51,0,0,1,.49.4,6.83,6.83,0,0,0,.94,2.28.5.5,0,0,1-.06.63L3.51,19.07a1,1,0,1,0,1.42,1.42l2.76-2.77a.5.5,0,0,1,.63-.06,6.83,6.83,0,0,0,2.28.94.5.5,0,0,1,.4.49V23a1,1,0,0,0,2,0V19.09a.51.51,0,0,1,.4-.49,6.83,6.83,0,0,0,2.28-.94.5.5,0,0,1,.63.06l2.76,2.77a1,1,0,1,0,1.42-1.42l-2.77-2.76a.5.5,0,0,1-.06-.63,6.83,6.83,0,0,0,.94-2.28.5.5,0,0,1,.49-.4H23A1,1,0,0,0,24,12Zm-8.74,2.5A5.76,5.76,0,0,1,9.5,8.74a5.66,5.66,0,0,1,.16-1.31A.49.49,0,0,1,10,7.07a5.36,5.36,0,0,1,1.8-.31,5.47,5.47,0,0,1,5.46,5.46,5.36,5.36,0,0,1-.31,1.8.49.49,0,0,1-.35.32A5.53,5.53,0,0,1,15.26,14.5Z"
                                            style="fill: currentColor" />
                                    </svg>
                                    Auto
                                </button>
                            </li>
                        </ul>
                    </div>

                    <!-- Separator -->
                    <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

                    <!-- Dropdown -->
                    <div class="dropdown">
                        <a href="javascript: void(0);"
                            class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            data-bs-offset="0,0">
                            <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img"
                                    src="./assets/images/flags/1x1/us.svg" alt="..." width="18" height="18"></span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <h6 class="dropdown-header text-uppercase">Seleccione un lenguaje</h6>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="dropdown-item active">
                                    <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img"
                                            src="./assets/images/flags/1x1/us.svg" alt="..." width="18"
                                            height="18"></span><span class="text-truncate ms-2">Inglés (US)</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="dropdown-item">
                                    <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img"
                                            src="./assets/images/flags/1x1/gb.svg" alt="..." width="18"
                                            height="18"></span><span class="text-truncate ms-2">Inglés (UK)</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="dropdown-item">
                                    <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img"
                                            src="./assets/images/flags/1x1/es.svg" alt="..." width="18"
                                            height="18"></span><span class="text-truncate ms-2">Español</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="dropdown-item">
                                    <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img"
                                            src="./assets/images/flags/1x1/fr.svg" alt="..." width="18"
                                            height="18"></span><span class="text-truncate ms-2">Francés</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="dropdown-item">
                                    <span class="avatar avatar-circle avatar-xxs"><img class="avatar-img"
                                            src="./assets/images/flags/1x1/de.svg" alt="..." width="18"
                                            height="18"></span><span class="text-truncate ms-2">Alemán</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Separator -->
                    <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

                    <!-- Button -->
                    <a class="d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px position-relative link-secondary"
                        data-bs-toggle="offcanvas" href="#offcanvasNotifications" role="button"
                        aria-controls="offcanvasNotifications">
                        <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10,21.75a2.087,2.087,0,0,0,4.005,0" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M12 3L12 0.75" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.5" />
                            <path
                                d="M12,3a7.5,7.5,0,0,1,7.5,7.5c0,7.046,1.5,8.25,1.5,8.25H3s1.5-1.916,1.5-8.25A7.5,7.5,0,0,1,12,3Z"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" />
                        </svg>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger">
                            20+<span class="visually-hidden">unread messages</span>
                        </span>
                    </a>

                    <!-- Notifications offcanvas -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNotifications"
                        aria-labelledby="offcanvasNotificationsLabel">
                        <div class="offcanvas-header px-5">
                            <h3 class="offcanvas-title" id="offcanvasNotificationsLabel">Notifications</h3>

                            <div class="d-flex align-items-start">
                                <div class="dropdown">
                                    <a href="javascript: void(0);"
                                        class="dropdown-toggle no-arrow w-20px h-20px me-2 text-body" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="16" width="16">
                                            <g>
                                                <circle cx="3.25" cy="12" r="3.25" style="fill: currentColor" />
                                                <circle cx="12" cy="12" r="3.25" style="fill: currentColor" />
                                                <circle cx="20.75" cy="12" r="3.25" style="fill: currentColor" />
                                            </g>
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="javascript: void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="me-2 text-secondary" height="14" width="14">
                                                    <g>
                                                        <path
                                                            d="M23.22,2.06a1.49,1.49,0,0,0-2,.59l-8.5,15.43L6.46,11.29a1.5,1.5,0,1,0-2.21,2l7.64,8.34a1.52,1.52,0,0,0,2.42-.29L23.81,4.1A1.5,1.5,0,0,0,23.22,2.06Z"
                                                            style="fill: currentColor" />
                                                        <path
                                                            d="M2.61,14.63a1.5,1.5,0,0,0-2.22,2l4.59,5a1.52,1.52,0,0,0,2.11.09,1.49,1.49,0,0,0,.1-2.12Z"
                                                            style="fill: currentColor" />
                                                        <path
                                                            d="M10.3,13a1.41,1.41,0,0,0,2-.54L16.89,4.1a1.5,1.5,0,1,0-2.62-1.45L9.68,11A1.41,1.41,0,0,0,10.3,13Z"
                                                            style="fill: currentColor" />
                                                    </g>
                                                </svg>
                                                Mark as all read
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript: void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="me-2 text-secondary" height="14" width="14">
                                                    <g>
                                                        <path
                                                            d="M21.5,2.5H2.5a2,2,0,0,0-2,2v3a1,1,0,0,0,1,1h21a1,1,0,0,0,1-1v-3A2,2,0,0,0,21.5,2.5Z"
                                                            style="fill: currentColor" />
                                                        <path
                                                            d="M21.5,10H2.5a1,1,0,0,0-1,1v8.5a2,2,0,0,0,2,2h17a2,2,0,0,0,2-2V11A1,1,0,0,0,21.5,10Zm-6.25,3.5A1.25,1.25,0,0,1,14,14.75H10a1.25,1.25,0,0,1,0-2.5h4A1.25,1.25,0,0,1,15.25,13.5Z"
                                                            style="fill: currentColor" />
                                                    </g>
                                                </svg>
                                                Archive all
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript: void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="me-2 text-secondary" height="14" width="14">
                                                    <g>
                                                        <path
                                                            d="M21,19.5a1,1,0,0,0,0-2A1.5,1.5,0,0,1,19.5,16V11.14a8.65,8.65,0,0,0-.4-2.62l-11,11Z"
                                                            style="fill: currentColor" />
                                                        <path
                                                            d="M14.24,21H9.76a.25.25,0,0,0-.24.22,2.64,2.64,0,0,0,0,.28,2.5,2.5,0,0,0,5,0,2.64,2.64,0,0,0,0-.28A.25.25,0,0,0,14.24,21Z"
                                                            style="fill: currentColor" />
                                                        <path
                                                            d="M1,24a1,1,0,0,0,.71-.28l22-22a1,1,0,0,0,0-1.42,1,1,0,0,0-1.42,0l-5,5A7.31,7.31,0,0,0,13,3.07V1a1,1,0,0,0-2,0V3.07a8,8,0,0,0-6.5,8.07V16A1.5,1.5,0,0,1,3,17.5a1,1,0,0,0,0,2h.09L.29,22.29a1,1,0,0,0,0,1.42A1,1,0,0,0,1,24Z"
                                                            style="fill: currentColor" />
                                                    </g>
                                                </svg>
                                                Disable notifications
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript: void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="me-2 text-secondary" height="14" width="14">
                                                    <g>
                                                        <rect x="4.25" y="4.5" width="5.75" height="7.25" rx="1.25"
                                                            style="fill: currentColor" />
                                                        <path
                                                            d="M24,10a3,3,0,0,0-3-3H19V2.5a2,2,0,0,0-2-2H2a2,2,0,0,0-2,2V20a3.5,3.5,0,0,0,3.5,3.5h17A3.5,3.5,0,0,0,24,20ZM3.5,21.5A1.5,1.5,0,0,1,2,20V3a.5.5,0,0,1,.5-.5h14A.5.5,0,0,1,17,3V20a3.51,3.51,0,0,0,.11.87.5.5,0,0,1-.09.44.49.49,0,0,1-.39.19ZM22,20a1.5,1.5,0,0,1-3,0V9.5a.5.5,0,0,1,.5-.5H21a1,1,0,0,1,1,1Z"
                                                            style="fill: currentColor" />
                                                        <rect x="12" y="6.05" width="3.5" height="2" rx="0.75"
                                                            style="fill: currentColor" />
                                                        <rect x="12" y="10.05" width="3.5" height="2" rx="0.75"
                                                            style="fill: currentColor" />
                                                        <rect x="4" y="14.05" width="11.5" height="2" rx="0.75"
                                                            style="fill: currentColor" />
                                                        <rect x="4" y="18.05" width="9" height="2" rx="0.75"
                                                            style="fill: currentColor" />
                                                    </g>
                                                </svg>
                                                What's new?
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Button -->
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                        </div>

                        <div class="offcanvas-body p-0">
                            <div class="list-group list-group-flush">
                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="./assets/images/profiles/profile-28.jpeg" alt="..." class="avatar-img"
                                                width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Daniel</h5>
                                                <small class="text-muted">10 minutes ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">RE: Email pre-population from external source</p>
                                                <small class="text-secondary">Not sure if we'll need any further instruction
                                                    on how to utilise the encoded ID in links from the new email broadcast
                                                    tool.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <span class="avatar-title text-bg-info-soft">M</span>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Mochahost.com</h5>
                                                <small class="text-muted">14 minutes ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Customer invoice</p>
                                                <small class="text-secondary">This is a notice that an invoice has been
                                                    generated on 05/14/2022.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="./assets/images/profiles/profile-26.jpeg" alt="..." class="avatar-img"
                                                width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Harry</h5>
                                                <small class="text-muted">32 minutes ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Farewell card</p>
                                                <small class="text-secondary">Hi everyone, thanks to all who have already
                                                    signed and contributed to Ellie's leaving card.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="./assets/images/profiles/profile-20.jpeg" alt="..." class="avatar-img"
                                                width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Gavin</h5>
                                                <small class="text-muted">55 minutes ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Weekly cath up</p>
                                                <small class="text-secondary">Let's see how your emails performed in the
                                                    past week.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="./assets/images/profiles/profile-24.jpeg" alt="..." class="avatar-img"
                                                width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Pamela - HR</h5>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">New starter</p>
                                                <small class="text-secondary">I wanted to introduce Alan to you all, who
                                                    starts today in the Operations Team as our new Global Payroll & Benefits
                                                    Manager.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="./assets/images/profiles/profile-13.jpeg" alt="..." class="avatar-img"
                                                width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">James</h5>
                                                <small class="text-muted">2 hours ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Looking for newsletter analyst</p>
                                                <small class="text-secondary">Good morning Brian, I hope you can help with
                                                    the following. I am looking for somebody who can help us create stronger
                                                    newsletters.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <span class="avatar-title text-bg-primary-soft">S</span>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">service.paypal.com</h5>
                                                <small class="text-muted">3 hours ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">You have a Payout!</p>
                                                <small class="text-secondary">Please note that it may take a little while
                                                    for this payment to appear in the Activity section of your
                                                    account.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <span class="avatar-title text-bg-primary-soft">C</span>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">CookieYes</h5>
                                                <small class="text-muted">5 hours ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Welcome to CookieYes!</p>
                                                <small class="text-secondary">Welcome to CookieYes! Thank you for creating
                                                    an account with us.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="./assets/images/profiles/profile-12.jpeg" alt="..." class="avatar-img"
                                                width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Andrew</h5>
                                                <small class="text-muted">6 hours ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Congratulations! - and thank you</p>
                                                <small class="text-secondary">Thank you so much for continuing to leave no
                                                    stone unturned in pursuit of new milestones of success.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="./assets/images/profiles/profile-11.jpeg" alt="..." class="avatar-img"
                                                width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Helen</h5>
                                                <small class="text-muted">9 hours ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Bank Holidays season starts tomorrow</p>
                                                <small class="text-secondary">Our office will be closed on these days, as it
                                                    will also be on Friday 6 May.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="./assets/images/profiles/profile-09.jpeg" alt="..." class="avatar-img"
                                                width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Tiffany</h5>
                                                <small class="text-muted">1 day ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">External meetings and events</p>
                                                <small class="text-secondary">We have updated our external meeting and
                                                    events protocol. Please have a look at the office board.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <span class="avatar-title text-bg-danger-soft">II</span>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Ionos Info</h5>
                                                <small class="text-muted">2 days ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Recommend us to earn attractive commissions</p>
                                                <small class="text-secondary">Happy with your product or service? Sign up
                                                    for the IONOS Referral Program to recommend us to your business
                                                    partners, friends or family. We'll reward you with attractive
                                                    commissions when they place an order.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="./assets/images/profiles/profile-12.jpeg" alt="..." class="avatar-img"
                                                width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Edward</h5>
                                                <small class="text-muted">3 days ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Website change request</p>
                                                <small class="text-secondary">Please add video overlay option to microsite
                                                    header image</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <span class="avatar-title text-bg-primary">BT</span>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Bootstrap Themes</h5>
                                                <small class="text-muted">3 days ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">[Bootstrap Themes] New order (123456)!</p>
                                                <small class="text-secondary">You've received the following order from
                                                    alansmith</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="./assets/images/profiles/profile-08.jpeg" alt="..." class="avatar-img"
                                                width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Greg</h5>
                                                <small class="text-muted">4 days ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Greg Smith (Jira) 2</p>
                                                <small class="text-secondary">[JIRA] (WEB-1022) Add Full Width Video Content
                                                    Block to microsites</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="./assets/images/profiles/profile-07.jpeg" alt="..." class="avatar-img"
                                                width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Michael</h5>
                                                <small class="text-muted">5 days ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">Hard drive limit</p>
                                                <small class="text-secondary">Your hard drive is close to its storage cap.
                                                    Once exceeded, you can't add new items or sync changes.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <span class="avatar-title text-bg-info">RC</span>
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Rave Coffee</h5>
                                                <small class="text-muted">6 days ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">It's Double Points - ⏰ 24 hours only</p>
                                                <small class="text-secondary">Login to your Rave account to place your order
                                                    and you will automatically earn double points on every $ spent.</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="avatar avatar-circle avatar-xs me-2">
                                            <img src="./assets/images/profiles/profile-03.jpeg" alt="..." class="avatar-img"
                                                width="30" height="30">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">John</h5>
                                                <small class="text-muted">7 days ago</small>
                                            </div>

                                            <div class="d-flex flex-column">
                                                <p class="mb-1">John Po (Jira)</p>
                                                <small class="text-secondary">Improving slide arrows and indicators on gift
                                                    impact, testimonial and victories module</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <a href="javascript: void(0);"
                            class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px link-secondary"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            data-bs-offset="0,0">
                            <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.250 12.000 A3.750 3.750 0 1 0 15.750 12.000 A3.750 3.750 0 1 0 8.250 12.000 Z"
                                    fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" />
                                <path d="M17.119 20.301L12.529 15.711" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                <path d="M15.711 12.53L20.301 17.119" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                <path d="M3.699 17.119L8.289 12.529" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                <path d="M11.471 15.712L6.881 20.301" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                <path d="M6.881 3.7L11.471 8.289" fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5" />
                                <path d="M8.289 11.471L3.699 6.881" fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5" />
                                <path d="M20.301 6.881L15.711 11.471" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                <path d="M12.529 8.289L17.119 3.7" fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5" />
                                <path d="M2.250 12.000 A9.750 9.750 0 1 0 21.750 12.000 A9.750 9.750 0 1 0 2.250 12.000 Z"
                                    fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" />
                            </svg>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end w-300px h-250px overflow-auto scrollbar">
                            <h6 class="dropdown-header text-uppercase">Apps & Services</h6>

                            <div class="py-4 px-5">
                                <div class="row">
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <a href="javascript: void(0);"
                                            class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                            <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                                <svg class="avatar-img mx-auto" enable-background="new 0 0 2447.6 2452.5"
                                                    viewBox="0 0 2447.6 2452.5" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-rule="evenodd" fill-rule="evenodd">
                                                        <path
                                                            d="m897.4 0c-135.3.1-244.8 109.9-244.7 245.2-.1 135.3 109.5 245.1 244.8 245.2h244.8v-245.1c.1-135.3-109.5-245.1-244.9-245.3.1 0 .1 0 0 0m0 654h-652.6c-135.3.1-244.9 109.9-244.8 245.2-.2 135.3 109.4 245.1 244.7 245.3h652.7c135.3-.1 244.9-109.9 244.8-245.2.1-135.4-109.5-245.2-244.8-245.3z"
                                                            fill="#36c5f0"></path>
                                                        <path
                                                            d="m2447.6 899.2c.1-135.3-109.5-245.1-244.8-245.2-135.3.1-244.9 109.9-244.8 245.2v245.3h244.8c135.3-.1 244.9-109.9 244.8-245.3zm-652.7 0v-654c.1-135.2-109.4-245-244.7-245.2-135.3.1-244.9 109.9-244.8 245.2v654c-.2 135.3 109.4 245.1 244.7 245.3 135.3-.1 244.9-109.9 244.8-245.3z"
                                                            fill="#2eb67d"></path>
                                                        <path
                                                            d="m1550.1 2452.5c135.3-.1 244.9-109.9 244.8-245.2.1-135.3-109.5-245.1-244.8-245.2h-244.8v245.2c-.1 135.2 109.5 245 244.8 245.2zm0-654.1h652.7c135.3-.1 244.9-109.9 244.8-245.2.2-135.3-109.4-245.1-244.7-245.3h-652.7c-135.3.1-244.9 109.9-244.8 245.2-.1 135.4 109.4 245.2 244.7 245.3z"
                                                            fill="#ecb22e"></path>
                                                        <path
                                                            d="m0 1553.2c-.1 135.3 109.5 245.1 244.8 245.2 135.3-.1 244.9-109.9 244.8-245.2v-245.2h-244.8c-135.3.1-244.9 109.9-244.8 245.2zm652.7 0v654c-.2 135.3 109.4 245.1 244.7 245.3 135.3-.1 244.9-109.9 244.8-245.2v-653.9c.2-135.3-109.4-245.1-244.7-245.3-135.4 0-244.9 109.8-244.8 245.1 0 0 0 .1 0 0"
                                                            fill="#e01e5a"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            Slack
                                        </a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-end">
                                        <a href="javascript: void(0);"
                                            class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                            <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                                <svg class="avatar-img mx-auto" viewBox="0 0 256 249"
                                                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet">
                                                    <g fill="#161614">
                                                        <path
                                                            d="M127.505 0C57.095 0 0 57.085 0 127.505c0 56.336 36.534 104.13 87.196 120.99 6.372 1.18 8.712-2.766 8.712-6.134 0-3.04-.119-13.085-.173-23.739-35.473 7.713-42.958-15.044-42.958-15.044-5.8-14.738-14.157-18.656-14.157-18.656-11.568-7.914.872-7.752.872-7.752 12.804.9 19.546 13.14 19.546 13.14 11.372 19.493 29.828 13.857 37.104 10.6 1.144-8.242 4.449-13.866 8.095-17.05-28.32-3.225-58.092-14.158-58.092-63.014 0-13.92 4.981-25.295 13.138-34.224-1.324-3.212-5.688-16.18 1.235-33.743 0 0 10.707-3.427 35.073 13.07 10.17-2.826 21.078-4.242 31.914-4.29 10.836.048 21.752 1.464 31.942 4.29 24.337-16.497 35.029-13.07 35.029-13.07 6.94 17.563 2.574 30.531 1.25 33.743 8.175 8.929 13.122 20.303 13.122 34.224 0 48.972-29.828 59.756-58.22 62.912 4.573 3.957 8.648 11.717 8.648 23.612 0 17.06-.148 30.791-.148 34.991 0 3.393 2.295 7.369 8.759 6.117 50.634-16.879 87.122-64.656 87.122-120.973C255.009 57.085 197.922 0 127.505 0" />
                                                        <path
                                                            d="M47.755 181.634c-.28.633-1.278.823-2.185.389-.925-.416-1.445-1.28-1.145-1.916.275-.652 1.273-.834 2.196-.396.927.415 1.455 1.287 1.134 1.923M54.027 187.23c-.608.564-1.797.302-2.604-.589-.834-.889-.99-2.077-.373-2.65.627-.563 1.78-.3 2.616.59.834.899.996 2.08.36 2.65M58.33 194.39c-.782.543-2.06.034-2.849-1.1-.781-1.133-.781-2.493.017-3.038.792-.545 2.05-.055 2.85 1.07.78 1.153.78 2.513-.019 3.069M65.606 202.683c-.699.77-2.187.564-3.277-.488-1.114-1.028-1.425-2.487-.724-3.258.707-.772 2.204-.555 3.302.488 1.107 1.026 1.445 2.496.7 3.258M75.01 205.483c-.307.998-1.741 1.452-3.185 1.028-1.442-.437-2.386-1.607-2.095-2.616.3-1.005 1.74-1.478 3.195-1.024 1.44.435 2.386 1.596 2.086 2.612M85.714 206.67c.036 1.052-1.189 1.924-2.705 1.943-1.525.033-2.758-.818-2.774-1.852 0-1.062 1.197-1.926 2.721-1.951 1.516-.03 2.758.815 2.758 1.86M96.228 206.267c.182 1.026-.872 2.08-2.377 2.36-1.48.27-2.85-.363-3.039-1.38-.184-1.052.89-2.105 2.367-2.378 1.508-.262 2.857.355 3.049 1.398" />
                                                    </g>
                                                </svg>
                                            </span>
                                            GitHub
                                        </a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <a href="javascript: void(0);"
                                            class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                            <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                                <svg class="avatar-img mx-auto" viewBox="2.59 0 214.09101008 224"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <linearGradient id="a" gradientTransform="matrix(1 0 0 -1 0 264)"
                                                        gradientUnits="userSpaceOnUse" x1="102.4" x2="56.15" y1="218.63"
                                                        y2="172.39">
                                                        <stop offset=".18" stop-color="#0052cc" />
                                                        <stop offset="1" stop-color="#2684ff" />
                                                    </linearGradient>
                                                    <linearGradient id="b" x1="114.65" x2="160.81" xlink:href="#a"
                                                        y1="85.77" y2="131.92" />
                                                    <path
                                                        d="m214.06 105.73-96.39-96.39-9.34-9.34-72.56 72.56-33.18 33.17a8.89 8.89 0 0 0 0 12.54l66.29 66.29 39.45 39.44 72.55-72.56 1.13-1.12 32.05-32a8.87 8.87 0 0 0 0-12.59zm-105.73 39.39-33.12-33.12 33.12-33.12 33.11 33.12z"
                                                        fill="#2684ff" />
                                                    <path
                                                        d="m108.33 78.88a55.75 55.75 0 0 1 -.24-78.61l-72.47 72.44 39.44 39.44z"
                                                        fill="url(#a)" />
                                                    <path
                                                        d="m141.53 111.91-33.2 33.21a55.77 55.77 0 0 1 0 78.86l72.67-72.63z"
                                                        fill="url(#b)" />
                                                </svg>
                                            </span>
                                            JIRA
                                        </a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <a href="javascript: void(0);"
                                            class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                            <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                                <svg class="avatar-img mx-auto" viewBox="0 0 42 37"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>dropbox_logo_glyph_2015_m1</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-59.000000, -214.000000)" fill="#0062FF"
                                                            fill-rule="nonzero">
                                                            <g id="Storages" transform="translate(30.000000, 183.000000)">
                                                                <g id="logo" transform="translate(20.000000, 20.000000)">
                                                                    <g id="dropbox_logo_glyph_2015_m1"
                                                                        transform="translate(9.000000, 11.500000)">
                                                                        <path
                                                                            d="M10.3534884,0.68372093 L0,7.3255814 L10.3534884,13.8697674 L20.7069767,7.3255814 L10.3534884,0.68372093 Z M31.0604651,0.68372093 L20.7069767,7.3255814 L31.0604651,13.8697674 L41.4139535,7.3255814 L31.0604651,0.68372093 Z M0,20.5116279 L10.3534884,27.1534884 L20.7069767,20.5116279 L10.3534884,13.8697674 L0,20.5116279 Z M31.0604651,13.8697674 L20.7069767,20.5116279 L31.0604651,27.1534884 L41.4139535,20.5116279 L31.0604651,13.8697674 Z M10.3534884,29.3023256 L20.7069767,35.944186 L31.0604651,29.3023256 L20.7069767,22.7581395 L10.3534884,29.3023256 Z">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </span>
                                            Dropbox
                                        </a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <a href="javascript: void(0);"
                                            class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                            <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                                <svg class="avatar-img mx-auto" viewBox="0 0 100 100" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="100" height="100" fill="#000" fill-opacity="0" />
                                                    <circle cx="50" cy="50" r="48" fill="#EA4C89" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M50 0C22.397 0 0 22.397 0 50C0 77.603 22.397 100 50 100C77.5488 100 100 77.603 100 50C100 22.397 77.5488 0 50 0ZM83.026 23.0477C88.9913 30.3145 92.5705 39.5879 92.679 49.6204C91.269 49.3492 77.1692 46.4751 62.961 48.2646C62.6356 47.5597 62.3644 46.8004 62.0391 46.0412C61.1714 43.9805 60.1952 41.8655 59.2191 39.859C74.9458 33.4599 82.1041 24.2408 83.026 23.0477ZM50 7.37527C60.846 7.37527 70.7701 11.4425 78.308 18.1128C77.5488 19.1974 71.0954 27.82 55.9111 33.5141C48.9154 20.6616 41.1605 10.141 39.9675 8.5141C43.167 7.75488 46.5293 7.37527 50 7.37527ZM31.833 11.3883C32.9718 12.9067 40.564 23.4816 47.6681 36.0629C27.7115 41.3774 10.0868 41.269 8.18872 41.269C10.9544 28.0369 19.9024 17.0282 31.833 11.3883ZM7.26681 50.0542C7.26681 49.6204 7.26681 49.1866 7.26681 48.7527C9.11063 48.8069 29.8265 49.0781 51.1388 42.679C52.3861 45.0651 53.5249 47.5054 54.6095 49.9458C54.0672 50.1085 53.4707 50.2712 52.9284 50.4338C30.9111 57.538 19.1974 76.9523 18.2213 78.5792C11.4425 71.0412 7.26681 61.0087 7.26681 50.0542ZM50 92.7332C40.1302 92.7332 31.0195 89.3709 23.8069 83.731C24.5662 82.1584 33.243 65.4555 57.321 57.0499C57.4295 56.9957 57.4837 56.9957 57.5922 56.9414C63.6117 72.5054 66.0521 85.5748 66.7028 89.3167C61.551 91.5401 55.9111 92.7332 50 92.7332ZM73.807 85.4122C73.3731 82.8091 71.0955 70.3362 65.5098 54.9892C78.9046 52.8742 90.6182 56.3449 92.0824 56.833C90.2386 68.7093 83.4056 78.9588 73.807 85.4122Z"
                                                        fill="#C32361" />
                                                </svg>
                                            </span>
                                            Dribbble
                                        </a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <a href="javascript: void(0);"
                                            class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                            <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                                <svg class="avatar-img mx-auto" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g transform="matrix(1, 0, 0, 1, 27.009001, -39.238998)">
                                                        <path fill="#4285F4"
                                                            d="M -3.264 51.509 C -3.264 50.719 -3.334 49.969 -3.454 49.239 L -14.754 49.239 L -14.754 53.749 L -8.284 53.749 C -8.574 55.229 -9.424 56.479 -10.684 57.329 L -10.684 60.329 L -6.824 60.329 C -4.564 58.239 -3.264 55.159 -3.264 51.509 Z">
                                                        </path>
                                                        <path fill="#34A853"
                                                            d="M -14.754 63.239 C -11.514 63.239 -8.804 62.159 -6.824 60.329 L -10.684 57.329 C -11.764 58.049 -13.134 58.489 -14.754 58.489 C -17.884 58.489 -20.534 56.379 -21.484 53.529 L -25.464 53.529 L -25.464 56.619 C -23.494 60.539 -19.444 63.239 -14.754 63.239 Z">
                                                        </path>
                                                        <path fill="#FBBC05"
                                                            d="M -21.484 53.529 C -21.734 52.809 -21.864 52.039 -21.864 51.239 C -21.864 50.439 -21.724 49.669 -21.484 48.949 L -21.484 45.859 L -25.464 45.859 C -26.284 47.479 -26.754 49.299 -26.754 51.239 C -26.754 53.179 -26.284 54.999 -25.464 56.619 L -21.484 53.529 Z">
                                                        </path>
                                                        <path fill="#EA4335"
                                                            d="M -14.754 43.989 C -12.984 43.989 -11.404 44.599 -10.154 45.789 L -6.734 42.369 C -8.804 40.429 -11.514 39.239 -14.754 39.239 C -19.444 39.239 -23.494 41.939 -25.464 45.859 L -21.484 48.949 C -20.534 46.099 -17.884 43.989 -14.754 43.989 Z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </span>
                                            Google
                                        </a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <a href="javascript: void(0);"
                                            class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                            <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                                <svg class="avatar-img mx-auto" viewBox="0 0 512 407.864"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m106.344 0c-29.214 0-50.831 25.57-49.863 53.3.929 26.641-.278 61.145-8.964 89.283-8.717 28.217-23.449 46.098-47.517 48.393v25.912c24.068 2.3 38.8 20.172 47.516 48.393 8.687 28.138 9.893 62.642 8.964 89.283-.968 27.726 20.649 53.3 49.868 53.3h299.347c29.214 0 50.827-25.57 49.859-53.3-.929-26.641.278-61.145 8.964-89.283 8.717-28.221 23.413-46.1 47.482-48.393v-25.912c-24.068-2.3-38.764-20.172-47.482-48.393-8.687-28.134-9.893-62.642-8.964-89.283.968-27.726-20.645-53.3-49.859-53.3h-299.355zm240.775 251.067c0 38.183-28.481 61.34-75.746 61.34h-80.458a8.678 8.678 0 0 1 -8.678-8.678v-199.593a8.678 8.678 0 0 1 8.678-8.678h80c39.411 0 65.276 21.348 65.276 54.124 0 23.005-17.4 43.6-39.567 47.208v1.2c30.176 3.31 50.495 24.21 50.495 53.077zm-84.519-128.1h-45.876v64.8h38.639c29.87 0 46.34-12.028 46.34-33.527-.003-20.148-14.163-31.273-39.103-31.273zm-45.876 90.511v71.411h47.564c31.1 0 47.573-12.479 47.573-35.931s-16.935-35.484-49.573-35.484h-45.564z"
                                                        fill="#7952b3" fill-rule="evenodd" />
                                                </svg>
                                            </span>
                                            Bootstrap
                                        </a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <a href="javascript: void(0);"
                                            class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                            <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                                <svg class="avatar-img mx-auto" viewBox="-.1 1.1 304.9 179.8"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m86.4 66.4c0 3.7.4 6.7 1.1 8.9.8 2.2 1.8 4.6 3.2 7.2.5.8.7 1.6.7 2.3 0 1-.6 2-1.9 3l-6.3 4.2c-.9.6-1.8.9-2.6.9-1 0-2-.5-3-1.4-1.4-1.5-2.6-3.1-3.6-4.7-1-1.7-2-3.6-3.1-5.9-7.8 9.2-17.6 13.8-29.4 13.8-8.4 0-15.1-2.4-20-7.2s-7.4-11.2-7.4-19.2c0-8.5 3-15.4 9.1-20.6s14.2-7.8 24.5-7.8c3.4 0 6.9.3 10.6.8s7.5 1.3 11.5 2.2v-7.3c0-7.6-1.6-12.9-4.7-16-3.2-3.1-8.6-4.6-16.3-4.6-3.5 0-7.1.4-10.8 1.3s-7.3 2-10.8 3.4c-1.6.7-2.8 1.1-3.5 1.3s-1.2.3-1.6.3c-1.4 0-2.1-1-2.1-3.1v-4.9c0-1.6.2-2.8.7-3.5s1.4-1.4 2.8-2.1c3.5-1.8 7.7-3.3 12.6-4.5 4.9-1.3 10.1-1.9 15.6-1.9 11.9 0 20.6 2.7 26.2 8.1 5.5 5.4 8.3 13.6 8.3 24.6v32.4zm-40.6 15.2c3.3 0 6.7-.6 10.3-1.8s6.8-3.4 9.5-6.4c1.6-1.9 2.8-4 3.4-6.4s1-5.3 1-8.7v-4.2c-2.9-.7-6-1.3-9.2-1.7s-6.3-.6-9.4-.6c-6.7 0-11.6 1.3-14.9 4s-4.9 6.5-4.9 11.5c0 4.7 1.2 8.2 3.7 10.6 2.4 2.5 5.9 3.7 10.5 3.7zm80.3 10.8c-1.8 0-3-.3-3.8-1-.8-.6-1.5-2-2.1-3.9l-23.5-77.3c-.6-2-.9-3.3-.9-4 0-1.6.8-2.5 2.4-2.5h9.8c1.9 0 3.2.3 3.9 1 .8.6 1.4 2 2 3.9l16.8 66.2 15.6-66.2c.5-2 1.1-3.3 1.9-3.9s2.2-1 4-1h8c1.9 0 3.2.3 4 1 .8.6 1.5 2 1.9 3.9l15.8 67 17.3-67c.6-2 1.3-3.3 2-3.9.8-.6 2.1-1 3.9-1h9.3c1.6 0 2.5.8 2.5 2.5 0 .5-.1 1-.2 1.6s-.3 1.4-.7 2.5l-24.1 77.3c-.6 2-1.3 3.3-2.1 3.9s-2.1 1-3.8 1h-8.6c-1.9 0-3.2-.3-4-1s-1.5-2-1.9-4l-15.5-64.5-15.4 64.4c-.5 2-1.1 3.3-1.9 4s-2.2 1-4 1zm128.5 2.7c-5.2 0-10.4-.6-15.4-1.8s-8.9-2.5-11.5-4c-1.6-.9-2.7-1.9-3.1-2.8s-.6-1.9-.6-2.8v-5.1c0-2.1.8-3.1 2.3-3.1.6 0 1.2.1 1.8.3s1.5.6 2.5 1c3.4 1.5 7.1 2.7 11 3.5 4 .8 7.9 1.2 11.9 1.2 6.3 0 11.2-1.1 14.6-3.3s5.2-5.4 5.2-9.5c0-2.8-.9-5.1-2.7-7s-5.2-3.6-10.1-5.2l-14.5-4.5c-7.3-2.3-12.7-5.7-16-10.2-3.3-4.4-5-9.3-5-14.5 0-4.2.9-7.9 2.7-11.1s4.2-6 7.2-8.2c3-2.3 6.4-4 10.4-5.2s8.2-1.7 12.6-1.7c2.2 0 4.5.1 6.7.4 2.3.3 4.4.7 6.5 1.1 2 .5 3.9 1 5.7 1.6s3.2 1.2 4.2 1.8c1.4.8 2.4 1.6 3 2.5.6.8.9 1.9.9 3.3v4.7c0 2.1-.8 3.2-2.3 3.2-.8 0-2.1-.4-3.8-1.2-5.7-2.6-12.1-3.9-19.2-3.9-5.7 0-10.2.9-13.3 2.8s-4.7 4.8-4.7 8.9c0 2.8 1 5.2 3 7.1s5.7 3.8 11 5.5l14.2 4.5c7.2 2.3 12.4 5.5 15.5 9.6s4.6 8.8 4.6 14c0 4.3-.9 8.2-2.6 11.6-1.8 3.4-4.2 6.4-7.3 8.8-3.1 2.5-6.8 4.3-11.1 5.6-4.5 1.4-9.2 2.1-14.3 2.1z"
                                                        fill="#252f3e" />
                                                    <g clip-rule="evenodd" fill="#f90" fill-rule="evenodd">
                                                        <path
                                                            d="m273.5 143.7c-32.9 24.3-80.7 37.2-121.8 37.2-57.6 0-109.5-21.3-148.7-56.7-3.1-2.8-.3-6.6 3.4-4.4 42.4 24.6 94.7 39.5 148.8 39.5 36.5 0 76.6-7.6 113.5-23.2 5.5-2.5 10.2 3.6 4.8 7.6z" />
                                                        <path
                                                            d="m287.2 128.1c-4.2-5.4-27.8-2.6-38.5-1.3-3.2.4-3.7-2.4-.8-4.5 18.8-13.2 49.7-9.4 53.3-5 3.6 4.5-1 35.4-18.6 50.2-2.7 2.3-5.3 1.1-4.1-1.9 4-9.9 12.9-32.2 8.7-37.5z" />
                                                    </g>
                                                </svg>
                                            </span>
                                            AWS
                                        </a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <a href="javascript: void(0);"
                                            class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                            <span class="avatar avatar-sm w-35px h-35px avatar-circle">
                                                <span class="avatar-title text-bg-primary-soft">D</span>
                                            </span>
                                            Dashboard
                                        </a>
                                    </div>

                                    <hr class="dropdown-divider">

                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <a href="javascript: void(0);"
                                            class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                            <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                                <svg class="avatar-img mx-auto" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .st200 {
                                                            fill: url(#SVGID_1_);
                                                        }

                                                        .st201 {
                                                            fill: #FFFFFF;
                                                        }
                                                    </style>
                                                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="-277.375" y1="406.6018" x2="-277.375" y2="407.5726"
                                                        gradientTransform="matrix(40 0 0 -39.7778 11115.001 16212.334)">
                                                        <stop offset="0" style="stop-color:#0062E0" />
                                                        <stop offset="1" style="stop-color:#19AFFF" />
                                                    </linearGradient>
                                                    <path class="st200"
                                                        d="M16.7,39.8C7.2,38.1,0,29.9,0,20C0,9,9,0,20,0s20,9,20,20c0,9.9-7.2,18.1-16.7,19.8l-1.1-0.9h-4.4L16.7,39.8z" />
                                                    <path class="st201"
                                                        d="M27.8,25.6l0.9-5.6h-5.3v-3.9c0-1.6,0.6-2.8,3-2.8h2.6V8.2c-1.4-0.2-3-0.4-4.4-0.4c-4.6,0-7.8,2.8-7.8,7.8V20 h-5v5.6h5v14.1c1.1,0.2,2.2,0.3,3.3,0.3c1.1,0,2.2-0.1,3.3-0.3V25.6H27.8z" />
                                                </svg>
                                            </span>
                                            Facebook
                                        </a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <a href="javascript: void(0);"
                                            class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                            <span class="avatar avatar-xs d-flex align-items-center mx-auto mb-1">
                                                <svg class="avatar-img mx-auto" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 796.8 1024.2">
                                                    <style>
                                                        .st2 {
                                                            fill: #cb2027
                                                        }
                                                    </style>
                                                    <path class="st2"
                                                        d="M347.2 3.4C177 22.4 7.4 160.1.4 356.8-4 476.9 30.1 567 144.4 592.3c49.6-87.5-16-106.8-26.2-170.1C76.3 162.8 417.4-14.1 595.9 167c123.5 125.4 42.2 511.2-157 471.1-190.8-38.3 93.4-345.4-58.9-405.7-123.8-49-189.6 149.9-130.9 248.7-34.4 169.9-108.5 330-78.5 543.1 97.3-70.6 130.1-205.8 157-346.8 48.9 29.7 75 60.6 137.4 65.4 230.1 17.8 358.6-229.7 327.2-458C764.3 82.4 562.3-20.6 347.2 3.4z" />
                                                </svg>
                                            </span>
                                            Pinterest
                                        </a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center">
                                        <a href="javascript: void(0);"
                                            class="d-inline-block link-secondary fs-5 fw-semibold text-center p-3">
                                            <span class="avatar avatar-xs avatar-circle">
                                                <svg class="avatar-img mx-auto" clip-rule="evenodd" fill-rule="evenodd"
                                                    stroke-linejoin="round" stroke-miterlimit="2"
                                                    viewBox="-89.00934757 -46.8841404 643.93723344 446.8841404"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m154.729 400c185.669 0 287.205-153.876 287.205-287.312 0-4.37-.089-8.72-.286-13.052a205.304 205.304 0 0 0 50.352-52.29c-18.087 8.044-37.55 13.458-57.968 15.899 20.841-12.501 36.84-32.278 44.389-55.852a202.42 202.42 0 0 1 -64.098 24.511c-18.42-19.628-44.644-31.904-73.682-31.904-55.744 0-100.948 45.222-100.948 100.965 0 7.925.887 15.631 2.619 23.025-83.895-4.223-158.287-44.405-208.074-105.504a100.739 100.739 0 0 0 -13.668 50.754c0 35.034 17.82 65.961 44.92 84.055a100.172 100.172 0 0 1 -45.716-12.63c-.015.424-.015.837-.015 1.29 0 48.903 34.794 89.734 80.982 98.986a101.036 101.036 0 0 1 -26.617 3.553c-6.493 0-12.821-.639-18.971-1.82 12.851 40.122 50.115 69.319 94.296 70.135-34.549 27.089-78.07 43.224-125.371 43.224a204.9 204.9 0 0 1 -24.078-1.399c44.674 28.645 97.72 45.359 154.734 45.359"
                                                        fill="#1da1f2" fill-rule="nonzero" />
                                                </svg>
                                            </span>
                                            Twitter
                                        </a>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <a class="d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px link-secondary"
                        data-bs-toggle="offcanvas" href="#offcanvasCustomize" role="button"
                        aria-controls="offcanvasCustomize">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="18" width="18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M7.77069 9.50524C7.60364 9.43126 7.45391 9.32316 7.33112 9.18788L6.70112 8.48788C6.5212 8.28484 6.28225 8.14317 6.01778 8.08272C5.7533 8.02228 5.47654 8.0461 5.22627 8.15083C4.97601 8.25557 4.76478 8.43598 4.62219 8.66678C4.4796 8.89758 4.41279 9.16721 4.43112 9.43788V10.3679C4.44125 10.5505 4.41275 10.7331 4.34748 10.9039C4.28221 11.0747 4.18165 11.2298 4.05235 11.3591C3.92306 11.4884 3.76795 11.589 3.59714 11.6542C3.42634 11.7195 3.24369 11.748 3.06112 11.7379L2.12112 11.6879C1.85153 11.6753 1.58463 11.7463 1.35691 11.8911C1.12919 12.036 0.951762 12.2476 0.848892 12.4971C0.746023 12.7467 0.72273 13.0219 0.782196 13.2851C0.841663 13.5484 0.980987 13.7868 1.18112 13.9679L1.88112 14.5879C2.01927 14.7148 2.129 14.8695 2.20311 15.0419C2.27722 15.2142 2.31403 15.4003 2.31112 15.5879C2.31532 15.7757 2.2791 15.9621 2.2049 16.1347C2.13071 16.3072 2.02029 16.4618 1.88112 16.5879L1.18112 17.2179C0.981519 17.3992 0.842717 17.6376 0.783657 17.9007C0.724597 18.1638 0.748157 18.4387 0.85112 18.6879C0.954125 18.9362 1.13156 19.1464 1.359 19.2897C1.58644 19.433 1.8527 19.5022 2.12112 19.4879H3.06112C3.24369 19.4778 3.42634 19.5063 3.59714 19.5715C3.76795 19.6368 3.92306 19.7374 4.05235 19.8666C4.18165 19.9959 4.28221 20.1511 4.34748 20.3219C4.41275 20.4927 4.44125 20.6753 4.43112 20.8579V21.7879C4.4151 22.0577 4.48357 22.3258 4.62702 22.5549C4.77046 22.784 4.98174 22.9626 5.23147 23.066C5.48119 23.1694 5.75693 23.1925 6.02034 23.1318C6.28374 23.0712 6.5217 22.93 6.70112 22.7279L7.33112 22.0379C7.45391 21.9026 7.60364 21.7945 7.77069 21.7205C7.93775 21.6466 8.11842 21.6083 8.30112 21.6083C8.48382 21.6083 8.6645 21.6466 8.83155 21.7205C8.9986 21.7945 9.14833 21.9026 9.27112 22.0379L9.90112 22.7279C10.0805 22.93 10.3185 23.0712 10.5819 23.1318C10.8453 23.1925 11.1211 23.1694 11.3708 23.066C11.6205 22.9626 11.8318 22.784 11.9752 22.5549C12.1187 22.3258 12.1871 22.0577 12.1711 21.7879V20.8579C12.161 20.6753 12.1895 20.4927 12.2548 20.3219C12.32 20.1511 12.4206 19.9959 12.5499 19.8666C12.6792 19.7374 12.8343 19.6368 13.0051 19.5715C13.1759 19.5063 13.3586 19.4778 13.5411 19.4879H14.4811C14.7495 19.5022 15.0158 19.433 15.2432 19.2897C15.4707 19.1464 15.6481 18.9362 15.7511 18.6879C15.8541 18.4387 15.8776 18.1638 15.8186 17.9007C15.7595 17.6376 15.6207 17.3992 15.4211 17.2179L14.7211 16.5879C14.582 16.4618 14.4715 16.3072 14.3973 16.1347C14.3231 15.9621 14.2869 15.7757 14.2911 15.5879C14.2882 15.4003 14.325 15.2142 14.3991 15.0419C14.4732 14.8695 14.583 14.7148 14.7211 14.5879L15.4211 13.9679C15.6213 13.7868 15.7606 13.5484 15.82 13.2851C15.8795 13.0219 15.8562 12.7467 15.7533 12.4971C15.6505 12.2476 15.4731 12.036 15.2453 11.8911C15.0176 11.7463 14.7507 11.6753 14.4811 11.6879L13.5411 11.7379C13.3586 11.748 13.1759 11.7195 13.0051 11.6542C12.8343 11.589 12.6792 11.4884 12.5499 11.3591C12.4206 11.2298 12.32 11.0747 12.2548 10.9039C12.1895 10.7331 12.161 10.5505 12.1711 10.3679V9.43788C12.1895 9.16721 12.1226 8.89758 11.98 8.66678C11.8375 8.43598 11.6262 8.25557 11.376 8.15083C11.1257 8.0461 10.8489 8.02228 10.5845 8.08272C10.32 8.14317 10.081 8.28484 9.90112 8.48788L9.27112 9.18788C9.14833 9.32316 8.9986 9.43126 8.83155 9.50524C8.6645 9.57922 8.48382 9.61743 8.30112 9.61743C8.11842 9.61743 7.93775 9.57922 7.77069 9.50524Z" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M8.30114 17.4379C9.33944 17.4379 10.1811 16.5962 10.1811 15.5579C10.1811 14.5196 9.33944 13.6779 8.30114 13.6779C7.26285 13.6779 6.42114 14.5196 6.42114 15.5579C6.42114 16.5962 7.26285 17.4379 8.30114 17.4379Z" />
                            <path stroke="currentColor" stroke-width="1.5"
                                d="M18.1565 6.23828C17.8804 6.23828 17.6565 6.01442 17.6565 5.73828C17.6565 5.46214 17.8804 5.23828 18.1565 5.23828" />
                            <path stroke="currentColor" stroke-width="1.5"
                                d="M18.1565 6.23828C18.4326 6.23828 18.6565 6.01442 18.6565 5.73828C18.6565 5.46214 18.4326 5.23828 18.1565 5.23828" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M16.1347 1.83506C16.1409 1.62338 16.2152 1.41935 16.3466 1.25325C16.478 1.08716 16.6594 0.967851 16.8639 0.91304C17.0685 0.85823 17.2853 0.870838 17.4821 0.948992C17.6789 1.02715 17.8453 1.16668 17.9565 1.34689L18.551 2.30113C18.6493 2.45959 18.8042 2.57479 18.9842 2.62343C19.1643 2.67207 19.3561 2.65052 19.5209 2.56313L20.508 2.03729C20.6955 1.93854 20.9096 1.90249 21.1191 1.93443C21.3285 1.96638 21.5222 2.06463 21.6716 2.21476C21.8211 2.3649 21.9185 2.559 21.9495 2.76857C21.9805 2.97814 21.9435 3.19214 21.8439 3.37912L21.3171 4.37019C21.2295 4.53545 21.2077 4.72774 21.2561 4.90841C21.3045 5.08907 21.4195 5.24471 21.578 5.34404L22.5273 5.9411C22.7071 6.05324 22.8461 6.22006 22.924 6.41706C23.002 6.61406 23.0147 6.83085 22.9603 7.03561C22.9059 7.24036 22.7873 7.42229 22.6219 7.55467C22.4565 7.68705 22.253 7.7629 22.0413 7.7711L20.9235 7.80929C20.7371 7.816 20.5602 7.89324 20.4286 8.02539C20.297 8.15754 20.2205 8.33473 20.2145 8.52115L20.179 9.64113C20.1727 9.85281 20.0984 10.0568 19.967 10.2229C19.8357 10.389 19.6542 10.5083 19.4497 10.5631C19.2451 10.618 19.0284 10.6053 18.8315 10.5272C18.6347 10.449 18.4683 10.3095 18.3571 10.1293L17.762 9.17525C17.6638 9.0168 17.509 8.90157 17.3291 8.85289C17.1492 8.80422 16.9575 8.82572 16.7928 8.91305L15.8049 9.43908C15.6175 9.53784 15.4033 9.57389 15.1939 9.54194C14.9844 9.51 14.7908 9.41175 14.6413 9.26161C14.4918 9.11148 14.3944 8.91737 14.3634 8.7078C14.3324 8.49823 14.3694 8.28424 14.469 8.09725L14.9933 7.10534C15.0809 6.94007 15.1027 6.74778 15.0543 6.56712C15.0059 6.38645 14.8909 6.23081 14.7324 6.13148L13.7831 5.53748C13.6034 5.42533 13.4643 5.25851 13.3864 5.06151C13.3085 4.86452 13.2958 4.64772 13.3501 4.44296C13.4045 4.23821 13.5231 4.05628 13.6885 3.92391C13.8539 3.79153 14.0574 3.71567 14.2691 3.70748L15.3877 3.66909C15.5739 3.66238 15.7507 3.58515 15.8822 3.45302C16.0137 3.32089 16.0901 3.14374 16.0959 2.95743L16.1347 1.83506Z" />
                        </svg>
                    </a>

                    <!-- Custmization offcanvas -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCustomize"
                        aria-labelledby="offcanvasCustomizeTitle">
                        <div class="offcanvas-body pt-7 pb-5 position-relative">

                            <button type="button" class="btn-close position-absolute top-0 end-0 mt-5 me-5"
                                data-bs-dismiss="offcanvas" aria-label="Close"></button>

                            <div class="text-center">
                                <img src="./assets/images/illustrations/customization-illustration.svg" alt="..."
                                    class="img-fluid w-50 mb-5" width="170" height="170">
                                <h3 class="mb-2" id="offcanvasCustomizeTitle">Make Dashly Your Own</h3>
                                <p class="mb-0">Set preferences that will be cookied for your live preview demonstration</p>
                            </div>

                            <hr>

                            <h4 class="mb-0">Color Scheme</h4>
                            <p class="text-secondary fs-5 mb-4">Overall light or dark presentation.</p>
                            <div class="btn-group w-100 mb-7" role="group" aria-label="Light/dark switcher">
                                <input type="radio" class="btn-check" name="theme" id="lightMode" value="light"
                                    data-theme-control="theme">
                                <label
                                    class="btn btn-outline-primary px-3 w-100 d-flex align-items-center justify-content-center"
                                    for="lightMode">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18"
                                        width="18">
                                        <g>
                                            <path
                                                d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z"
                                                style="fill: currentColor" />
                                            <path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z"
                                                style="fill: currentColor" />
                                            <path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z"
                                                style="fill: currentColor" />
                                            <path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z"
                                                style="fill: currentColor" />
                                            <path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z"
                                                style="fill: currentColor" />
                                        </g>
                                    </svg>
                                    Light
                                </label>

                                <input type="radio" class="btn-check" name="theme" id="darkMode" value="dark"
                                    data-theme-control="theme">
                                <label
                                    class="btn btn-outline-primary px-3 w-100 d-flex align-items-center justify-content-center"
                                    for="darkMode">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18"
                                        width="18">
                                        <path
                                            d="M19.57,23.34a1,1,0,0,0,0-1.9,9.94,9.94,0,0,1,0-18.88,1,1,0,0,0,.68-.94,1,1,0,0,0-.68-.95A11.58,11.58,0,0,0,8.88,2.18,12.33,12.33,0,0,0,3.75,12a12.31,12.31,0,0,0,5.11,9.79A11.49,11.49,0,0,0,15.61,24,12.55,12.55,0,0,0,19.57,23.34ZM10,20.17A10.29,10.29,0,0,1,5.75,12a10.32,10.32,0,0,1,4.3-8.19A9.34,9.34,0,0,1,15.59,2a.17.17,0,0,1,.17.13.18.18,0,0,1-.07.2,11.94,11.94,0,0,0-.18,19.21.25.25,0,0,1-.16.45A9.5,9.5,0,0,1,10,20.17Z"
                                            style="fill: currentColor" />
                                    </svg>
                                    Dark
                                </label>

                                <input type="radio" class="btn-check" name="theme" id="autoMode" value="auto"
                                    data-theme-control="theme">
                                <label
                                    class="btn btn-outline-primary px-3 w-100 d-flex align-items-center justify-content-center"
                                    for="autoMode">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18"
                                        width="18">
                                        <path
                                            d="M24,12a1,1,0,0,0-1-1H19.09a.51.51,0,0,1-.49-.4,6.83,6.83,0,0,0-.94-2.28.5.5,0,0,1,.06-.63l2.77-2.76a1,1,0,1,0-1.42-1.42L16.31,6.28a.5.5,0,0,1-.63.06A6.83,6.83,0,0,0,13.4,5.4a.5.5,0,0,1-.4-.49V1a1,1,0,0,0-2,0V4.91a.51.51,0,0,1-.4.49,6.83,6.83,0,0,0-2.28.94.5.5,0,0,1-.63-.06L4.93,3.51A1,1,0,0,0,3.51,4.93L6.28,7.69a.5.5,0,0,1,.06.63A6.83,6.83,0,0,0,5.4,10.6a.5.5,0,0,1-.49.4H1a1,1,0,0,0,0,2H4.91a.51.51,0,0,1,.49.4,6.83,6.83,0,0,0,.94,2.28.5.5,0,0,1-.06.63L3.51,19.07a1,1,0,1,0,1.42,1.42l2.76-2.77a.5.5,0,0,1,.63-.06,6.83,6.83,0,0,0,2.28.94.5.5,0,0,1,.4.49V23a1,1,0,0,0,2,0V19.09a.51.51,0,0,1,.4-.49,6.83,6.83,0,0,0,2.28-.94.5.5,0,0,1,.63.06l2.76,2.77a1,1,0,1,0,1.42-1.42l-2.77-2.76a.5.5,0,0,1-.06-.63,6.83,6.83,0,0,0,.94-2.28.5.5,0,0,1,.49-.4H23A1,1,0,0,0,24,12Zm-8.74,2.5A5.76,5.76,0,0,1,9.5,8.74a5.66,5.66,0,0,1,.16-1.31A.49.49,0,0,1,10,7.07a5.36,5.36,0,0,1,1.8-.31,5.47,5.47,0,0,1,5.46,5.46,5.36,5.36,0,0,1-.31,1.8.49.49,0,0,1-.35.32A5.53,5.53,0,0,1,15.26,14.5Z"
                                            style="fill: currentColor" />
                                    </svg>
                                    Auto
                                </label>
                            </div>

                            <h4 class="mb-0">Navigation Color</h4>
                            <p class="text-secondary fs-5 mb-4">Usually dictated by the color scheme, but can be overriden.
                            </p>
                            <div class="btn-group w-100 mb-7" role="group" aria-label="Navigation color switcher">
                                <input type="radio" class="btn-check" name="navigationColor" id="defaultColor"
                                    value="default" data-theme-control="navigationColor">
                                <label class="btn btn-outline-primary w-50" for="defaultColor">
                                    Default
                                </label>

                                <input type="radio" class="btn-check" name="navigationColor" id="invertedColor"
                                    value="inverted" data-theme-control="navigationColor">
                                <label class="btn btn-outline-primary w-50" for="invertedColor">
                                    Inverted
                                </label>
                            </div>

                            <h4 class="mb-0">Sidebar behaviour</h4>
                            <p class="text-secondary fs-5 mb-4">Standard navigation sizing or minified icons with dropdowns.
                            </p>
                            <div class="btn-group w-100 mb-7" role="group" aria-label="Sidebar layout switcher">
                                <input type="radio" class="btn-check" name="sidebarSizing" id="fixed" value="fixed"
                                    data-theme-control="sidebarBehaviour">
                                <label class="btn btn-outline-primary px-3 w-100" for="fixed">
                                    Fixed
                                </label>

                                <input type="radio" class="btn-check" name="sidebarSizing" id="condensed" value="condensed"
                                    data-theme-control="sidebarBehaviour">
                                <label class="btn btn-outline-primary px-3 w-100" for="condensed">
                                    Condensed
                                </label>

                                <input type="radio" class="btn-check" name="sidebarSizing" id="scrollable"
                                    value="scrollable" data-theme-control="sidebarBehaviour">
                                <label class="btn btn-outline-primary px-3 w-100" for="scrollable">
                                    Scrollable
                                </label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-6">
                                <div class="d-flex flex-column">
                                    <label class="h4 mb-0 d-flex align-items-center" for="isFluid">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="16"
                                            width="16">
                                            <path
                                                d="M4.79,17.21a1,1,0,0,0,.71.29.84.84,0,0,0,.38-.08,1,1,0,0,0,.62-.92v-3a.25.25,0,0,1,.25-.25h10.5a.25.25,0,0,1,.25.25v3a1,1,0,0,0,.62.92.84.84,0,0,0,.38.08,1,1,0,0,0,.71-.29l4.5-4.5a1,1,0,0,0,0-1.42l-4.5-4.5a1,1,0,0,0-1.09-.21,1,1,0,0,0-.62.92v3a.25.25,0,0,1-.25.25H6.75a.25.25,0,0,1-.25-.25v-3a1,1,0,0,0-.62-.92,1,1,0,0,0-1.09.21l-4.5,4.5a1,1,0,0,0,0,1.42Z"
                                                style="fill: currentColor" />
                                        </svg>
                                        Fluid layout
                                    </label>
                                    <p class="text-secondary fs-5 mb-0">Toggle container layout system</p>
                                </div>

                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        data-theme-control="isFluid" id="isFluid" aria-label="Fluid layout switcher"
                                        checked>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex flex-column">
                                    <label class="h4 mb-0 d-flex align-items-center" for="isRTL">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="16"
                                            width="16">
                                            <g>
                                                <path
                                                    d="M4.15,15.85A.47.47,0,0,0,4.5,16a.43.43,0,0,0,.19,0A.5.5,0,0,0,5,15.5V13a.25.25,0,0,1,.25-.25H11.5a1.25,1.25,0,0,0,0-2.5H5.25A.25.25,0,0,1,5,10V7.5A.49.49,0,0,0,4.69,7a.47.47,0,0,0-.54.11l-4,4a.48.48,0,0,0,0,.7Z"
                                                    style="fill: currentColor" />
                                                <rect x="15.5" width="8.5" height="24" rx="2" style="fill: currentColor" />
                                            </g>
                                        </svg>
                                        RTL Mode
                                    </label>
                                    <p class="text-secondary fs-5 mb-0">Switch your language direction</p>
                                </div>

                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" type="checkbox" role="switch" data-theme-control="isRTL"
                                        id="isRTL" aria-label="RTL switcher">
                                </div>
                            </div>

                            <div class="row gx-4 mt-auto">
                                <div class="col-12">
                                    <hr>
                                </div>
                                <div class="col-lg mb-3">
                                    <button class="btn btn-light w-100 d-flex align-items-center justify-content-center"
                                        id="resetThemeConfig">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="16"
                                            width="16">
                                            <path
                                                d="M12.57,1.26A10.81,10.81,0,0,0,2.82,8.4a.25.25,0,0,1-.27.16L.86,8.31a.52.52,0,0,0-.49.21.51.51,0,0,0,0,.53L3,13.75a.51.51,0,0,0,.43.25.52.52,0,0,0,.36-.14l3.77-3.75a.5.5,0,0,0-.28-.85L5.59,9a.26.26,0,0,1-.18-.13.24.24,0,0,1,0-.22,8.26,8.26,0,1,1,7.87,11.59,1.25,1.25,0,1,0,.09,2.5,10.75,10.75,0,0,0-.79-21.49Z"
                                                style="fill: currentColor" />
                                        </svg>
                                        Reset
                                    </button>
                                </div>
                                <div class="col-lg mb-3">
                                    <button class="btn btn-dark w-100 d-flex align-items-center justify-content-center"
                                        id="previewThemeConfig">
                                        Preview
                                    </button>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                    <!-- Separator -->
                    <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

                    <!-- Dropdown -->
                    <div class="dropdown">
                        <a href="javascript: void(0);"
                            class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px"
                            role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                            aria-expanded="false" data-bs-offset="0,0">
                            <div class="avatar avatar-circle avatar-sm avatar-online">
                                <img src="./assets/images/profiles/profile-06.jpeg" alt="..." class="avatar-img" width="40"
                                    height="40">
                            </div>
                        </a>

                        <div class="dropdown-menu">
                            <div class="dropdown-item-text">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm avatar-circle">
                                        <img src="./assets/images/profiles/profile-06.jpeg" alt="..." class="avatar-img"
                                            width="40" height="40">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-0">Ellie Tucker</h4>
                                        <p class="card-text">ellie.tucker@dashly.com</p>
                                    </div>
                                </div>
                            </div>

                            <hr class="dropdown-divider">

                            <!-- Dropdown -->
                            <div class="dropdown dropend">
                                <a class="dropdown-item dropdown-toggle" href="javascript: void(0);" id="statusDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="-16,10">
                                    Set status
                                </a>

                                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu"
                                    aria-labelledby="statusDropdown">
                                    <a class="dropdown-item" href="javascript: void(0);">
                                        <span class="legend-circle bg-success me-2"></span>Available
                                    </a>
                                    <a class="dropdown-item" href="javascript: void(0);">
                                        <span class="legend-circle bg-danger me-2"></span>Busy
                                    </a>
                                    <a class="dropdown-item" href="javascript: void(0);">
                                        <span class="legend-circle bg-warning me-2"></span>Away
                                    </a>
                                    <a class="dropdown-item" href="javascript: void(0);">
                                        <span class="legend-circle bg-gray-500 me-2"></span>Appear offline
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="javascript: void(0);">
                                        Reset status
                                    </a>
                                </div>
                            </div>
                            <!-- End Dropdown -->

                            <a class="dropdown-item" href="javascript: void(0);">Profile & account</a>
                            <a class="dropdown-item" href="javascript: void(0);">Settings</a>

                            <hr class="dropdown-divider">

                            <a class="dropdown-item" href="javascript: void(0);">Sign out</a>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container-fluid">
                @yield('contenido')

            </div> <!-- / .container-fluid -->
        </main>


        <footer class="mt-auto">
            <div class="container-fluid mt-4 mb-6 text-muted">
                <div class="row justify-content-between">
                    <div class="col">
                        © Dashly. 2023 Webinning.
                    </div>

                    <div class="col-auto">
                        v1.4.0
                    </div>
                </div> <!-- / .row -->
            </div>
        </footer>
        {{-- scripts --}}
        <script src="{{ asset('assets/js/theme.bundle.js') }}"></script>
    </body>

</html>
