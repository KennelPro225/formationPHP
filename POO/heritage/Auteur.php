<?php
class Auteur extends Utilisateur
{
    private $note;
    private $avis;

    public function __construct(string $nom, string $prenom, string $email, int $note, string $avis)
    {
        Parent::__construct($nom, $prenom, $email);
        $this->setNote($note);
        $this->setAvis($avis);
    }

    public function seConnecter()
    {
        echo "Je suis " . $this->nom . " Auteur de votre application, je peux donc me connecter";
    }

    public function setNote($note)
    {
        $this->note = $note;
    }

    public function setAvis($avis)
    {
        $this->avis = $avis;
    }

    public function getNote(): int
    {
        return $this->note;
    }

    public function getAvis(): string
    {
        return $this->avis;
    }
}
