<?php include 'view/layout.php'; ?>
<?php startblock('title'); ?><?php echo isset($article) ? 'Modifier' : 'Ajouter'; ?> un article<?php endblock(); ?>
<?php startblock('content'); ?>
    <h1><?php echo isset($article) ? 'Modifier' : 'Ajouter'; ?> un article</h1>
    <form method="post">
        <?php if (isset($article)) { ?>
            <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
        <?php } ?>
        <div>
            <label for="title">Titre :</label>
            <input type="text" name="title" id="title" value="<?php echo isset($article) ? $article['title'] : ''; ?>">
        </div>
        <div>
            <label for="content">Contenu :</label>
            <textarea name="content" id="content"><?php echo isset($article) ? $article['content'] : ''; ?></textarea>
        </div>
        <div>
            <label for="author">Auteur :</label>
            <input type="text" name="author" id="author" value="<?php echo isset($article) ? $article['author'] : ''; ?>">
        </div>
        <input type="submit" value="<?php echo isset($article) ? 'Modifier' : 'Ajouter'; ?>">
    </form>
<?php endblock(); ?>

