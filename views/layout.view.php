<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Links | Home </title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <header class="bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-primary" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand text-primary-emphasis" href="./">Add Links</a>
                    <div>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <?php if ($_SERVER['PHP_SELF'] == '/addLinks/results.php') { ?>
                                    <a class="nav-link active" aria-current="page" href="./">Back Home</a>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <main class="container">
        <?php require "$view.view.php" ?>
    </main>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>