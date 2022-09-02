$(document).readt(function(){
    $("#signup").click(function(){
        const name = $("#name").val();
        const email = $("#email").val();
        const password = $("#password").val();
        if(name.lenght == ""){
            $(".name").addClass("is-invalid");
        } else {
            $(".name").removeClass("is-invalid");
        }
        if(email.length == ""){
            $(".email").addClass("is-invalid");
        } else {
            $(".email").removeClass("is-invalid");
        }
        if(password.length == ""){
            $(".password").addClass("is-invalid");
        } else {
            $(".password").removeClass("is-invalid");
        }
        }
        }
        if(name.length != "" && email.length != "" && password.length != ""){
            $.ajax({
                type:"POST",
                url:"signup.php",
                data:{"name": name, "email": email, 'password':password},
                dataType: 'JSON',
                success : function(feedback){
                    if(feedback.status ==="error"){
                        $(".email").addClass("is_invalid");
                        $(".emailError").html(feedback.message);
                    } else if(feedback.status === "success"){
                        window.location = "login.php";
                    }

                }
            })
        }

        $("#login").click(function(){
            const email = $("#email").val();
            const password = $("#password").val();
            if(email.length == ""){
                $(".email").addClass("is-invalid");
            } else {
                $(".email").removeClass("is-invalid");
            }
        })
    })
})