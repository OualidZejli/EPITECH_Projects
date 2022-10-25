<?php
 $a1 = array('1', '2', '3');
 $a2 = array('a', 'b', 'c');
 $b1 = array('bbb', 'aaa', 'cc', 'bb', 'aa', 'c', 'b', 'a');
 $b2 = array('32', '31', '23', '22', '21', '13', '12', '11');
 
 function conway($n, $str = '1', $i = 0) {
    global $a1, $a2, $b1, $b2;
     if($i < $n) {
         return conway($n, str_replace($b1, $b2, str_replace($a1, $a2, $str)), ++$i);
     }
     else {
         return $str;
     }
 }
 echo conway(3, $str = '1', $i = 0);
 ?>