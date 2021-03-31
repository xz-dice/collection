
<?php
require_once 'dbconn.php';
require_once 'functions.php';

$db = getDB();
$songs = getsongs($db);
$songsToDisplay = displaySongs($songs);

?>
<head>
    <title>Xandy 500</title>
    <link rel="stylesheet" href="normalize.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Roboto:wght@400;700&Work+Sans:wght@400;600;700;900&display=swap" rel="stylesheet">
<!--    <link rel="icon" href="x.png" type="image/icon type">-->
    <meta name=“viewport” content=“width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body id="home">
<nav>
    <div class="nav-home">
        <h1>Xandy 500
        </h1>
    </div>
</nav>
<header>
    <p>An (unranked) definitive list of 500 of my all-time favourite songs.</p>
</header>
<section>
    <table>
        <thead>
        <th>Title</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Artwork</th>
<!--        <th>Track Preview</th>-->
        </thead>
        <tbody>
        <?php echo $songsToDisplay; ?>
        </tbody>
    </table>
</section>
</body>




