<?php
class Robot{
  private $name;
  private $food;

  //コンストラクタ(インスタンス化した時実行される)
  function __construct(){
    $this->name = "ロボ";
    $this->food = "パン";
  }

  //talkメソッド
  private function talk(){
    echo 'こんにちは、僕の名前は'.$this->name.'です<br>';
  }

  //eatメソッド
  private function eat(){
    echo '好きな食べ物は'.$this->food.'です<br>';
  }

  //greetingメソッド
  function greeting(){
    $this->talk();
    $this->eat();
  }

  //セッター
  function setName($namae){
    $this->name = "【". $namae."】";
  }

  function setFood($tabemono){
    $this->food = $tabemono;
  }

  //ゲッター
  function getName(){
    return $this->name;
  }

  function getFood(){
    return $this->food;
  }

}

//インスタンス化
$dora = new Robot();
// $dora->name = "ドラえもん";
$dora->setName("ドラえもん");

// $dora->talk();

// $dora->food = "どら焼き";
$dora->setFood("どら焼き");

// $dora->eat();

$dora->greeting();

$robo = new Robot();
$robo->setName("アトム");
$robo->greeting();

?>