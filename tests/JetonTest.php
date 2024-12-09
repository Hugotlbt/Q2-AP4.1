<?php
include "./vendor/autoload.php";
use App\Modele\Modele_jeton;

try {
    $jeton = Modele_jeton::InsertJeton(13,1);

} catch (\Exception $e){
    echo $e->getMessage();
}

try {
    $jeton2 = Modele_jeton::UpdateJeton(2);
} catch (\Exception $e){
    echo $e->getMessage();
}

try {
    $jeton3 = Modele_jeton::Research("lKEUQhC5E00kUobBNJfeKHD2p2MSe5d2VSWDVdFWHhBRuhh9i6qIz8aaEID9QdJ7H1a6amjYMWs5yeQp+gUGMfRTZZUzaC3puWRA1QG4eeiFUvh+cpHCVeFMOu4Jhf6I1AHv61Zg5uWh/bKGyAorgCdP+uIzB3sb0e1f5oSbUu0k1EEin+FuWEpm4AueA0WOgYLP7944OOpOrJXmif93oGAGwHiapv9BCJr8Xa+4tOiO8p1H8TuOmqE+Qa0446Zh07N6kiFTmqQrtx3s0f+YP//RFUeRf3CNuX/sz9LbhASevJ54ei5bFaU0KMIJ3U0OzQAVsDxUbcdrD98+ZsuS5g==");
    print_r($jeton3);

} catch (\Exception $e) {
    echo $e->getMessage();

}
