<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
   

    <!-- DataTables links -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
            <div class="sidebar-brand-icon">
                <img width="50px" height="50px" class="img-profile rounded-circle" src="/uploads/avatars/logo_utp.jpg">
            </div>
            <div class="sidebar-brand-text mx-3">Gestor <sup>UTP</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Pages Collapse Menu -->
        @can('manage-users')
        <li class="nav-item">

            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-users-cog"></i>

                <span>Gestión de Usuarios</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Usuarios</h6>
                    <a class="collapse-item" href="{{route('admin.users.index')}}">Usuarios y Permisos</a>
                </div>
            </div>
        </li>
        @endcan

    <!-- Divider -->
        <hr class="sidebar-divider my-0">

        @can('manage-users')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_anteproyecto" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-book"></i>
                <span>Gestión de Anteproyecto</span>
            </a>
            <div id="collapse_anteproyecto" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Registro</h6>
                    <a class="collapse-item" href="{{url('anteproyectosregistrados')}}">Anteproyecto Registrado</a>
            
                </div>
            </div>
        </li>
        @endcan

        @can('is-user')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_registro" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-users-cog"></i>      
                <span>Gestión de Registro</span>
            </a>
            <div id="collapse_registro" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Registro</h6>
                    <a class="collapse-item" href="{{url('registroestudiante')}}">Registro de Anteproyecto</a>
                </div>
            </div>
        </li>
        @endcan

        @can('manage-users')

            <!-- Divider -->
                <hr class="sidebar-divider my-0">


                <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-bullhorn"></i>
                    <span>Anuncios</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Anuncios</h6>
                        <a class="collapse-item" href="{{route('admin.anuncio.index')}}">Lista de Anuncios</a>
                    </div>
                </div>
            </li>
    @endcan

    <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!--Gestión de notas - coordinador - Admin-->
        @can('manage-users')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_notas" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-file-alt"></i>
                <span>Solicitudes de Asesor</span>
            </a>
            <div id="collapse_notas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Notas</h6>
                    <a class="collapse-item" href="{{url('lista_notas')}}">Asesores - Profesor</a>
                    <a class="collapse-item" href="{{url('lista_empresas')}}">Asesores - Empresa</a>
                    <a class="collapse-item" href="{{url('notas/jurado-registrar')}}">Registrar Nota a Jurado</a>
                </div>
            </div>
        </li>
        @endcan


        <!--Solicitud de notas - estudiante-->
        @can('is-user')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_notas" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-file-alt"></i>
                <span>Solicitud de Asesor</span>
            </a>
            <div id="collapse_notas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Notas</h6>
                    <a class="collapse-item" href="{{url('solicitud/asesor')}}">Asesor - Profesor</a>
                    <a class="collapse-item" href="{{url('solicitud/empresa')}}">Asesor - Empresa</a>
                </div>
            </div>
        </li>
        @endcan
          
 <!--Solicitud 6 creditos-->
        <hr class="sidebar-divider my-0">
        @can('creditos')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#creditos" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-list"></i>
                <span>Solicitud 6 creditos</span>
            </a>
            <div id="creditos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">6 creditos</h6>
                    <a class="collapse-item" href="{{url('lista_creditos')}}">materias de 6 creditos</a>
             </div>
            </div>
        </li>
        @endcan


        <!-- Ingreso de Tesis a biblioteca -->
        <hr class="sidebar-divider my-0">

        @can('manage-users')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_biblioteca" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-atlas"></i>
                <span>Registro de Anteproyecto a Biblioteca</span>
            </a>
            <div id="collapse_biblioteca" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Registro a Biblioteca</h6>
                    <a class="collapse-item" href="{{url('biblioteca')}}">Nota a Biblioteca</a>
            
                </div>
            </div>
        </li>
        @endcan


<!-- Seccion de autoridades -->
<hr class="sidebar-divider my-0">
    @can('manage-users')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_auto" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-medal"></i>
                <span>Gestión de Autoridades</span>
            </a>
            <div id="collapse_auto" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Autoridades</h6>
                    <a class="collapse-item" href="{{url('autoridades')}}">Ver Autoridades</a>
                    <a class="collapse-item" href="{{url('autoridades/registrar-autoridad')}}">Crear Autoridades</a>
                </div>
            </div>
        </li>
    @endcan
<!-- Fin seccion de Autoridades  -->
<!-- Seccion de actividades -->
<hr class="sidebar-divider my-0">
    @can('manage-users')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_auto" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-window-restore"></i>
                <span>Informe de Actividades</span>
            </a>
            <div id="collapse_auto" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Informe de Actividades</h6>
                    <a class="collapse-item" href="{{route('actividad.index')}}">Educación continua</a>
                    <a class="collapse-item" href="{{route('actividad2.index')}}">Universidad, Empresas etc.</a>
                    <a class="collapse-item" href="{{route('actividad3.index')}}">Otras actividades</a>
                </div>
            </div>
        </li>
    @endcan
<!-- Fin seccion de actividades  -->

<!-- Seccion de Registro de Eventos -->
<hr class="sidebar-divider my-0">
    @can('manage-users')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_regeve" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-address-book"></i>
                <span>Registros de Eventos</span>
            </a>
            <div id="collapse_regeve" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Autoridades</h6>
                    <a class="collapse-item" href="{{url('registro_eventos')}}">Ver Eventos Registrados</a>
                    <a class="collapse-item" href="{{url('registro_eventos/create')}}">Registrar Eventos</a>
                </div>
            </div>
        </li>
    @endcan
<!-- Fin seccion de Registro de Eventos  -->

<!-- Seccion de profesores -->
<hr class="sidebar-divider my-0">
    @can('manage-users')
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse_prof" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-chalkboard-teacher"></i>
                <span>Gestión de Profesores</span>
            </a>
            <div id="collapse_prof" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Profesores</h6>
                    <a class="collapse-item" href="{{url('profesores')}}">Ver Profesores</a>
                    <a class="collapse-item" href="{{url('profesores/registrar-profesor')}}">Crear Profesores</a>
                </div>
            </div>
        </li>
    @endcan
<!-- Fin seccion de profesores  -->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter"></span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>

                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>

                            <a class="dropdown-item text-center small text-gray-500" href="#">Coming Soon</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter"></span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>

                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>

                            <a class="dropdown-item text-center small text-gray-500" href="#">Coming Soon</a>

                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                            <img class="img-profile rounded-circle" src="/uploads/avatars/fisc_logo.png">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            @can('is-user')
                            <a class="dropdown-item" href="{{url('profile/'.Auth()->user()->id.'/edit')}}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            @endcan
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>

                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Content -->

                @include('partials.alerts')


                @yield('content')




            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; 6 Creditos UTP 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>

<!-- DataTable JavaScript -->
<script type="text/javascript">$(document).ready( function () {
        $('#dataTable').DataTable();
    } );
</script>

</body>

</html>
