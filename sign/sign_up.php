<?php
    include('../inc/head.php');
?>

<script defer src="/js/signUp.js"></script>

<h2>Sign Up</h2>

<form action="sign_up_ok.php" name="signUpForm" id="signUpForm" method="POST" class="sign_up">
    <div>
        <input type="text" name="user_id" id="user_id" placeholder="아이디" required>
    </div>
    <div>
        <input type="password" name="user_password" id="user_password" placeholder="패스워드" required>
    </div>
    <div>   
        <input type="text" name="user_name" id="user_name" placeholder="이름" maxlength="6" required>
    </div>
    <div>
        <input type="email" name="user_email_1" id="user_email_1" placeholder="이메일" required>
        <span>@</span>
        <?=emailDomain("email_domain", "email_domain")?>
        <input type="email" name="user_email_2" id="user_email_2" placeholder="직접입력" required readonly disabled>
    </div>
    <div>
        <span class="user_phone">
            <span id="user_phone_1">
            <?=firstMobileNumber("user_phone_1")?>
            </span>
            <input type="tel" name="user_phone_2" id="user_phone_2" placeholder="휴대폰 번호" required>
            <input type="tel" name="user_phone_3" id="user_phone_3" required>
        </span>
    </div>
    <div>
        <input type="text" name="user_check" placeholder="???" id="user_check" required>
    </div>
    <div>
        <button type="button" id="sign_up_submit" onclick="signUpSubmit();">가입하기</button>
        <button type="button" id="history_back" onclick="javascript:history.back();">뒤로가기</button>
    </div>
</form>

<?php
    include('../inc/bottom.php');
?>