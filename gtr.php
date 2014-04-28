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
function toczech($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|cs");
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
function torussian($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|ru");
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
function toarabic($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|ar");
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
function tochinese($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|zh");
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
function todutch($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|nl");
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
function tohungarian($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|hu");
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
function toindonesian($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|id");
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
function tojapanese($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|ja");
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
function tokorean($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|ko");
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
function tomalay($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|ms");
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
function toportuguese($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|pt");
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
function toromanian($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|ro");
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
function tothailand($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|th");
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
function tovietnamese($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=en|vi");
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
//language from functions
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
function fromczech($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=cs|en");
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
function fromrussian($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=ru|en");
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
function fromarabic($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=ar|en");
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
function fromchinese($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=zh|en");
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
function fromdutch($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=nl|en");
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
function fromhungarian($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=hu|en");
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
function fromindonesian($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=id|en");
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
function fromjapanese($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=ja|en");
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
function fromkorean($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=ko|en");
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
function frommalay($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=ms|en");
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
function fromportuguese($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=pt|en");
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
function fromromanian($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=ro|en");
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
function fromthailand($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=th|en");
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
function fromvietnamese($give)
{
$query = "&text=$give";
        $ch=curl_init();
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, "http://translate.google.com/translate_t?langpair=vi|en");
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
