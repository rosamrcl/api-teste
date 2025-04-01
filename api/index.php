<?php
$login=[];

if(isset($_GET['email'])){
    switch ($_GET['email']){
        case 'valid';
        $login['valid']='SUCESS';
        $login['login']='API running OK!';
        break;

        default:
        $login['email']='ERROR';
        break;
    }
}else{
    $login['email']='ERROR';
}

response($login);
function response($login){
    header ("Content-Type:application/json");
    echo json_encode($login);
}

?>