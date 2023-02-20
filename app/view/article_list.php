<?php include 'view/layout.php'; ?>
<?php startblock('title'); ?>Liste des articles<?php endblock(); ?>
<?php startblock('content'); ?>
<h1>Liste des articles</h1>
<a href="index.php?action=add">Ajouter un article</a>
<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Date de création</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($articles as $article) { ?>
            <tr>
                <td><?php echo $article['title']; ?></td>
                <td><?php echo $article['author']; ?></td>
                <td><?php echo $article['created_at']; ?></td>
                <td>
                    <a href="index.php?action=details&id=<?php echo $article['id']; ?>">Détails</a>
                    <a href="index.php?action=edit&id=<?php echo $article['id']; ?>">Modifier</a>
                    <a href="index.php?action=delete&id=<?php echo $article['id']; ?>">Supprimer</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php endblock(); ?>