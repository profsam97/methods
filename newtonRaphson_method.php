<?php 
error_reporting(0);

$EPSILON = 0.01;
$digis = $_POST['digits'];

// $x = '2x^2 - 2x^2 - 32';
function funcs($myx){
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
}
    function derivFunc($myx)
{
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
}
    

function newtonRaphson($x, $digis)
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

        <p>Assuming Initial values <br>
        x<sub>0</sub>=-2-2/2 <br>
        x<sub>0</sub>=-2
         </p>


    <div class="row">
    <div class=" order-1">
        <table class="table">
            <thead class="thead-dark">
                <tr>  
                    <th>n</th>
                    <th> X <sub>0</sub></th>
                    <th>f(X<sub>0</sub>)</th>
                    <th>f<sup>1</sup>(X <sub>1</sub>)</th>
                    <th> X <sub>1</sub></th>
                    <th>Update</th>
                </tr>
            </thead>
    <?php
	while (abs($h) >= $EPSILON){
        echo  "<p class='text-center h5'> <u> Iteration  " . $num++  ." </u> </p>";

        ?>

<h6>F(X<sub><?php echo $fs-1; ?></sub>) = <i>fx</i>(<?php echo  round($x, $digis) ?>) =                    <?php echo real($x)?> = <b> <?php echo round(turn($x), $digis); ?></b></h6>
        <h5 classs='d-flex d-row inline'>F<sup>1</sup> (X<sub><?php echo $fs-1; ?></sub>) = <i>f</i><sup>1</sup>(<?php echo  round($x, $digis) ?>) =   <?php echo derivreal($x)?> = <b> <?php echo round(derivturn($x), $digis); ?></b></h5>
        <?php
        // Find middle point
        $my = $num1-1;

        // Check if middle
        echo   "<p class='lead mr-5 mb-0'> X <sub>"  . ($num - 1) . "  </sub>  =  <u> X <sub>"  .($num - 2) . " </sub> -  <i>f</i>(X<sub>".($num - 2). "</sub>)" . "</u>  </p> <p class ='ml-5 clearfix mt-0 mb-0'>&nbsp; &nbsp; &nbsp <i>f <sup>1</sup></i>(X<sub>". ($num - 2). "</sub>) </p> "; 
        echo   "<p class='lead mr-5 mb-0'> X <sub>"  . ($num - 1) . "  </sub>  =  <u>" . round($x, $digis) . " - " . " (". round(turn(($x), $digis)) . ")" . "</u>  </p> <p class ='ml-5 clearfix mt-0 mb-0'>&nbsp; &nbsp; &nbsp". round(derivturn($x), $digis) ." </p> = <span class='ml-5'>  <b class=''ml-5>"; 
        // point is root
        $am = $x -  turn($x) / derivturn($x);
        echo round($am, $digis);
        echo '<br>';
        $fs++;
    ?>
      
    <tbody class="h3 text-dark">
       <tr>
           <th scope="row"><?php echo $no++;?></th>
           <td> <?php echo round($x, $digis);?></td>
           <td><?php echo round(turn($x), $digis);?></td>
           <td><?php echo round(derivturn($x), $digis);?></td>
           <?php 
       {
        $h = turn($x) / derivturn($x);

        // x(i+1) = x(i) -
        // f(x) / f'(x)
        $x = $x - $h;
        $xs = $x;
    } ?>      
           <td><?php echo round($xs, $digis);?></td>
           <td>X<sub>o</sub> = X<sub>1</sub></td>
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
  <h5 class="">The Approximate root of the equation <?php echo $_POST['val'] ?> Using  Newton Raphson mehtod  is <?php 
    echo  round($x, $digis); ?> <small class="text-muted"> (After <?php echo ($num-1); ?> iterations)</small> </h5>
<?php 

}


// Driver Code
$x0 = -2; // Initial values assumed
newtonRaphson($x0,$digis);


//
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
