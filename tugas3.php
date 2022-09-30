<?php
//array scalar (1 dimensi)
$m1 = ['nim'=>'191402001','nama'=>'Masayu Fani Sahpura','nilai'=>80];
$m2 = ['nim'=>'191402002','nama'=>'Zen Petrix','nilai'=>65];
$m3 = ['nim'=>'191402003','nama'=>'Nurul Atiqa Seiregar','nilai'=>70];
$m4 = ['nim'=>'191402004','nama'=>'Mhd. Syahrizal','nilai'=>95];
$m5 = ['nim'=>'191402005','nama'=>'Lira Savina','nilai'=>55];
$m6 = ['nim'=>'191402006','nama'=>'Tazrian Husnah','nilai'=>85];
$m7 = ['nim'=>'191402007','nama'=>'Wanda Khalisha','nilai'=>78];
$m8 = ['nim'=>'191402008','nama'=>'Andi Farras','nilai'=>90];
$m9 = ['nim'=>'191402009','nama'=>'Muhammad Iqbal R','nilai'=>54];
$m10 = ['nim'=>'191402010','nama'=>'Rizky Alwi','nilai'=>98];

$ar_judul = ['No','NIM','Nama','Nilai','Keterangan',
'Grade','Predikat'];

//array assosiative (> 1 dimensi)
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

//aggregate function in array
$jumlah_mhs = count($mahasiswa);
$jml_nilai = array_column($mahasiswa,'nilai');
$total_nilai = array_sum($jml_nilai);
$max_nilai = max($jml_nilai);
$min_nilai = min($jml_nilai);
$rata2 = $total_nilai / $jumlah_mhs;
//keterangan
$keterangan = [
    'Nilai Tertinggi'=>$max_nilai,
    'Nilai Terendah'=>$min_nilai,
    'Nilai Rata-Rata'=>$rata2,
    'Jumlah Siswa'=>$jumlah_mhs
];
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Belajar Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <h3 class="text-center mt-5">Daftar Nilai Mahasiswa</h3>
        <table class="table table-striped mt-3" style="width: 80%; margin : auto;">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $mhs){
                //rumus2
                $status = ($mhs['nilai'] >= 60) ? 'Lulus' : 'Gagal';

                if($mhs['nilai'] >= 85 && $mhs['nilai'] <=100){
                    $grade = 'A';
                }else if($mhs['nilai'] >= 75 && $mhs['nilai'] <=84){
                    $grade = 'B';
                }else if($mhs['nilai'] >= 65 && $mhs['nilai'] <=74){
                    $grade = 'C';
                }else if($mhs['nilai'] >= 55 && $mhs['nilai'] <=64){
                    $grade = 'D';
                }else $grade = 'E';

                switch($grade){
                    case 'A' : $predikat = 'Memuaskan'; break;
                    case 'B' : $predikat = 'Bagus'; break;
                    case 'C' : $predikat = 'Cukup'; break;
                    case 'D' : $predikat = 'Kurang'; break;
                    case 'E' : $predikat = 'Buruk'; break;
                    default : $predikat = '';
                }
                
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $status ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($keterangan as $ket => $hasil) {
                ?>
                <tr align="right">
                    <th colspan="6"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>