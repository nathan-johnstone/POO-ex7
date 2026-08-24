<?php
class ControllerArticle
{
    //ATTRIBUTS
    private ModelArticle $modelArticle;
    private ViewArticle $viewArticle;

    //CONSTRUCTEUR
    public function __construct()
    {
        $this->modelArticle = new ModelArticle();
        $this->viewArticle = new ViewArticle();
    }

    //GETTER ET SETTER

    //METHODS
    public function render()
    {
        $data = $this->modelArticle->getArticles();
        $this->viewArticle->setDataArticle($data);
        $this->viewArticle->displayAll();
    }
}
