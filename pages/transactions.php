<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_de_datos = 'glpie';
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>

<html lang="ES">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- Primary Meta Tags -->
    <title>Nombres Generados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt Free Bootstrap Dashboard - Transactions">
    <meta name="author" content="Themesberg">
    <meta name="description"
          content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta name="keywords"
          content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard"/>
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

    <!-- Sweet Alert -->
    <link type="text/css" href="../vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="../vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="../css/volt.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="../index.html">
        <img class="navbar-brand-dark" src="../img/hrseg.png" alt="Volt logo"/> <img
            class="navbar-brand-light" src="../img/hrseg.png" alt="Volt logo"/>
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <img src="../img/hrseg.png" class="card-img-top rounded-circle border-white"
                         alt="HRSG">
                </div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Hola HRSG</h2>
                    <a href="../pages/examples/sign-in.html"
                       class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                        <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Salir
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse"
                   data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                   aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="../index.html" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="../img/hrseg.png" height="20" width="20" alt="Volt Logo">
          </span>
                    <span class="mt-1 ms-1 sidebar-text">HRSEG PC CODE GEN</span>
                </a>
            </li>
            <li class="nav-item  active ">
                <a href="../pages/transactions.html" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path
                    d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd"
                                                                              d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                                                              clip-rule="evenodd"></path></svg>
          </span>
                    <span class="sidebar-text">Generador</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../pages/transactions.html" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path
                    d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd"
                                                                              d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                                                              clip-rule="evenodd"></path></svg>
          </span>
                    <span class="sidebar-text">KPIs (Indicadores)</span>
                </a>
            </li>
        </ul>

    </div>
</nav>

