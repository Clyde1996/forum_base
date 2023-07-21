<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;
    use Model\Managers\PostManager;

    class PostManager extends Manager{ //la PostManager  userManager ca fait partie de Manager

        protected $className = "Model\Entities\Post";
        protected $tableName = "post";


        public function __construct(){
            parent::connect();
        }

        public function findPostsByTopicId($id){
            $sql = "SELECT *
            FROM ".$this->tableName." p
            WHERE p.topic_id = :topic";

            return $this->getMultipleResults(
            
            DAO::select($sql,[':topic' => $id]),
            $this->className

            );
        }

    }
?>