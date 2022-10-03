<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Bidang</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>

        <h3 class="text-center mt-3">Data Bidang</h3>
        <?php
        require_once "lingkaran.php";
        require_once "PersegiPanjang.php";
        require_once "Segitiga.php";

        $ling = new Lingkaran(8);
        $pp = new persegiPanjang(8, 3);
        $sg3 = new Segitiga(12, 8);

        $dataBidang = [$ling, $pp, $sg3];
        ?>

        <table class="table table-light table-bordered table-striped table-hover mt-3" style="width: 60%; margin:auto;">
            <thead class="table-primary">
                <tr>
                    <?php

                    $judul = ["No", "Nama Bidang", "Keterangan", "Luas Bidang", "Keliling Bidang"];

                    foreach ($judul as $judul) {
                        ?>
                        <th><?= $judul ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;

                foreach ($dataBidang as $bidang) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $bidang->namaBidang () ?></td>
                        <td><?= $bidang->keterangan () ?></td>
                        <th><?= $bidang->luasBidang () ?></th>
                        <th><?= $bidang->kelilingBidang () ?></th>
                    </tr>
                <?php } ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>