<?php
function saveData(string $fileName, array $data){
    $file = fopen($fileName, "w");

    if(!$file){
        die("Nem tudtuk megnyitni a fájlt!");
    }
    for ($i = 0; $i < sizeof($data); $i++) { 
        fwrite($file, serialize($data[$i]) . "\n");
    }
    fclose($file);
}
/////////////////////////////////////////////////////
function loadData(string $fileName): array{
    $file = fopen($fileName, "r");
    $dataArray = [];
    if(!$file){
        die("Nem tudtuk megnyitni a fájlt!");
    }
    while(($sor = fgets($file))){
        $data = unserialize($sor);
        $dataArray[] = $data;
    }
    fclose($file); 
    return $dataArray;
}
?>