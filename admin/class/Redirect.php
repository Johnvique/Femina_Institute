<?php
/**
 * Created by PhpStorm.
 * User: Franklinekelvin
 * Date: 9/14/2017
 * Time: 11:03 PM
 */

Class Redirect {
    public static function to($location= null){
        if($location){
            header('Location:'.$location);
            exit();
        }
    }
}
