<?php


function presentPrice($price)
{
    return round($price);
}

function isActiveCategory($category, $output = 'active')
{
   return  request()->category == $category ? $output : '';
}