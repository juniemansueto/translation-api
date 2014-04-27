<?php
		function tospanish($give)  
{ 
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|es");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
        curl_setopt($ch,CURLOPT_ENCODING , "UTF-8");
        $output = curl_exec($ch);
        curl_close($ch);
   preg_match('/<div id=result_box dir=ltr>(.*) <\/div>/s',$output,$matches);
$body = $matches[1]; 
return $body;
}
		function tofrench($give)  
{ 
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|fr");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
        curl_setopt($ch,CURLOPT_ENCODING , "UTF-8");
        $output = curl_exec($ch);
        curl_close($ch);
   preg_match('/<div id=result_box dir=ltr>(.*) <\/div>/s',$output,$matches);
$body = $matches[1]; 
return $body;
}
function toitalian($give)  
{ 
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|it");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
        curl_setopt($ch,CURLOPT_ENCODING , "UTF-8");
        $output = curl_exec($ch);
        curl_close($ch);
   preg_match('/<div id=result_box dir=ltr>(.*) <\/div>/s',$output,$matches);
$body = $matches[1]; 
return $body;
}
function togerman($give)  
{ 
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|de");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
        curl_setopt($ch,CURLOPT_ENCODING , "UTF-8");
        $output = curl_exec($ch);
        curl_close($ch);
   preg_match('/<div id=result_box dir=ltr>(.*) <\/div>/s',$output,$matches);
$body = $matches[1]; 
return $body;
}
		function fromspanish($give)  
{ 
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=es|en");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
        curl_setopt($ch,CURLOPT_ENCODING , "UTF-8");
        $output = curl_exec($ch);
        curl_close($ch);
   preg_match('/<div id=result_box dir=ltr>(.*) <\/div>/s',$output,$matches);
$body = $matches[1]; 
return $body;
}
		function fromfrench($give)  
{ 
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=fr|en");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
        curl_setopt($ch,CURLOPT_ENCODING , "UTF-8");
        $output = curl_exec($ch);
        curl_close($ch);
   preg_match('/<div id=result_box dir=ltr>(.*) <\/div>/s',$output,$matches);
$body = $matches[1]; 
return $body;
}
function fromitalian($give)  
{ 
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=it|en");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
        curl_setopt($ch,CURLOPT_ENCODING , "UTF-8");
        $output = curl_exec($ch);
        curl_close($ch);
   preg_match('/<div id=result_box dir=ltr>(.*) <\/div>/s',$output,$matches);
$body = $matches[1]; 
return $body;
}
function fromgerman($give)  
{ 
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=de|en");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
        curl_setopt($ch,CURLOPT_ENCODING , "UTF-8");
        $output = curl_exec($ch);
        curl_close($ch);
   preg_match('/<div id=result_box dir=ltr>(.*) <\/div>/s',$output,$matches);
$body = $matches[1]; 
return $body;
}
?> 
