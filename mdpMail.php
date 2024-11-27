<?php
//function passgen1($nbChar) {
//    $chaine = "mnoTUzS5678kVvwxy9WXYZRNCDEFrslq41GtuaHIJKpOPQA23LcdefghiBMbj0";
//    srand((double)microtime()*1000000);
//    $pass = '';
//    for($i = 0; $i < $nbChar; $i++) {
//        $pass .= $chaine[rand() % strlen($chaine)];
//    }
//    return $pass;
//}
//
//    //for ($i = 0; $i < 1000000; $i++) {
//    //echo passgen1(10) . PHP_EOL;
////}
//
//function passgen2($nbChar){
//    return substr(str_shuffle(
//        'abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRSTUVWXYZ0123456789'),1, $nbChar); }
//
//echo passgen1(10);
//echo"\n";
//echo passgen2(10);

function passgen1($nbChar)
{
    $chaine = "ABCDEFGHIJKLMONOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789&é\"'(-è_çà)=$^*ù!:;,~#{[|`\^@]}¤€";
    $pass = '';
    for ($i = 0; $i < $nbChar; $i++) {
        $pass .= $chaine[random_int(0, strlen($chaine) - 1)];
    }
    return $pass;
}

