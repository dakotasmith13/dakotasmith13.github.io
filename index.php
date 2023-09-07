<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="utf-8">
        <title>Project Miata</title>
        <link rel="icon" type="image/x-icon" href="../final/images/favicon.ico">
        <meta name="author" content="Dakota Smith and Kat Hughes">
        <meta name="description" content="Learn all about the Mazda Miata,
        and give suggestions for Kat's new project.">
        <!-- Description is 107 characters, tries to promote a call to action -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 600px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    </head>
    <header>
        <section class="logo-image">
            <h1 hidden>Logo</h1>
            <a href="../final/index.php"><img src="../final/images/logo.png" alt="logo"></a>
        </section>
        <section class="title">
            <a href="../final/index.php"><h1>Project: Miata</h1></a>
        </section>
        <section class="top-nav">
            <h2 hidden>Top</h2>
            <nav>
                <a class="<?php
                if ($pathParts['filename'] == "index") {
                    print 'activePage';
                }
                ?>" href="index.php">HOME</a>
            
                <a class="<?php
                if ($pathParts['filename'] == "detail") {
                    print 'activePage';
                }
                ?>" href="detail.php">ABOUT</a>
            
                <a class="<?php
                if ($pathParts['filename'] == "array") {
                    print 'activePage';
                }
                ?>" href="array.php">BUILD</a>
                
                <a class="<?php
                if ($pathParts['filename'] == "form") {
                    print 'activePage';
                }
                ?>" href="form.php">SUGGESTIONS</a>
            </nav>
        </section>
    </header>
        <main>
            <section class="home">
                <h2 hidden>Home</h2>
                <section class="home-banner"> 
                    <h2>MAZDA MIATA</h2>
                    <h3>1990</h3>
                </section>
                <section class="home-heading">
                    <h2>HISTORY OF THE MIATA</h2>
                </section>
                <section class="home-image-left">
                    <h2 hidden>Photo</h2>
                    <figure>
                        <img alt="1990 Miata" src="images/early_miata.JPG">
                    </figure>
                </section>
                <section class="home-text-right">
                    <h2>THE EARLY MIATA</h2>
                    <p>The Mazda MX-5 Miata debuted in America in 1990, as a revitalization of the classic British 
                        roadster designs from the 60s and 70s. The Japanese roadster is light, agile, and quick, 
                        and prioritizes the feel over statistics. The first-generation Miata, also known as the NA Miata,
                        has a front-engine rear-wheel-drive layout containing 1.6-liter dual overhead camshaft
                        4-cylinder (DOHC I-4) engine that produces just about 116 horsepower at 6,500 
                        rpm, and 100 lb-ft of torque at 5,500 rpm. The 1990 Miata has a top speed of 
                        116 mph and can hit 60 mph in just under 9 seconds. Available in both an automatic 
                        and 5 speed manual transmission, the NA is only 155.4 inches long, 65.9 inches wide,
                        with a wheelbase of 89.2 inches, and weighing 2,116 lbs. It has a fuel economy of 
                        22 miles per gallon in the city, 28 miles per gallon on the highway, and 24 combined.
                        In 1994 Mazda upgraded the engines in the NA Miatas to a larger 1.8-liter engine. 
                        The first-generation Japanese roadster has received worldwide recognition as one of
                        the best-driving cars of all time while also being affordable. 
                        Being affordable yet fun, the NA Miata is the best-selling roadster of all time.
                    </p>
                </section>
                <section class="home-image-right">
                    <h2 hidden>Photo</h2>
                    <figure>
                        <img alt="2022 Miata" src="images/modern_miata.jpg">
                        <figcaption><cite><a href="https://www.carscoops.com/2022/02/2022-mazda-mx-5-miata-configurator-is-live-show-us-your-build/" 
                        target="_blank">Source</a></cite></figcaption>
                    </figure>
                </section>
                <section class="home-text-left"> 
                    <h2>THE MODERN MIATA</h2>
                    <p>Mazda MX-5 Miatas are still being made today. Mazda has released 
                        three more generations of the beloved Miata since 1990, the NB, NC, 
                        and ND. Each one refined a bit more to improve performance. The second
                        generation Miatas, the NB Miata, was introduced in 1999 with a slight
                        increase in engine power, a new six-speed manual transmission, 
                        along with some body style changes. In 2005 the NC Miata was introduced, 
                        the main change being a power retractable hard top as well as a larger 2.0-liter engine.
                        The current generation Miata, the ND Miata, is the fourth generation of Miata and was introduced in 2015.
                        The ND Miatas introduced a dual-mass flywheel to the manual transmissions, as well as a 
                        retractable fastback. <cite><a href="https://www.edmunds.com/mazda/mx-5-miata/1990/features-specs/ " 
                        target="_blank">Source</a></cite>
                    </p>
                </section>
            </section>
            <section class="mazda-images">
                <h2>EXPLORE MORE MAZDA MODELS</h2>
                <a href="https://www.mazdausa.com/vehicles/2021-mazda6" target="_blank">
                    <img class="mazda-6" alt="2022 Mazda-6" src="images/mazda-6.jpg"></a>
                <a href="https://www.mazdausa.com/vehicles/mazda3-sedan" target="_blank">
                    <img class="mazda-3" alt="2022 Mazda-3" src="images/mazda-3.jpg"></a>
                <a href="https://www.mazdausa.com/vehicles/mx-5-miata" target="_blank">
                    <img class="mx-5" alt="2022 MX-5" src="images/mx-5.jpg"></a>
                <a href="https://www.mazdausa.com/vehicles/cx-30" target="_blank">
                    <img class="cx-30" alt="2022 CX-30" src="images/cx-30.jpg"></a>
                <a href="https://www.mazdausa.com/vehicles/cx-9" target="_blank">
                    <img class="cx-9" alt="2022 CX-9" src="images/cx-9.jpg"></a>
                <a href="https://www.mazdausa.com/vehicles/cx-50" target="_blank">
                    <img class="cx-50" alt="2022 CX-50" src="images/cx-50.jpeg"></a>
            </section>
        </main>
        <footer>
            <p><a href="../index.php">Site map (Main index)</a></p>
            <p><a href="//khughes2.w3.uvm.edu/cs008/final">Kat Hughes- Section OL</a></p>
            <p><a href="//dsmith13.w3.uvm.edu/cs008/final">Dakota Smith- Section OL</a></p>
            <p style="text-align: center">&copy;Copyright 2022 Kat & Dak</p>
        </footer> 
    </body>
</html>


        
