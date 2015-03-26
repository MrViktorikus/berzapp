
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lärarinformation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div></div>
        <h2>Lärarinformation</h2>
    </body>
</html>
<?php
//$i=0;
//while($i < 10){
//    echo $i . "<br>";
//    $i++;
//}
//$homepage = file_get_contents('http://meny.dinskolmat.se/berzeliusskolan/'); 
//echo $homepage;
//$berzelius = file_get_contents('http://www.linkoping.se/berzelius');
//$charset = 'UTF-8'; 
$berzelius = file_get_contents('http://www.linkoping.se/Skola-barnomsorg/Gymnasieskola/Kommunala-gymnasieskolor/Berzeliusskolan/Gymnasiet/Personal-och-ledning/Larare/');//,false,$charset);
//echo $berzelius;
//$pattern = '<a href=\'(.+)\'\' title=\'';
//for($i = 0; $i < 10; $i++){
//    echo "$i<br>";
//}
//if(isset($_GET["kalle"])){
//    echo htmlspecialchars($_GET["kalle"]);
//}
//else {
//    echo "sover kalle?";
//}
//
//$arr = array();
//$arr["anton"] = 42;
//$arr["acvb"] = 23;
//$arr["aes"] = 433;
//$arr["zdsd"] = 234;
//var_dump($arr);
//echo "<hr>";
//foreach ($arr as $value){
//    echo"<br>$value";
//}
//$input_lines = "<p>ada</p>kalle";
//$output_array = array();
////preg_match_all("|<a href=\'(.+)\' title=\'(.+)\'>|U", $berzelius, $output_array, PREG_PATTERN_ORDER);
//preg_match_all("/<td>([\w ]+)<br \/><a title=\"([a-z]{6}@linkoping.se)/", $berzelius, $output_array, PREG_PATTERN_ORDER);
//
////<td><span class=\"brodtext\">([\w ]+)
////<tr\svalign=\"top\">(.*)<\/tr>
//////for($i = 0; $i<7; $i++){
////    echo "Nyhet: " . $berzelius[2][$i;
////}
////$l�nk = array();
//var_dump($output_array);
//$utdata= array();
//
//$i=0;
//foreach ($output_array[2] as $value){
//    $utdata[$i]=$value;
//    $i++;
//}
//$i=0;
//$nyhet= array();
//foreach ($output_array[1] as $value){
//    $nyhet[$i]=$value;
//    $i++;
//}
//for($i = 0; $i<count($nyhet); $i++){
//    echo "L�rare $nyhet[$i] email: $utdata[$i]<br>\n";
//}

preg_match_all("/(<td>.+<\/td>[^<]+){5}/", $berzelius, $fullInfo, PREG_PATTERN_ORDER);

foreach ($fullInfo[0] as $value) {
    echo $value . "<br>";
}

$battre = array();
$i = 0;
foreach ($fullInfo[0] as $value){
    $value = preg_replace("/[a-�]{6}@linkoping.se/","",$value);
    $value = str_replace("&nbsp;"," ", $value);
    $value = strip_tags($value);
    $namn = array();
    preg_match("/([A-�][a-�]+[\s,^\n])+/", $value, $namn);
    $value = substr($value, strlen($namn[0]), strlen($value));
    $battre[$i]["name"] = $namn[0];
    $forkort = array();
    preg_match("/\s([a-�]{5})\s/", $value, $forkort);
    $subj = array();
    preg_match("/\s([A-�][a-�]+(,\s[A-�][a-�]+)*)\s/", $value, $subj);
    $class = array();
    if(preg_match("/\s([A-�]{2}[0-9]{2}[A-�])\s/", $value, $class)){
        $battre[$i]["class"] = $class[1];
    }
    else{
        $battre[$i]["class"] = "N/A";
    }

    $tel = array();
    if(preg_match("/\s(([0-9]{2}\s){3})/", $value, $tel)){
        $battre[$i]["phone"] = $tel[1];
    }
    else{
        $battre[$i]["phone"] = "N/A";
    }
//    $larare = "";
//    var_dump($namn);
//    foreach ($namn as $lar) {
//        echo $lar . "<br>";
////        $larare = $larare . $lar . " ";
//    }
//    echo "$namn[0]"; //ger hela namnet (dock ej ��� och grejer) utan mellanslag efter! :)
    
    $battre[$i]["short"] = $forkort[1];
    $battre[$i]["subject"] = $subj[1];
    $i++;
}

//echo $berzelius[1][1] . " bladkfj " . $berzelius[2][1]. "\n";
//echo $berzelius[1][2] . " bladkfj " . $berzelius[2][2]. "\n";
//echo $berzelius[1][3] . " bladkfj " . $berzelius[2][3]. "\n";

//
//
//
//$data = array();
//$data[0]["name"]= "Niklas Gyulai";
//$data[0]["subject"]= "Ma, Da";
//$data[0]["phone"]= "20 74 99";
//$data[0]["class"]= "NA14C";
//$data[0]["code"]= "NIKGY";
//$data[1]["name"]= "Petter";
//$data[1]["subject"]= "6ualkunsk";
//$data[1]["phone"]= "69 69 69";
//$data[1]["class"]= "nej";
//$data[1]["code"]= "666";
//
//var_dump( $data);

?>