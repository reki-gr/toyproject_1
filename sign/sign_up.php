<?php
    include('../inc/head.php');
?>

<h2>Sign Up</h2>

<form action="sign_up_ok.php" name="signUpForm" id="signUpForm" method="post" class="sign_up">
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
        <?=emailDomain("name=user_email_1")?>
        <input type="email" name="user_email_2" id="user_email_2" placeholder="이메일" required>
    </div>
    <div>
        <span class="user_phone">
            <span id="user_phone_1">
            <?=firstMobileNumber("name=user_phone_1")?>
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
    </div>
</form>

<script src="signUp.js"></script>

<?php
    include('../inc/bottom.php');
?>