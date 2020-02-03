<?php
    $ar = array('first','second','third','forth');
    var_dump($ar);
    print_r($ar);

    $ar1 = array('key1'=>'first','key2'=>'second','key3'=>'third');
    var_dump($ar1);
    print_r($ar1);

    $ar2 = array (array (1,2,3,4),array(5,6,7,8),array(2,4,6));
    var_dump($ar2);
    print_r($ar2);

    print_r(array_change_key_case($ar1,CASE_UPPER));//can do CASE_LOWER

    print_r(array_chunk($ar,2,true));//can be false to reindex the values or update the key value

    $ar3 = array(
        array(
          'id' => 22088,
          'first_name' => 'Shiv',
          'last_name' => 'Shankar',
        ),
        array(
          'id' => 22089,
          'first_name' => 'Ankit',
          'last_name' => 'Kumar',
        ),
        array(
          'id' => 22093,
          'first_name' => 'Aanand',
          'last_name' => 'Kumar',
        )
      );

      print_r(array_column($ar3,'first_name','id'));


      $ar4 = array('winner','1st runnerup','2nd runnerup','3rd runnerup');
      print_r(array_combine($ar,$ar4));


      print_r(array_count_values(array_column($ar3,'last_name')));

      function check($a,$b)
      {
        if($a==$b)
        {
            return 0;
        }
        return ($a>$b)?1:-1;
      }
      $ar5 = array('first','second','forth');
      print_r(array_diff_uassoc($ar,$ar5,"check"));

      print_r(array_flip($ar1));

      #array_intersect()compare the array vlaues
      
      echo array_key_exists("key1",$ar1);
      print_r(array_keys($ar1));


      function myfunction($num)
      {
        return($num*$num);
      }
      print_r(array_map("myfunction",$ar2[1]));



      print_r(array_merge($ar2[0],$ar2[2]));
      print_r(array_merge_recursive($ar2[0],$ar1));

      echo array_product($ar2[0]);


?>