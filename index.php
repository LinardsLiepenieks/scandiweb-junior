<html>

<head>
    <title>Product add</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="javascript/product_add.js"></script>
</head>

<body>
    <header>
        <h1>Product add</h1> <span>
            <button id="Save">Save</button>
        </span>
    </header>
    <div class="body-wrapper">
        <div class="button-wrapper">
            <label> SKU:</label>
            <input id="SKU" type="text">
            <br>
            <label>Name:</label>
            <input id="Name" type="text">
            <br>
            <label>Price:</label>
            <input id="Price" type="text">
            <br>
            <label>Type Switcher</label>
            <select id="type-switcher">
                <option selected disabled hidden value="def"> Type switcher </option>
                <option value="book"> Book </option>
                <option value="furniture"> Furniture </option>
                <option value="DVD-disc"> DVD-disc </option>
            </select>
            <br> </div>
        <div id="special-atribute" class="button-wrapper">
            <div class="def value">Pick a type</div>
            <div class="book value">Books.
                <br>
                <label>Weight: </label>
                <input type="text" id="Weight">
                <br>
                <p>Please input book weight in kilograms.</p>
            </div>
            <div class="furniture value">Furniture.
                <br>
                <label>Height: </label>
                <input type="text" id="Height">
                <br>
                <label>Width: </label>
                <input type="text" id="Width">
                <br>
                <label>Length: </label>
                <input type="text" id="Length">
                <br>
                <p>Please input size of furniture (HxWxL) in the proper fields in centimeters .</p>
            </div>
            <div class="DVD-disc value">DVD-disc
                <br>
                <label>Size: </label>
                <input type="text" id="Size">
                <br>
                <p>Please input size of disc in megabytes.</p>
            </div>
        </div>
    </div>
    <footer></footer>
</body>

</html>
