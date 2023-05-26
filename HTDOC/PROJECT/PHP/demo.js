$("#user_photo").submit(function (e) { 
    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "User_profile_update.php",
        data: $(this).serialize(),
        success: function (response) {
            alert(status)
            
        }
    });
    
});

document.getElementsByName