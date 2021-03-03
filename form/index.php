
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
    <input type="email" name="email" id="email" required placeholder="E-mail">
    <input type="submit" name="submit" id="submit" value="submit">
    <script>
        $(document).ready(function(){
        $("#submit").focusin(function(){
            var fname  = $("#first_name").val();
            var lname   = $("#last_name").val();
            var email       = $("#email").val();
            var submit       = $("#submit").val();
            $.ajax({
              type: "POST",
              url:    "form.php",
              data: { "fname": fname, "lname": lname, "email": email, "submit": submit},
              
              success: function(data){
                    alert(data);
                }
                             
             });
          });
        });
    </script>
  </form>
</div>

</body>
</html>
