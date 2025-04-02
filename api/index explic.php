<?php

//preparar a rsposta
$data=[];

$data['status']='ERROR'; //com a declaração padrão antes do if não é necessário o else e default
$data['data']=null;

//request
if (isset($_GET['option'])){
    switch($_GET['option']){
        case 'status';
        //$data['status'] ='SUCESS'; // com a criação da função sucesso não é mais necessário 
        //sucess($data); com a função define_response não é mais necessário
        define_response($data, 'API running OK!');
        //$data['data'] = 'API running OK!'; //com a função define_response não é mais necessário
        break;

        //default:
            //$data['status']='ERROR';
           // break;
    }
}
//else{
       // $data['status']='ERROR';
//}

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