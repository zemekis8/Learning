<?php
//$reg = preg_match("/cats/i", "Cats are fun. I like cats.", $match);
//echo "Кол. соотв. = " . $reg . "<br>" .  "текс сотв. = " . $match[0];


//$n = preg_match_all("/cats/i", "Cats are fun. I like cats.", $match);
//echo "Количество соответствий $n: ";
//for ($i=0 ; $i < $n ; ++$i) echo $match[0][$i]." ";

echo preg_replace("/cats/i","DOGS", "Cats are fun. I like cats.");
