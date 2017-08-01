<?php

/** THIS CLASS ENCAPSULATES THE HTML ELEMENTS/COMPONENTS THAT WE USE. EACH FUCNTION RETURNS A COMPONENT.
 * @author Oclemy
 * @copyright 2017
 */
require_once ('classes/Constants.php');

class Components
{

    /*
    1.MENU HTML TAGS
    2.PASS MENU ITEM ARRAY
    */
    public static function printMenu($menuItems)
    {
        if (isset($menuItems)) {
            $openMenu = '
            <div class="header">
            <div class="container-fluid">
            <a href=""><h1 class="brand"><span>'.Constants::SITE_TITLE.'</span></h1></a>
            <ul class="nav-items">
            <li><a href="' . Constants::SITE_BASE_URL . '">Home</a></li>
            ';
            echo $openMenu;

            foreach ($menuItems as $menuItem) {
                echo '<li><a href="' . Constants::SITE_BASE_URL . '/' . $menuItem . '.php">' . $menuItem .
                    '</a></li>';
            }


            $closeMenu = '<li><a class="sign-up" href="">Sign Up</a></li>
            </ul>
            </div>
            </div>
            ';
            echo $closeMenu;


        }
    }

    /*
    1.JUMBOTRON HTML TAGS
    */
    public function printJumbotron($info)
    {
        if (isset($info)) {
            $jumbotron = '
    <div class="jumbotron">
    <div class="container">
    <h1><span>'.$info['title'].'</span>.</h1>
    <p>Description: <strong>'.$info['description'].'</strong>.</p>
    <a class="btn">Get started</a>
    <br />
    <!--     <span class="scroll glyphicon glyphicon-chevron-down"></span> -->
    </div>
    </div>
    ';
        } else {
            $jumbotron = '
    <div class="jumbotron">
    <div class="container">
    <h1>We are <span>negative space</span>.</h1>
    <p>We are <strong>creators</strong>, <strong>innovators</strong>, and <strong>explorers</strong>.</p>
    <a class="btn">Get started</a>
    <br />
    <!--     <span class="scroll glyphicon glyphicon-chevron-down"></span> -->
    </div>
    </div>
    ';
        }

        echo $jumbotron;
    }

}

?>