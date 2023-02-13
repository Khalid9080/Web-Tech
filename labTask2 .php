<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>

<body>
    <center>
        <h1>
            Multiplication
        </h1>
 
  
         <form method="post">
            
            <input type="text" name="num">
              
            <input type="Submit" 
                value="Submit">
				
        </form>
		<br>
    </center>
</body>
  
</html>
  
 <?php
        $value = $_POST['num'];
        //echo $value ;
        
        
        
        $limit = 10;
        $start = 1;
        
        // <table>
        while($start < 11 ){
            echo "<table align='center' border='1'>";
            $result = $value * $start;
            echo "  

            <tr>
              <td>$value</td>
              <td>*</td>
              <td>$start</td>
              <td> = </td>
              <td>$result</td>
            </tr>
            ";

            $start++;
        }
        echo "</table>";


        // </table>   
        