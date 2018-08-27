<?php

echo "Nama : ". ($_POST["nama"]). "<br>";
echo "Tempat tgl lahir : ". ($_POST["ttl"]). "<br>";
echo "Jenis Kelamin : ". ($_POST["kelamin"]). "<br>";


print_r($_POST['check']);

$bacabuku = false;
$maingame = false;
$olahraga = false;
$hiking = false;
$check = $_POST['check'];


for ($i=0; $i<sizeof($check); $i++) {
  if($check[$i]== "librarian"){
    $bacabuku = true;
  }

  if($check[$i]== "gamers"){
    $maingame = true;
  }

  if($check[$i]== "petualang"){
    $olahraga = true;
  }

  if($check[$i]== "jagoan"){
    $hiking = true;
  }
}
echo "bacabuku : ". $bacabuku. "<br>";
echo "main game : ". $maingame. "<br>";
echo "petualang : ". $olahraga. "<br>";
echo "jagoan : ". $hiking. "<br>";


echo "yang di pilih adalah : ";

if ($maingame==1 && $olahraga==1 && $hiking==1){
  echo "jagoan" ."<br>";
}

elseif ($maingame==1 && $olahraga==1){
  echo "petualang" ."<br>";
}

elseif ($bacabuku=1){
  echo "librarian" ."<br>";
}

elseif ($maingame=1){
  echo "gamers" ."<br>";
}

?>




