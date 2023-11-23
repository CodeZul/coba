<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h1>DAFTAR</h1>
                    </div>
                    
                    <form action="" method="post">
                        <div class="card-body mb-4">
                            <label for="nik" class="form-label">NIK</label>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" id="nik" name="nik" required
                                    placeholder="Nomor Induk Kependudukan (KTP)"
                                    aria-describedby="basic-addon3 basic-addon4">
                            </div>
                            <label for="namalengkap" class="form-label">Nama Lengkap <span>*</span> </label>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" id="namalengkap" name="namalengkap" required
                                    placeholder="Nama Lengkap" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                            <label for="email" class="form-label">Email <span>*</span> </label>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" id="email" name="email" required
                                    placeholder="publik@contoh.com" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                            <label for="no_telepon" class="form-label">No. Telp Aktif <span>*</span> </label>
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" id="no_telepon" name="no_telepon" required
                                    placeholder="Minimal 8-14 Angka" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                            <label for="password" class="form-label">Password <span>*</span></label>
                            <div class="input-group mb-4">
                                <input type="password" class="form-control" id="password" name="password" required
                                    placeholder="Minimal 8 Karakter & Berisi Alfanumerik"
                                    aria-describedby="basic-addon3 basic-addon4">
                            </div>
                            <div class="row mb-3">
                                <button type="submit" class="btn btn-primary" name="btnDaftar">DAFTAR</button>
                            </div>
                            <div class="text-center">
                                Sudah punya akun? Silahkan <a href="login.php">Login Sekarang!</a>
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
<?php

class UserRegistration {
    private $konek;

    public function __construct($databaseConnection) {
        $this->konek = $databaseConnection;
    }

    public function registerUser($nik, $namalengkap, $email, $no_telepon, $password) {
        $query = mysqli_query($this->konek, "INSERT INTO tb_user VALUES('$nik','$namalengkap','$email','$no_telepon', '$password')");

        if ($query) {
            $this->redirectToLogin();
        } else {
            echo "Registration failed. Please try again.";
        }
    }

    private function redirectToLogin() {
        echo "
        <script>
        alert('User registration successful!');
        window.location.href='login.php';
        </script>";
    }
}

// Example usage:
include 'konek.php';

if (isset($_POST['btnDaftar'])) {
    $nik = $_POST['nik'];
    $namalengkap = $_POST['namalengkap'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    $password = $_POST['password'];

    $userRegistration = new UserRegistration($konek);
    $userRegistration->registerUser($nik, $namalengkap, $email, $no_telepon, $password);
}
?>
