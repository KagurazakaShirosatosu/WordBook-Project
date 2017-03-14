<?php
$str1 = $word;
$str1 = str_replace('"','&quot;',$str1);
$str1 = str_replace('<','&lt;',$str1);
$str1 = str_replace('>','&gt;',$str1);
$word = str_replace('\'','&#x27;',$str1);

$str2 = $mean;
$str2 = str_replace('"','&quot;',$str2);
$str2 = str_replace('<','&lt;',$str2);
$str2 = str_replace('>','&gt;',$str2);
$mean = str_replace('\'','&#x27;',$str2);

$str3 = $note;
$str3 = str_replace('"','&quot;',$str3);
$str3 = str_replace('<','&lt;',$str3);
$str3 = str_replace('>','&gt;',$str3);
$note = str_replace('\'','&#x27;',$str3);