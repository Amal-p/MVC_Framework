<?php


namespace app\core;


class Request
{
    public function getPath(){
        //This method for get path from requesturi
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');  // To find position of qustion mark
        if ($position === false){
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function getMethod(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}