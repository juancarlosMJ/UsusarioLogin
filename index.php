<?php include "header.php"; ?>
     <!-- Sign In Form -->
     <form action="servidor/loginUsuario.php" method="POST">
                    <div class="form-floating mb-2">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" require>
                    <label for="nombre">Nombre De Usuario</label>
                    </div>
                    <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="password" placeholder="Password" require >
                    <label for="password">Password</label>
                    </div>
                    <div class="d-grid">
                <button class="btn btn-primary">Entrar</button>
                <a href="Registrar.php" class="btn btn-danger">Registro</a>
                    </div>
                    </div>

                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>



<?php include "footer.php"; ?>

