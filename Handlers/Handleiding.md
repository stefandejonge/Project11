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

survey kan je het beste gebruiken door een post handler te schrijven

je kan met ajax elke vraag op halen bij een handler die $_POST["question_id"] en die dan 
de survey->getQuestion( $id ) gebruikt.

voor elk antwoord kan je survey-saveAnswer( $userId, $questionId, $answer ) gebruiken.

in het login script scrijf ik een $_SESSION["auth"][ de database result set ];
 dus kan je bij door $_SESSION["auth"]["level"] te gebruiken