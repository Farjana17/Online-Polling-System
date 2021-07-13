function handleForm() {
    event.preventDefault()

    var password = document.forms["myForm"]["password"].value
    var repeatPassword = document.forms["myForm"]["repeatPassword"].value

    if(password != repeatPassword)
    {
        var x = document.getElementById("passwordAlert")
        x.innerHTML = "Passwords Do Not Match !"
    }
    else
    {
        var x = document.getElementById("passwordAlert")
        x.innerHTML = ""
    }

    var formData = {
        name: document.forms["myForm"]["name"].value,
        email: document.forms["myForm"]["email"].value,
        password: password,
        age: document.forms["myForm"]["age"].value,
        country: document.forms["myForm"]["country"].value,
        city: document.forms["myForm"]["city"].value
    }

    sendData(formData)
}

function sendData(formData) {
    var text = JSON.stringify(formData)

    var ajax = new XMLHttpRequest()


    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4 && ajax.status == 200)
        {
            var response = ajax.responseText
            var x = document.getElementById("confirmation")
            x.innerHTML = response
        }
    }


    ajax.open("POST", "signup.php", true)
    ajax.setRequestHeader("content-type", "application/x-www-form-urlencoded")
    ajax.send("formData=" + text)
}