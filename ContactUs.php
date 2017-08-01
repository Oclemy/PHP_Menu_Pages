<?php

/**
 * CONTACT US PAGE
 * @author Oclemy
 * @copyright 2017
 */

require_once ('classes/MasterPage.php');
require_once ('classes/Components.php');

class ContactUs extends MasterPage
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
         $components->printJumbotron(array('title' => 'Contact Us','description'=>'ProgrammingWizards TV, admin@gmail.com'));
        
     }
    /*
    *PAGE TAG
    */
   public function __toString() {
    return 'Contact Us';
   }
   
}
/*
*SHOW CONTACT US PAGE
*/
$contactus=new ContactUs();
$contactus->show();


?>