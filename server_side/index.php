
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Google Fonts --> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- Mine -->
    <link rel="stylesheet" href="../style.css" />
    <title>Discs</title>
</head>
<body>
    <header>
        <nav class="container-large">
            <img class="logo" src="../assets/spoty_logo.png" alt="">
        </nav>
    </header>

    <main>
        <section class="container">
            <div class="card-group">
                <?php
                    require __DIR__ . '/../data.php';
                    foreach ($discs as $disc){
                        echo '
                        <div class="card">
                            <div class="card-header">
                                <img src="' . $disc['poster'] . '">
                            </div>
                            <div class="card-body">
                                <h3>' . $disc['title'] . '</h3>
                                <p>' . $disc['author'] . '</p>
                                <small>' . $disc['year'] . '</small>
                            </div>
                        </div>';
                    }
                ?>
            </div>
        </section>
    </main>
</body>
</html>