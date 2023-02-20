<?php
class ArticleModel {
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    function getArticles() {
        $query = "SELECT * FROM articles ORDER BY id DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getArticleById($id) {
        $query = "SELECT * FROM articles WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
       
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    function addArticle($title, $content, $author) {
        $query = "INSERT INTO articles (title, content, author) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$title, $content, $author]);
        return $this->db->lastInsertId();
    }
    
    function updateArticle($id, $title, $content, $author) {
        $query = "UPDATE articles SET title = ?, content = ?, author = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$title, $content, $author, $id]);
    }
    
    function deleteArticle($id) {
        $query = "DELETE FROM articles WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
    }
}
?>    