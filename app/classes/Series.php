<?php

namespace App\classes;

class Series
{
    public $firstValue, $lastValue, $totalValue, $option;

    public function __construct($post = null){
        if (!empty($post)){
            $this->firstValue = $post['first_value'];
            $this->lastValue = $post['last_value'];
            $this->option = $post['option'];
        }
    }
    /*public function getSeriesResult(){
        if ($this->firstValue < $this->lastValue){
            while ($this->firstValue<=$this->lastValue){
                $this->totalValue .= $this->firstValue.', ';
                $this->firstValue++;
            }
        }
        elseif($this->firstValue>$this->lastValue){
            while ($this->firstValue>=$this->lastValue){
                $this->totalValue.=$this->firstValue.', ';
                $this->firstValue--;
            }
        }
        else{
            $this->totalValue="Same number disos kee Kana..".' '.$this->firstValue;
        }

        header('Location: route.php?page=series&message='.$this->totalValue);

    }*/
    /*public function getEvenOddResult(){
        if ($this->option=='even'){
            for ($this->firstValue; $this->firstValue<=$this->lastValue;$this->firstValue++){
                if ($this->firstValue % 2 ==0){
                    $this->totalValue .= $this->firstValue.', ';
                }
            }
        }
        elseif($this->option=='odd'){
            for ($this->firstValue; $this->firstValue<=$this->lastValue;$this->firstValue++){
                if ($this->firstValue % 2 ==1){
                    $this->totalValue .= $this->firstValue.', ';
                }
            }
        }
        else{
            $this->totalValue='Option select kor Hala..';
        }
        return rtrim($this->totalValue, ',');
    }*/
    public function getEvenOddAddSeries(){
        if ($this->firstValue < $this->lastValue){
            for ($this->firstValue; $this->firstValue <= $this->lastValue; $this->firstValue++){
                if ($this->option == 'even'){
                    if ($this->firstValue % 2 == 0){
                        $this->totalValue .= $this->firstValue. ', ';
                    }
                }
                elseif($this->option == 'odd'){
                    if ($this->firstValue % 2 == 1){
                        $this->totalValue .= $this->firstValue.', ';
                    }
                }
                else{
                    $this->totalValue += $this->firstValue;
                }
            }
        }
        else{
            for ($this->firstValue; $this->firstValue >= $this->lastValue; $this->lastValue++){
                if ($this->option == 'even'){
                    if ($this->lastValue % 2 == 0){
                        $this->totalValue .= $this->lastValue. ', ';
                    }
                }
                elseif($this->option == 'odd'){
                    if ($this->lastValue % 2 == 1){
                        $this->totalValue .= $this->lastValue.', ';
                    }
                }
                else{
                    $this->totalValue += $this->lastValue;
                }
            }
        }
        return rtrim($this->totalValue, ',');
    }
}

