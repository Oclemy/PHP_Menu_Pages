<?php

/**
 * NEWS PAGE
 * @author Oclemy
 * @copyright 2017
 */

require_once ('classes/MasterPage.php');
require_once ('classes/Components.php');

class News extends MasterPage
{
    /*
    *CONSTRUCTOR
    */
    public function __construct() {
        parent::__construct($this->__toString());
    }
     /*
    *SHOW JUMBOTRON
    */
    public function show()
     {
         $components = new Components();
         
        //PRINT JUMBOTRON
         $components->printJumbotron(array('title' => 'News','description'=>'Stay tuned for latest programming tutorials at camposha.info'));
        
     }
    /*
    *SITE TAG
    */
   public function __toString() {
    return 'News';
   }
   
}
/*
*SHOW CONTACT US PAGE
*/
$news=new News();
$news->show();


?>