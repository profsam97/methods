<?php 
$EPSILON = 0.01;

// $x = '2x^2 - 2x^2 - 32';
function funcs($myx){
    $x = $_POST['val'];
    // $y = explode(" ", $x);
$results = preg_split('/[+-]/', $x);
 $ex = $results[0];
 $ex1 = $results[1];
$new_x = explode($ex, $x);
$new_x1 = explode($ex1, $x);
if($ex == 'x'){
    $sign1 = $new_x[1][0];
  }else{
    $sign1 = $new_x[1][0];
}
  if($ex1 == 'x'){
    $sign2 = $new_x1[2][0];
  }
  else{
  $sign2 = $new_x1[1][0];
  $new_sign = strval($sign2);
//   echo $new_sign;
  if($new_sign == '-' || $new_sign == '+'){
    $sign2  = $new_sign;
  }else{
    echo $sign2 = $new_x1[2][0];
  }
  }
 $last = $results[2];
 
 if($ex == 'x'){
    $new_len1 = $myx;
    $me = "<span class ='px-4 '>". $new_len1 . $sign1;
}else{
    $nd1 =  explode("x", $ex);
  if($nd1[1] != null){
    if($nd1[1][0] == '^'){
        if(is_numeric($nd1[0])){
            $new_len1 = $nd1[0] * pow($myx, $nd1[1][1]);
            $me = "<span class ='px-4 '>". $nd1[0] ." X " . $myx . " <sup>". $nd1[1][1]. "</sup>". $sign1. " ";
        }else{
            $new_len1 =  pow($myx, $nd1[1][1]);
            $me = "<span class ='px-4 '> " .$myx. "  <sup> " . $nd1[1][1]. "</sup>". $sign1. " ";      
          }
    } 
  } 
     else{
        
        $new_len1 = $nd1[0] * $myx;
        $me = "<span class ='px-4 '>". $nd1[0] ."  X " .$myx . $sign1;
    }     
    //  $nd_xo =  explode("^", $ex1);
    // $ex_1 = $nd[0] * $        
}
    if($ex1 == 'x'){
        $new_len = $myx;
        $me .= $new_len . $sign1 . $last . "</span>";
    }
    else{
        $nd =  explode("x", $ex1);
        if($nd[1] != null){
            if($nd[1][0] == '^'){
                if(is_numeric($nd[0])){
                    $new_len = $nd[0] * pow($myx, $nd[1][1]);
                    $me .= $nd[0] ." X  ". $myx . " <sup> ". $nd[1][1]. "</sup>"  .$sign2 . $last . "</span>";
                }else{
                    $new_len =pow($myx, $nd[1][1]);
                    $me .= $myx . " <sup>". $nd[1][1]. "</sup>"  .$sign2 . $last . "</span>";     
            } 
         
            } 
          } 
         else{
            $new_len = $nd[0] * $myx;
            $me .= $nd[0] ."  X " .$myx . $sign2 . $last . "</span>";
        }     
        //  $nd_xo =  explode("^", $ex1);
        // $ex_1 = $nd[0] * $        
    }
    switch ($sign1) {
        case '-':
            switch ($sign2) {
                case '-':
                    $f = $new_len1 - $new_len  -  $last; 
                    $attach = $me . "@" . $f;
                    return $attach;
                    break;
                    case '+':
                    $f = $new_len1 -  $new_len + $last; 
                    $attach = $me . "@" . $f;
                    return $attach; 
                    break;
            }
            break;
            case '+':
                switch ($sign2) {
                    case '+':
                        $f = $new_len1 +  $new_len  + $last;
                        $attach = $me . "@" . $f;
                         return $attach; 
                        break;
                        case '-':
                            $f = $new_len1 +  $new_len - $last;
                            $attach = $me . "@" . $f;
                        return $attach; 
                            break;
                }
    }
}
    function derivFunc($myx)
{
    $x = $_POST['val'];
    // $y = explode(" ", $x);
$results = preg_split('/[+-]/', $x);
 $ex = $results[0];
 $ex1 = $results[1];
$new_x = explode($ex, $x);
$new_x1 = explode($ex1, $x);
if($ex == 'x'){
    $sign1 = $new_x[1][0];
  }else{
    $sign1 = $new_x[1][0];
}
  if($ex1 == 'x'){
    $sign2 = $new_x1[2][0];
  }
  else{
  $sign2 = $new_x1[1][0];
  $new_sign = strval($sign2);
//   echo $new_sign;
  if($new_sign == '-' || $new_sign == '+'){
    $sign2  = $new_sign;
  }else{
    echo $sign2 = $new_x1[2][0];
  }
  }
 $last = $results[2];
 

            if($ex == 'x'){
                $new_len1 = 1;
                $me = "<span class ='px-4 '>". $new_len1 . $sign1;
            }else{
                $nd1 =  explode("x", $ex);
                if($nd1[1] != null){
                    if($nd1[1][0] == '^'){
                        if(is_numeric($nd1[0])){
                            $new_len1 = $nd1[1][1] * $nd1[0] * pow($myx, $nd1[1][1] - 1);
                            $me = "<span class ='px-4 '>" . $nd1[1][1] . " X " . $nd1[0] ." X " . $myx . " <sup>". $nd1[1][1]. " - 1 </sup>.". $sign1. " ";
                        }else{
                            $new_len1 =  $nd1[1][1] * pow($myx, $nd1[1][1] - 1);
                            $me = "<span class ='px-4 '> " . $nd1[1][1] ." X "  .$myx. "  <sup> " . $nd1[1][1]. " -1 </sup>". $sign1. " ";        }
                    }
                  } 
                else{
                    
                    $new_len1 = $nd1[0] ;
                    $me = "<span class ='px-4 '>".$nd1[0];
                }     
                //  $nd_xo =  explode("^", $ex1);
                // $ex_1 = $nd[0] * $        
            }
                if($ex1 == 'x'){
                    $new_len = $myx;
                    $me .= $new_len . $sign1 . $last . "</span>";
                }
                else{
                    $nd =  explode("x", $ex1);
                    if($nd[1] != null){
                        if($nd[1][0] == '^'){
                            if(is_numeric($nd[0])){
                                 $nd[1][1];
                                $new_len = $nd[1][1] * $nd[0] * pow($myx, $nd[1][1] - 1);
                                $me .= $nd[1][1] ." X " . $nd[0] ." X  ". $myx . " <sup>". $nd[1][1]. " -1 </sup></span>";
                            }else{
                                $new_len = $nd[1][1] * pow($myx, $nd[1][1] - 1);
                                $me .=$nd[1][1] ." X " . $myx . " <sup>". $nd[1][1]. " - 1</sup></span>";     
                        } 
                     
                        }
                    }
                    else{
                        $new_len = $nd[0];
                        $me .= $nd[0]  . "</span>";
                    }     
                    //  $nd_xo =  explode("^", $ex1);
                    // $ex_1 = $nd[0] * $        
                }
            switch ($sign1) {
                case '-':
                    switch ($sign2) {
                        case '-':
                            $f = $new_len1 - $new_len  -  $last; 
                            $attach = $me . "@" . $f;
                            return $attach; 
                            break;
                            case '+':
                            $f = $new_len1 -  $new_len + $last; 
                            $attach = $me . "@" . $f;
                            return $attach; 
                            break;
                    }
                    break;
                    case '+':
                        switch ($sign2) {
                            case '+':
                                $f = $new_len1 +  $new_len  + $last; 
                                $attach = $me . "@" . $f;
                                return $attach; 
                                break;
                                case '-':
                                    $f = $new_len1 +  $new_len - $last; 
                                    $attach = $me . "@" . $f;
                                    return $attach; 
                                    break;
                        }
            }
}
    // echo $f;
