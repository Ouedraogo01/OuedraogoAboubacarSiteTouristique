<?php
try {
    $about = new PDO(
        'mysql:host=localhost;dbname=about',
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display:ital,wght@0,400;0,600;1,600&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
        integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="about.css">
    <title>About</title>
</head>

<body>

    <?php include("header.php"); ?>

    <section class="corp bg-body-secondary">
        <section class="burkina">
            <div class="premier ">
                <?php
                $phot = $about->query("SELECT * FROM photos WHERE id=1 ");
                while ($donnees = $phot->fetch()) {
                    ?>

                    <img class="ib m-2" src="about/<?php echo $donnees["photo"] ?>" alt="">

                <?php } ?>

                <div class="card border-success m-5" style="max-width: 18rem;">
                    <div class="presi-wrapper">
                        <div class="card-body text-primary">
                            <?php
                            $titre = $about->query("SELECT * FROM titres WHERE id=1 ");
                            while ($donnees = $titre->fetch()) {
                                ?>

                                <h5 class="card-title text-success" style="font-size: 40px;">
                                    <?php echo $donnees["titres"] ?>
                                </h5>
                            <?php } ?>

                            <?php
                            $texte = $about->query("SELECT * FROM textes WHERE id=1 ");
                            while ($donnees = $texte->fetch()) {
                                ?>
                                <p class="card-text text-danger m-5" style="font-size: 20px;">
                                    <?php echo $donnees["texte"] ?>
                                </p>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-success m-5" style="">
                <div class="card-body">
                    <?php
                    $titre = $about->query("SELECT * FROM titres WHERE id=2 ");
                    while ($donnees = $titre->fetch()) {
                        ?>

                        <h5 class="card-title text-center text-success" style="font-size: 60px;">
                            <?php echo $donnees["titres"] ?>
                        </h5>
                    <?php } ?>

                    <ul class="card-text text-success ml-3" style="font-size: 10px;">
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=3 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <li>
                                <?php echo $donnees["texte"] ?>
                            </li>
                        <?php } ?>
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=4 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <li>
                                <?php echo $donnees["texte"] ?>
                            </li>
                        <?php } ?>
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=5 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <li>
                                <?php echo $donnees["texte"] ?>
                            </li>
                        <?php } ?>
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=6 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <li>
                                <?php echo $donnees["texte"] ?>
                            </li>
                        <?php } ?>
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=7 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <li>
                                <?php echo $donnees["texte"] ?>
                            </li>
                        <?php } ?>
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=8 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <li>
                                <?php echo $donnees["texte"] ?>
                            </li>
                        <?php } ?>
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=9 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <li>
                                <?php echo $donnees["texte"] ?>
                            </li>
                        <?php } ?>
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=10 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <li>
                                <?php echo $donnees["texte"] ?>
                            </li>
                        <?php } ?>
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=11 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <li>
                                <?php echo $donnees["texte"] ?>
                            </li>
                        <?php } ?>
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=12 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <li>
                                <?php echo $donnees["texte"] ?>
                            </li>
                        <?php } ?>
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=13 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <li>
                                <?php echo $donnees["texte"] ?>
                            </li>
                        <?php } ?>
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=14 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <li>
                                <?php echo $donnees["texte"] ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="card border-success m-5" style="">
                <div class="card-body">

                    <?php
                    $titre = $about->query("SELECT * FROM titres WHERE id=3 ");
                    while ($donnees = $titre->fetch()) {
                        ?>
                        <h5 class="card-title text-center text-success" style="font-size: 60px;">
                            <?php echo $donnees["titres"] ?>
                        </h5>
                    <?php } ?>
                    <?php
                    $texte = $about->query("SELECT * FROM textes WHERE id=15 ");
                    while ($donnees = $texte->fetch()) {
                        ?>
                        <p class="card-text text-success ml-3" style="font-size: 20px;">
                            <?php echo $donnees["texte"] ?>
                        </p>
                    <?php } ?>

                    </br>
                    <?php
                    $texte = $about->query("SELECT * FROM textes WHERE id=16 ");
                    while ($donnees = $texte->fetch()) {
                        ?>
                        <p class="card-text text-success ml-3" style="font-size: 20px;">
                            <?php echo $donnees["texte"] ?>
                        </p>
                    <?php } ?>

                    </br>
                    <?php
                    $texte = $about->query("SELECT * FROM textes WHERE id=17 ");
                    while ($donnees = $texte->fetch()) {
                        ?>
                        <p class="card-text text-success ml-3" style="font-size: 20px;">
                            <?php echo $donnees["texte"] ?>
                        </p>
                    <?php } ?>

                    </br>
                    <?php
                    $texte = $about->query("SELECT * FROM textes WHERE id=18 ");
                    while ($donnees = $texte->fetch()) {
                        ?>
                        <p class="card-text text-success ml-3" style="font-size: 20px;">
                            <?php echo $donnees["texte"] ?>
                        </p>
                    <?php } ?>

                </div>
            </div>


            <div class="card border-success m-5" style="">
                <div class="deuxieme d-flex">
                    <div class="card-body">
                        <?php
                        $titre = $about->query("SELECT * FROM titres WHERE id=4 ");
                        while ($donnees = $titre->fetch()) {
                            ?>
                            <h5 class="card-title text-center text-success" style="font-size: 60px;">
                                <?php echo $donnees["titres"] ?>
                            </h5>
                        <?php } ?>

                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=19 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <p class="card-text text-success ml-3" style="font-size: 20px;">
                                <?php echo $donnees["texte"] ?>
                            </p>
                        <?php } ?>

                        </br>
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=20 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <p class="card-text text-success ml-3" style="font-size: 20px;">
                                <?php echo $donnees["texte"] ?>
                            </p>
                        <?php } ?>

                        </br>
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=21 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <p class="card-text text-success ml-3" style="font-size: 20px;">
                                <?php echo $donnees["texte"] ?>
                            </p>
                        <?php } ?>

                        </br>
                        <?php
                        $texte = $about->query("SELECT * FROM textes WHERE id=22 ");
                        while ($donnees = $texte->fetch()) {
                            ?>
                            <p class="card-text text-success ml-3" style="font-size: 20px;">
                                <?php echo $donnees["texte"] ?>
                            </p>
                        <?php } ?>
                    </div>
                    <div>
                        <?php
                        $phot = $about->query("SELECT * FROM photos WHERE id=2 ");
                        while ($donnees = $phot->fetch()) {
                            ?>
                            <img class="cart m-2" src="about/<?php echo $donnees["photo"] ?>" alt="">

                        <?php } ?>
                    </div>
                </div>

            </div>

        </section>


        <section class="section 1">
            <!-- Step1 -->
            <div class="card m-5 mb-5">
                <div class="row g-0">
                    <div class="col-md-4">
                        <?php
                        $phot = $about->query("SELECT * FROM photos WHERE id=3 ");
                        while ($donnees = $phot->fetch()) {
                            ?>
                            <img src="about/<?php echo $donnees["photo"] ?>" class="img-fluid rounded-start" alt="...">
                        <?php } ?>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <?php
                            $texte = $about->query("SELECT * FROM textes WHERE id=23 ");
                            while ($donnees = $texte->fetch()) {
                                ?>
                                <p class="card-text"><strong>
                                        <?php echo $donnees["texte"] ?>
                                    </strong>
                                <?php } ?>

                                </br>
                                <?php
                                $texte = $about->query("SELECT * FROM textes WHERE id=24 ");
                                while ($donnees = $texte->fetch()) {
                                    ?>
                                <p class="card-text"><strong>
                                        <?php echo $donnees["texte"] ?>
                                    </strong>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card m-5 mb-5">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">
                                <?php
                                $texte = $about->query("SELECT * FROM textes WHERE id=25 ");
                                while ($donnees = $texte->fetch()) {
                                    ?>
                                <p class="card-text"><strong>
                                        <?php echo $donnees["texte"] ?>
                                    </strong>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php
                        $phot = $about->query("SELECT * FROM photos WHERE id=4 ");
                        while ($donnees = $phot->fetch()) {
                            ?>
                            <img src="about/<?php echo $donnees["photo"] ?>" class="img-fluid rounded-start" alt="...">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>


        <section id="slider" class="pt-5">
            <div class="container">
                <h1 class="text-center">Nos meilleurs lieu</h1>
                <div class="slider">
                    <div class="owl-carousel">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="home/1.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b>Salle polyvalente de Banfora</b></h5>
                            <p class="text-center p-4">Vous pouvez visiter cette salle consacré à la jeunesse
                            </p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="home/2.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b>Bienvenue à Banfora</b></h5>
                            <p class="text-center p-4">Bienvenue dans la région des cascades (ville de Banfora)</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="home/3.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b>Mairie de Banfora</b></h5>
                            <p class="text-center p-4"></p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="home/4.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b>Cascades de Karfiguela</b></h5>
                            <p class="text-center p-4">Visitez ce beau lieu, ne vous faites pas raconter</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="home/5.jpg" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b>Train</b></h5>
                            <p class="text-center p-4">Le train qui nous permett de rallier Ouaga, Koudougou, Bobo,
                                Banfora à la Côte d'Ivoire.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>

    <?php include("footer.php"); ?>

    <script src="header.js"></script>
    <script src=" bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
    <script src="OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src=" bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>