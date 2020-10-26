<?php 
/* unieq_names
For example: calling unique_names([‘Dan’,’Ron’,’Boris], [‘Boris’,’Dan’, Ruth’]) should return:

[‘Dan’,’Ron’,’Boris,’Ruth’] in any order.
*/


$uniqeName1 = array('Dan', 'Ron', 'Boris');
$uniqeName2 = array('Dan', 'Ron', 'Ruth');


function unique_names($arr1,$arr2){

  return array_unique(array_merge($arr1, $arr2),SORT_REGULAR);

}
echo '<pre>';
print_r(unique_names($uniqeName2,$uniqeName1 ));