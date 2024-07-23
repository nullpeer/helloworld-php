<?php
$count = 0;
setcookie("count", $count);
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Hello, World | PHP</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            color: white;
        }

        body {
            background-color: #202124;
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
        }

        #main-text {
            font-weight: 700;
        }

        #second-text {
            font-weight: 600;
        }

        #description {
            font-weight: 500;
        }

        #window {
            width: 40vw;
            height: 35vh;
            border: 2px solid rgb(87, 63, 62);
            border-radius: 8px;
            padding: 16px;
            margin-top: 4vh;
        }

        #counter {
            background-color: darkslategrey;
            padding: 8px;
            border-radius: 6px;
            border: 1px solid transparent;
            width: 10vw;
            margin-top: 5vh;
        }

        #form {
            width: 100%;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div id="window">
        <h1 id="main-text">The first website in PHP</h1>
        <h2 id="second-text">Hello, World!</h2>
        <p id="description">Arthur learns PHP for testing websites for vulnerabilities.</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="form">
            <input id="counter" type="submit" value="Click: <?php echo $_COOKIE["count"];
            setcookie("count", intval($_COOKIE["count"] + 1)); ?>" />

        </form>


    </div>

</body>

</html>
