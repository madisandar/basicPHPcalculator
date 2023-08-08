<?php
if(isset($_GET['submit'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Calculator PHP</title>
    <!-- bootstrap css1 js1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css" >
        .form input[type="text"]{
            border-radius: none;
            box-shadow: none;
            border: none;
            border-bottom: 2px solid steelblue;
        }

        .form input[type="text"]:focus,.form input[type="text"]:hover{
            outline: none;
            border-bottom: 2px solid red;
        }
        button[type="submit"]{
            border-radius: none;
            box-shadow: none;
            border: none;
            opacity: 0.7;
        }
        button[type="submit"]:hover{
            opacity: 1;
        }

    </style>
</head>
<body>
       
      <div class="container mt-6">
         <div class="row mt-6">
            <div class="col-md-12 mt-6">
                <h5 class="display-6 text-xl fw-bold">PHP Calculator</h5>
                <span class="text-lg text-success">You need to select a Method</span>
                 <div class="p-3">
                    <?php 
                    switch($operator){
                        case'none':
                            echo "You need to select a method";
                            break;
                        case'plus':
                            echo $num1+$num2;
                            break;
                        case 'subtract':
                            echo $num1-$num2;
                            break;
                        case 'multiply':
                            echo $num1*$num2;
                            break;
                        case 'divide':
                            echo $num1/$num2;
                            break;
                    }

                    
                    ?>
                 </div>
                <form class="form py-5" action="" method="GET" >
                    <div class="mb-3">
                        <input type="text" name="num1" id="num1" class="form-control mb-3" style="width:50%;" placeholder="Enter Number 1" />
                    </div>
                    <div class="mb-3">
                       <input type="text" name="num2" id="num2" class="form-control mb-3" style="width:50%;" placeholder="Enter Number 2" />
                    </div>
                    <select name="operator" id="operator" style="width:50%;" class="mt-5 p-2" >
                        <option value="none">No Chosen</option>
                        <option value="plus">Plus</option>
                        <option value="subtract">Subtract</option>
                        <option value="multiply">Multiply</option>
                        <option value="divide">Divide</option>
                    </select>
                    <div class="d-grid my-3">
                        <button type="submit" name="submit" class="bg-danger p-2" style="width:80px;">Calculate</button>
                     </div>
                 </form>
            </div>
         </div>
      </div>

      <!-- bootstrap css1 js1 -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>