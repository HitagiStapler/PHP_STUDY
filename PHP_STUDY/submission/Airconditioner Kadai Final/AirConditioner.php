<?php
class AirConditioner {

    
    private $mode = "冷房";


    private $temperature;


    private $power;


    function __construct($temperature,$power) {
        // 初期設定は冷房モードとすること
        // 温度・風量は引数で受け取ること

        if ($temperature > 30) {
            $temperature = 30;
        }elseif ($temperature < 18) {
            $temperature = 18;
        }
        $this->temperature = $temperature;

        if ($power > 5) {
            $power = 5;
        }elseif ($power < 1){
            $power = 1;
        }
        $this->power = $power;

    }

    function cooler(){
        $this->mode = "冷房";
    }

    function heater(){
        $this->mode = "暖房";
    }

    function dehumidify(){
        $this->mode = "除湿";
    }

    function tempUp(){
        $this->temperature--;
        if($this->temperature < 18){
            $this->temperature = 18;
        }
    }

    function tempDown(){
        $this->temperature++;
        if($this->temperature > 30){
            $this->temperature = 30;
        }
    }

    function airflow(){
        $this->power++;
        if($this->power > 5){
            $this->power = 1;
        }
    }

    function showStatus() {
        echo "======現在の設定======\n";
        echo "モード  : $this->mode\n";
        echo "設定温度: $this->temperature\n";
        echo "風量    : $this->power\n";
    }
}
?>