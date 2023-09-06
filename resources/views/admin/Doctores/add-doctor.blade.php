<!DOCTYPE html>
<html lang="en">


<!-- add-doctor24:06-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assetsadmin/img/favicon.ico">
    <title>odontologia</title>
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assetsadmin/css/select2.min.css">
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
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Agregar Doctor</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>nombre<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>apellido</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nombre de usuario <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Confirmacion Password</label>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Fecha De Nacimiento</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group gender-select">
										<label class="gen-label">Genero:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input">Masculino
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input">Femenino
											</label>
										</div>
									</div>
                                </div>
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Direccion</label>
												<input type="text" class="form-control ">
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>Pais</label>
												<select class="form-control select">
													<option>Bolivia</option>
													<option>otro</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>Ciudad</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>Ciudad\o provincia</label>
												<select class="form-control select">
													<option>Potosi</option>
													<option>Tupiza</option>
													<option>Chuquisaca</option>
												</select>
											</div>
										</div>

									</div>
								</div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Telefono </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>

                            </div>
							<div class="form-group">
                                <label>Biografia</label>
                                <textarea class="form-control" rows="3" cols="30"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="display-block">Estado</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="doctor_active" value="option1" checked>
									<label class="form-check-label" for="doctor_active">
									Activo
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="doctor_inactive" value="option2">
									<label class="form-check-label" for="doctor_inactive">
									Inactivo
									</label>
								</div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Crear Doctor</button>
                            </div>
                        </form>
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
	<script src="assetsadmin/js/moment.min.js"></script>
	<script src="assetsadmin/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assetsadmin/js/app.js"></script>
</body>


<!-- add-doctor24:06-->
</html>
