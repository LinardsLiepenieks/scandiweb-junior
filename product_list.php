<html>

<head>
    <title>Product list</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="javascript/product_list.js"></script>


</head>

<body>
    <header>
        <h1>Product list</h1>
        <span>
            <select>
                <option>Mass delete action</option>
            </select>
            <button id="Apply">Apply</button>
        </span>
    </header>

    <div class="body-wrapper">
        <?php include 'include/product-list.inc.php'; ?>
    </div>

    <footer></footer>
</body>

</html>
