<?php
$pageName = 'register';
?>
<?php include __DIR__. '/__html_head.php' ?>
<link rel="stylesheet" type="text/css" href="member.css">
</head>
<body>
<?php include __DIR__. '/__navbar.php' ?>
<!-- content -->
    <div class="container-fluid island">
        <!-- <div id="info" class="alert" role="alert" style="display: none"></div> -->
        <div class="row justify-content-md-center">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end pb-4">
                        <a class="btn btn_register btn_darkblue" href="#">註冊</a>
                        <a class="btn btn_login btn_lightblue" href="login.php">登入</a>
                    </div>
                    <form name="form1" method="post" onsubmit="return checkForm()">
                        <div class="form-group">
                            <label for="nickname">姓名*</label>
                            <input type="text" class="form-control" id="nickname" name="nickname" placeholder="請輸入真實姓名">
                        </div>
                        <div class="form-group">
                            <label for="email">電子郵箱*(當作登入帳號)</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="請輸入完整電子郵箱">
                        </div>
                        <div class="form-group">
                            <label for="password">密碼 *</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="請輸入6-12碼小寫英數字">
                        </div>
                        <div class="form-group form-check">
                            <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">我已看過並同意PC酷客的<a href="#" class="pl-1">服務條款</a></label>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-orange" id="submit_btn">註冊</button>
                            <a href="login.php" class="member_already">已經是會員了嗎</a>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function checkForm() {
            var nicknameHelp = $('#nicknameHelp'),
                emailHelp = $('#emailHelp'),
                passwordHelp = $('#passwordHelp'),
                submit_btn = $('#submit_btn');
            var emailPattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
            var isPass = true;

            submit_btn.hide();
            nicknameHelp.hide();
            emailHelp.hide();
            passwordHelp.hide();
            $('#info').hide();

            if(form1.nickname.value.length < 2){
                nicknameHelp.show();
                isPass = false;
            }
            if(! emailPattern.test(form1.email.value)){
                emailHelp.show();
                isPass = false;
            }
            if(form1.password.value.length < 6){
                passwordHelp.show();
                isPass = false;
            }
            console.log( $(document.form1).serialize() );
            if(isPass) {
                $.post('register_api.php', $(document.form1).serialize(), function(data){
                    if(data.success){
                        setTimeout(function(){
                            location.href ='login.php';
                        }, 500);
                    } else {
                        submit_btn.show();
                    }
                    if(data.info){
                        var info = $('#info');
                        info.text(data.info.msg);
                        info.show();
                        info.attr('class', 'alert alert-'+data.info.type);
                    }
                }, 'json');
            }
            return false;
        }
    </script>
<?php include __DIR__. '/__html_foot.php' ?>