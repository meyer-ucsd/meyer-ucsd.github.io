<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teaching Materials</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        h2 {
            color: #0057b8;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
        a {
            text-decoration: none;
            color: #0073e6;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Teaching Materials</h2>
<p>Click on a file to download/view:</p>
<ul>
    <?php
    $files = array_diff(scandir(__DIR__), array('.', '..', 'index.php')); // Exclude index.php
    foreach ($files as $file) {
        if (!is_dir($file)) {
            echo "<li><a href=\"$file\">$file</a></li>";
        }
    }
    ?>
</ul>

</body>
</html>