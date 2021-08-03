<?php include "header.php";?>
<div class="container">
            <div class="row">
                <div class="col">
                <div class="card">
                <div class="card-body">
                <h2>Regidtro de Usuario</h2>
                <form action="servidor /registrar.php" method="POST">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" require>
                <label for="apellidoPaterno">Apellido Paterno</label>
                <input type="text" name="apellidoPaterno" class="form-control"  require>
                <label for="apellidoMaterno">Apellido Materno</label>
                <input type="text" name="apellidoMaterno" class="form-control"  require>
                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo" required class="form-control">
                    <option value="mujer">Mujer</option>
                    <option value="hombre">Hombre</option>
                </select>
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control"  require>
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" require>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" class="form-control"  require >
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control"  require >
                <br>
                <button class="btn btn-primary">Registrar</button>
                <a href="index.php" class="btn btn-success">ir al login</a>
                </form>
                        </div>
                </div>
                </div>
            </div>
        </div>
<?php include "footer.php";?>






