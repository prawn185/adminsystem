<?php
/**
 * Created by PhpStorm.
 * User: Prawn185
 * Date: 21/12/2017
 * Time: 17:40
 */

 function priorityColors($priority)
{

    switch ($priority) {
        case "Critical":
            $color = "#d83845";
            break;
        case "High":
            $color = "#e2742f";
            break;
        case "Normal":
            $color = "#57aa17";
            break;
        case "Low":
            $color = "#18afba";
            break;
        case "None":
            $color = "";
            break;


    }
    return $color;

}