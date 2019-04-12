<?php
class autoloader {
    const entity = ["entity", "posts", "comments", "user"];
    const service= ["autoload"];
    const manager = ["dataBase","manager", "postsManager", "commentsManager", "userManager"];
    //Fonction qui appelle l'autoload register qui se base sur la fonction statique loader
    static public function autoload() {
      spl_autoload_register(array(__CLASS__, 'loader'));
    }
    //Fonction qui require les fichiers selon leur nom de class
    //par exemple si le nom est trouvé dans le tableau des entités on charge une entité
    static public function loader($class){
      if(in_array($class, self::entity)) {
        require("model/entity/" . $class . ".php");
      }
      elseif (in_array($class, self::manager)) {
        require("model/" . $class . ".php");
      }
      else{
        if(in_array($class, self::service)) {
          require("service/" . $class . ".php");
        }
      }
    }
  }
   ?>