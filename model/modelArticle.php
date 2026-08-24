<?php
class ModelArticle
{
    //ATTRIBUTS
    private ?string $title;
    private ?string $content;
    private ?string $created_at;
    private ?string $edited_at;
    private ?string $pseudo;
    private PDO $bdd;

    //CONSTRUCTEUR
    public function __construct()
    {
        $this->bdd = connect();
    }

    //GETTER ET SETTER

    //METHODS
    function getArticles(): ?array
    {
        try {
            $req = $this->bdd->prepare('SELECT a.title, a.content, a.created_at, a.edited_at, u.pseudo FROM article a INNER JOIN user u ON u.id = a.user_id');
            $req->execute();
            return $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (EXCEPTION $error) {
            die($error->getMessage());
        }
    }
}
