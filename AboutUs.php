<?php

/**
 * ABOUT US PAGE
 * @author Oclemy
 * @copyright 2017
 */

require_once ('classes/MasterPage.php');
require_once ('classes/Components.php');

class AboutUs extends MasterPage
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
         $components->printJumbotron(array('title' => 'About Us','description'=>'Camposha.info is a Programming Examples portal.'));
        
     }
    /*
    *SITE TAG
    */
   public function __toString() {
    return 'About Us';
   }
   
}
/*
*SHOW ABOUT US PAGE
*/
$aboutus=new AboutUs();
$aboutus->show();


?>