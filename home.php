<?php
try {
    $bdd = new PDO(
        'mysql:host=localhost;dbname=test',
        'root',
        '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch (Exception $e) {
    die("Error " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display:ital,wght@0,400;0,600;1,600&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
        integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>

<body>
    <?php include("header.php"); ?>

    <section>
        <div id="carouselExempleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/HERO/H1.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <p class="animated fadeInUp d-done d-md-block">
                            BURKINA FASO: Découvrons ensemble l'un de nos meilleurs sites Touristique.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/HERO/H2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <p class="animated fadeInUp d-done d-md-block">
                            Découvrez avec nous le site touristique: Les Cascades de Banfora
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/HERO/H3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <p class="animated fadeInUp d-done d-md-block">
                            Découvrez avec nous le site touristique: Les Cascades de Banfora
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/HERO/H4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <p class="animated fadeInUp d-done d-md-block">
                            Découvrez avec nous le site touristique: Les Cascades de Banfora
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/HERO/H5.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <p class="animated fadeInUp d-done d-md-block">
                            Découvrez avec nous le site touristique: Les Cascades de Banfora
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section1">
        <div class="haut">
            <h1 class="titre m-5 text-center " style="color: green">Quelques lieu à visiter</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 pt-5">
            <?php
            $im = $bdd->query("SELECT * FROM lieu");
            while ($donnees = $im->fetch()) {


                ?>
                <div class="col-lg-4">
                    <div class="card m-2">
                        <img src="home/<?php echo $donnees["photo"] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: green">
                                <?php echo $donnees["nom"] ?>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </section>

    <section class="section 2">
        <div class="haut">
            <h1 class="titre m-5 text-center " style="color: green">la bonne raison de choisir banfora comme destination
            </h1>
        </div>

        <div class="destination m-5 mb-5">
            <?php
            $tex = $bdd->query("SELECT * FROM text");
            while ($donnees = $tex->fetch()) {


                ?>
                <div class="description">
                    <h2 class="secondary text-black text-center mt-5 mb-5">Heureux de vous recevoir</h2>
                    <p class="ok mt-5" style="font-size: 20px">
                        <?php echo $donnees["texte"] ?>
                    </p>
                </div>
            <?php } ?>


            <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner" style="height: 400px" style=" width: 300px">
                    <?php
                    $pho = $bdd->query("SELECT * FROM carou");
                    while ($donnees = $pho->fetch()) {


                        ?>
                        <div class="carousel-item active">
                            <img src="home/<?php echo $donnees["photos"] ?>" class="d-block w-100" alt="...">
                        </div>
                    <?php } ?>
                </div>

            </div>

        </div>
    </section>

    <section class="section3 center">
        <h5 class="title text-center mt-5 mb-0">Sponsors mondiaux officiels</h5>

        <div class="sponsors" style="text-align: center">
            <?php
            $spo = $bdd->query("SELECT * FROM sponsors");
            while ($donnees = $spo->fetch()) {

                ?>
                <img class="spon m-2" style="max-width: 80px" src="home/<?php echo $donnees["spon"] ?>" alt="">
            <?php } ?>
        </div>

    </section>


    <?php include("footer.php"); ?>

    <script src="header.js"></script>
    <script src=" bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>