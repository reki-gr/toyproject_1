// Include regular expression
    document.write('<script src="/js/regExp.js"></script>');

// Define variable
    // Selector
    let signUpForm      = document.querySelector('#signUpForm');
    let emailDomain     = document.querySelector('#email_domain');

    let userId          = document.querySelector('#user_id');
    let userPassWord    = document.querySelector('#user_password');
    let userName        = document.querySelector('#user_name');
    let userEmail_1     = document.querySelector('#user_email_1');
    let userEmail_2     = document.querySelector('#user_email_2');
    let userPhone_1     = document.querySelector('#user_phone_1');
    let userPhone_2     = document.querySelector('#user_phone_2');
    let userPhone_3     = document.querySelector('#user_phone_3');
    let userCheck       = document.querySelector('#user_check');

// Sign up submit
function signUpSubmit () {
    // User id
    if (userId.value.trim() == "") {
        alert('아이디를 입력해주세요.');
        userId.focus();
        return false;
    } else if (!regExpId.test(userId.value.trim())) {
        alert('아이디는 영문, 숫자, 하이픈과 언더바만 가능하며, 4~20자리 이내로 정해주세요.')
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
        alert('패스워드는 영문, 숫자, 특수문자를 조합해 8~20자리만 가능합니다.');
        userPassWord.value = "";
        userPassWord.focus();
        return false;
    }

    // User name
    if (userName.value.trim() == "") {
        alert('이름을 입력해주세요.');
        userName.focus();
        return false;
    } else if (!regExpName.test(userName.value.trim())) {
        alert('이름은 한글 또는 영문으로 2~15자리만 가능합니다.');
        userName.value = "";
        userName.focus();
        return false;
    }

    // User email
    if (userEmail_1.value.trim() == "" || userEmail_2.value.trim() == "") {
        alert('이메일을 입력해주세요.');
        userEmail_1.focus();
        return false;
    } else if (!regExpEmail.test(userEmail_1.value.trim())) {
        alert('이메일은 영문, 숫자, 하이픈과 언더바만 가능합니다.');
        userEmail_1.value = "";
        userEmail_1.focus();
        return false;
    }

    // User phone
    if (userPhone_2.value.trim() == "" || userPhone_3.value.trim() == "") {
        alert('휴대폰 번호를 입력해주세요.');
        userPhone_2.value = "";
        userPhone_3.value = "";
        userPhone_2.focus();
        return false;
    } else if (!regExpPhone.test(userPhone_2.value.trim()) || !regExpPhone.test(userPhone_3.value.trim())) {
        alert('휴대폰 번호는 숫자만 입력 가능합니다.');
        userPhone_2.value = "";
        userPhone_3.value = "";
        userPhone_2.focus();
        return false;
    }

    // User check
    if (userCheck.value.trim() == "") {
        alert('회원체크란을 입력해주세요.');
        userCheck.focus();
        return false;
    }

    // Sign up submit
    signUpForm.submit(); 
}

// Domain auto input
function emailDirectInput () {
    if (emailDomain.value == "direct" || emailDomain.value == "") {
        userEmail_2.removeAttribute('readonly');
        userEmail_2.removeAttribute('disabled');
        userEmail_2.value = "";
    } else {
        userEmail_2.setAttribute('readonly', 'true');
        userEmail_2.setAttribute('disabled', 'true');
        userEmail_2.value = emailDomain.value;
    }
}

