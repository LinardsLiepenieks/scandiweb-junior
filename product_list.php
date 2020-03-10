
<html>
<head>
  <title>Product list</title>  
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="javascript/product_list.js"></script>

   
</head>

<body>

    <header class="clearfix">

        <h1>Product list</h1>
        <span>
        <select>
        <option>Mass delete action</option> 
        </select>
        <button>Apply</button>
        </span>
    </header>
    <div class="body-wrapper">
        
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "products";
        $conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn> connect_error);

    $results=mysqli_query($conn,'SELECT * FROM items');
        
       $C = 0; 
    while($row=mysqli_fetch_array($results)){
        
        if($C%4==0)
        {
         echo'<div class="item-row">';
        }
            echo'<div class="item">
            <div id="item-top">
        <input type="checkbox">
        </div>
        <label>'.$row['SKU'].'</label>
        <label>'.$row['name'].'</label>
        <label>'.$row['price'].'$ </label>

            </div>';
        $C+=1;
        if($C%4==0)
        {
         echo'</div>';
        }
        }
        if($C%4!=0)
        {
         echo'</div>';
        }
        
        
        mysqli_close($conn);
        ?>
        
    </div>
    

    
    <footer class="footer">
    </footer>

</body>
    
    </html>