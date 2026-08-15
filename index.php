<?php

require_once('class.php');

class Post
{
    private $titolo;
    private $categoria;
    private $tag;

    public function __construct($titolo, Category $categoria, $tag)
    {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function getTitolo()
    {
        return $this->titolo;
    }

    public function getCategoria()
    {
        return $this->categoria->getMyCategory();
    }

    public function getTag()
    {
        return $this->tag;
    }
}

$post = new Post("La storia dell'arte", new Storia(), ["arte", "storia", "cultura"]);
$post1 = new Post("Ultime notizie sportive", new Sport(), ["calcio", "basket", "tennis"]);

echo $post->getCategoria();
echo $post1->getTitolo();
