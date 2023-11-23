<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if(isset($_GET['pesan'])){
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Login Gagal!</strong> <?php echo $_GET['pesan']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                }
                ?>

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h1>MASUK</h1>
                    </div>
                    <form action="cekLogin.php" method="post">
                        <div class="card-body mb-4">
                            <label for="nik" class="form-label">NIK</label>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" id="nik" name="nik" required
                                    placeholder="Nomor Induk Kependudukan (KTP)"
                                    aria-describedby="basic-addon3 basic-addon4">
                            </div>
                            <label for="password" class="form-label">Password <span>*</span></label>
                            <div class="input-group mb-4">
                                <input type="password" class="form-control" id="password" name="password" required
                                    placeholder="Minimal 8 Karakter & Berisi Alfanumerik"
                                    aria-describedby="basic-addon3 basic-addon4">
                            </div>
                            <div class="row mb-3">
                                <button type="submit" class="btn btn-primary" name="btnLogin">MASUK</button>
                            </div>
                            <div class="text-center">
                                Belum punya akun? Silahkan <a href="daftar.php">Daftar Sekarang!</a>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>

