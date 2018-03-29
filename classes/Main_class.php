<?php
/**
 * Created by PhpStorm.
 * User: Normunds
 * Date: 19/12/17
 * Time: 9:19 AM
 */



class Main_class
{
    private $numberOne;
    private $numberTwo;
    private $sumOfTwoNumbers;


    public static function getPhpVersion(){
        echo phpversion();
    }

    public static function showText($string){
        echo $string;
    }

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

    public function getStringLength($string){
        echo strlen($string);
    }

    public function getStrPosition($text, $findSymbol){
        echo strpos($text,$findSymbol);
    }

    public function showFormatedText(){
        echo "<b>PHP</b> ir php skriptu valoda ar kuras palīdzību tiek veidoti <u>MySql vaicājumi</u>";
    }

    public function showForCycleInRow($start, $end){

    }

    public function showWhileCycleInRow($start, $end){

    }

    public function showForCycleInColumn($start, $end){

    }

    public function showWhileCycleInColumn($start, $end){

    }

    public function showSwitchCase($case){

    }

    public function showAlphabet(){

    }

    public function showAsciiCode(){

    }

}