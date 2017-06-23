
$("#form").submit(function(e) {
    $.ajax({
           type: "POST",
           url: "email.php",
           data: $("#form").serialize(),
           success: function(responce)
           {
                $('#result').html('Результат: ' + responce); 
           }
         });

    e.preventDefault();
});