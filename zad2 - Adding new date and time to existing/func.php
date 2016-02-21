<?php

function getValue($array, $key, $default = null) 
{
	return isset($array[$key]) ? $array[$key] : $default;
}

function isNumeric($value) {
	return is_numeric($value);
}


