//name validation 
function name_validation(){
    'use strict';

    var userid_name = document.getElementById("nameid");
    var userid_value = document.getElementById("nameid").value;
    var userid_length = userid_value.length;
    if(userid_length<7 || userid_length>30 )
    {
    document.getElementById('name_err').innerHTML = 'Value must not be less than 7 characters and greater than 30 characters';
    userid_name.focus();
    document.getElementById('name_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('name_err').innerHTML = 'Valid name';
    document.getElementById('name_err').style.color = "#00AF33";
    }
    }

    //color validation 
function Color_validation(){
    'use strict';

    var letters = /^[A-Za-z]+$/;
    var userid_name = document.getElementById("colorid");
    var userid_value = document.getElementById("colorid").value;
    if(!userid_value.match(letters))
    {
    document.getElementById('COLOR_err').innerHTML = 'Value must only contain letters';
    userid_name.focus();
    document.getElementById('COLOR_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('COLOR_err').innerHTML = 'Valid color';
    document.getElementById('COLOR_err').style.color = "#00AF33";
    }
    }

  //price validation DO:MUST NOT CONTAIN NUMBERS
  function Price_validation(){
    'use strict';
    
    // var letters = "/^[A-Z][a-zA-Z -]+$/";
    var price_name = document.getElementById("priceid");
    var price_value = document.getElementById("priceid").value;
    if(price_value<1 || price_value>50000 
        // || userid_value.match(letters)
    
    )
    {
    document.getElementById('price_err').innerHTML = 'Value must not be less than 1 and greater than 50000';
    price_name.focus();
    document.getElementById('price_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('price_err').innerHTML = 'Valid price';
    document.getElementById('price_err').style.color = "#00AF33";
    }
    }