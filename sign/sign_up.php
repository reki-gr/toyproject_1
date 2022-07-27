<?php
    include('../inc/head.php');
?>

<script src="signUp.js"></script>

<h2>Sign Up</h2>

<form action="sign_up_ok.php" name="signUpForm" method="post" class="sign_up">
    <div>
        <input type="text" name="user_id" id="user_id" placeholder="아이디">
    </div>
    <div>
        <input type="password" name="user_password" id="user_password" placeholder="패스워드">
    </div>
    <div>
        <input type="text" name="user_name" id="user_name" placeholder="이름">
    </div>
    <div>
        <input type="email" name="user_email" id="user_email" placeholder="이메일">
    </div>
    <div>
        <span class="user_phone">
            <select name="user_phone_1" id="user_phone_1">
                <option value=""></option>
            </select>
            <input type="tel" name="user_phone_2" id="user_phone_2" placeholder="휴대폰 번호">
            <input type="tel" name="user_phone_3" id="user_phone_3">
        </span>
    </div>
    <div>
        <input type="text" name="user_check" placeholder="???" id="user_check">
    </div>
    <div>
        <button type="button" id="sign_up_submit" onclick="signUpSubmit();">가입하기</button>
    </div>
</form>

<?php
    include('../inc/bottom.php');
?>