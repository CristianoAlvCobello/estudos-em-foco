<?php  include('includes/header.php'); ?>

    <h1 class="text-center fw-bold text-body-emphasis">Fundamental: Aqui você encontra os pilares do conhecimento essencial.</h1>

    <article class="container text-center my-5">
        <h2 class="text-body-emphasis">Matérias</h2>
        <p class="h2 text-body-emphasis">Explore os resumos por disciplina</p>

        <aside class="d-flex justify-content-center">
            <nav class="row row-cols-1 row-cols-md-2 g-3 col-12 col-md-8 mt-4">
            
                <ul class="list-unstyled col">
                    <li class="fs-4 bg-primary bg-opacity-50 p-3 rounded mb-2">
                        <a class="nav-link" href="materia.php?escolaridade=fundamental&materia=História">🏛️ História</a>
                    </li>
                    <li class="fs-4 bg-primary bg-opacity-50 p-3 rounded mb-2">
                        <a class="nav-link" href="materia.php?escolaridade=fundamental&materia=Geografia">🌍 Geografia</a>
                    </li>
                    <li class="fs-4 bg-primary bg-opacity-50 p-3 rounded mb-2">
                        <a class="nav-link" href="materia.php?escolaridade=fundamental&materia=Matemática">➗ Matemática</a>
                    </li>
                </ul>

                <ul class="list-unstyled col">
                    <li class="fs-4 bg-primary bg-opacity-50 p-3 rounded mb-2">
                        <a class="nav-link" href="materia.php?escolaridade=fundamental&materia=Ciências">🔬 Ciências</a>
                    </li>
                    <li class="fs-4 bg-primary bg-opacity-50 p-3 rounded mb-2">
                        <a class="nav-link" href="materia.php?escolaridade=fundamental&materia=Português">📖 Português</a>
                    </li>
                    <li class="fs-4 bg-primary bg-opacity-50 p-3 rounded mb-2">
                        <a class="nav-link" href="materia.php?escolaridade=fundamental&materia=Inglês">🗣️ Inglês</a>
                    </li>
                </ul>
            </nav>
        </aside>
    </article>

<?php include('includes/footer.php') ?>