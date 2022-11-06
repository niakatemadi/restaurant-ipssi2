<?php
namespace Core\Database;

class Database {

    /**
     * Host de la BDD
     *
     * @var string
     */
    private string $host ;

    /**
     * Nom de la BDD
     *
     * @var string
     */
    private string $dbname ;

    /**
     * Identifiant de l'utilisateur de la BDD
     *
     * @var string
     */
    private string $user ;

    /**
     * Mot de passe de l'utilisateur de la BDD
     *
     * @var string
     */
    private string $password ;

    /**
     * Connexion à la BDD
     * 
     * @var \PDO|null
     */
    protected ?\PDO $pdo ;

    public function __construct()
    {
        try
        {

        $this -> getConfig();
        $this -> pdo = new \PDO(
            "mysql:host=$this->host;dbname=$this->dbname",
            $this -> user,
            $this -> password,
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]
        );
        }catch (\PDOException $e) {
            echo $e->getMessage();
        }

    }

    /**
     * Récupére les données pour la connexion à la BDD
     *
     * @return void
     */
    private function getConfig(): void
    {
        if(file_exists(ROOT."/config/dbConfig.php"))
        {
                require_once ROOT."/config/dbConfig.php";

                $this -> host = $dbConfig['host'];
                $this -> dbname = $dbConfig['db'];
                $this -> user = $dbConfig['user'];
                $this -> password = $dbConfig['password'];
        }else
        {
            throw new \Exception("Le fichier de config de la BDD est manquant", 1);
        }

    }

    /**
     * Récupère la connexion à la BDD
     *
     * @return \PDO|null
     */
    public function getPdo(): ?\PDO
    {
        return $this-> pdo;
    }

    protected function getData(string $stmt,bool $one = false): array|object
    {
        $query = $this->pdo->query($stmt, \PDO::FETCH_OBJ);
        
        if($one)
        {
            $data = $query->fetchAll();
        }
        else
        {
            $data = $query->fetch();
        }

        return $data ? $data : throw new \Exception("Aucune donnée n'a été trouvée");
           
        
    }
    protected function postData(string $stmt,bool $one = false): void
    {
        $query = $this->pdo->query($stmt, \PDO::FETCH_OBJ);
              
    }
}
?>