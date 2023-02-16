
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>


<body>
    <div class="formulir">
        <div class="formulir-content">
            <div class="formulir-title">
            
                <h1>Simulasi Kredit Mobil</h1>
                <br>
            </div>

            <form action="submit.php" method="post" class="form"> 
            
                <h3>Harga Mobil</h3>
                <input type="number" min="100000000" name="harga" style="height: 19px;" />
                <h3>Uang Muka</h3>
                <input type="number" min="30%" max="100%" name="uangmuka" style="height: 19px;" />
                <h3>Lama Angsuran (tahun)</h3>
                <select name="tahun">
                    <?php
                    for ($lamaangsuran = 1; $lamaangsuran <= 5; $lamaangsuran++)
                        echo "<option value=\"$lamaangsuran\">$lamaangsuran</option>";
                    ?>
                </select>
                <h3>Bunga (%)</h3>
                <select name="bunga">
                    <?php
                    for ($bunga = 5; $bunga <= 10; $bunga++)
                        echo "<option value=\"$bunga\">$bunga</option>";
                    ?>
                    <br /> 
        </div>
       
        <br>
            
        <div class="resert-button">
            <div class="submit-button">
                <input type="reset" value="RESET">
                <input type="submit" value="SUBMIT">
            </div>
            </form>
        </div>
        </br>
        </div>
       
</body>

</html>