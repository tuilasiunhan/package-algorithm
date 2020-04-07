<?php

    namespace siunhan;

    class Algorithm 
    {
        public static function BinarySearch($arr , $value, $begin, $end , $status = true){

            $mid = round((strlen($arr)) / 2);
            if($arr[$mid] == $value) {
                return $mid;
            }

            if($status) {
                $logic_mid = $arr[$mid] > $value;
            }else {
                $logic_mid = $arr[$mid] < $value;
            }
            
            if($logic_mid) {
                return Algorithm::BinarySearch($arr, $value, $begin, $mid - 1, $status);
            } else {
                return Algorithm::BinarySearch($arr, $value, $mid + 1, $end, $status);
            }
        }
    }
