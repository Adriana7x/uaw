<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section class="content">
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <br>
                <div class="fadeIn first">
                    <center><img src="images/logo_uaw.png" id="icon" /></center>
                </div>
                <br>
            </div>
        </div>
        <h5 align="center">UNIVERSIDAD INTERCULTURAL DE NACIONALIDADES Y PUEBLOS INDIGENAS AMAWTAY WASI</h5>
        <br>
        <br>
        <div class="card">
            <div class="card-header">
                DATOS PERSONALES
            </div>
            <br>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-9">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label>Apellidos</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Apellidos">
                                </div>
                                <div class="col">
                                    <label>Nombres</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Nombres">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label for="cedulaJugador">Cédula de Identidad</label>
                                    <input type="text" class="form-control" id="cedulaJugador" name="cedula" placeholder="Ingrese cédula" onkeypress="return soloNumeros(event)" maxlength="10" required>
                                </div>

                                <div class="col">
                                    <label for="pasaporte">Número de Pasaporte</label>
                                    <input type="text" class="form-control" id="pasaporte" name="pasaporte" placeholder="Ingrese" onkeypress="return soloNumeros(event)" maxlength="10" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1">Email Personal</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese email">
                                </div>

                                <div class="col">
                                    <label for="exampleInputEmail1">Estado Civil</label>
                                    <select class="form-control">
                                        <option>Soltero(a)</option>
                                        <option>Casado(a)</option>
                                        <option>Viudo(a)</option>
                                        <option>Divorciado(a)</option>
                                        <option>Unión Libre</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                LUGAR DE NACIMIENTO
            </div>
            <br>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label>País</label>
                                    <input type="text" class="form-control" placeholder="Ingrese País">
                                </div>
                                <div class="col">
                                    <label>Provincia/Estado/Municipio</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Provincia/Estado/Municipio ">
                                </div>

                                <div class="col">
                                    <label>Ciudad</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Ciudad ">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label>Fecha de Nacimiento</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Género</label>
                                    <div class="container">
                                        <label>
                                            M : <input type="radio" id="exampleRadios1" name="numero" value="1">
                                        </label>
                                        <label>
                                            F : <input type="radio" id="exampleRadios2" name="numero" value="2">
                                        </label>
                                        <label>
                                            Otro : <input type="radio" id="exampleRadios3" name="numero" value="3">
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Tipo de Sangre</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Tipo de Sangre ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                DIRECCIÓN DOMICILIARIA: (Sector, Barrio, Calles, Manzana, Pasaje, No. De casa , etc)
            </div>
            <br>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label>Provincia</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Provincia">
                                </div>
                                <div class="col">
                                    <label>Cantón</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Cantón">
                                </div>

                                <div class="col">
                                    <label>Parroquia</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Parroquia ">
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label>Calle Principal</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Calle Principal">
                                </div>
                                <div class="col">
                                    <label>Calle Secundaria</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Calle Secundaria">
                                </div>

                                <div class="col">
                                    <label>Número</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Número ">
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label>Referencia Domiciliaria</label>
                                    <input type="text" class="form-control" placeholder="Ingrese una referencia">
                                </div>
                                <div class="col">
                                    <label>Teléfono Convencional</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Teléfono Convencional">
                                </div>

                                <div class="col">
                                    <label>Teléfono Celular</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Celular ">
                                </div>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="card">
            <div class="card-header">
                DISCAPACIDAD, ENFERMEDAD CATASTRÓFICA, SERVIDORES SUSTITUTOS
            </div>
            <br>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-12">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4">
                                    <label for="exampleInputEmail1">¿Posee Ud. Algún Tipo de Discapacidad?</label>
                                    <select class="form-control">
                                        <option>Seleccione</option>
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>
                                </div>

                                <div class="col-4">
                                    <label>Tipo de Discapacidad</label>
                                    <select class="form-control">
                                        <option>Seleccione</option>
                                        <option>Física</option>
                                        <option>Auditiva</option>
                                        <option>Intelectual</option>
                                        <option>Visual</option>
                                        <option>De Lenguaje</option>
                                        <option>Psicosocial (Mental/Psicologica)</option>
                                    </select>
                                </div>

                                <div class="col-3">
                                    <label>Porcentaje Discapacidad</label>
                                    <input type="text" class="form-control" placeholder="%">
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1">¿Posee Ud. Enfermedad Catastrófica?</label>
                                    <select class="form-control">
                                        <option>Seleccione</option>
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>
                                </div>
                                
                                <div class="col">
                                    <label>Tipo de Enfermedad</label>
                                    <select class="form-control">
                                        <option>Ninguno</option>
                                        <option>Todo tipo de malformaciones congenitas del corazón y valculopatias cardiacas</option>
                                        <option>Todo tipo de cáncer</option>
                                        <option>Tumor cerebral en cualquier estado y de cualquier tipo</option>
                                        <option>Insuficiencia renal crónica </option>
                                        <option>Transplante de órganos: riñon, higado, médula osea</option>
                                        <option>Secuelas de quemaduras graves</option>
                                        <option>Malformaciones arterio venosas cerebrales</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1">¿Es Ud. Servidor Sustituto?</label>
                                    <select class="form-control">
                                        <option>Seleccione</option>
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <label for="exampleInputEmail1">Tipo de sustituto</label>
                                    <select class="form-control">
                                        <option>Seleccione</option>
                                        <option>Directo</option>
                                        <option>Por solidaridad</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <label>Nombres y Apellidos</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Nombres">
                                </div>

                                <div class="col">
                                    <label>Nro. Certificado</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Nombres">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>


        <div class="card">
            <div class="card-header">
                AUTOIDENTIFICACIÓN ETNICA
            </div>
            <br>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1">¿Usted se considera?</label>
                                    <select class="form-control">
                                        <option>Indígena</option>
                                        <option>Afroecuatoriano / Afrodescendiente</option>
                                        <option>Negro(a)</option>
                                        <option>Mulato(a)</option>
                                        <option>Montubio(a)</option>
                                        <option>Mestizo(a)</option>
                                        <option>Blanco(a)</option>
                                        <option>Otro(a)</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <label for="exampleInputEmail1">Si es Indígena Especifique Nacionalidad</label>
                                    <select class="form-control">
                                        <option>Seleccione</option>
                                        <option>Kichwa</option>
                                        <option>Secoya</option>
                                        <option>Shiwiar</option>
                                        <option>Shuar</option>
                                        <option>Siona</option>
                                        <option>Tsachila</option>
                                        <option>Waorani</option>
                                        <option>Zapara</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <label>En caso de otro, especifique</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                EN CASO DE EMERGENCIA COMUNICAR A:
            </div>
            <br>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label>Nombre y Apellido</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Nombre y Apellido">
                                </div>
                                <div class="col">
                                    <label>Parentesco</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Parentesco ">
                                </div>

                                <div class="col">
                                    <label>Teléfono Convencional/Celular</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Convencional/Celular">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label>Provincia</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Provincia">
                                </div>
                                <div class="col">
                                    <label>Cantón</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Cantón">
                                </div>

                                <div class="col">
                                    <label>Parroquia</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Parroquia ">
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label>Calle Principal</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Calle Principal">
                                </div>
                                <div class="col">
                                    <label>Calle Secundaria</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Calle Secundaria">
                                </div>

                                <div class="col">
                                    <label>Número</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Número ">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label>Referencia Domiciliaria del Contacto de Emergencia</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Referencia Domiciliaria">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                DATOS DE CONYUGE:
            </div>
            <br>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label>Apellidos y Nombres</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Apellidos y Nombres">
                                </div>
                                <div class="col">
                                    <label>Cédula o Pasaporte</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Cédula ">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <label>Ocupación</label>
                                    <input type="text" class="form-control" placeholder="Ingrese Ocupación">
                                </div>
                                <div class="col">
                                    <label>Teléfono de Contacto</label>
                                    <input type="text" class="form-control" placeholder="Ingrese teléfono">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                DATOS DE HIJOS Y OTRAS CARGAS FAMILIARES
            </div>
            <br>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-11">
                        <!-- <div class="container-fluid">
                            <div class="row">
                                <div class="col-4">
                                    <label>Nombres y Apellidos</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col-3">
                                    <label>Cédula o Pasaporte</label>
                                    <input type="text" class="form-control" placeholder=" ">
                                </div>

                                <div class="col-3">
                                    <label>Parentesco/Relación</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>

                                <div class="col-2">
                                    <label>Fecha de Nacimiento</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-5">
                                    <label>Nivel de instrucción</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col-4">
                                    <label>Posee Discapacidad</label>
                                    <select class="form-control">
                                        <option>Seleccione</option>
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label>Porcentaje</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                        </div>
                        <br> -->
                        <div class="row">
                            <div class="col-md-13">
                                <div class="container-fluid">
                                    <div class="row">
                                        <table class="table table-responsive table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nombres y Apellidos</th>
                                                    <th>Cédula/pasaporte</th>
                                                    <th>Parentesco/Relación</th>
                                                    <th>Fecha de Nacimiento</th>
                                                    <th>Nivel de Instrucción</th>
                                                    <th>Posee Discapacidad</th>
                                                    <th>Porcentaje</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input class="col-50" type="text" class="form-control" placeholder="">
                                                    </td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="date" class="form-control" placeholder=""></td>
                                                    <td><input class="col-50" type="text" class="form-control" placeholder=""></td>
                                                    <td> <select class="form-control">
                                                            <option>Seleccione</option>
                                                            <option>Si</option>
                                                            <option>No</option>
                                                        </select></td>
                                                    <td><input class="col-10" type="text" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="date" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td> <select class="form-control">
                                                            <option>Seleccione</option>
                                                            <option>Si</option>
                                                            <option>No</option>
                                                        </select></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="date" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td> <select class="form-control">
                                                            <option>Seleccione</option>
                                                            <option>Si</option>
                                                            <option>No</option>
                                                        </select></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="date" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td> <select class="form-control">
                                                            <option>Seleccione</option>
                                                            <option>Si</option>
                                                            <option>No</option>
                                                        </select></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="date" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td> <select class="form-control">
                                                            <option>Seleccione</option>
                                                            <option>Si</option>
                                                            <option>No</option>
                                                        </select></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="date" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td> <select class="form-control">
                                                            <option>Seleccione</option>
                                                            <option>Si</option>
                                                            <option>No</option>
                                                        </select></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td><input type="date" class="form-control" placeholder=""></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                    <td> <select class="form-control">
                                                            <option>Seleccione</option>
                                                            <option>Si</option>
                                                            <option>No</option>
                                                        </select></td>
                                                    <td><input type="text" class="form-control" placeholder=""></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>



    <style>
        html {
            background-color: white;
        }

        body {
            min-height: 100vh;
            max-width: 80%;

            margin: 0 auto;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>