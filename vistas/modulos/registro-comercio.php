<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Registro</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="<?php echo $url; ?>">Home</a></li>
                    <li class="breadcrumb-item active">Registro</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START LOGIN SECTION -->
<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
            		<div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Crear Cuenta</h3>
                        </div>
                        <form id="frmRegistroComercio">
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="txtNit" placeholder="NIT">
                            </div>
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="txtNombre" placeholder="Razon Social">
                            </div>
                            <div class="form-group">
                                <input type="email" required="" class="form-control" name="txtEmail" placeholder="Correo electrónico">
                            </div>
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="txtDireccion" placeholder="Dirección">
                            </div>
                            <?php
                                $ciudades = ControladorCiudad::ctrConsultarCiudades();
                            ?>
                            <div class="form-group">
                                <div class="custom_select">
                                    <select class="form-control" name="cbCiudad" required>
                                        <option value="">Seleccione la Ciudad..</option>
                                        <?php 
                                        foreach($ciudades as $ciudad){
                                            echo '<option value="'.$ciudad['id'].'">'.$ciudad['descripcion'].'</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="txtTelefono" placeholder="Telefóno">
                            </div>
                            <div class="form-group">
                                <label>¿Tiene local?</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rdLocal" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rdLocal" id="inlineRadio2" value="0" checked>
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                            <?php 
                            $centros_comerciales = ControladorCentroComercial::ctrConsultarCentrosComerciales();
                            ?>
                            <div class="form-group" style="display: none;" id="frm_grp_cc" required>
                                <div class="custom_select">
                                    <select class="form-control" name="cbCentroComercial">
                                        <option value="">Seleccione el Centro Comercial..</option>
                                        <?php 
                                        foreach($centros_comerciales as $cc){
                                            echo '<option value="'.$cc['id'].'">'.$cc['descripcion'].'</option>';
                                        }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="password" name="txtPassword" id="txtPassword" placeholder="Contraseña">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="password" name="txtCPassword" id="txtCPassword" placeholder="Confirmar Contraseña">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block" name="register">Guardar</button>
                            </div>
                        </form>
                        <div class="different_login">
                            <span> ó</span>
                        </div>
                        <!-- <ul class="btn-login list_none text-center">
                            <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                        </ul> -->
                        <div class="form-note text-center"> ¿Ya estás registrado? <a href="<?php echo $url; ?>login">Iniciar Sesión</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END LOGIN SECTION -->