<?php
    namespace Model\Entities; // c'a permetre de appeler directement la calsse et pas le chemin fisique 

    use App\Entity; // comme demande un fischier qui est pas fisique 

    final class Topic extends Entity{ // entity pour la hidradation 
        // final class c'est la class final on peut pas faire le class qui extends topic 

        private $id;
        private $title;
        private $category;
        private $user;
        private $creationdate;
        private $closed;

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
 
        public function getTitle()
        {
                return $this->title;
        }

        public function setTitle($title)
        {
                $this->title = $title;

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

        public function getCreationdate(){
            $formattedDate = $this->creationdate->format("d/m/Y, H:i:s");
            return $formattedDate;
        }

        public function setCreationdate($date){
            $this->creationdate = new \DateTime($date);
            return $this;
        }

        public function getClosed()
        {
                return $this->closed;
        }

        public function setClosed($closed)
        {
                $this->closed = $closed;

                return $this;
        }

        public function getCategory()
        {
                return $this->category;
        }

        public function setCategory($category)
        {
                $this->category = $category;

                return $this;
        }
    }
