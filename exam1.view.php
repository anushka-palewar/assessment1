<html>
<head>
    <title>Assessment 1</title>
    <link rel="stylesheet" href="/pico.min.css" >
</head>
<body>
    <main class="container">
        <form method="post">
            <div>
                <label>Name:</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Favorite Food:</label>
                <input type="radio" name="food"  value="Pasta" required>
                    <label>Pasta</label>
                    <br>
                <input type="radio" name="food"  value="FrenchFries">
                    <label>FrenchFries</label>
                    <br>
                <input type="radio" name="food"  value="Pizza">
                    <label>Pizza</label>
                    <br>
            </div>
            <hr>
            <button type="submit">Submit</button>
        </form>
        <hr>
        <h3>
            <u>
            <?php echo $greet . ' ' . $name . '. Your favorite food is ' . $food  ; ?>
            </u>
        </h3>
</body>
</html>       