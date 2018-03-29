<?php
    require_once("./classes/autoload.php");

    $main = new Main_class();
    $template = new Template_class();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = "./libs/bootstrap-3.3.7/dist/css/bootstrap.css" rel ="stylesheet">
    <link href="./css/main.css" rel="stylesheet">
    <script src="./libs/jQuery/jquery.js"></script>
    <script src="./js/my.js"></script>
    <script src="./libs/bootstrap-3.3.7/dist/js/bootstrap.js"> </script>
    <title>Document</title>
    <script>
        $("document").ready(function () {
            //hide all codes examples
            $(".descriptionCode").each(function () {
               $(this).addClass("hideCode");
            });
            $(".btn-warning").each(function () {
                $(this).click(function () {
                    if($(this).text() === "Apskatīt kodu"){
                        $(this).text("Paslēpt kodu");
                    }

                    else {
                       $(this).text("Apskatīt kodu");
                    }

                    $(this).parents().next(".descriptionCode").fadeToggle();
                });

            })
        });
    </script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav  navbar-right">
                <li  class="active"><a href="#">1. uzd.</a></li>
                <li><a href="">2. uzd.</a></li>
                <li><a href="">3. uzd.</a></li>
                <li><a href="">4. uzd.</a></li>
                <li><a href="">5. uzd.</a></li>
                <li><a href="">6. uzd.</a></li>
                <li><a href="">7. uzd.</a></li>
                <li><a href="">8. uzd.</a></li>
                <li><a href="">9. uzd.</a></li>
                <li><a href="">10. uzd.</a></li>
                <li><a href="">11. uzd.</a></li>
                <li><a href="">12. uzd.</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="contaier" id="">
    <div class="row">
        <div class="col-md-12 title">1. uzdevums</div>
        <div class="col-md-10 description"><b>Apraksts:</b> Noskaidrot, kura php versija ir uzlikta.</div>
        <div class="col-md-2 code">
            <button class="btn btn-warning">Apskatīt kodu</button>
        </div>
        <div class="col-md-12 descriptionCode">
            <pre>
                public static function getPhpVersion(){
                    echo phpversion();
                }
            </pre>
        </div>
        <div class="col-md-12 resultTitle"><p>Rezultāts:</p></div>
        <div class="col-md-12 result">
            <?php Main_class::getPhpVersion(); ?>
        </div>
    </div>
</div>

<div class="contaier" id="">
    <div class="row">
        <div class="col-md-12 title">2. uzdevums</div>
        <div class="col-md-10 description"><b>Apraksts:</b> Uzrakstīt php skriptu, kas izvada tekstu uz ekrāna.</div>
        <div class="col-md-2 code">
            <button class="btn btn-warning">Apskatīt kodu</button>
        </div>
        <div class="col-md-12 descriptionCode">
            <pre>
                public static function showText($string){
                    echo $string;
                }
            </pre>
        </div>
        <div class="col-md-12 resultTitle"><p>Rezultāts:</p></div>
        <div class="col-md-12 result">
            <?php Main_class::showText("Teksts ir izvadīts ar echo palīdzību"); ?>
        </div>
    </div>
</div>

<div class="contaier" id="">
    <div class="row">
        <div class="col-md-12 title">3. uzdevums</div>
        <div class="col-md-10 description">Uzrakstīt php skriptu, kas saskaita divus skaitļus un uz ekrāna izvada to rezultātu.</div>
        <div class="col-md-2 code">
            <button class="btn btn-warning">Apskatīt kodu</button>
        </div>
        <div class="col-md-12 descriptionCode">
            <pre>
                public function setFirstSumNumberOfSum($numberOne){
                    $this->numberOne = $numberOne;
                }

                public  function getFirstNumberOfSum(){
                    return $this->numberOne;
                }

                public function setSecondNumberOfSum($numberTwo){
                    $this->numberTwo = $numberTwo;
                }

                public function getSecondNumberOfSum(){
                    return $this->numberTwo;
                }

                public function setSumOfTwoNumbers(){
                    $this->sumOfTwoNumbers = $this->getFirstNumberOfSum() + $this->getSecondNumberOfSum();
                }

                public function getSumOfTwoNumbers(){
                    return $this->sumOfTwoNumbers;
                }
            </pre>
        </div>
        <div class="col-md-12 resultTitle"><p>Rezultāts:</p></div>
        <div class="col-md-12 result">Summa ir:
            <?php
            $main->setFirstSumNumberOfSum(5);
            $main->getFirstNumberOfSum();
            $main->setSecondNumberOfSum(6);
            $main->getSecondNumberOfSum();
            $main->setSumOfTwoNumbers();
            echo $main->getSumOfTwoNumbers();
            ?>
        </div>
    </div>
</div>

<div class="contaier" id="">
    <div class="row">
        <div class="col-md-12 title">4. uzdevums</div>
        <div class="col-md-10 description"><b>Apraksts:</b> Uzrakstīt php skriptu, kas nosaka virknes garumu.</div>
        <div class="col-md-2 code">
            <button class="btn btn-warning">Apskatīt kodu</button>
        </div>
        <div class="col-md-12 descriptionCode">
            <pre>
                public function getStringLength($string){
                    echo strlen($string);
                }
            </pre>
        </div>
        <div class="col-md-12 resultTitle"><p>Rezultāts:</p></div>
        <div class="col-md-12 result">Virkne "Teikums." ir:
            <?php $main->getStringLength("Teikums."); ?>
            simbolu gara.
        </div>
    </div>
</div>

<div class="contaier" id="">
    <div class="row">
        <div class="col-md-12 title">5. uzdevums</div>
        <div class="col-md-10 description"><b>Apraksts:</b> PHP ir programmēšana valoda. Noteikt kurā pozīcijā atrodas simbols "p".
        </div>
        <div class="col-md-2 code">
            <button class="btn btn-warning">Apskatīt kodu</button>
        </div>
        <div class="col-md-12 descriptionCode">
            <pre>
            public function getStrPosition($text, $findSymbol){
                echo strpos($text,$findSymbol);
            }
            </pre>
        </div>
        <div class="col-md-12 resultTitle"><p>Rezultāts:</p></div>
        <div class="col-md-12 result">
            <?php $main->getStrPosition("PHP ir programmēšana valoda","p"); ?>
        </div>
    </div>
</div>

<div class="contaier" id="">
    <div class="row">
        <div class="col-md-12 title">6. uzdevums</div>
        <div class="col-md-10 description"><b>Apraksts:</b> Uzrakstīt php skriptu, kas nosaka virknes garumu.</div>
        <div class="col-md-2 code">
            <button class="btn btn-warning">Apskatīt kodu</button>
        </div>
        <div class="col-md-12 descriptionCode">
            <pre>
                public function showFormatedText(){
                    echo "<b>PHP</b> ir php skriptu valoda ar kuras palīdzību tiek veidoti <u>MySql vaicājumi</u>";
                }
            </pre>
        </div>
        <div class="col-md-12 resultTitle"><p>Rezultāts:</p></div>
        <div class="col-md-12 result">Formatēts teksts:
            <?php $main->showFormatedText(); ?>
            simbolu gara.
        </div>
    </div>
</div>
</body>
</html>