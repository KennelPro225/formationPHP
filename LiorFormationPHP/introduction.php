 <?php

class Employes
{
    public $nom;
    public $prenom;
    private $age;

    public function __construct(string $nom, string $prenom, int $age)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        echo "Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans";
    }

    public function setAge(int $age)
    {
        if (is_int($age) && $age >= 1 && $age <= 120) 
        {
            $this->age = $age;
        } else 
        {
            throw new Exception("Le nombre entré ne respecte pas la plage fixée");
        }
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function presentation()
    {
        echo "Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans";
    }
}
$employe = new Employes("Chamlar", 'Lior', 20);

class Patron extends Employes
{
    private $voiture;

    public function __construct(string $nom, string $prenom, int $age, string $voiture)
    {
        parent::__construct($nom, $prenom, $age);
        $this->setVoiture($voiture);
    }

    public function setVoiture($voiture)
    {
        $this->voiture = $voiture;
    }

    public function getVoiture()
    {
        return $this->voiture;
    }

    public function rouler()
    {
        return "Bonjour je suis au volant de ma voiture de marque " . $this->getVoiture();
    }
}

echo "<br>";

$patron = new Patron("KASSI", "Kennel", 120, "HAVAL");
echo "<br>";
echo $patron->getVoiture();
echo "<br>";
echo $patron->presentation();
echo "<br>";
echo $patron->rouler();