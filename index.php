
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Bootstrap Theme</title>
</head>

<body>
 <!--NAV -->
 <div class="container m-5 p-2">
 <div class="d-flex d-row">
 <div class="col-lg-10">
 <form action="" method="post">
    <section class="m-3 bg-light">
      <div class="container p-2">
        <div class="col-md-12 p-1 text-center bg-danger text-light">
          <h5>
            Welcome
          </h5> 
        </div>
        <div class="form-group text-center">
          <label for="slect" class="text-center">Select Method</label>
          <select class="form-control form-control-lg hellos" onchange="run()"   name="" id="select">
            <option value="Bisection">Bisection</option>
            <option value="Newton Raphson">Newton Raphson</option>
            <option value="Secant">Secant</option>
          </select>
        </div>
        <p class="p-1  text muted text-dark" id="output" ></p>
        <div class="d-flex mx-auto  col-md-3 col-md-offset-3">
          <div class="form-group">
            <input type="text" id="n" name="" required id="" class="form-control heys" onkeyup="show()" placeholder="" aria-describedby="helpId" >
            <small id="helpId" class="text-muted">e.g. x^3 - 2x^2 + 2</small>
          </div>
        </div>
       
      </div>

      <div class="alert alert-warning alert-dismissible fade show check " hidden role="alert">
  <strong>Oops!</strong>  Please enter a value.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
      <input type="hidden" name="" id="hideme" value="0">
      <input type="hidden" name="" id="hidme" value="0">
      <input type="hidden" name="" id="hidmes" value="">
     <div class="d-flex d-row ">
     <div class="col-md-3">  
      <button class="btn btn-danger text-light mr-auto clears" hidden >
      <i class="fa fa-trash" aria-hidden="true"></i>    Clear
        </button>
        </div>
     <div class="col-md-3">    
      <button class="btn btn-primary text-light hidden mx-auto " hidden >
      <i class="fa fa-exchange-alt" aria-hidden="true"></i>    Compare
        </button>
        </div>
     <div class="col-md-3">
     <div class="d-flex col-12">
      <small class="text-muted my-2 ">Up to </small>
     <div class="form-group mx-2">
        <select class="form-control   form-control-md hellos" onchange="runs()"   name="" id="myselect">
            <option value="4">4 digits </option>
            <option value="3">3 digits</option>
            <option value="2">2 digits</option>
            <option value="5">5 digits</option>
            <option value="6">6 digits</option>
            <option value="7">7 digits</option>
            <option value="8">8 digits</option>
          </select>
          </div>
          </div>
     </div>
     <div class="col-md-3">
          <button class="btn btn-success text-light calculate ml-auto " hidden onclick="calculate()">
        <i class="fa fa-calculator" aria-hidden="true"></i>  Calculate
        </button>
     </div>   
     </div>
      <div class="shows text-center "></div>
    </section>
    </form>
 </div>
 <div class="col-lg-6 hide_o" hidden>
 <div class="m-3 p-2">
<table class="table table-hover table-inverse table-responsive">
  <thead class="thead-inverse">
    <tr>
      <th>Method</th>
      <th>Time Complexity </th>
    </tr>
    </thead>
    <tbody>
      <tr>
        <td class="secant1"></td>
        <td class="secant2"></td>
        <td class="secant3"> </td>
      </tr>
      <tr>
        <td class="bisection1"></td>
        <td class="bisection2"></td>
        <td class="bisection3"></td>
      </tr>
      <tr>
        <td class="newton1"></td>
        <td class="newton2"></td>
        <td class="newton3"></td>
      </tr>
    </tbody>
