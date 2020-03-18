<?php
require_once "classes/connect.class.php";

$con = new Connect();

$results = $con->connectDB()
    ->query('SELECT * FROM items');

$Counter = 0; //counts objects for when to create new row
while ($row = mysqli_fetch_array($results))
{ //Creates an .item div for every row in table
    //Creates Special attribute label for item
    switch ($row['SA'])
    {
        case "book":
            $SA = 'Weight: ' . $row['weight'] . ' KG';
        break;
        case "DVD-disc":
            $SA = 'Size: ' . $row['size'] . ' MB';
        break;
        case "furniture":
            $SA = 'Dimensions: ' . $row['height'] . 'x' . $row['width'] . 'x' . $row['length'];
        break;
    }
    if ($Counter % 4 == 0)
    {
        echo '<div class="item-row">';
    }
    //Creates item div
    echo '<div class="item">
                <div id="item-top">
                <input class="check" type="checkbox">
                </div>
                <label class="SKU">' . $row['SKU'] . '</label>
                <label>' . $row['name'] . '</label>
                <label>' . $row['price'] . '$</label>
                <label>' . $SA . '</label>
                </div>';
    $Counter += 1;
    if ($Counter % 4 == 0)
    {
        echo '</div>';
    }
}
if ($Counter % 4 != 0)
{
    echo '</div>';
}
?>
