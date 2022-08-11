
// Regular expression
const regExpId        = /^[a-z0-9_-]{4,20}$/;                                      // 영문 + 숫자 + 하이픈,언더바
const regExpPassWord  = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,20}$/;    // 영문 + 숫자 + 특수문자
const regExpName      = /^[가-힣a-zA-Z]{2,15}$/;
const regExpEmail     = regExpId;
const regExpPhone     = /^(?=.*[0-9]).{4}$/;                                       // 숫자