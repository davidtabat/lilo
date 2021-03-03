
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 <div class="center">
  <form>
    <input type="text" name="fname" id="first_name" required placeholder="First Name">
    <input type="text" name="lname" id="last_name" required placeholder="Last Name">
    <input type="text" name="email" id="email" required placeholder="E-mail">
    <input id="submit" type="submit" name="insert" value="Submit">
    <div id="div1"></div>
    <script>
        $("form").submit(function(){
            var fname  = $("#first_name").val();
            var lname   = $("#last_name").val();
            var email       = $("#email").val();

            $.ajax({
              type: "POST",
              url:    "form.php",
              data: { "fname": fname, "lname": lname, "email": email},
              
              success: function(data){
                    $("#div1").html(data);
                }
                             
             });
          });
            
    </script>
  </form>
</div>

</body>
</html>
