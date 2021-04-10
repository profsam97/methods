<?php 
error_reporting(0);
$EPSILON = 0.01;
$digis = $_POST['digits'];

// $x = '2x^2 - 2x^2 - 32';
function func($myx){
    $x = $_POST['val'];
    // $y = explode(" ", $x);
$results = preg_split('/[+-]/', $x);
if(is_null($results[1])){
    echo 'Pls input a correct expression <br>';
     }else{
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
     $sign2 = $new_x1[2][0];
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
}
//     function derivFunc($x)
// {
//     $x = '2x^2 - 2x^2 - 32';
//     $y = explode(" ", $x);
//     $results = preg_split('/[+-]/', $x);
//      $ex = $results[0];
//      $ex1 = $results[1];
//     $new_x = explode($ex, $x);
//     $new_x1 = explode($ex1, $x);
//      $sign1 = $new_x[1][0];
//      $sign2 = $new_x1[1][0];
//      $last = $results[2];
//      $myx = 2;
//             if($ex == 'x'){
//                 $new_len1 = 1;
//                 $me = "<span class ='px-4 '>". $new_len1 . $sign1;
//             }else{
//                 $nd1 =  explode("x", $ex);
//                 $nd1[1];
//                 if($nd1[1][0] == '^'){
//                     if(is_numeric($nd1[0])){
//                         $new_len1 = $nd1[1][1] * $nd1[0] * pow($myx, $nd1[1][1] - 1);
//                         $me = "<span class ='px-4 '>" . $nd1[1][1] . " X " . $nd1[0] ." X " . $myx . " <sup>". $nd1[1][1]. " - 1 </sup>.". $sign1. " ";
//                     }else{
//                         $new_len1 =  $nd1[1][1] * pow($myx, $nd1[1][1] - 1);
//                         $me = "<span class ='px-4 '> " . $nd1[1][1] ." X "  .$myx. "  <sup> " . $nd1[1][1]. " -1 </sup>". $sign1. " ";        }
//                 }   else{
                    
//                     $new_len1 = $nd1[0] ;
//                     $me = "<span class ='px-4 '>".$nd1[0];
//                 }     
//                 //  $nd_xo =  explode("^", $ex1);
//                 // $ex_1 = $nd[0] * $        
//             }
//                 if($ex1 == 'x'){
//                     $new_len = $myx;
//                     $me .= $new_len . $sign1 . $last . "</span>";
//                 }
//                 else{
//                     $nd =  explode("x", $ex1);
//                     if($nd[1][0] == '^'){
//                         if(is_numeric($nd[0])){
//                             $new_len = $nd[1][1] * $nd[0] * pow($myx, $nd[1][1] - 1);
//                             $me .= $nd1[1][1] ." X " . $nd[0] ." X  ". $myx . " <sup>". $nd1[1][1]. " -1 </sup></span>";
//                         }else{
//                             $new_len = $nd[1][1] * pow($myx, $nd[1][1] - 1);
//                             $me .=$nd1[1][1] ." X " . $myx . " <sup>". $nd1[1][1]. " - 1</sup></span>";     
//                     } 
                 
//                     }   else{
//                         $new_len = $nd[0];
//                         $me .= $nd[0]  . "</span>";
//                     }     
//                     //  $nd_xo =  explode("^", $ex1);
//                     // $ex_1 = $nd[0] * $        
//                 }
//             switch ($sign1) {
//                 case '-':
//                     switch ($sign2) {
//                         case '-':
//                             $f = $new_len1 - $new_len  -  $last; 
//                             break;
//                             case '+':
//                             $f = $new_len1 -  $new_len + $last; 
//                             break;
//                     }
//                     break;
//                     case '+':
//                         switch ($sign2) {
//                             case '+':
//                                 $f = $new_len1 +  $new_len  + $last; 
//                                 break;
//                                 case '-':
//                                     $f = $new_len1 +  $new_len - $last; 
//                                     break;
//                         }
//             }
// }
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
function bisection($a, $b, $digis)
{
    function turn ($a){
       $check =  func($a);
      $explode = explode('@', $check);
       $new_explode=  $explode[1];
       return $new_explode;
    }
    function real ($a){
        $check =  func($a);
        $explode = explode('@', $check);
         $new_explode=  $explode[0];
         return $new_explode;
    }
   
	global $EPSILON;
	if (turn($a) *
		turn($b) >= 0)
	{
		echo "You have not assumed " .
				"right a and b","\n";
		return;
	}
   
	$c = $a;
    $num = 1;
    $num1 = 0;
    $fs = 1;
    $n = 1;
    
    ?>
      <p>Assuming Initial values <br>
        -2,4
         </p>
    <div class="row">
    <div class="">
        <table class="table table-hover table-inverse table-responsive">
            <thead class="thead-dark">
                <tr>  
                    <th>n</th>
                    <th>a</th>
                    <th>f(a)</th>
                    <th>b</th>
                    <th>f(b)</th>
                    <th> C=a+b/2 </th>
                    <th>f(c)</th>
                    <th>Update</th>
                </tr>
            </thead>
    <?php
	while (($b - $a) >= $EPSILON)
	{
        $num1++;
        $fs++;
    echo  "<p class=' h5 text-center'> <u> Iteration ".   $num++  . "</u> </p>";
		// Find middle point
        $my = $num1-1;
        ?>

<h6>Here <i>f</i>(<?php echo round($a,$digis);?>) = <?php echo round(turn($a),$digis); echo (turn($a) < 0 ? '< ' : '>') ?>0  and  <i>f</i>(<?php echo round($b,$digis);?>) = <?php echo round(turn($b), $digis); echo (turn($b) < 0 ? '< ' : '>') ?>0</h6>


<h6>Now the root lies between <?php echo $a;?>  and <?php echo $b;?> </h6>
<?php
       echo   "<p class='lead mr-5 mb-0'> X <sub>"  . $my . "  </sub>  =  <u>" . round($a,$digis) . " + " . round($b,$digis) . "</u>  </p> <p class ='ml-5 clearfix mt-0 mb-0'>&nbsp; &nbsp; &nbsp; 2</p> =<span class='ml-5'>  <b class=''ml-5>"; 
	    echo	round($c = ($a + $b) / 2, $digis) . "</b></span>" ;
		// Check if middle
		// point is root
        ?>
        <h5>F(X<sub><?php echo $fs-1; ?></sub>) = <i>fx</i>(<?php echo  round($c,$digis) ?>) =                    <?php echo real($c)?> = <b> <?php echo round(turn($c),$digis); ?></b></h5>
        <?php
      
        //  run();
       

		if (turn($c) == 0.0)
			break;

		// Decide the side to
		// repeat the steps
		else if (turn($c) * turn($a) < 0){
			$b = $c;
            $var = 'b=c';
        }
		else{
			$a = $c;
            $var = 'a=c';

        }
            ?>
             <tbody class="h5">
                <tr>
                    <th scope="row"><?php echo $n++;?></th>
                    <td><?php echo round($a,$digis);?></td>
                    <td><?php echo round(turn($a), $digis);?></td>
                    <td><?php echo  round($b,$digis);?></td>
                    <td><?php echo round(turn($b), $digis);?></td>
                    <td><?php echo round ($c = ($a + $b) / 2, $digis)?></td>
                    <td><?php echo round(turn($c), $digis);?></td>
                    <td><?php echo $var;?></td>
                              </tr>
            </tbody>
            <?php
	}
    ?>
       </table>
    
    </div>
    <!-- TABLE HEAD INVERSE -->
    
    <br>

    </div>
    <?php
	?>
    <h5>The Approximate root of the equation <?php echo $_POST['val'] ?> using Bisection method is <?php 
    echo round($c,$digis); ?> <small class="text-muted"> (After <?php echo $n-1; ?> iterations)</small> </h5>
<?php
           
}

// Driver Code

// Initial values assumed
$a =-2;
$b = 4;
bisection($a, $b, $digis);

//
?>
<script>
   $(document).ready(function(){
    var me = '<?php global $me; echo $me ?>';
    console.log(me);
   })
</script>
<style>
.shift{
    margin-top: 130px;
    position: absolute;
    white-space: nowrap;
} 

</style> 
