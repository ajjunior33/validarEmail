<?php
function dd($params){
  echo "<pre>";
  print_r($params);
  die;
}


function list_accetps($sintaxy){
  $array = [
    "nwt.net.br",
    "gmail.com",
    "hotmail.com",
    "yahoo.com"
  ];

  if(!in_array($sintaxy, $array)){
    return jsonRender(array("msg" => "profile indisponivel"));
  }else{
    return true;
  }
}


function validarEmail($params){
  $data = explode("@", $params);
  if(count($data) < 2){
    return jsonRender(array("msg" => "Não existe @ nesse email"));
  }else{
    if(list_accetps($data[1]) == true){
      return jsonRender(array("msg" => "Email valido."));
    }
  }
}
function jsonRender($params){
  echo json_encode($params);
}
