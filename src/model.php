<?php

// namespace Marle\BlogOpc\src\model;
// use PDO;

class SPDO
{
    /**
     * Instance de la classe PDO
     *
     * @var PDO
     * @access private
     */
    private $PDOInstance = null;

    /**
     * Instance de la classe SPDO
     *
     * @var SPDO
     * @access private
     * @static
     */
    private static $instance = null;

    /**
     * Constante: nom d'utilisateur de la bdd
     *
     * @var string
     */
    const DEFAULT_SQL_USER = 'root';

    /**
     * Constante: hôte de la bdd
     *
     * @var string
     */
    const DEFAULT_SQL_HOST = 'localhost';

    /**
     * Constante: hôte de la bdd
     *
     * @var string
     */
    const DEFAULT_SQL_PASS = 'root';

    /**
     * Constante: nom de la bdd
     *
     * @var string
     */
    const DEFAULT_PORT = '3307';

    /**
     * Constante: nom de la bdd
     *
     * @var string
     */
    const DEFAULT_SQL_DTB = 'blog_opc';

    /**
     * Constructeur
     *
     * @param void
     * @return void
     * @see PDO::__construct()
     * @access private
     */
    private function __construct()
    {
        $this->PDOInstance = new PDO('mysql:dbname=' . self::DEFAULT_SQL_DTB . ';host=' . self::DEFAULT_SQL_HOST . ';port=' . self::DEFAULT_PORT, self::DEFAULT_SQL_USER, self::DEFAULT_SQL_PASS);
    }

    /**
     * Crée et retourne l'objet SPDO
     *
     * @access public
     * @static
     * @param void
     * @return SPDO $instance
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new SPDO();
        }
        return self::$instance;
    }

    /**
     * Exécute une requête SQL avec PDO
     *
     * @param string $query La requête SQL
     * @return PDOStatement Retourne l'objet PDOStatement
     */
    public function query($query)
    {
        return $this->PDOInstance->query($query);
    }

    public function prepare($prepare)
    {
        return $this->PDOInstance->prepare($prepare);
    }
}
