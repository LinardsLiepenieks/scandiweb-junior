
<html>
<head>
  <title>Product list</title>  
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>    <script src="javascript/product_list.js"></script>

   
</head>

<body>

    <header class="clearfix">

        <h1>Product list</h1>
        <span>
        <select>
        <option>Mass delete action</option> 
        </select>
        <button id="Apply">Apply</button>
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
        
        $SA = '';
        if($row['SA']=="book")
            {
                 $SA = 'Weight: '.$row['weight'] .' KG';
            }
        if($row['SA']=="DVD-disc")
            {
                 $SA = 'Size: '.$row['size'] .' MB';
            }
         if($row['SA']=="furniture")
            {
                $SA = 'Dimensions: '.$row['height'] .'x'.$row['width'] .'x'.$row['length'];
            }
        
        if($C%4==0)
        {
         echo'<div class="item-row">';
        }
            echo'<div class="item">
            <div id="item-top">
            <input class="check" type="checkbox">
            </div>
            <label class="SKU">'.$row['SKU'].'</label>
            <label>'.$row['name'].'</label>
            <label>'.$row['price'].'$</label>
            <label>'.$SA.'</label>
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