</table>
 </div>
 </div>
 </div>
 </div>
 <div class="container">
 <div class="col-lg-12 order-sm-2 order-lg-1">
            <p class="lead sum">
        
            </p>

           
        </div>
 </div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.9/vue.js" integrity="sha512-o9SZrtqlGkpa7EF+dDrNjEdRFFYhymlrBzDKpolHNolxsyx0IcXAbEm9i1e8QpoiMgEdKZVtY8XiK1t8i6jVDA==" crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
 
  <script>
    // Get the current year for the copyright

    // $('.port-item').click(function(){
    //   $('.collapse').collapse('hide');
    // });
    // $(".alert").alert();

     // Lightbox Init
    //  $(document).on('click', '[data-toggle="lightbox"]', function (event) {
    //   event.preventDefault();
    //   $(this).ekkoLightbox();
    // });
    var real = 0;
 
    function run (){
      var me = document.getElementById('hideme').value = ++real;
    // my().returnNo(me);
      var select = document.getElementById("select").value;
      var num = document.getElementById("n").value;
      switch (select) {
          case 'Secant':
            var url = 'secant_method.php';
            var output = 'You Selected' + ' ' + select;
            var helpid = document.getElementById("helpId").value = 'e.g.  x^3+x-1';
            $('#helpId').html(helpid);
            $('#output').html(output);
            $('.calculate').click(()=>{
            $.ajax({
          type: 'post',
          url: 'secant_ajax.php',
          data: {val: num, },
          success: function(res){
              console.log(res);
              console.log(num);
              $('.secant1').text('Secant')
              $('.secant2').text('O(n)')
              $('.secant3').html(res);
          }
        })
      });
            return url;
            break;
            case 'Bisection':
            var url = 'bisection_method.php';
            var output = 'You selected' + ' ' + select;
            var helpid = document.getElementById("helpId").value = 'e.g.  x^3 - 2x^2 + 2';
            $('#helpId').html(helpid);
            $('#output').html(output);
            $('.calculate').click(()=>{
            $.ajax({
          url: 'bisection_ajax.php',
          type: 'post',
          data: {val: num},
          success: function(res){
              console.log(res);
              console.log(num);
              $('.bisection1').text('bisection')
              $('.bisection2').text('O(log(n))')
              $('.bisection3').html(res);
          }
        });
      });
            return url;
            break;
            case 'Newton Raphson':
            var url = 'NewtonRaphson_method.php';
            var output = 'You Selected'   + ' ' + select;
            var num = document.getElementById("n").value;
            var helpid = document.getElementById("helpId").value = 'e.g. 3x^3 - 2x^2 + 2';
            $('#helpId').html(helpid);
            $('#output').html(output);
            $('.calculate').click(()=>{
            $.ajax({
          url: 'newtonRaphson_ajax.php',
          type: 'post',
          data: {val: num},
          success: function(res){
              console.log(res);
              console.log(num);
              $('.newton1').text('Newton')
              var mes =  "<p>O(&Sqrt;n))</p>"
              $('.newton2').html(mes);
              $('.newton3').html(res);
          }
        })
      });
            return url;
            break;
          default:
          var url = 'bisection_method.php';
          $.ajax({
          url: 'bisection_ajax.php',
          type: 'post',
          data: {val: num},
          success: function(res){
            $('.bisection1').text('bisection')
              $('.bisection2').text('O(log(n))')
              $('.bisection3').html(res);
          }
        });
          return url;
            break;
      }    }
      // function count (){
        
      // }

      function runs (){
    // my().returnNo(me);
      var select = document.getElementById("myselect").value;   
      return select;  
            }   
    function calculate(){
      var num = document.getElementById("n").value;
      var length = num.length;
      event.preventDefault();
      console.log(num);
      var new_num = num.serialize;
      // var checks = num.split("[- +]+");
      // console.log(checks[0]);
      if(num == ""){
        var err = document.getElementById("error");
        $('.check').removeAttr('hidden');
        err.classList.remove('d-none')
          // $('.error').show();
      } else{
        $('.clears').removeAttr('hidden');
        num = num.replace(/\s+/g, '');
        var length = num.length;
        var digits = runs();
        $.ajax({
          url: run(),
          type: 'post',
          data: {val: num, length: length, digits:digits},
          success: function(res){
              console.log(res)
              $('.sum').html(res);
          }
        })

    }
    }

     var count = 0;
     var count1 = 0;
  //  var lll =   $('.calculate').click(()=>{
  //     count++;
  //     if (count >= 2){
  //       return true;
  //       }else{
  //         return false;
  //       }
  //   })();
 
      $('.hellos').change(()=>{
        count1++;
        if (count1 >= 2){
          $('.calculate').click(()=>{
       count++;
       var num = document.getElementById("n").value;
      var length = num.length;
      if (count >= 1 && num !=''){
                $('.hidden').removeAttr('hidden');
        }
  
        })
      }
      });
     
      // if(lll >= 2 && messs >=2){

      //   $('.hidden').removeAttr('hidden');
      // }

  
    $('.hidden').click((e)=>{
      event.preventDefault();
      $('.hide_o').removeAttr('hidden');
    });
   
    // function clear (){
    //   var clear = document.getElementsByClassName("show");
    //   clear.className('d-none')
    // }
    $('.clears').click(()=>{
      $('.shows').addClass("d-none");
      $('#n').val("");
      window.location.reload();
    })
    function show(){
      $('.calculate').removeAttr('hidden')
    }

  </script>
     
</body>

</html>
<style>
body{
  overflow-x: hidden;
}
</style>