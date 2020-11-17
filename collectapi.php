<?php 

$key = "apikey your_api_key";

$context = stream_context_create(["http" => ["header" => "authorization: apikey $key"]]);

// $nobetciEczaneler = file_get_contents("https://api.collectapi.com/health/dutyPharmacy?il=Ankara", false, $context );
// $dovizFiyatlari = file_get_contents("https://api.collectapi.com/economy/allCurrency", false, $context );
// $altinFiyatlari = file_get_contents("https://api.collectapi.com/economy/goldPrice", false, $context );
// $kriptoFiyatlari = file_get_contents("https://api.collectapi.com/economy/cripto", false, $context );
// $hisseSenetleri = file_get_contents("https://api.collectapi.com/economy/hisseSenedi", false, $context );
// $gumusFiyatlari = file_get_contents("https://api.collectapi.com/economy/silverPrice", false, $context );
// $canliBorsa = file_get_contents("https://api.collectapi.com/economy/liveBorsa", false, $context );
// $havaDurumu = file_get_contents("https://api.collectapi.com/weather/getWeather?data.lang=tr&data.city=rize", false, $context );
// $krediFaizleri = file_get_contents("https://api.collectapi.com/credit/creditBid?data.price=10000&data.month=12&data.query=ihtiyac", false, $context );
// $NamazVakitleri = file_get_contents("https://api.collectapi.com/pray/all?data.city=istanbul", false, $context );
// $LigListesi = file_get_contents("https://api.collectapi.com/sport/leaguesList", false, $context );
// $macSonuclari = file_get_contents("https://api.collectapi.com/sport/results?data.league=super-lig", false, $context );
