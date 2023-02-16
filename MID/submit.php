<html>

<head>
    <title>Simulasi Kredit Mobil</title>
    <link rel="stylesheet" href="submit.css">
</head>

<body>
    <div class="formulir">
        <div class="formulir-title">
            <div class="formulir-content">
                <h1>Simulasi Kredit Mobil</h1>
                <br></br>

                <?php
                $harga = $_POST['harga'];
                $uangmuka = $_POST['uangmuka'];
                $tahun = $_POST['tahun'];
                $bunga = $_POST['bunga'];
                $uangmukarp = $uangmuka / 100 * $harga;
                $sisauang = $harga - $uangmukarp;
                $angsurantahun = $sisauang * $bunga / 100 * $tahun;
                $angsuranpokokbulan = $sisauang / 12 * $tahun;
                $angsuranbungabulan = ($sisauang * ($bunga / 100) / 12 * $tahun);
                $angsuranbulan = $angsuranpokokbulan + $angsuranbungabulan;

                echo "Harga : Rp" . number_format($harga, 0, ".", ".");;
                echo "<br>";
                echo "Uang Muka : " . $uangmuka . "%";
                echo "<br>";
                echo "Uang Muka : Rp" . number_format($uangmukarp, 0, ".", ".");
                echo "<br>";
                echo "Sisa Bayar : Rp" . number_format($sisauang, 0, ".", ".");
                echo "<br>";
                echo "Lama Angsuran : " . $tahun . " tahun";
                echo "<br>";
                echo "Bunga : " . $bunga . "% per tahun";
                echo "<br>";
                echo "Angsuran per tahun : Rp" . number_format($angsurantahun, 0, ".", ".");
                echo "<br>";
                echo "Angsuran per bulan : Rp" . number_format($angsuranbulan, 0, ".", ".");
                echo "<br>";
                ?>

</body>

</html>