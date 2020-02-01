<?php
 if(isset($_POST['btn'])) {
     $firstnumber= $_POST['firstnumber'] ;
     $secondnumber= $_POST['secondnumber'] ;
     $btn= $_POST['btn'];
    
     if($btn=='+'){
         $result= $firstnumber + $secondnumber;
     }

     elseif($btn=='-'){
        $result= $firstnumber - $secondnumber;
    }
    elseif($btn=='*'){
        $result= $firstnumber * $secondnumber;
    }
    elseif($btn=='/'){
        $result= $firstnumber / $secondnumber;
    }

    else{
        $result= $firstnumber % $secondnumber;
    }



 }


?>


















<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Mini Calculator</title>
    <style>
  
  .custom{
        position:absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        
    }
    
    </style>
    
</head>
<body>

<div class="container ">
    <div class="row ">
        <div class="col-lg-6 col-sm-8 custom bg-secondary">
        <form action="#" method='post' >
        <div class="form-group">
        <label for="firstnumber" class='text-light text-uppercase font-weight-bold'>First Number:</label> <br>
        <input type="text" name='firstnumber' class='form-control' >
        </div>
        <div class="form-group">
        <label for="secondnumber" class='text-light text-uppercase font-weight-bold'>Second Number:</label> <br>
        <input type="text" name='secondnumber' class='form-control' >
        </div>
        <div class="form-group">
        <label for="result" class='text-light text-uppercase font-weight-bold'>Result:</label> <br>
        <input type="text" name='result' class='form-control' value='<?php if(isset($result)){ echo $result;}   ?>' >
        </div>

        <div>
        
        <input type="submit" name='btn' value='+' class='btn btn-info' >
        <input type="submit" name='btn' value='-' class='btn btn-warning' >
        <input type="submit" name='btn' value='*' class='btn btn-primary'  >
        <input type="submit" name='btn' value='/' class='btn btn-dark' >
        <input type="submit" name='btn' value='%' class='btn btn-danger'  >
        </div>
         
        </form>
        </div>
    </div>
</div>


    
</body>
</html>