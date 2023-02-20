<?php
require_once 'model/ArticleModel.php';

class ArticleController {
    private $article;

    public function __construct() {
        $this->article = new Article();
    }

    public function index() {
        $articles = $this->article->getArticles();
        include 'view/article_list.php';
    }

    public function details() {
        $id = $_GET['id'];
        $article = $this->article->getArticle($id);
        include 'view/article_details.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $author = $_POST['author'];
            $id = $this->article->addArticle($title, $content, $author);
            header("Location: index.php?action=details&id=$id");
        } else {
            include 'view/article_form.php';
        }
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $author = $_POST['author'];
            $this->article->updateArticle($id, $title, $content, $author);
            header("Location: index.php?action=details&id=$id");
        } else {
            $id = $_GET['id'];
            $article = $this->article->getArticle($id);
            include 'view/article_form.php';
        }
    }

    public function delete() {
        $id = $_GET['id'];
        $this->article->deleteArticle($id);
        header("Location: index.php");
    }
}
?>
