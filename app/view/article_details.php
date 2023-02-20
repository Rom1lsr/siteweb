<?php include 'view/layout.php'; ?>
<?php startblock('title'); ?><?php echo $article['title']; ?><?php endblock(); ?>
<?php startblock('content'); ?>
<h1><?php echo $article['title']; ?></h1>
<p><?php echo $article['content']; ?></p>
<p>Par <?php echo $article['author']; ?> le <?php echo $article['created_at']; ?></p>
<a href="index.php">Retour à la liste des articles</a>
<?php endblock(); ?>