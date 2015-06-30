## hoe gebruik je deze code

de constructor van Survey en Login moeten als argument een Database object hebben 

dus eerst:
$database = new Database( $dns = "standaard mysql ding", $username = "root", $password = "toor" );

als je geen wacht woord hebt dus 

$database = new Database( null, null, $password = "" );

daarna:

$login = new Login( $database );

$login->register( $name, $level, $password );

of

$login->login( $name, $password );

check ff wat de methods terug geven false of true

Om de feedback terug te krijgen gebruik je $login->getFeedback();