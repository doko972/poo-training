<?php 
require_once 'include/_student.php';

$firstStudent = new Student('Billy', 'LeKid', 18, 'CM2', '2002-11-01', 'ecoleRouge');

$secondStudent = new Student('Johny', 'Dallas', 19, 'CM1', '2004-09-10', 'ecoleBlue');

$firstStudent->setAge($firstStudent->calculateAge());
$secondStudent->setAge($secondStudent->calculateAge());

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des élèves</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Programmation Orientée Objet - Des élèves</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link active">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.
                <br>
                Définir toutes les propriétés à l'instanciation.
                <br>
                Créer 2 étudiants différents.
            </p>
            <div class="exercice-sandbox">
                <?php
                echo '<p>' . $firstStudent->getFirstName() . ' ' . $firstStudent->getLastName() . ' est agé de '
                    . $firstStudent->getAge() . ' ans, et il est en classe de ' . $secondStudent->getLevel() . '.</p>';
                echo '<p>' . $secondStudent->getFirstName() . ' ' . $secondStudent->getLastName() . ' est agé de '
                    . $secondStudent->getAge() . ' ans, et il est en classe de ' . $firstStudent->getLevel() . '.</p>';

                ?>
            </div>
        </section>
        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.
                <br>
                Modifier le niveau scolaire des 2 élèves et les afficher.
            </p>
            <div class="exercice-sandbox">
                <?php

                echo '<p>' . $firstStudent->getFirstName() . ' ' . $firstStudent->getLastName()
                    . ' est en classe de ' . $firstStudent->getLevel() . '.</p>';
                echo '<p>' . $secondStudent->getFirstName() . ' ' . $secondStudent->getLastName()
                    . ' est en classe de ' . $secondStudent->getLevel() . '.</p>';
                ?>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Remplacer la propriété d'âge par la date de naissance de l'élève.
                <br>
                Mettez à jour l'instanciation des 2 élèves et afficher leur date de naissance.
            </p>
            <div class="exercice-sandbox">
            <?php
                echo '<p>' . $firstStudent->getFirstName() . ' ' . $firstStudent->getLastName() . ', date de naissance: '
                    . $firstStudent->getBirthdate() . '</p>';

                echo '<p>' . $secondStudent->getFirstName() . ' ' . $secondStudent->getLastName() . ', date de naissance: '
                    . $secondStudent->getBirthdate() . '</p>';
                ?>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de donner leur âge.
                <br>
                Afficher l'âge des 2 élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                echo '<p>' . $firstStudent->getFirstName() . ' ' . $firstStudent->getLastName() . ', Age: '
                    . $firstStudent->getAge() . '</p>';

                echo '<p>' . $secondStudent->getFirstName() . ' ' . $secondStudent->getLastName() . ', Age: '
                    . $secondStudent->getAge() . '</p>';
                ?>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">
                On veut aussi savoir le nom de l'école où va un élève.
                <br>
                Ajouter la propriété et ajouter la donnée sur les élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                echo '<p>' . $firstStudent->getFirstName() . ' ' . $firstStudent->getLastName() . ', Ecole: '
                    . $firstStudent->getSchoolName() . '</p>';

                echo '<p>' . $secondStudent->getFirstName() . ' ' . $secondStudent->getLastName() . ', Ecole: '
                    . $secondStudent->getSchoolName() . '</p>';
                ?>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :<br>
                Afficher la phrase de présentation des 2 élèves.

                <br>
            </p>
            <div class="exercice-sandbox">
            <?php
                echo '<p> Bonjour, je m\'appelle ' . $firstStudent->getFirstName() . ' ' . $firstStudent->getLastName() . ', j\'ai '
                . $firstStudent->getAge() . ' ans, et je vais à l\'école ' . $firstStudent->getSchoolName(). ' en class de ' . $firstStudent->getLevel() . '.</p>';

                echo '<p> Bonjour, je m\'appelle ' . $secondStudent->getFirstName() . ' ' . $secondStudent->getLastName() . ', j\'ai '
                . $secondStudent->getAge() . ' ans, et je vais à l\'école ' . $secondStudent->getSchoolName(). ' en class de ' . $secondStudent->getLevel() . '.</p>';
                ?>
            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>