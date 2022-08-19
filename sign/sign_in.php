<?php
    include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php";
?>

<script defer src="/js/signIn.js"></script>

<h2>Sign In</h2>

<form action="sign_in_ok.php" name="signInForm" id="signInForm" class="signInForm" method="POST">
    <div>
        <input type="text" name="user_id" id="user_id" placeholder="아이디" required>
    </div>
    <div>
        <input type="password" name="user_password" id="user_password" placeholder="패스워드" required>
    </div>
    <div>
        <a href="find_id.php">아이디 찾기</a>
        <a href="find_password.php">패스워드 찾기</a>
    </div>
    <div>
        <button type="button" id="sign_in_button" onclick="signInSubmit();">로그인</button>
        <button type="button" id="return_back" onclick="javascript:history.back();">뒤로가기</button>
    </div>
</form>

<?php
    include $_SERVER["DOCUMENT_ROOT"]."/inc/bottom.php";
?>