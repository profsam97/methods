<?php 
// $x = '2x^2 - 2x^2 - 32';
function f($myx){
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
  }else{
    $sign2 = $new_x1[1][0];
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
                      $nd[1][1];
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
                    return $f;
                    break;
                    case '+':
                    $f = $new_len1 -  $new_len + $last;
                    return $f; 
                    break;
            }
            break;
            case '+':
                switch ($sign2) {
                    case '+':
                        $f = $new_len1 +  $new_len  + $last;
                         return $f; 
                        break;
                        case '-':
                            $f = $new_len1 +  $new_len - $last;
                        return $f; 
                            break;
                }
    }
}


function roundme($x){
    return round($x, 4);
 }
 function secant($x1, $x2, $E)
 {
      f($x2);
     $n = 0; $xm;
     $n1 = 0;
     $ns = 1;
     $x0; $c;
     if (f($x1) * f($x2) < 0)
     {
         ?>
   
    
         <?php
         do {
             $n++;
             $n1++;
 
             // calculate the intermediate value
             $x0 = ($x1 * f($x2) - $x2 *
                 f($x1)) / (f($x2) - f($x1));
         
          $c = f($x1) * f($x0);
             // update the value of interval
             $x1 = $x2;
             $x2 = $x0;
             $var = 'x1 = x2<br> x2 = x0';
             // update number of iteration
             
 
             // if x0 is the root of equation
             // then break the loop
             if ($c == 0)
                 break;
             $xm = ($x1 * f($x2) - $x2 * f($x1)) /
                             (f($x2) - f($x1));
                                 
                             ?>
                   
                            
              <?php  } while (abs($xm - $x0) >= $E);
              ?>
                        

<?php
         // $new_n = $n -2;
         // echo "Root of the given equation=". $x0."\n" ;
         // echo "No. of iterations = ". $n ;
         echo  "<p class=' h6 '> Where n is  ".   $n1 . "  </p>";

         ?>
       
     <?php
         
     } else
         echo "Can not find a root in the given inteval";
    
 }
 
 // Driver code
 {
     
     // initializing the values
     $x1 = 0; $x2 = 2;
     $E = 0.0001;
     secant($x1, $x2, $E);
     return 0;
 }
 

?>
<script>
   $(document).ready(function(){
    // var me = '<?php global $me; echo $me ?>';
    // console.log(me);
   })
</script>
<style>
.shift{
    margin-top: 130px;
    position: absolute;
    white-space: nowrap;
} 

</style> 
