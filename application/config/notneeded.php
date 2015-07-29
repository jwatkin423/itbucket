<?php
    public function answer(){
        $test = array(4, 2, 1, 3, 2, 5, 7, 2, 4, 5, 2, 3, 1, 13, 6);
        // $test = array(4, 1, 2, 4);
        echo $this->maximumDiameter($test);
    }

    private function maximumDiameter($array){
        $biggest = $this->getNormalDepth($array) + $this->getSecondDepth($array);
        while (count($array)) {
            array_shift($array);
            $sub_length = $this->getNormalDepth($array) + $this->getSecondDepth($array);
            $biggest = $sub_length > $biggest ? $sub_length : $biggest;
        }

        return $biggest;
    }

    private function getNormalDepth($array) {
        return count($array);
    }

    private function getSecondDepth($array) {
        $nb = 0;
        foreach ($array as $value) {
            if ($value == 1) {
                return $nb;
            }
            $nb++;
        }
    }