<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;
    use Model\Managers\TopicManager;

    class TopicManager extends Manager{ //la classe  TopicManager ca fait partie de Manager

        protected $className = "Model\Entities\Topic";
        protected $tableName = "topic";


        public function __construct(){
            parent::connect();
        }


        public function findTopicsByCategoryId($id){
            $sql = "SELECT *
            FROM ".$this->tableName." t
            WHERE t.category_id = :category";

            return $this->getMultipleResults(
            
            DAO::select($sql,[':category' => $id]),
            $this->className

            );
        }
    }
?>