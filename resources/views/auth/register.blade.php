<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url({{ asset('img/fonasa_2.jpg') }})"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h4 class="mb-4" align="center">Creación de Usuario</h4>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('register') }}" class="register-form">
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" id="name" type="name"
                                        name="name" required />
                                    <label class="form-control-placeholder" for="name">Nombre y Apellido</label>

                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" id="email" type="email"
                                            name="email" required />
                                        <label class="form-control-placeholder" for="email">Correo</label>
                                    </div>

                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control" name="password"
                                            autocomplete="current-password" required />
                                        <label class="form-control-placeholder" for="password">Contraseña</label>
                                        <span toggle="#password-field"
                                            class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>

                                    <div class="form-group">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" autocomplete="current-password" required />
                                        <label class="form-control-placeholder" for="password-confirm">Confirmar
                                            Contraseña</label>
                                        <span toggle="#password-field"
                                            class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                                            Crear Usuario
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/main.js"></script>

</html>