//  $ist = explode("x", $ex);
//  $ist_length = count($ist);
//  $nd = explode("x", $ex1);
//  $nd_length = sizeof($nd);
//  $nd[0];
//  if(unset){
//      echo 'da';
//  }
//  if($ist_length == 2){
//      $var1 = $ist[0] * pow($myx, $ist[1][1]); 
//  }
// echo $ex;

// if(in_array('-',$y)){
//     $key = array_search("-", $y);
//     echo $key;
// }else{
//     echo 'ds';
// }
// Prints root of func(x)
// with error of EPSILON
function roundme($x){
    return round($x, 4);
 }
function newtonRaphson($x)
{
    function turn ($a){
        $check =  funcs($a);
       $explode = explode('@', $check);
        $new_explode=  $explode[1];
        return $new_explode;
     }
     function real ($a){
         $check =  funcs($a);
         $explode = explode('@', $check);
          $new_explode=  $explode[0];
          return $new_explode;
     }
     function derivturn ($a){
        $check =  derivFunc($a);
       $explode = explode('@', $check);
        $new_explode=  $explode[1];
        return $new_explode;
     }
     function derivreal ($a){
         $check =  derivFunc($a);
         $explode = explode('@', $check);
          $new_explode=  $explode[0];
          return $new_explode;
     }
    $no = 1;
    $num= 1;
    $fs= 1;
    $num1= 1;
	global $EPSILON;
	$h = derivturn($x) / derivturn($x);
   
    //  run();
    ?>

    <?php
	while (abs($h) >= $EPSILON){
        $num++;
        ?>


        <?php
        // Find middle point
        $my = $num1-1;

    
        $am = $x -  turn($x) / derivturn($x);
    
        $fs++;
    ?>
   
           <?php 
       {
        $h = turn($x) / derivturn($x);

        // x(i+1) = x(i) -
        // f(x) / f'(x)
        $x = $x - $h;
        $xs = $x;
    } ?>      
     
   
<?php 
   

}
echo  "<p class='h6'>Where n is  " . $num  ."  </p>";

    ?>
 

<?php 

}


// Driver Code
$x0 = -2; // Initial values assumed
newtonRaphson($x0);


//
//
?>
<script>

</script>
<style>
.shift{
    margin-top: 130px;
    position: absolute;
    white-space: nowrap;
} 

</style> 
