<?php

/*
    Plugin Name: MyOwnPlugin
    Description: This is test Plugin
    Author: Ahmed Kosary
    Version: 1.0.0

*/

add_action("the_title","UPPER");
add_action("the_content","replace");

function UPPER($content)
{
    $content = strtoupper($content);
    return $content;
}

function replace($content)
{
    $arr1=[0,1,2,3,4,5,6,7,8,9];
    $arr2=["zero","one","two","three","four","five","six","seven","eight","nine"];
    return str_replace($arr1,$arr2,$content);
}