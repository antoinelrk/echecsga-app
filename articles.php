<?php include('layout/header.php') ?>
<main>
    <div class="articles">
        <div class="search-component">
            <label>
                <input id="searchInputBar" type="text" placeholder="Rechercher un article...">
            </label>
        </div>

        <div class="articles-container">
        <?php foreach ($sql->getArticles() as $key => $article) { ?>
            <?php if ($article->id != 0) { ?>
            <div class="article">
                <a href="#"><?= $article->title ?></a>  
                <span>publié le <?= date("d/m/Y", strtotime($article->created_at)); ?></span>
            </div>
            <?php } else { ?>
                <div class="no-article">Il n'y a aucun article disponible</div>
            <?php } ?>
        <?php } ?>
        </div>
    </div>
</main>
<?php include('layout/footer.php') ?>