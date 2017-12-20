<?php 
    
namespace Controller;


abstract class Controller
{
    protected $pdo;
    protected $twig;

    public function __construct(\PDO $pdo, \Twig_Environment $twig)
    {
        $this->db = $pdo;
        $this->twig = $twig;
    }

}




    

