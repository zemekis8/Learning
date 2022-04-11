function validate(form){
    let fail = validateForename(form.forename.value);
    fail += validateSurname(form.surname.value);
    fail += validateUsername(form.username.value);
    fail += validatePassword(form.password.value);
    fail += validateAge(form.age.value);
    fail += validateEmail(form.email.value);
    if (fail == "") {
        return true;
    }
    else {
        // alert(fail);
        return false;
    }
}
function validateForename(fail){
    return fail == "" ?  "Не введено Имя \n" : "" ;
}
function validateSurname(fail){
    return fail == "" ? "Не введена Фамилия \n" : "" ;
}
function validateUsername(fail){
    if (fail == ""){
        return "Не введено Имя пользователя \n" ;
    } else if(fail.length < 2){
        return "Имя пользователя слишком короткое \n" ;
    } else if(/[^a-zA-Z0-9_-]/.test(fail)){
        return "Строка-Имя пользователя, имеет запрещенные символы \n";
    }
    return "";
}
function validatePassword(fail){
    if (fail == ""){
        return "Не введен пароль \n";
    }else if(fail.length < 7 ){
        return "Пароль слишком которкий \n";
    }else if(!/[a-z]/.test(fail) || ! /[A-Z]/.test(fail) || !/[0-9]/.test(fail)){
        return "Строка Пароль, имеет запрещенные символы \n";
    }
    return "";
}
function validateAge(fail){
    if (fail == "" || isNaN(fail)){
        return "Не введен возвраст \n";
    }else if(fail < 18 || fail > 110){
        return "Неверно введен возвсраст \n";
    }
    return "";
}
function validateEmail(fail) {
    if (fail == "") return "Не введен адрес электронной почты.\n"
    else if (!((fail.indexOf(".") > 0) &&
            (fail.indexOf("@") > 0)) ||
        /[^a-zA-Z0-9.@_-]/.test(fail))
        return "Электронный адрес имеет неверный формат.\n"
    return ""
}