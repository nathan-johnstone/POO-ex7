<?php
class ViewArticle
{
    //ATTRIBUTS
    private string $listArticle = '';
    private ?array $dataArticle;
    private ViewHeader $viewHeader;
    private ViewFooter $viewFooter;

    //CONSTRUCTEUR
    public function __construct()
    {
        $this->viewHeader = new ViewHeader("Article");
        $this->viewFooter = new ViewFooter();
    }

    //GETTER ET SETTER
    public function setDataArticle(array $data)
    {
        $this->dataArticle = $data;
    }

    //METHODS
    public function display(): void
    {
        foreach ($this->dataArticle as $row) {
            $this->listArticle .= "<article><h2>" . $row['title'] . "</h2><h3>By :" . $row['pseudo'] . "</h3></article>";
        };

        echo "
        <main>
            <h1>Liste des Articles</h1>
            <ul>" . $this->listArticle . "</ul>
        </main>";
    }

    public function displayAll(): void
    {
        $this->viewHeader->display();
        $this->display();
        $this->viewFooter->display();
    }
}
