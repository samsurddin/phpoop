<?php 

require('pera.php');




    class Content_text extends Pera{

        private $heading = "The PHP Class On oop !!";

       


        public function GetHeader(){

            return $this->heading;

        }
        

        public function GetPera(){

            return $this->pera;

        }

        public function __construct(){

            $username = $_REQUEST['username'];
            $useremail = $_REQUEST['useremail'];

            $this->name = $username;
            $this->email = $useremail;

        }

    }

    
?>