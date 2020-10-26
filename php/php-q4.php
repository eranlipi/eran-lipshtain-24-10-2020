
    <?php

    function  prependSum (array  $array)  :  int
    {
           $sum = array_sum( $array ) ;
            return  $sum;
    }
   
  $array = array (1 , 2, 3 ) ;
  $sum = prependSum ($array) ;
  array_unshift ($array, $sum) ;

  echo ( $sum.PHP_EOL );
  print_r ( array_values ( $array ) ) ;
