<?php

//preparar a rsposta
$data=[];

$data['status']='ERROR'; //com a declaração padrão antes do if não é necessário o else e default
$data['data']=null;

//request
if (isset($_GET['option'])){
    switch($_GET['option']){
        case 'status';
       $data['status'] ='SUCESS'; 
        sucess($data); 
        define_response($data, 'API running OK!');
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
function define_response (&$data,$value){
    $data['status']='SUCESS';
    $data['data']=$value;
}
function response($data_response){
    header("Content-Type:application/json");
    echo json_encode($data_response);
}


?>