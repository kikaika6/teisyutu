<?php
class AirConditioner {
    
    private $mode;
    private $temperature;
    private $power;
    
    function __construct($temperature ,$power){
        $this->mode = "冷房";
        if($temperature < 18){
            $temperature = 18;
        }
        
        if($temperature > 30){
            $temperature = 30;
        }
        
        if($power > 5){
            $power = 5;
        }
        
        if($power < 1){
            $power = 1;
        }
        
        $this->temperature = $temperature;
        $this->power = $power;
    }
    
    function cool(){
        $this->mode="冷房";
    }
    
    function hiting(){
        $this->mode="暖房";
    }
    
    function dry(){
        $this->mode="除湿";
    }
    
    function upTemperature(){
        if($this->tenperature < 30)
        $this->tenperature++;
    }
    
    function downTemperature(){
        if($this->tenperature > 18)
        $this->tenperature--;
    }
    
    function changepower(){
        if($this->power < 5){
            $this->power++;
        }else{
            $this->power = 1;
        }
    }
    
    function showStatus(){
        echo "======現在の設定======\n";
        echo "モード: $this->mode\n";
        echo "設定温度: $this->temperature\n";
        echo "風量: $this->power\n";
    }
}
?>