#Filter
     <?php

     function  filterNumbersFromArray (array &$arr)  :  void
     {
              $newArray= array ();
              $arrLeangh = count($arr);
              foreach($arr as $key => $value) {
                     $counter = 0;
                     for($i = 0; $i <  $arrLeangh; $i++){
                            if ($arr[$i] === $value){
                                   $counter = $counter + 1;
                            }
                     
                     }
                     if($counter === 1){
                                   
                            $newArray[$key] = $value;
                     }

              }
              
              $arr = $newArray;
       
     }


   

 
     $arr = [1,  2 , 1 ,  3];
     filterNumbersFromArray($arr) ;
     echo '<pre>';
      print_r ( array_values ( $arr ) ) ;
