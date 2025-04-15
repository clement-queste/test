<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>À Propos</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="CSS/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <?php include('header.php'); ?>

    <main class="about">
        <section class="about-section">
            <div class="about-text">
                <h2 class="fade-in" style="animation-delay: 0s;">Qui suis-je ?</h2>
                <p class="fade-in fade-in-delay" style="animation-delay: 0.5s;">
                    Je suis Clément, un passionné de design graphique et de développement web, toujours avide de nouvelles connaissances et d'opportunités créatives. Depuis mes débuts, j'ai exploré des projets variés qui m'ont permis de fusionner mes compétences techniques et artistiques pour concevoir des expériences visuelles uniques et innovantes.
                </p>
            </div>
            <div class="about-img">
                <img src="images/Architecture.jpg" alt="Photo de Clément" class="fade-in" style="animation-delay: 1s;" />
            </div>
        </section>

        <section class="about-section">
            <div class="about-text">
                <h2 class="fade-in" style="animation-delay: 0s;">Mes passions</h2>
                <p class="fade-in fade-in-delay" style="animation-delay: 0.5s;">
                    En dehors de mes études, je suis un véritable amateur de sport, avec une préférence pour le football, le basket-ball et le badminton. Ces activités ne sont pas seulement des passions physiques, mais aussi des sources d'inspiration qui nourrissent mon esprit de compétition et mon sens du travail d'équipe.
                </p>
            </div>
            <div class="about-img">
                <img src="images/Basket.jpg" alt="Sport" class="fade-in" style="animation-delay: 1s;"/>
            </div>
        </section>

        <section class="about-section">
            <div class="about-text">
                <h2 class="fade-in" style="animation-delay: 0s;">La musique</h2>
                <p class="fade-in fade-in-delay" style="animation-delay: 0.5s;">
                    La musique occupe également une place importante dans ma vie. Elle me permet de m'évader, de m'inspirer, et de stimuler ma créativité. Que ce soit pour me concentrer ou pour me détendre, chaque moment est une occasion d'explorer de nouveaux genres et d'écouter des artistes émergents.
                </p>
            </div>
            <div class="about-img">
                <img src="images/Musique.jpg" alt="Musique" class="fade-in" style="animation-delay: 1s;"/>
            </div>
        </section>

        <section class="about-section">
            <div class="about-text">
                <h2 class="fade-in" style="animation-delay: 0s;">La mode</h2>
                <p class="fade-in fade-in-delay" style="animation-delay: 0.5s;">
                    Enfin, la mode et les vêtements font partie intégrante de mon identité. J'aime exprimer ma personnalité à travers mon style, toujours à la recherche des dernières tendances tout en cultivant une approche unique et personnelle. La mode, pour moi, est une forme d'art qui permet de raconter une histoire, d'affirmer une vision du monde.
                </p>
            </div>
            <div class="about-img">
                <img src="images/Nuaje.jpg" alt="Mode" class="fade-in" style="animation-delay: 1s;"/>
            </div>
        </section>
    </main>

    <?php include('footer.php'); ?>

    <script src="script.js"></script>
</body>
</html>
