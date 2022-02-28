//add clothes name validation 
function userid_validation(){
    'use strict';
    var letters = /^[A-Za-z]+$/;
    var userid_name = document.getElementById("userid");
    var userid_value = document.getElementById("userid").value;
    var userid_length = userid_value.length;
    if(userid_length<7 || userid_length>12 
        // || !userid_value.match(letters)
    
    )
    {
    document.getElementById('uid_err').innerHTML = 'Value must not be less than 7 characters and greater than 12 characters';
    userid_name.focus();
    document.getElementById('uid_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('uid_err').innerHTML = 'Valid user id';
    document.getElementById('uid_err').style.color = "#00AF33";
    }
    }

    //add clothes color validation 
function Color_validation(){
    'use strict';
    var letters = /^[A-Za-z]+$/;
    var userid_name = document.getElementById("colorid");
    var userid_value = document.getElementById("colorid").value;
 
    if(!userid_value.match(letters)
    
    )
    {
    document.getElementById('COLOR_err').innerHTML = 'Value must only contain letters';
    userid_name.focus();
    document.getElementById('COLOR_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('COLOR_err').innerHTML = 'Valid user id';
    document.getElementById('COLOR_err').style.color = "#00AF33";
    }
    }