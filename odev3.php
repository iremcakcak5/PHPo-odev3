<?php
if (isset($_POST["gelenDeger"])) {
    $gelenDeger = $_POST["gelenDeger"];
    if ($gelenDeger == "") {
        echo "Boş Bırakmayın !"."<br>";
        echo "<strong>". " 10 Saniye İçinde Girişe Yönlendiriliyorsunuz " ."</strong>";
        header('Refresh:10; URL=formo.php');
    } else {
        if ($gelenDeger % 3 == 0) {
            echo "$gelenDeger sayısı 3 ile tam bölünüyor";
            header('Refresh:10 ; URL=formo.php');
        } else {
            $farkKontrol = $gelenDeger;
            $farkKontrol++;
            while ($farkKontrol % 3 !== 0) {
                $farkKontrol++;
            }
            echo "$gelenDeger Sayısı 3 İle Tam Bölünemiyor ve Girdiğin Değere En Yakın 3 İle Tam Bölünen Sayı: $farkKontrol";
            header('Refresh:10 ; URL=formo.php');
        }
    }
}






?>