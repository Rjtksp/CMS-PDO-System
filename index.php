<?php 
require_once "partials/header.php"; 
include base_path("partials/navbar.php"); 
include base_path("partials/hero.php"); 

$article = new Article();
$articles = $article->getArticles();

?>

<!-- Main Content -->
<main class="container mt-5">
    <?php if(!empty($articles)): ?>
        <?php foreach($articles as $articleItem): ?>

        <!-- Articles -->
        <div class="row mb-5">
            <div class="col-md-4">
                <?php if(!empty($articleItem->image)): ?>
                    <img
                        src="<?php echo htmlspecialchars($articleItem->image); ?>"
                        class="img-fluid"
                        alt="Blog Post Image"
                        style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px; height: 225px;"
                    >
                <?php else: ?>
                    <img
                        src="https://dummyjson.com/image/350x200/333333/eae0d0"
                        class="img-fluid"
                        alt="Blog Post Image"
                        style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px; height: 225px;"
                    >
                <?php endif; ?>
            </div>
            <div class="col-md-8"  style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px; padding: 25px; border-radius: 10px;">
                <h2><?php echo htmlspecialchars($articleItem->title); ?></h2>
                <p style="text-align:justify;"><?php echo htmlspecialchars($article->getExcerpt($articleItem->content, 200)); ?></p>
                <a href="article.php?id=<?php echo $articleItem->id; ?>" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <?php endforeach; ?>
    <?php endif; ?>
</main>

<?php include "partials/footer.php"; ?>
