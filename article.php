<?php 
include "partials/header.php"; 
include "partials/navbar.php"; 
include "partials/hero.php"; 

$articleId = isset($_GET['id']) ? $_GET['id'] : null;
if($articleId){
    $article = new Article();
    $articles = $article->getArticleById($articleId);
}else{
    echo "Article not found!";
    exit;
}
?>

<!-- Main Content -->
<main class="container my-5">
    <h2 class="text-center mb-5"><?php echo $articles->title;?></h2>
    
    <!-- Featured Image -->
    <div class="mb-4">
        <?php if(!empty($articles->image)): ?>
            <img
                src="<?php echo $articles->image; ?>"
                class="img-fluid w-100"
                alt="Featured Image"
                style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;"
            >
        <?php else: ?>
            <img
                src="https://dummyjson.com/image/350x200/333333/eae0d0"
                class="img-fluid w-100"
                alt="Featured Image"
                style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;"
            >
        <?php endif; ?>
    </div>
    <!-- Article Content -->
    <article>
        <p style="text-align:justify;">
            <?php echo htmlspecialchars($articles->content); ?>
        </p>
    </article>

    <!-- Comments Section Placeholder -->
    <section class="mt-5">
        <h3>Comments</h3>
        <p>
            Comments functionality will be implemented here.
        </p>
    </section>

    <!-- Back to Home Button -->
    <div class="mt-4">
        <a href="index.php" class="btn btn-secondary">← Back to Home</a>
    </div>
</main>

<?php include "partials/footer.php"; ?>
