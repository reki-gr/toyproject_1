    // Include regular expression
    document.write('<script src="/js/regExp.js"></script>');

    // Define variable
    let signInForm      = document.querySelector('#signInForm');
    let userId          = document.querySelector('#user_id');
    let userPassWord    = document.querySelector('#user_password');

// Login Submit
function signInSubmit () {
    // User id
    if (userId.value.trim() == "") {
        alert("아이디를 입력해주세요.");
        userId.focus();
        return false;
    } else if (!regExpId.test(userId.value.trim())) {
        alert('아이디는 영문, 숫자, 하이픈과 언더바만 가능하며, 4~20자리 이내로 입력해주세요.')
        userId.value = "";
        userId.focus();
        return false;
    }

    // User password
    if (userPassWord.value.trim() == "") {
        alert('패스워드를 입력해주세요.');
        userPassWord.focus();
        return false;
    } else if (!regExpPassWord.test(userPassWord.value.trim())) {
        alert('패스워드가 올바르지 않습니다.');
        userPassWord.value = "";
        userPassWord.focus();
        return false;
    }

    signInForm.submit();
}