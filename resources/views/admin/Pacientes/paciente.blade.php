<!DOCTYPE html>
<html lang="en">


<!-- patients23:17-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assetsadmin/img/favicon.ico">
    <title>odontologia</title>
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/style.css">
    <!--[if lt IE 9]>
		<script src="assetsadmin/js/html5shiv.min.js"></script>
		<script src="assetsadmin/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index-2.html" class="logo">
					<img src="assetsadmin/img/logo.png" width="35" height="35" alt=""> <span>Odontochichas</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">

                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="assetsadmin/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>{{auth()->user()->name}}</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.html">Mi perfil</a>
						<a class="dropdown-item" href="{{ route('login1.destroy')}}">Salir</a>
					</div>
                </li>
            </ul>

        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Menu</li>
                        <li class="active">
                            <a href="{{route ('admin.index')}}"><i class="fa fa-dashboard"></i> <span>Panel de administracion</span></a>
                        </li>
						<li>
                            <a href="{{route('admin.doctores.doctors')}}"><i class="fa fa-user-md"></i> <span>Doctores</span></a>
                        </li>
                        <li>
                            <a href="{{route('admin.pacientes.paciente')}}"><i class="fa fa-wheelchair"></i> <span>Pacientes</span></a>
                        </li>

                        <li>
                            <a href="{{route ('admin.servicios.servicio')}}"><i class="fa fa-hospital-o"></i> <span>Servicios</span></a>
                        </li>

                        </li>

						<li class="submenu">
							<a href="#"><i class="fa fa-flag-o"></i> <span> Reportes </span> <span></span></a>
						</li>

                        <li>
                            <a href="{{route ('admin.citas.cita')}}"><i class="fa fa-calendar"></i> <span> Citas </span> <span></span></a>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Pacientes</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="{{route ('admin.paciente.add-paciente')}}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Agregar Paciente</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Alergia</th>
										<th>Correo electronico</th>
										<th>Telefono</th>
										<th>Fecha de nacimiento</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
                                @foreach ($users as $users )
								<tbody>
									<tr>
										<td><img width="28" height="28" src="assetsadmin/img/user.jpg" class="rounded-circle m-r-5" alt=""> {{$users->name}}</td>
										<td>{{$users->alergia}}</td>
										<td>{{$users->email}}</td>
										<td>{{$users->telefono}}</td>
										<td>{{$users->fecha_nacimiento}}</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{route ('admin.paciente.edit-paciente')}}"><i class="fa fa-pencil m-r-5"></i> Editar</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
												</div>
											</div>
										</td>
									</tr>

								</tbody>
                                @endforeach
							</table>
						</div>
					</div>
                </div>
            </div>

		<div id="delete_patient" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assetsadmin/img/sent.png" alt="" width="50" height="46">
						<h3>Seguro que quieres eliminar?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">cerrar</a>
							<button type="submit" class="btn btn-danger">Borrar</button>
						</div>
					</div>
				</div>
			</div>

		</div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assetsadmin/js/jquery-3.2.1.min.js"></script>
	<script src="assetsadmin/js/popper.min.js"></script>
    <script src="assetsadmin/js/bootstrap.min.js"></script>
    <script src="assetsadmin/js/jquery.slimscroll.js"></script>
    <script src="assetsadmin/js/select2.min.js"></script>
    <script src="assetsadmin/js/jquery.dataTables.min.js"></script>
    <script src="assetsadmin/js/dataTables.bootstrap4.min.js"></script>
    <script src="assetsadmin/js/moment.min.js"></script>
    <script src="assetsadmin/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assetsadmin/js/app.js"></script>
</body>


<!-- patients23:19-->
</html>
