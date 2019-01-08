<html>
    <head>
        <meta charset="UTF-8">
        <title>Konversi Suhu</title>
        <link type="text/css" href="../CSS/Style.css" rel="stylesheet">
    </head>
    <body>
        <div id="isi">
            <legend><h1 class="home" align="center">Konversi Suhu</h1>
                <hr>
        <form name="tugas_2" method="POST" action="#">
            <table cellspacing="3" cellpadding="5" align="center">
                <tr>
                    <td align="right">Suhu</td>
                    <th>:</th>
                    <td><input type="text" name="suhu" placeholder="Masukkan Suhu"></td>
                </tr>
                <tr>
                    <td align="right">Type Konversi</td>
                    <th>:</th>
                    <td>
                        <select name="konversi_suhu">
                            <optgroup label="Type Konversi Suhu">
                                <option value="0" hidden selected>- - - Pilih Type Konversi - - -</option>
                                <option value="1">Celcius ke Reamur</option>
                                <option value="2">Celcius ke Fahrenheit</option>
                                <option value="3">Reamur ke Celcius</option>
                                <option value="4">Reamur ke Fahrenheit</option>
                                <option value="5">Fahrenheit ke Celcius</option>
                                <option value="6">Fahrenheit ke Reamur</option>
                            </optgroup>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th colspan="3"><input type="submit" name="konversi" value="Konversi"></th>
                </tr>
            </table>
        </form>        
        <!--                code untuk konversi suhu-->
                <?php
                if (isset($_POST['konversi_suhu'])) {
                    $suhu           = $_POST['suhu'];
                    $type_konversi  = $_POST['konversi_suhu'];
                    if ($type_konversi == "1") {
                        $perhitungan = (4/5) * $suhu;
                        ?><script>alert('<?php echo "Suhu $suhu °C = "; echo "$perhitungan °R";?>');</script><?php                        
                    } elseif ($type_konversi == "2") {
                        $perhitungan = (9/5) * $suhu + 32;
                        ?><script>alert('<?php echo "Suhu $suhu °C = "; echo "$perhitungan °F";?>');</script><?php                        
                    }elseif ($type_konversi == "3") {
                        $perhitungan = (5/4) * $suhu;
                        ?><script>alert('<?php echo "Suhu $suhu °R = "; echo "$perhitungan °C";?>');</script><?php                        
                    } elseif ($type_konversi == "4") {
                        $perhitungan = (9/4) * $suhu + 32;
                        ?><script>alert('<?php echo "Suhu $suhu °R = "; echo "$perhitungan °F";?>');</script><?php                        
                    } elseif ($type_konversi == "5") {
                        $perhitungan = (5/9) * $suhu - 32;
                        ?><script>alert('<?php echo "Suhu $suhu °F = "; echo "$perhitungan °C";?>');</script><?php                        
                    }elseif ($type_konversi == "6") {
                        $perhitungan = (4/9) * $suhu - 32;
                        ?><script>alert('<?php echo "Suhu $suhu °F = "; echo "$perhitungan °R";?>');</script><?php                        
                    }elseif ($type_konversi == "0") {
                        ?><script>alert('Type konversi suhu belum dipilih!');</script><?php                        
                    }
                }
                ?>
    </legend>
        </div>
    </body>
</html>