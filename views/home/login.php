<?php 
$titulo = "Login";
require("../layout/header.php");
?>

        <div class="mt-5 pt-5" >
            <div class="row">
                <div class="modal-dialog text-center mt-4 rounded" style="background-color: #8a0f38;">
                    <div class="col mb-4">
                        <div class="modal-content px-5">
                            <div class="col-12 mt-4">
                                <img src="https://play-lh.googleusercontent.com/8-1RW87JPE8sKA-iVFM42kepAxt4fvx0ei8AQcmmuZZ7mrgGqP_ktv8NLCHDUOe7P_in" class="card-img-top rounded-circle" alt="..." style="max-height: 150px; max-width: 150px;" />
                            </div>

                            <div class="form-group mt-4" id="user-group">
                                <label for="email" class="form-label">Usuario</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                            </div>
                            <div class="form-group my-2" id="pass-group">
                                <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="Ingrese Password">
                            </div>
                            <div class="container mt-2">
                                <a class="btn btn-primary" href="index.php" role="button">Ingresar</a>
                            </div>
                          
                        </div>
                        <div class="row">
                            <label for="error"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php require("../layout/footer.php"); ?>