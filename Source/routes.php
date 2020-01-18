<?php
$request = $_SERVER['REQUEST_URI'];
$request = explode("?", $request);
$request = $request[0];
switch ($request) {
    case '/' :
    case '' :
    require __DIR__ . '/Views/homepage.php';
    break;
    case '/routes.php' :
    if(isset($_GET['q'])){
        if($_GET['q']=='admins')
            require __DIR__ . '/Views/admins_views/admin_home_page.php';
        elseif($_GET['q']=='logout'){
         require __DIR__ .'/logout.php';
     }
     else{
        echo "Error4..!";
    }
} elseif(isset($_GET['code'])){
    require __DIR__.'/Controllers/readersAuth/GmailRegistration.php';
} elseif(isset($_GET['secret'])){
     require __DIR__.'/Controllers/readersAuth/verifyRegistration.php';
} 
else{
   http_response_code(404);
   require_once __DIR__ . '/Views/404.php';
}    
break;
default:
http_response_code(404);
require_once __DIR__ . '/Views/404.php';
break;
}
?>