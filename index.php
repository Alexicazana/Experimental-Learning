<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="index.js" type="text/javascript"></script>
</head>
<body>
    <?php
        echo '<h2>Hello World!</h2>';
        if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            echo "<div>$name</div>";
            echo "<div>$email</div>";
            echo "<div>$password</div>";
        } else {
    ?>

        <form action="/" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" />
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" />
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" />
            </div>
            <input type="submit" value="Submit Form" />
        </form>
    <?php } ?>
</body>

</html>