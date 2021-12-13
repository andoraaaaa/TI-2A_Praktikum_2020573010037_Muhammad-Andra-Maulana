<?php
include "proses/session.php";
// require"proses/session.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SIPBATIK | Database</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/"> -->



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/sidebars.css" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <div class="container-fluid">
        <?php
        require "navbar.php";
        ?>
    </div>

    <!-- SIDEBAR -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <?php
                require "sidebar.php";
                ?>
            </div>
            <div class="col-9">
                <!-- KONTEN -->
                <!-- PROYEKTOR -->
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pie-chart-fill" viewBox="0 0 16 16">
                        <path d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778l-5.5 5.5zM8.5.015V7.5h7.485A8.001 8.001 0 0 0 8.5.015z" />
                    </svg>
                    Data Barang Peminjaman
                </h4>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($databarang as $db) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $db["nama_barang"]; ?></td>
                                <td><?= $db["keterangan"]; ?></td>
                                <td>
                                    <span class="badge rounded-pill bg-primary" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalview<?= $db["id"]; ?>">
                                        View
                                    </span>
                                    <span class="badge rounded-pill bg-warning" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaledit<?= $db["id"]; ?>">
                                        Edit
                                    </span>
                                    <span class="badge rounded-pill bg-danger" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaldelete<?= $db["id"]; ?>">
                                        Delete
                                    </span>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <!-- <div class="row">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/infocus.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Proyektor</h5>
                            <p class="card-text">Ini adalah alat sihir untuk menembak layar</p>
                            <a href="#" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-index-thumb-fill" viewBox="0 0 16 16">
                                    <path d="M8.5 1.75v2.716l.047-.002c.312-.012.742-.016 1.051.046.28.056.543.18.738.288.273.152.456.385.56.642l.132-.012c.312-.024.794-.038 1.158.108.37.148.689.487.88.716.075.09.141.175.195.248h.582a2 2 0 0 1 1.99 2.199l-.272 2.715a3.5 3.5 0 0 1-.444 1.389l-1.395 2.441A1.5 1.5 0 0 1 12.42 16H6.118a1.5 1.5 0 0 1-1.342-.83l-1.215-2.43L1.07 8.589a1.517 1.517 0 0 1 2.373-1.852L5 8.293V1.75a1.75 1.75 0 0 1 3.5 0z" />
                                </svg>
                                Pinjam
                            </a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="assets/infocus.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Wire</h5>
                            <p class="card-text">Ini adalah alat sihir untuk menembak layar</p>
                            <a href="#" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-index-thumb-fill" viewBox="0 0 16 16">
                                    <path d="M8.5 1.75v2.716l.047-.002c.312-.012.742-.016 1.051.046.28.056.543.18.738.288.273.152.456.385.56.642l.132-.012c.312-.024.794-.038 1.158.108.37.148.689.487.88.716.075.09.141.175.195.248h.582a2 2 0 0 1 1.99 2.199l-.272 2.715a3.5 3.5 0 0 1-.444 1.389l-1.395 2.441A1.5 1.5 0 0 1 12.42 16H6.118a1.5 1.5 0 0 1-1.342-.83l-1.215-2.43L1.07 8.589a1.517 1.517 0 0 1 2.373-1.852L5 8.293V1.75a1.75 1.75 0 0 1 3.5 0z" />
                                </svg>
                                Pinjam
                            </a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="assets/infocus.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Printer</h5>
                            <p class="card-text">Ini adalah alat sihir untuk menembak layar</p>
                            <a href="#" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-index-thumb-fill" viewBox="0 0 16 16">
                                    <path d="M8.5 1.75v2.716l.047-.002c.312-.012.742-.016 1.051.046.28.056.543.18.738.288.273.152.456.385.56.642l.132-.012c.312-.024.794-.038 1.158.108.37.148.689.487.88.716.075.09.141.175.195.248h.582a2 2 0 0 1 1.99 2.199l-.272 2.715a3.5 3.5 0 0 1-.444 1.389l-1.395 2.441A1.5 1.5 0 0 1 12.42 16H6.118a1.5 1.5 0 0 1-1.342-.83l-1.215-2.43L1.07 8.589a1.517 1.517 0 0 1 2.373-1.852L5 8.293V1.75a1.75 1.75 0 0 1 3.5 0z" />
                                </svg>
                                Pinjam
                            </a>
                        </div>
                    </div> -->
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalAdd">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle me-2" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>Add</button>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Modal Delete -->
    <?php foreach ($databarang as $db) : ?>
        <div class="modal fade" id="modaldelete<?= $db["id"]; ?>" tabindex="-1" aria-labelledby="modalviewLabel" aria-hidden="true" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalviewLabel">Konfirmasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Anda yakin ingin menghapus <b><?= $db["nama_barang"] ?>?</b>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <a href="proses/data_barang/delete.php?id=<?php echo $db['id'] ?>" type="button" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- END MODAL DELETE -->

    <!-- Modal View -->
    <?php foreach ($databarang as $db) : ?>
        <div class="modal fade" id="modalview<?= $db["id"]; ?>" tabindex="-1" aria-labelledby="modalviewLabel" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalviewLabel">Log Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="<?= $db["gambar"] ?>" style="max-height:350px;" width="50%" height="50%" class="rounded mx-auto d-block">
                        <br>
                        <table class="table table-bordered border-primary">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Peminjam</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>16/04/2021, 16:40</td>
                                    <td>Muhammad Andra Maulana</td>
                                    <td>
                                        Sudah Dikembalikan
                                    </td>
                                </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- END MODAL VIEW -->
    <!-- MODAL EDIT -->
    <?php foreach ($databarang as $db) : ?>
        <div class="modal fade" id="modaledit<?= $db["id"]; ?>" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAddLabel">Edit Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="proses/data_barang/edit.php" method="POST">
                            <div class="mb-1">
                                <label for="id" class="col-form-label">ID Barang:</label>
                                <input type="text" name="id" value="<?= $db["id"]; ?>" class="form-control" id="id" readonly>
                            </div>
                            <div class="mb-1">
                                <label for="nama_barang" class="col-form-label">Nama Barang:</label>
                                <input type="text" name="nama_barang" value="<?= $db["nama_barang"]; ?>" class="form-control" id="nama_barang">
                            </div>
                            <div class="mb-1">
                                <label for="keterangan" class="col-form-label">Keterangan:</label>
                                <input type="text" name="keterangan" value="<?= $db["keterangan"] ?>"" class=" form-control" id="keterangan">
                            </div>
                            <div class="mb-1">
                                <label for="gambar" class="col-form-label">Gambar:</label>
                                <input type="text" name="gambar" value="<?= $db["gambar"] ?>" class="form-control" id="gambar">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Edit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- END MODAL EDIT -->
    <!-- MODAL ADD -->
    <div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAddLabel">Edit Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="proses/data_barang/add.php" method="POST">
                        <div class="mb-1">
                            <label for="nama_barang" class="col-form-label">Nama Barang:</label>
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang">
                        </div>
                        <div class="mb-1">
                            <label for="keterangan" class="col-form-label">Keterangan:</label>
                            <input type="text" name="keterangan" class=" form-control" id="keterangan">
                        </div>
                        <div class="mb-1">
                            <label for="gambar" class="col-form-label">Gambar:</label>
                            <input type="text" name="gambar" class="form-control" id="gambar">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END MODAL ADD -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/sidebars.js"></script>
</body>

</html>