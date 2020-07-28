<?php

$username = $_POST['user_name'];
$pwd = $_POST['pwd'];

if(empty($username) || empty($pwd)) {
    $data['res'] = false;
    $data['data'] = "用户名或密码不能为空";
} else {
    if($pwd != '123456') {
        $data['res'] = false;
        $data['data'] = "用户名或密码错误";
    }else{
        $data['res'] = true;
        $data['data'] = ['user_name' => '王笨笨','age' => 2.5];
    }
}

echo json_encode($data);


