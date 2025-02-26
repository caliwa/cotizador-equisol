<div wire:ignore id="application-sidebar-brand"
class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full  transform hidden xl:block xl:translate-x-0 xl:end-auto xl:bottom-0 fixed top-0 with-vertical h-screen z-[10] flex-shrink-0 border-r-[1px] w-[270px] border-gray-400  bg-white left-sidebar   transition-all duration-300" >
    <div class="p-5" >

    <a href="../" class="text-nowrap">
        <img
        src="{{ asset('/img/equisol-logo.png') }}"
        alt="Logo-Dark"
        />
    </a>
    </div>
    <div class="scroll-sidebar" data-simplebar="">
        <div class="px-6 mt-8">
            <nav class=" w-full flex flex-col sidebar-nav">
                <ul id="sidebarnav" class="text-gray-600 text-sm">
                    <li class="text-xs font-bold pb-4">
                        <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                        <span>Parametrización Maestros</span>
                    </li>

                    <li class="sidebar-item">
                        <a  wire:ignore.self
                            href="/actualizar-costo"
                            {{-- wire:navigate --}}
                            wire:current="pointer-events-none cursor-not-allowed active"
                            class="sidebar-link gap-3 py-2 px-3 rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                        >
                            <i class="ti ti-layout-dashboard  text-xl"></i> <span>Actualizar costo</span>
                        </a>
                    </li>

                    <li class="text-xs font-bold mb-4 mt-8">
                        <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                        <span>COMPONENTES</span>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./components/buttons.html"
                        >
                            <i class="ti ti-article  text-xl"></i> <span>Administar Bódegas</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./components/alerts.html"
                        >
                            <i class="ti ti-alert-circle  text-xl"></i> <span>Generar Certificados</span>
                        </a>
                    </li>        

                    <li class="sidebar-item">
                        <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./components/cards.html"
                        >
                            <i class="ti ti-cards  text-xl"></i> <span>Formatos Impresión</span>
                        </a>
                    </li>   

                    <li class="sidebar-item">
                        <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./components/forms.html"
                        >
                            <i class="ti ti-file-description  text-xl"></i> <span>Historial de Logs por módulo</span>
                        </a>
                    </li> 

                    <li class="sidebar-item">
                        <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./components/typography.html"
                        >
                            <i class="ti ti-typography text-xl"></i> <span>Tarifas DHL</span>
                        </a>
                    </li>   

                    <li class="text-xs font-bold mb-4 mt-8">
                        <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                        <span>Autenticación</span>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./pages/authentication-login.html"
                        >
                            <i class="ti ti-login  text-xl"></i> <span>Logueo por QR</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./pages/authentication-register.html"
                        >
                            <i class="ti ti-user-plus  text-xl"></i> <span>Registro</span>
                        </a>
                    </li>  

                    <li class="text-xs font-bold mb-4 mt-8">
                        <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                        <span>EXTRA</span>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./pages/icons.html"
                        >
                            <i class="ti ti-mood-happy  text-xl"></i> <span>Roles</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="./pages/sample-page.html"
                        >
                            <i class="ti ti-aperture  text-xl"></i> <span>Permisos</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>

</div>