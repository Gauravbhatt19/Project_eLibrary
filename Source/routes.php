<?php
	$request = $_SERVER['REQUEST_URI'];
    $request = explode("?", $request);
    $request = $request[0];
   switch ($request) {
    case '/' :
    case '' :
        require __DIR__ . '/Views/index.php';
        break;
    case '/routes.php' :
        if(isset($_GET['q'])){
            if($_GET['q']=='admins')
                require __DIR__ . '/Views/admins_views/index.php';
            elseif($_GET['q']=='xyz'){
                 echo "Error3..!";
            }
                    else{
                                    echo "Error4..!";
        }
        } else{
             http_response_code(404);
        require __DIR__ . '/Views/404.php';
        }    
        break;
    // case '/adminlogincheck' :
       
        // require __DIR__ . '/Controllers/adminAuth/LoginController.php';
    // break;
    default:
        http_response_code(404);
        require __DIR__ . '/Views/404.php';
        break;
}
?>