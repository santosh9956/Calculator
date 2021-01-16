<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="stylesheet" href="style.css"></link>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <div class="container">
         <div class="main">
            <div class="all-content">
            <form method="POST">
                <div class="name">
                    <h1> php calculator</h1>
                </div>
               <div class="number">
                   <input type="text" placeholder="enter number" name="num1"><br>
                   <input type="text" placeholder="enter number" name="num2">
               </div>
               <div class="selector">
                   <select name="operation">
                       <option value="ADD">ADD</option>
                       <option value="SUB">SUB</option>
                       <option value="MUL">MUL</option>
                       <option value="DIV">DIV</option>
                   </select>
               </div>
               <div class="submission">
                   <br>
                   <input type="submit" value="submit" name="submit">
               </div>
            </form>
            </div>
            <div class="result">
                <p>  
                  <?php
                    if (isset($_POST['submit'])){
                        $num1=$_POST['num1'];
                        $num2=$_POST['num2'];
                        $operation=$_POST['operation'];
                        switch($operation){
                            case "add":$sum = $num1 + $num2 ;
                                echo "The addition of two number is {$sum}";
                                break;
                            case "sub":$sub = $num1 - $num2 ;
                                echo "The subtraction of two number is {$sub}";
                                break;
                            case "mul":$mul = $num1 * $num2 ;
                                echo "The multiplication of two number is {$mul}";
                                break;
                            case "div":$div = $num1 / $num2 ;
                                echo "The division of two number is {$div}";
                                break;
                            default: echo "sorry not exist";
                        }
                    
                    }
                     ?>
                </p>
            </div> 
        </div> 
    </div>
</body>

</html>