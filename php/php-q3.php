#Filter
     <?php

     function  filterNumbersFromArray (array &$arr)  :  void
     {
       $newArray= array ();
       $arrLeangh = count($arr);
       foreach($arr as $key => $value) {
              if(is_integer($value)){        
                     $newArray[$key] = $value;
              }
       }
       
       $arr = $newArray;
     }
 
     $arr = [1,  'a' ,  'b' ,  2];
     filterNumbersFromArray ($arr) ;
      print_r ( array_values ( $arr ) ) ;
