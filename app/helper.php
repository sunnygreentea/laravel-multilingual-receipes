<?php

function getLocaleChangerURL($locale)
{
	
	$baseUrl = URL::to('/');

    $uri = request()->segments();
    $uri[0] = $locale;
    
    return $baseUrl.'/'.implode( '/', $uri);
}