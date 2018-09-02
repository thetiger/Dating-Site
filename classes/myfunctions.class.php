<?php

namespace MyFunctions;

class myfunctions{

    public static function unique_multidim_array($array, $key) { 
        $temp_array = array(); 
        $i = 0; 
        $key_array = array(); 
        
        foreach($array as $val) { 
            if (!in_array($val[$key], $key_array)) { 
                $key_array[$i] = $val[$key]; 
                $temp_array[$i] = $val; 
            } 
            $i++; 
        } 
        return $temp_array; 
    }

    public static function getdistance($postcode1,$postcode2){

        $url = "http://maps.googleapis.com/maps/api/distancematrix/json?origins=$postcode1&destinations=$postcode2&mode=driving&language=en-EN&sensor=false";

        $data   = @file_get_contents($url);
        $result = json_decode($data, true);
        //print_r($result);  //outputs the array
        
        $distance = array( // converts the units+
            "meters" => $result["rows"][0]["elements"][0]["distance"]["value"],
            "kilometers" => $result["rows"][0]["elements"][0]["distance"]["value"] / 1000,
            "yards" => $result["rows"][0]["elements"][0]["distance"]["value"] * 1.0936133,
            "miles" => $result["rows"][0]["elements"][0]["distance"]["value"] * 0.000621371
        );

        return $distance;

    }


}