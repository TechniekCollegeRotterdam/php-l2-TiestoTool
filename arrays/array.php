<?php
$persons = ["Timo", "René", "Donny", "Tiësto"];
foreach($persons as $person){
    ?>
    <p><?= $person ?></p
<?php
}

$animals =["wasbeer","schaap","kip","paard"];
foreach($animals as $animal){
    ?>
    <p><?= $animal ?></p>
    <?php
}
// $languages = [
//     ["HTML","CSS", "Javascript"],
//     ["Python", "PHP", "java"],
//     ["C#", "Unity","JSON"]

// ];
// foreach($languages as $language){
//     foreach($language as $list){
    //    ?>
    //    <p><?= $list ?></p>
    //    <?php
//     }
// }
$people =["Jasper" => 16, "Tiësto" => 18, "RENE" => 17, "donny" => 12, "Timo" => 21];
foreach($people as $name => $age){
    echo "mijn naam is ". $name . " en ik ben ".  $age . " jaar oud. ";
};

$brands=["Albert heijn", "Jumbo", "Dirk", "Plus", "Aldi"];
?>
<h1><?= $brands[2]?></h1>
<?php
$languages = [
    ["HTML","CSS"],
    ["Python","PHP"],
    ["C#", "Unity"],
];
foreach($languages[0] as $language){
      echo $language ." is een frontend taal";
    };

?>
