<?php
  $ad = $_POST["ad"];
    echo("Adınız:". $ad);
    echo "<br />";
  $sifre = $_POST["sifre"];
    echo("Sifreniz:". $sifre);
      echo "<br />";
  $yas = $_POST["yas"];
    echo("Yaşınız:". $yas);
      echo "<br />";

  if (isset($_POST ["cinsiyet"])) {
      $cinsiyet = $_POST["cinsiyet"];
      echo "Cinsiyetiniz Erkek";
        echo "<br />";
  }
  else if (isset($_POST["cinsiyet"])) {
    $cinsiyet = $_POST["cinsiyet"];
    echo "Cinsiyetiniz Kadın";
      echo "<br />";
  }
  else {
    echo "Cinsiyetinizi seçiniz.";
      echo "<br />";
  }

  if(isset($_POST['dil'])) {
    $diller = $_POST['dil'];

    echo 'Seçtiğiniz Programlama Dİlleri: <br/>';

    foreach($diller as $dil) {
        echo ' * ' . $dil . ' <br/>';
    }
} else {
    echo 'Hiç dil seçmediniz.';
}

echo "<br/>";
$talimat = $_POST["talimat"];
  echo("Talimatlarınız: ".$talimat);


?>
