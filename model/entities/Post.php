<?php
    namespace Model\Entities; // c'a permetre de appeler directement la calsse et pas le chemin fisique 

    use App\Entity; // comme demande un fischier qui est pas fisique 

    final class Post extends Entity{ // entity pour la hidradation 
        // final class c'est la class final on peut pas faire le class qui extends topic 

        private $id;
        private $texte;
        private $dateCreation;
        private $user;
        private $topic;

        public function __construct($data){         
            $this->hydrate($data);         // ca hydrate un un objet en recuperant les donnes dans la base de donnes 
            
        }


        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function getTexte()
        {
                return $this->texte;
        }

        public function setTexte($texte)
        {
                $this->texte = $texte;

                return $this;
        }

        public function getDateCreation()
        {
                return $this->dateCreation;
        }

        public function setDateCreation($dateCreation)
        {
                $this->dateCreation = $dateCreation;

                return $this;
        }

        public function getUser()
        {
                return $this->user;
        }

        public function setUser($user)
        {
                $this->user = $user;

                return $this;
        }

        public function getTopic()
        {
                return $this->topic;
        }

        public function setTopic($topic)
        {
                $this->topic = $topic;

                return $this;
        }
    }
