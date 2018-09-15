<?php
require __DIR__. '/__db_connect.php';


$result = [
    'success' => false,
    'email_error' => '請填寫 email',
    'nickname_error' => '請填寫 nickname',
    'password_error' => '請填寫 password',
    ];
$isPass = true;

if(isset($_POST['email']) and isset($_POST['nickname']) and isset($_POST['password'])){
    if(mb_strlen($_POST['nickname'])<2){
        $result['nickname_error'] = '暱稱長度請大於 2 個字元';
        $isPass = false;
    } else {
        unset($result['nickname_error']);
    }

    if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $result['email_error'] = 'Email 格式不符';
        $isPass = false;
    } else {
        unset($result['email_error']);
    }

    if(mb_strlen($_POST['password'])<6){
        $result['password_error'] = '密碼長度請大於 6 個字元';
        $isPass = false;
    } else {
        unset($result['password_error']);
    }

    if($isPass){
        // $hash = sha1(uniqid(). $_POST['email']);
        // $password = sha1($_POST['password']);


        $sql = "INSERT INTO `members`(
                    `email`, `password`, `nickname`
                ) VALUES (
                    ?, ?, ?
                )
                ";

        $stmt = $mysqli->prepare($sql);

        $stmt->bind_param('sss',
            $_POST['email'],
            $_POST['password'],
            $_POST['nickname']
            );

        $stmt->execute();
        $af = $stmt->affected_rows;

        $stmt->close();

        if($af===1){
            $result['success'] = true;
            $result['info'] = [
                'type' => 'success',
                'msg' => '註冊完成'
            ];
        } elseif($af===-1){
            $result['info'] = [
                'type' => 'warning',
                'msg' => 'Email 已被使用'
            ];
        } else {
            $result['info'] = [
                'type' => 'danger',
                'msg' => '資料錯誤'
            ];
        }
    }


}

echo json_encode($result, JSON_UNESCAPED_UNICODE);