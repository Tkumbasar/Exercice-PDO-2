<?php 
try{
// data source name
$dsn ='mysql:host=localhost;dbname=hospitale2n';

$user ='root';

$password ='';

$db = new PDO($dsn, $user, $password);


}
catch(Exception $message){

    echo "ya un blem <br>" . "<pre>$message</pre>" ;
}



?>