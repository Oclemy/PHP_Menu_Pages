<?php

/**
 * HOME and INDEX PAGE
 * EXTENDS MASTER PAGE
 * @author Oclemy
 * @copyright 2017
 */

require_once ('classes/MasterPage.php');
require_once ('classes/Components.php');

class Home extends MasterPage
{     
    /*
     CONSTRUCTOR
    */
     public function __construct() {
        parent::__construct($this->__toString());
     }
    /*
     SHOW COMPONENTS
    */
    public function show()
     {
         $components = new Components();
         
        //PRINT JUMBOTRON
         $components->printJumbotron(array('title' => 'Tutorials Website Home','description'=>'PHP,Android,Java,C#,VB.NET,Javascript'));
        
     }
     /*
     PAGE TAG
    */
     public function __toString() {
        return 'Home';
     }

}

/*
*SHOW HOMEPAGE
*/

$home=new Home();
$home->show();









?>