<?php 
require_once "partials/header.php"; 
include base_path("partials/navbar.php"); 
include base_path("partials/hero.php"); 

$article = new Article();
$articles = $article->getArticles();

?>

<!-- Main Content -->
<main class="container my-5">
    <?php if(!empty($articles)): ?>
        <?php foreach($articles as $article): ?>

        <!-- Articles -->
        <div class="row mb-4">
            <div class="col-md-4">
                <?php if(!empty($article->image)): ?>
                    <img
                        src="<?php echo htmlspecialchars($article->image); ?>"
                        class="img-fluid"
                        alt="Blog Post Image"
                    >
                <?php else: ?>
                    <img
                        src="https://dummyjson.com/image/350x200/333333/eae0d0"
                        class="img-fluid"
                        alt="Blog Post Image"
                    >
                <?php endif; ?>
            </div>
            <div class="col-md-8">
                <h2><?php echo htmlspecialchars($article->title); ?></h2>
                <p><?php echo htmlspecialchars($article->content); ?></p>
                <a href="article.php?id=<?php echo $article->id; ?>" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <?php endforeach; ?>
    <?php endif; ?>
</main>


<?php include "partials/footer.php"; ?>
