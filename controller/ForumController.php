<?php

    namespace Controller;

    use App\Session;
    use App\AbstractController;
    use App\ControllerInterface;
    use Model\Managers\TopicManager;  // c'est lie avec le Topic Manager dans le Model/managers
    use Model\Managers\PostManager;    // c'est lie avec le Topic Manager dans le Model/managers
    use Model\Managers\UserManager;      // c'est lie avec le Topic Manager dans le Model/managers
    use Model\Managers\CategoryManager;  // c'est lie avec le Topic Manager dans le Model/managers
    
    class ForumController extends AbstractController implements ControllerInterface{

        public function index(){
          

           $topicManager = new TopicManager();

            return [
                "view" => VIEW_DIR."forum/listTopics.php", //L'étiquette "view" est utilisée pour désigner le chemin de fichier
                "data" => [
                    "topics" => $topicManager->findAll(["creationdate", "DESC", "user", "title"])
                ]
            ];
        
        }


        /*List TOpics*/ 
        public function listTopics(){

            // Demander l'accès à la couche modèle
            // Créer une nouvelle instance de TopicManager 
            $topicManager = new TopicManager();

            
            // Renvoyer un tableau avec deux éléments
            // Le premier élément a pour clé "view" et contient le chemin du fichier à afficher
            // Le deuxième élément a pour clé "data" et contient la liste des sujets
            return [
                "view" => VIEW_DIR."forum/listTopics.php", 
                "data" => [                               
                    "topics" => $topicManager->findAll()
                ]
                
                ];

        }

        /*Detail Topic*/

        public function detailTopic($id){

            // Demander l'accès à la couche modèle
            $topicManager = new TopicManager();
            $postManager = new PostManager();

            return [
                "view" => VIEW_DIR."forum/detailTopic.php",
                "data" => [
                    "topic"=>$topicManager->findOneById($id),
                    "posts" =>$postManager->findPostsByTopicId($id)
                    
                ]
            ];

        }

        public function formTopic(){

            return[
                "view" => VIEW_DIR."forum/addOrUpdateTopic.php",
             
            ];
        }

        public function addTopic(){
            $topicManager = new TopicManager();
            $session = new Session();

            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS); // flite qui protege contre les failles xss

            date_default_timezone_set('Europe/Paris');
            $creationdate = date('Y-m-d H:i:s');

            $topicManager->add(['title'=> $title, 'creationdate'=> $creationdate]);
            return[
                "view"=>VIEW_DIR."forum/listTopics.php",
                $session->addFlash('succes', 'Ajouté avec succès'),
                "data" => [
                    "topics"=> $topicManager->findAll(["title", "ASC"])
                ]
            ];
        }

        


        /*List Categories*/ 

        public function listCategories(){

            // Demander l'accès à la couche modèle
            // Créer une nouvelle instance de CategoryManager 
            $categoryManager = new CategoryManager();

            // Renvoyer un tableau avec deux éléments
            // Le premier élément a pour clé "view" et contient le chemin du fichier à afficher
            // Le deuxième élément a pour clé "data" et contient la liste des sujets

            return [
                "view" => VIEW_DIR."forum/listCategories.php",
                "data" => [
                    "categories" => $categoryManager->findAll()
                ]
                ];
        }

        public function detailCategory($id){   // le fonction fait le lien avec le view qui s'appelle detailCategory
            $categoryManager = new CategoryManager();
            $topicManager = new TopicManager();

            // $id = (filter_var($id, FILTER_VALIDATE_INT));  // Cette ligne de code vérifie si la variable $id est un entier valide en PHP. Si c'est le cas, la variable $id conserve sa valeur en tant qu'entier. Sinon, si $id n'est pas un entier valide, la variable $id est définie à false

            return [
                "view" => VIEW_DIR."forum/detailCategory.php",
                "data" => [
                    "category" => $categoryManager->findOneById($id),
                    "topics"=>$topicManager->findTopicsByCategoryId($id)
                ]
            ];
        }

        public function formCategory(){

            return[
                "view" => VIEW_DIR."forum/addOrUpdateCategory.php",
             
            ];
        }

        public function addCategory()  // Fonction pour ajouter une catégorie au form category 
        {
            $categoryManager = new CategoryManager();
            $session = new Session();  

            $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS); // pour se proteger des hackeurs - des failles xss

            
            $categoryManager->add(['nom' => $nom]);
            return[
                "view" => VIEW_DIR."forum/listCategories.php",
                $session->addFlash('success',"Ajouté avec succès"), // Instancier pour ajouter une notification
                "data" => [
                    "categories" => $categoryManager->findAll(["nom", "ASC"])   // quand on ajoute un categorie sa retourne dans le liste des categories
                ]
               
            ];
        }

        


        /*List Users*/ 
        public function listUsers(){   // le function fait le lien avec le view qui s'appelle listUsers
            $userManager = new UserManager();

            return [
                "view" => VIEW_DIR."forum/listUsers.php",
                "data" => [
                    "users" => $userManager->findAll()
                ]
            ];
        }

        public function listPosts(){
            $postManager = new PostManager();

            return [
                "view" => VIEW_DIR."forum/listPosts.php",
                "data" => [
                    "posts" => $postManager->findAll()
                ]
            ];
        }

     

        

    }
