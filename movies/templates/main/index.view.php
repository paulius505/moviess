<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?=$siteName;?></title>
        <link href="templates/<?=activeTemplate;?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="templates/<?=activeTemplate;?>/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading"><a href="/"><?=$siteName;?></a></div>
                <div class="list-group list-group-flush">
                    <?php foreach($navigation['primary'] as $href => $title):?>
                    <a href="?page=<?=$href;?>" class="list-group-item list-group-item-action bg-light"><?=$title;?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <button class="btn btn-primary" id="menu-toggle">Slėpti meniu</button>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <?php foreach($navigation['actions'] as $href => $title):?>
                                <?php if($href !='veiksmai'):?>
                            <li class="nav-item active">
                                <a class="nav-link" href="?page=<?=$href;?>"><?=$title;?> <span class="sr-only">(current)</span></a>
                            </li>
                                    <?php else :?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Veiksmai
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <?php foreach($navigation['actions'][$href] as $hrefint => $titleint):?>
                                    <a class="dropdown-item" href="?page=<?=$hrefint;?>"><?=$titleint;?></a>
                                        <?php endforeach;?>
                                    <div class="dropdown-divider"></div>
                                </div>
                            </li>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </nav>
                <section>
                    <div class="jumbotron">
                        <h1 class="display-4">Apie projektą</h1>
                        <p class="lead">Filmų paieškos aplikacija.</p>
                        <hr class="my-4">
                    </div>
                </section>
                <main class="container-fluid">
                    <?php require($_SERVER['DOCUMENT_ROOT'].'/movies/router.php') ?>
                      </main>
            </div>
        </div>
    <script src="templates/<?=activeTemplate;?>/js/jquery.min.js"></script>
    <script src="templates/<?=activeTemplate;?>/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    </body>
</html>
