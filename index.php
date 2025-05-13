<?php include('includes/header.php') ?>

<main>
    <div class="container-fluid px-5"> 
        <div class="row flex-lg-row-reverse justify-content-center align-items-center g-5"> 
            <aside class="col-10 col-sm-8 col-lg-4"> 
                <figure>
                    <img src="https://placehold.co/600x400" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy"> 
                </figure>
            </aside> 
            <div class="col-lg-4"> 
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-5">Aqui você encontra tudo o que precisa para mandar bem nas provas.</h1> 
                <div class="d-grid gap-2 justify-content-md-start"> 
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Ver resumos</button> 
                </div>
            </div> 
        </div> 
    </div>

    <article class="container text-center my-5">
        <h2 class="fw-bold text-body-emphasis">Navegue por Matérias</h2>
        <p class="h2 fw-bold text-body-emphasis">Explore os resumos por disciplina</p>

        <aside class="d-flex justify-content-center">
            <nav class="row row-cols-1 row-cols-md-2 g-3 col-12 col-md-8 mt-4">
            
                <ul class="list-unstyled col">
                    <li class="fs-4 bg-primary bg-opacity-50 p-3 rounded mb-2">
                        <a class="nav-link" href="#">🏛️ História</a>
                    </li>
                    <li class="fs-4 bg-primary bg-opacity-50 p-3 rounded mb-2">
                        <a class="nav-link" href="#">🌍 Geografia</a>
                    </li>
                    <li class="fs-4 bg-primary bg-opacity-50 p-3 rounded mb-2">
                        <a class="nav-link" href="#">➗ Matemática</a>
                    </li>
                    <li class="fs-4 bg-primary bg-opacity-50 p-3 rounded mb-2">
                        <a class="nav-link" href="#">🧬 Biologia</a>
                    </li>
                </ul>

                <ul class="list-unstyled col">
                    <li class="fs-4 bg-primary bg-opacity-50 p-3 rounded mb-2">
                        <a class="nav-link" href="#">📖 Português</a>
                    </li>
                    <li class="fs-4 bg-primary bg-opacity-50 p-3 rounded mb-2">
                        <a class="nav-link" href="#">🧠 Filosofia</a>
                    </li>
                    <li class="fs-4 bg-primary bg-opacity-50 p-3 rounded mb-2">
                        <a class="nav-link" href="#">⚛️ Física</a>
                    </li>
                    <li class="fs-4 bg-primary bg-opacity-50 p-3 rounded mb-2">
                        <a class="nav-link" href="#">🗣️ Inglês</a>
                    </li>
                </ul>
            </nav>
        </aside>
    </article>

    <div class="container-fluid px-5"> 
        <article class="row flex-lg-row justify-content-center align-items-center g-5 py-5"> 
            <aside class="col-10 col-sm-8 col-lg-4"> 
                <figure>
                    <img src="https://placehold.co/500x700" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy"> 
                </figure>
            </aside> 
            <article class="col-lg-5"> 
                <h1 class="display-5 fw-bold text-body-emphasis lh-1">Resumos Mais Acessados:</h1>
                <h2 class="display-6 fw-bold text-body-emphasis lh-1 mb-5">Os mais lidos da semana</h2> 
                <p class="fs-4 mb-5">Fique por dentro do que os outros estudantes estão estudando! Aqui estão os resumos mais acessados nos últimos dias:</p>
                <ul class="fs-4 list-unstyled">
                    <li class="mb-3">🧪 Tabelas periódicas e propriedades dos elementos</li>
                    <li class="mb-3">🌍 Clima e vegetação do Brasil</li>
                    <li class="mb-3">📕 Interpretação de textos literários</li>
                    <li class="mb-3">🔢 Equações de 1º grau</li>
                </ul>
            </article> 
        </article> 
    </div>
</main>

<?php include('includes/footer.php') ?>