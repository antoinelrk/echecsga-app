<?php include("layout/header.php"); ?>
<main>
        <div class="home">
            <div class="left">
            <!-- <div class="no-article">Il n'y a aucun article disponible</div> -->
                <div class="articles-component">
                <?php foreach($sql->getArticles() as $key => $article) { ?>
                    <div class="article">
                        <div class="title-group">
                            <h1 class="title"><?= $article->title ?></h1>
                            <h3 class="created_at">le <?= date("d/m/Y", strtotime($article->created_at)); ?></h3>
                        </div>
                        <div class="content-group">
                            <p><?= $article->content ?></p>
                            <a class="read-more" href="#">Lire la suite</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <div class="right">
                <div class="flyer">
                    <a download href="assets/files/Inscription_2020-2021.pdf">
                        <img src="assets/files/flyer.png" alt="">
                    </a>
                </div>
                <div class="informations">
                    <div class="location">
                        <figure>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 288 512">
                                <path d="M112 316.94v156.69l22.02 33.02c4.75 7.12 15.22 7.12 19.97 0L176 473.63V316.94c-10.39 1.92-21.06 3.06-32 3.06s-21.61-1.14-32-3.06zM144 0C64.47 0 0 64.47 0 144s64.47 144 144 144 144-64.47 144-144S223.53 0 144 0zm0 76c-37.5 0-68 30.5-68 68 0 6.62-5.38 12-12 12s-12-5.38-12-12c0-50.73 41.28-92 92-92 6.62 0 12 5.38 12 12s-5.38 12-12 12z"></path>
                            </svg>
                        </figure>
                        <span>20 route du Rhin 67760 Gambsheim</span>
                    </div>
                    <div class="schedule">
                        <div class="line">
                            <figure>
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 512 512">
                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm92.49 313l-20 25a16 16 0 0 1-22.49 2.5l-67-49.72a40 40 0 0 1-15-31.23V112a16 16 0 0 1 16-16h32a16 16 0 0 1 16 16v144l58 42.5a16 16 0 0 1 2.49 22.5z"></path>
                                </svg>
                            </figure>
                            <span>Groupe 1 (initiation)</span>
                            <span>13h30 - 14h30</span>
                        </div>
                        <div class="line">
                            <span>Groupe 2 (perfectionnement)</span>
                            <span>14h30 - 15h30</span>
                        </div>
                        <div class="line">
                            <span>Groupe 3 (confirmé)</span>
                            <span>15h30 - 16h30</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include("layout/footer.php"); ?>