<main class="content">


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">

    </div>
    <div class="table-settings mb-4">
        <div class="row align-items-center justify-content-between">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Volt</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Transactions</li>
                </ol>
            </nav>
            <div class="col col-md-6 col-lg-3 col-xl-4">
                <div class="input-group me-2 me-lg-3 fmxw-400">
                            <span class="input-group-text">
                                <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </span>

                    <input type="text" id="busqueda" class="form-control">
                </div>
            </div>
            <div class="col-4 col-md-2 col-xl-1 ps-md-0 text-end">
                <div class="dropdown">
                    <button type="button" class="btn btn-block btn-gray-800 mb-3" data-bs-toggle="modal"
                            data-bs-target="#modal-form-signup">Generar Código
                    </button>
                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0">
                        <span class="small ps-3 fw-bold text-dark">Show</span>
                        <a class="dropdown-item d-flex align-items-center fw-bold" href="#">10
                            <svg class="icon icon-xxs ms-auto" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a class="dropdown-item fw-bold" href="#">20</a>
                        <a class="dropdown-item fw-bold rounded-bottom" href="#">30</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <table class="table table-hover" id="tabla-datos">
            <thead>
            <tr>
                <th class="border-gray-200">id</th>
                <th class="border-gray-200">area</th>
                <th class="border-gray-200">seccion</th>
                <th class="border-gray-200">cargo</th>
                <th class="border-gray-200">equipo</th>
                <th class="border-gray-200">tipo_equipo</th>
                <th class="border-gray-200">inventario</th>
                <th class="border-gray-200">codigo_pc</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <a href="#" class="fw-bold">
                        ids
                    </a>
                </td>
                <td>
                    <span class="fw-normal">areas</span>
                </td>
                <td><span class="fw-normal">secciones</span></td>
                <td><span class="fw-normal">cargos</span></td>
                <td><span class="fw-bold">equipos</span></td>
                <td><span class="fw-bold">tipo_equipo</span></td>
                <td><span class="fw-bold">inventarios</span></td>
                <td><span class="fw-bold text-success">codigo_pcs</span></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View
                                Details</a>
                            <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                            <a class="dropdown-item text-danger rounded-bottom" href="#"><span
                                    class="fas fa-trash-alt me-2"></span>Remove</a>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            function cargarDatos() {
                $.ajax({
                    type: "GET",
                    url: "../pages/ajax/obtener_data.php",
                    dataType: "json",
                    success: function (data) {
                        // Limpiar la tabla
                        $("#tabla-datos tbody").empty();
                        var busqueda = $("#busqueda").val().toLowerCase();
                        $.each(data, function (index, row) {
                            if (row.codigo_pc.toLowerCase().includes(busqueda)) {
                                var newRow = $("<tr>");
                                newRow.append("<td>" + row.id + "</td>");
                                newRow.append("<td>" + row.area + "</td>");
                                newRow.append("<td>" + row.seccion + "</td>");
                                newRow.append("<td>" + row.cargo + "</td>");
                                newRow.append("<td>" + row.equipo + "</td>");
                                newRow.append("<td>" + row.tipo_equipo + "</td>");
                                newRow.append("<td>" + row.inventario + "</td>");
                                newRow.append("<td>" + row.codigo_pc + "</td>");
                                $("#tabla-datos tbody").append(newRow);
                            }
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error("Error al cargar los datos: " + error);
                    }
                });
            }

            cargarDatos();
            $("#busqueda").on("input", function () {
                cargarDatos();
            });
            setInterval(function () {
                cargarDatos();
            }, 3000);
        });
    </script>

    </div>
    <div class="col-lg-4">
        <!-- Button Modal -->
        <!-- Modal Content -->
        <div class="modal fade" id="modal-form-signup" tabindex="-1" role="dialog" aria-labelledby="modal-form-signup"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card p-3 p-lg-4">
                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            <div class="mt-3 mb-4 text-center">
                                <img src="../img/hrseg.png" height="100" width="300"/>
                            </div>
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h4">Generar Código</h1>
                            </div>
                            <form action="insert_code.php" method="POST" class="mt-4">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="area">Área:</label>
                                    <select name="area" id="area" class="form-control">
                                        <option value="cext">Conxterna</option>
                                        <option value="admi">Administrativo</option>
                                        <option value="asis">Asistencial</option>
                                        <option value="cmd">C3md</option>
                                    </select>
                                </div>
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="seccion">Sección:</label>
                                    <select name="seccion" id="seccion" class="form-control">
                                        <option value="ciru">Cirugia</option>
                                        <option value="este">Esterilizacio</option>
                                        <option value="urge">urgencias</option>
                                        <option value="farm">Farmacia</option>
                                        <option value="gine">Ginecobstetrícia</option>
                                        <option value="inye">inyectologia</option>
                                        <option value="imag">Imagenologia/Radiologia</option>
                                        <option value="clias">Clinica Adultos</option>
                                        <option value="clip">Clinica Pediatrica</option>
                                        <option value="labc">Laboratorio clínic</option>
                                        <option value="quir">Medico Quirurgica</option>
                                        <option value="refc">Referencia Y Contrareferencia</option>
                                        <option value="tsoc">Trabajo Social</option>
                                        <option value="ucia">UCI adultos</option>
                                        <option value="ucip">UCI pediatrica</option>
                                        <option value="obse">Observación</option>
                                        <option value="aud">Auditoria</option>
                                        <option value="cart">Cartera</option>
                                        <option value="docu">Gestión Documental</option>
                                        <option value="com">Comunicaciones</option>
                                        <option value="cont">Contabilidad</option>
                                        <option value="gere">gerencia</option>
                                        <option value="endo">Endoscopia</option>
                                        <option value="juri">Juridica</option>
                                        <option value="pres">Presupuesto</option>
                                        <option value="sadm">Subdireción Administrativa</option>
                                        <option value="teso">Tesoreria</option>
                                        <option value="cons">Consultorio</option>
                                        <option value="enfe">Enfermeria</option>
                                        <option value="fact">Facturacion</option>
                                        <option value="labo">Laboratorio</option>
                                        <option value="odon">Odontologia</option>
                                        <option value="siau">SIAU</option>
                                        <option value="data">Datacenter</option>
                                        <option value="sist">sistemas</option>
                                        <option value="acop">centro de Acopio</option>
                                        <option value="vacu">Vacunacion</option>
                                        <option value="cali">calidad</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="cargo">Cargo:</label>
                                    <select name="cargo" id="cargo" class="form-control">
                                        <option value="m">Medicos</option>
                                        <option value="j">EnfermeraJefe</option>
                                        <option value="a">EnfermeraAux</option>
                                        <option value="a">AdministrativoAux</option>
                                        <option value="g">Gerencia</option>
                                        <option value="e">Especialista</option>
                                        <option value="l">Lider</option>
                                        <option value="o">Odontólogo</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="equipo">Equipo:</label>
                                    <select name="equipo" id="equipo" class="form-control">
                                        <option value="1">Equipo 1</option>
                                        <option value="2">Equipo 2</option>
                                        <option value="3">Equipo 3</option>
                                        <option value="4">Equipo 4</option>
                                        <option value="5">Equipo 5</option>
                                        <option value="6">Equipo 6</option>
                                        <option value="7">Equipo 7</option>
                                        <option value="8">Equipo 8</option>
                                        <option value="9">Equipo 9</option>
                                        <option value="10">Equipo 10</option>

                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="tipo_equipo">Tipo de equipo:</label>
                                    <select name="tipo_equipo" id="tipo_equipo" class="form-control">
                                        <option value="p">Portatil</option>
                                        <option value="e">Escritorio</option>
                                        <option value="t">Todo en 1</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="inventario">Inventario:</label>
                                    <select name="inventario" id="inventario" class="form-control">
                                        <option value="5878">Inventario</option>
                                        <option value="1000">Coopfonce</option>
                                        <option value="2000">MedicalGroup</option>
                                        <!-- Add more options here -->
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="codigo">Código PC:</label>
                                    <input type="text" name="codigo" id="codigo" class="form-control" readonly>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-gray-800">Guardar y comprobar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $("form").on("submit", function (event) {
                    event.preventDefault();
                    var formData = $(this).serialize();
                    $.ajax({
                        type: "POST",
                        url: "../pages/ajax/insert_code.php",
                        data: formData,
                        success: function (response) {
                            Swal.fire({
                                title: 'Respuesta del servidor',
                                html: response,
                                icon: 'info',
                                confirmButtonText: 'Aceptar'
                            });
                        },
                        error: function (xhr, status, error) {
                            // Mostrar SweetAlert en caso de error
                            Swal.fire({
                                title: 'Error',
                                text: 'Error al guardar los datos: ' + error,
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                            });
                        }
                    });
                });
                $("select").on("change", function () {
                    var area = $("#area").val();
                    var seccion = $("#seccion").val();
                    var cargo = $("#cargo").val();
                    var equipo = $("#equipo").val();
                    var tipo_equipo = $("#tipo_equipo").val();
                    var inventario = $("#inventario").val();
                    var codigo = area + seccion + cargo + equipo + tipo_equipo + inventario;
                    $("#codigo").val(codigo);
                });
            });
        </script>


        <!-- End of Modal Content -->
    </div>
    <div class="card theme-settings bg-gray-800 theme-settings-expand" id="theme-settings-expand">
        <div class="card-body bg-gray-800 text-white rounded-top p-3 py-2">
        <span class="fw-bold d-inline-flex align-items-center h6">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path
                    fill-rule="evenodd"
                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                    clip-rule="evenodd"></path></svg>
            Settings
        </span>
        </div>
    </div>
</main>

<!-- Core -->
<script src="../vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="../vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="../vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Smooth scroll -->
<script src="../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Charts -->
<script src="../vendor/chartist/dist/chartist.min.js"></script>
<script src="../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Sweet Alerts 2 -->
<script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

<!-- Vanilla JS Datepicker -->
<script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Notyf -->
<script src="../vendor/notyf/notyf.min.js"></script>

<!-- Simplebar -->
<script src="../vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="../assets/js/volt.js"></script>


</body>

</html>
