<?php
$data=[];

//request
if (isset($_GET['option'])){
    switch($_GET['option']){
        case 'status';
        $data['status'] ='SUCESS';
        $data['data'] = 'API running OK!';
        break;

        default:
            $data['status']='ERROR';
            break;
    }
}else{
        $data['status']='ERROR';
}

//response
response($data);
function response($data){
    header("Content-Type:application/json");
    echo json_encode($data);
}


?>