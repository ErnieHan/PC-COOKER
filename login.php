<?php
require __DIR__. '/__db_connect.php';

$pageName = 'login';

if(isset($_POST['email']) and isset($_POST['password'])) {

    $sql = sprintf("SELECT 
`id`, `email`, `mobile`, `address`,
`birthday`, `nickname`, `created_at` 
FROM `members` WHERE `email`='%s' AND `password`='%s'",
        $mysqli->escape_string($_POST['email']),
        ($_POST['password'])
        );
    $result = $mysqli->query($sql);

    if($result->num_rows==1){
        $msg_type = 'success';
        $msg_info = '登入成功';
        $_SESSION['user'] = $result->fetch_assoc();
    } else {
        $msg_type = 'danger';
        $msg_info = '登入失敗';
    }
} else {
    if(isset($_SERVER['HTTP_REFERER'])){
        $_SESSION['come_from'] = $_SERVER['HTTP_REFERER'];
    }
}


?>
<?php include __DIR__. '/__html_head.php' ?>
<link rel="stylesheet" type="text/css" href="member.css">
  </head>
  <body>
    <?php include __DIR__. '/__navbar.php' ?>
    <div class="container-fluid island">
        <div class="row justify-content-md-center">
            <?php if(isset($msg_type)): ?>
            <!-- <div id="info" class="alert alert-<?= $msg_type ?>" role="alert">
                <?= $msg_info ?>
            </div> -->
            <?php endif ; ?>

            <?php if(isset($msg_type) and $msg_type=='success' and isset($_SESSION['come_from'])): ?>
                <script>
                    setTimeout(function(){
                        location.href ='cart.php';
                    }, 500);
                </script>
            <?php
            unset($_SESSION['come_from']);
            endif ?>

            <?php if(! isset($_SESSION['user'])): ?>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-end pb-4">
                            <a class="btn btn_register btn_lightblue" href="register.php">註冊</a>
                            <a class="btn btn_login btn_darkblue" href="#">登入</a>
                        </div>
                        <form name="form1" method="post" onsubmit="return checkForm()">
                            <div class="form-group">
                                <label for="email">電子郵箱</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="請輸入註冊時E-MAIL">
                            </div>
                            <div class="form-group">
                                <label for="password">密碼</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">保持登入狀態</label>
						    </div>
                            <div class="form-group d-flex justify-content-center">
                                <button type="submit" class="btn btn-orange" id="submit_btn">登入</button>
                                <a href="register.php" class="member_already">忘記密碼</a>
						    </div>  
                        </form>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        function checkForm() {
            var emailHelp = $('#emailHelp'),
                passwordHelp = $('#passwordHelp'),
                submit_btn = $('#submit_btn');
            var emailPattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
            var isPass = true;

            //submit_btn.hide();
            emailHelp.hide();
            passwordHelp.hide();
            $('#info').hide();

            if(! emailPattern.test(form1.email.value)){
                emailHelp.show();
                isPass = false;
            }
            if(form1.password.value.length < 6){
                passwordHelp.show();
                isPass = false;
            }
            return isPass;
        }
    </script>
<?php include __DIR__. '/__html_foot.php' ?>