<html>

<head>
    <title>Game Suwid</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Logika Komputer -->
    <?php
    $komputer = rand();
    if($komputer > 100000000 && $komputer < 800000000){
        $komputer = 'GAJAH';
    }elseif($komputer > 800000000 && $komputer < 12500000000){
        $komputer = 'SEMUT';
    }else{
        $komputer = 'ORANG';
    }
    ?>
    <!-- Logika Komputer -->

    <!-- inputan pemain -->
    <form action="" method="post">
        <h1>GAMES SUWID</h1>
        <p>MASUKAN : GAJAH / SEMUT / ORANG (Jangan ada spasi)</p>
        <input onkeyup="this.value = this.value.toUpperCase()" type="text" name="nama" placeholder="Masukan Sesuatu.." required autofocus>
        <button type="submit" name="submit">SUITTT!!</button>
    </form>
    <!-- inputan pemain -->

    <!-- logika game -->
    <?php if (isset($_POST['submit'])): ?>
    <h1>
        <?php
        $hasil = '';
        if ($_POST["nama"] == $komputer) {
            $hasil = 'HASILNYA SERI!!';
        } elseif ($_POST["nama"] == 'GAJAH') {
            if ($komputer == 'ORANG') {
                $hasil = 'KAMU MENANG !';
            } else {
                $hasil = 'KAMU KALAH !';
            }
        } elseif ($_POST["nama"] == 'SEMUT') {
            if ($komputer == 'GAJAH') {
                $hasil = 'KAMU MENANG !';
            } else {
                $hasil = 'KAMU KALAH !';
            }
        } elseif ($_POST["nama"] == 'ORANG') {
            if ($komputer == 'SEMUT') {
                $hasil = 'KAMU MENANG !';
            } else {
                $hasil = 'KAMU KALAH !';
            }
        } else {
            $hasil = 'YANG ANDA MASUKAN ITU ADA SPASI ATAU SALAH!';
        }
        ?>
        <p>Kamu Memilih : 
            <b style="text-decoration: underline">
            <?= $_POST["nama"]?>
            </b>
        </p>
        <p>
            Dan Komputer Memilih
            <b style="text-decoration: underline">
            <?= $komputer?>
            </b>
            <br>

            <?= $hasil?>
        </p>
    </h1>
    <?php endif; ?>
    <!-- logika game -->
</body>

</html>