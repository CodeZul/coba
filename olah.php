<!DOCTYPE html>
<?php
include 'konek.php';
?>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Publik!!!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <section>
        <div class="container mt-5">
            <figure class="text-center mt-3">
                <blockquote class="blockquote">
                    <p>Sampaikan Laporan Anda</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    <cite title="Source Title">CRUD : Create, Read, Update, and Delete</cite>
                </figcaption>
            </figure>
            <form action="proses.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id">

                <div class="mb-3 row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul Laporan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Ketik Judul Laporan Anda *">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="isi" class="col-sm-2 col-form-label">isi</label>
                    <div class="col-sm-10">
                        <textarea name="isi" id="isi" rows="6" class="form-control " placeholder="Ketik Isi Laporan Anda *" required=""></textarea>

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tanggal" class="col-sm-2 col-form-label">tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Pilih tanggal Kejadian">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lokasi" class="col-sm-2 col-form-label">lokasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Ketik Lokasi Kejadian *">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="instansi" class="col-sm-2 col-form-label">instansi</label>
                    <div class="col-sm-10">
                        <select name="instansi" id="instansi" class="form-control">
                            <option value="Polresta Kendari">Polresta Kendari</option>
                            <option value="Dinas Satpol PP Kendari">Dinas Satpol PP Kendari</option>
                            <option value="Dinas Satpol PP Kendari">Dinas Satpol PP Kendari</option>
                            <option value="Dinas Kesehatan(DINKES)Kota Kendari">Dinas(DINKES)Kesehatan Kota Kendari</option>
                            <option value="BNN Kota Kendari">BNN Kota Kendari</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kategori" class="col-sm-2 col-form-label">kategori</label>
                    <div class="col-sm-10">
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="Kesehatan">Kesehatan</option>
                            <option value="Ketertiban">Ketertiban</option>
                            <option value="Kekerasan">Kekerasan</option>
                            <option value="Keresahan">Keresahan</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lampiran" class="col-sm-2 col-form-label">Lampiran</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="lampiran" name="lampiran">
                    </div>
                </div>

                <div class="mb-3 row">
                    <button type='submit' class='btn btn-warning' name='btnProses' value='tambah'>Tambah Laporan</button>
                </div>
            </form>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>