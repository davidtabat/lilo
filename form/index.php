
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 <div class="center">
     <div class="container">
  <form id="myform">
    <input type="text" name="fname" id="first_name" required placeholder="First Name">
    <input type="text" name="lname" id="last_name" required placeholder="Last Name">
    <input type="email" name="email" id="email" required placeholder="E-mail">
    <div id="div1"></div>
      
  </form>
         <button id="submit">Submit</button>
     </div>
     
     <script>
        $(document).ready(function(){
        $("button").click(function(){
            var fname  = $("#first_name").val();
            var lname   = $("#last_name").val();
            var email       = $("#email").val();
            var submit       = $("#submit").val();
            $.ajax({
              type: "POST",
              url:    "form.php",
              data: { "fname": fname, "lname": lname, "email": email, "submit": submit},
              
              success: function(data){
                  if(data==1) {
                      $("#div1").css('color', '#2ed573');
                      $("#div1").html("New record was created succesfully");
                      $("#myform")[0].reset();
                    }
                  else {
                      $("#div1").css('color', '#ff4757');
                      $("#div1").html(data);
                  }
                }
                             
             });
            
            $.ajax({
              type: "POST",
              url:    "mailtest.php",
              data: { "fname": fname, "lname": lname, "email": email, "submit": submit}, 
                
             });
            
          });
        });
    </script>
</div>
</body>
</html>
