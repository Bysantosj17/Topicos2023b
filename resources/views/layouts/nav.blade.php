<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav
                class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid px-0">
                    <a class="navbar-brand font-weight-bolder ms-sm-3" href="{{ route('inicio.inicio') }}">
                        CLICKVENTAS
                    </a>
                    <h3 class="usuario">
                        Usuario: {{ Auth::user()->name }}
                    </h3>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover ms-auto">
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                                    aria-labelledby="dropdownMenuPages">
                                    <div class="d-none d-lg-block">
                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                            Account
                                        </h6>

                                    </div>

                                    <div class="d-lg-none">
                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                            Landing Pages
                                        </h6>

                                        <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
                                            <span>About Us</span>
                                        </a>
                                        <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
                                            <span>Contact Us</span>
                                        </a>
                                        <a href="./pages/author.html" class="dropdown-item border-radius-md">
                                            <span>Author</span>
                                        </a>

                                        <h6
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                            Account
                                        </h6>

                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                    id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                                    Sections
                                    <img src="{{ asset('/assets/img/down-arrow-dark.svg') }}" alt="down-arrow"
                                        class="arrow ms-auto ms-md-2">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3"
                                    aria-labelledby="dropdownMenuBlocks">
                                    <div class="d-none d-lg-block">
                                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                href="{{ route('proveedores.inicio') }}">
                                                <div class="w-100 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Proveedores</h6>
                                                    </div>
                                                    <img src="{{ asset('/assets/img/down-arrow.svg') }}"
                                                        alt="down-arrow" class="arrow">
                                                </div>
                                            </a>
                                            <div class="dropdown-menu mt-0 py-3 px-2">
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('proveedores.inicio') }}">
                                                    Inicio Proveedor
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('proveedores.registro') }}">
                                                    Registro Proveedor
                                                </a>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                href="{{ route('productos.inicio') }}">
                                                <div class="w-100 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Productos</h6>
                                                    </div>
                                                    <img src="{{ asset('/assets/img/down-arrow.svg') }}"
                                                        alt="down-arrow" class="arrow">
                                                </div>
                                            </a>
                                            <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('productos.inicio') }}">
                                                    Inicio Producto
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('productos.registro') }}">
                                                    Registor Producto
                                                </a>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                href="{{ route('clientes.inicio') }}">
                                                <div class="w-100 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Clientes</h6>
                                                    </div>
                                                    <img src="{{ asset('/assets/img/down-arrow.svg') }}"
                                                        alt="down-arrow" class="arrow">
                                                </div>
                                            </a>
                                            <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('clientes.inicio') }}">
                                                    Clientes
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('clientes.registro') }}">
                                                    Registro Cliente
                                                </a>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                href="{{ route('usuarios.inicio') }}">
                                                <div class="w-100 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Usuarios</h6>
                                                    </div>
                                                    <img src="{{ asset('/assets/img/down-arrow.svg') }}"
                                                        alt="down-arrow" class="arrow">
                                                </div>
                                            </a>
                                            <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('usuarios.inicio') }}">
                                                    Inicio Usuario
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('usuarios.registro') }}">
                                                    Registro Usuario
                                                </a>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                href="{{ route('contactanos.inicio') }}">
                                                <div class="w-100 d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h6
                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                            Contactanos</h6>
                                                    </div>
                                                    <img src="{{ asset('/assets/img/down-arrow.svg') }}"
                                                        alt="down-arrow" class="arrow">
                                                </div>
                                            </a>
                                            <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('usuarios.inicio') }}">
                                                    Inicio Usuario
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="{{ route('usuarios.registro') }}">
                                                    Registro Usuario
                                                </a>
                                            </div>
                                        </li>

                                        <div class="row d-lg-none">
                                            <div class="col-md-12">
                                                <div class="d-flex mb-2">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                                                    </div>
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Page Sections</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/page-sections/hero-sections.html">
                                                    Page Headers
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/page-sections/features.html">
                                                    Features
                                                </a>

                                                <div class="d-flex mb-2 mt-3">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-laptop text-gradient text-primary"></i>
                                                    </div>
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Navigation</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/navigation/navbars.html">
                                                    Navbars
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/navigation/nav-tabs.html">
                                                    Nav Tabs
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/navigation/pagination.html">
                                                    Pagination
                                                </a>


                                                <div class="d-flex mb-2 mt-3">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-badge text-gradient text-primary"></i>
                                                    </div>
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Input Areas</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/input-areas/inputs.html">
                                                    Inputs
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/input-areas/forms.html">
                                                    Forms
                                                </a>


                                                <div class="d-flex mb-2 mt-3">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i
                                                            class="ni ni-notification-70 text-gradient text-primary"></i>
                                                    </div>
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Attention Catchers</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/attention-catchers/alerts.html">
                                                    Alerts
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/attention-catchers/modals.html">
                                                    Modals
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/attention-catchers/tooltips-popovers.html">
                                                    Tooltips & Popovers
                                                </a>


                                                <div class="d-flex mb-2 mt-3">
                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                        <i class="ni ni-app text-gradient text-primary"></i>
                                                    </div>
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Elements</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/avatars.html">
                                                    Avatars
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/badges.html">
                                                    Badges
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/breadcrumbs.html">
                                                    Breadcrumbs
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/buttons.html">
                                                    Buttons
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/dropdowns.html">
                                                    Dropdowns
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/progress-bars.html">
                                                    Progress Bars
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/toggles.html">
                                                    Toggles
                                                </a>
                                                <a class="dropdown-item ps-3 border-radius-md mb-1"
                                                    href="./sections/elements/typography.html">
                                                    Typography
                                                </a>
                                            </div>
                                        </div>
                                </ul>
                            </li>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <button class="boton_salir" type="submit">
                                    {{ __('Salir') }}
                                </button>
                            </form>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar -->
