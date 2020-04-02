<?php 
 $arr_name =  array(1, 2, 3, 5, 6, 9, 12 );

  echo "<pre>";
  	print_r($arr_name[0]."-".
  	        $arr_name[1]."-".
  	        $arr_name[2]."-".
  	        $arr_name[3]."-".
  	        $arr_name[4]."-".
  	        $arr_name[5]."-".
  	        $arr_name[6]
  	    );
  echo"</pre>";
echo "Ngược Lại"."<br>";
  echo "<pre>";
  	print_r($arr_name[6]."-".
  	        $arr_name[5]."-".
  	        $arr_name[4]."-".
  	        $arr_name[3]."-".
  	        $arr_name[2]."-".
  	        $arr_name[1]."-".
  	        $arr_name[0]);
  echo"</pre>";
 ?>