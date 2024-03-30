<?php
    $request = explode("/", $_SERVER["REQUEST_URI"]);
    $page = strtolower($request[1]);

    if (!strlen($page)) {
        $page = "home";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP SPA</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="content">
            <?php include "page/" . $page . ".php"; ?>
        </div>
    </main>

    <script src="js/main.js"></script>
</body>
</html>
