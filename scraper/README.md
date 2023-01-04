# Scraper-Challenge

> **Create a php8 class that scrapes the testsieger.de homepage for product descriptions**

* Create a php8 class that scrapes testsieger.de homepage and gets all the product descriptions from the main section `class="ts-home__featured-products ..."`
* The script should return an array of descriptions where each description is no longer than 50 characters 
* You should use a preg_match expression

* The expected result should be something like:

<code>
array(16) {

  [0] =>
  string(50) "Apple iPad (2021) Quad-HD Auflösung 10,2 Zoll, Wi"

  [1] =>
  string(50) "LG OLED48A29LA 121 cm (48 Zoll) OLED Smart TV (Ult"

  [2] =>
  string(50) "Apple AirPods Pro 1. Generation (2021) mit MagSafe"

  [3] =>
  string(50) "Dyson Supersonic HD07 Haartrockner, Ionen-Technolo"

  [4] =>
  string(50) "Philips HD9860-90 Airfryer XXL Smart Sensing - das"

  [5] =>
  string(50) "Apple Watch Series 7 Smartwatch GPS, 41mm, Alumini"

  [6] =>
  string(50) "Dyson V12 Detect Slim Absolute Handstaubsauger 202"

  [7] =>
  string(50) "Philips Herren Rasierer S5579-50, Reinigungsstatio"

  [8] =>
  string(50) "Joop! Homme Eau de Toilette (EdT) Herrenduft 200 m"

  [9] =>
  string(50) "Tonies &#039;Toniebox Starterset&#039; rot mit Kre"

  [10] =>
  string(39) "Nintendo Switch OLED-Modell 64GB, Weiß"

  [11] =>
  string(50) "Philips Sonicare DiamondClean 9000 Premium HX9914/"

  [12] =>
  string(50) "Issey Miyake L&#039;Eau d&#039;Issey Eau de Toilet"

  [13] =>
  string(48) "Bose SoundLink Flex Bluetooth-Lautsprecher, blau"

  [14] =>
  string(50) "Krups Nespresso XN9031 Vertuo Plus Kaffeekapselmas"

  [15] =>
  string(50) "LEGO Star Wars 75304 &#039;Darth Vader™ Helm&#"
  
}</code>