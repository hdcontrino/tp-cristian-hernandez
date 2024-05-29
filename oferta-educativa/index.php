<?php require '../header.php'; ?>

<div class="page">
    <?php require '../menu.php' ?>

    <main>
        <h2>OFERTA EDUCATIVA</h2>
        <div class="separator"></div>
        <h1>Carreras Técnicas</h1>
        <p class="align-center">
            <span style="width: 50%;">Más de 150 cursos idóneos para tus objetivos profesionales: aumentar tu productividad y eficacia</span>
        </p>

        <?php getPosts(); ?>
        
        <?php require '../footer.php'; ?>
    </main>
</div>