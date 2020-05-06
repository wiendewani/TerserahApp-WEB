<html>
    <head>
        <title>Form Hitung Angka</title>
            <style type="text/css" media="screen">
                table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
                input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
            </style>
    </head>
    <body>
        <div style="border:1px; padding:200px; margin-left: 400px; width:760px; height:auto;">
            <form method="POST">
                        Nilai 1 : <input type="text" name="nilai1" size="10" maxlength="6" value="<?=isset($_POST['nilai1']) ? $_POST["nilai1"] : ''?>">
                    <br>
                        Nilai 2 : <input type="text" name="nilai2" size="10" maxlength="6" value="<?=isset($_POST['nilai2']) ? $_POST["nilai2"] : ''?>">
                    <br>
                        Operasi : <input type="radio" name="operasi" value="penjumlahan" checked="">Tambahkan</td>
                                  <input type="radio" name="operasi" value="pengurangan">Kurangi</td>
                    <br>
                        <input type="submit" name="proses" value="Proses">
            </form>

            <?php
                    if (isset($_POST['proses'])) {
                        $nilai1 = $_POST["nilai1"];
                        $nilai2 = $_POST["nilai2"];
                        $proses = $_POST["operasi"];

                    if ($proses == "penjumlahan") {
                        $hasil = $nilai1 + $nilai2;
                        echo "Hasil Operasi Diatas Adalah : ". $hasil;
                    }else if ($proses == "pengurangan") {
                        $hasil = $nilai1 - $nilai2;
                        echo "Hasil Operasi Diatas Adalah : ". $hasil;
                    }    
                }
                    
            ?>

        </div>
    </body>
</html>