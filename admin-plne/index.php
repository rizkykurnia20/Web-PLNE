  <!doctype html>

  <head> 
    <meta charset=utf-8> <link rel=dns-prefetch href="http://fonts.googleapis.com/">
    <meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
    <title>Admin - PT PLN Enjiniring</title>
    <!--link rel="shortcut icon" href="../favicon.png" /-->
    <!--meta name=description content=""> <meta name=author content=""--> 
    <meta name=viewport content="width=device-width,initial-scale=1"> 

    <link rel="shortcut icon" href="../favicon.png">

    <!-- <link rel=stylesheet href='css/zalstyle.css'> -->
    <link rel=stylesheet href='css/style.css'> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <script src="js/libs/modernizr-2.0.6.min.js"></script> 

  </head> 
  <body>

    <div class="container">
      <div class="img">
        <img src="images/bg-side.svg">
      </div>
      <div class="login-content">
        <form id=login-box class="block-content form" action="cek_login.php" method="post">
          <img src="images/pln3.png">
          <div class="input-div one">
           <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>Username</h5>
            <input type="text" name="username" class="required">
          </div>
        </div>
        <div class="input-div pass">
         <div class="i"> 
          <i class="fas fa-lock"></i>
        </div>
        <div class="div">
          <h5>Password</h5>
          <input type="password" name="password" class="required">
        </div>
      </div>
      <a href="#">Forgot Password?</a>
      <input type="submit" class="btn" value="Login">
    </form>
  </div>
</div>
<script type="text/javascript">
const inputs = document.querySelectorAll(".required");


function addcl(){
  let parent = this.parentNode.parentNode;
  parent.classList.add("focus");
}

function remcl(){
  let parent = this.parentNode.parentNode;
  if(this.value == ""){
    parent.classList.remove("focus");
  }
}


inputs.forEach(input => {
  input.addEventListener("focus", addcl);
  input.addEventListener("blur", remcl);
});

</script>

<!-- ================================================ -->
   <!-- <div id=container> 

    <section id=login-box> 
      <div class=avatar> 
        <img src="../wijaya2/img/logobundar.png"> 
      </div> 

      <form id=login-box class="block-content form" action="cek_login.php" method="post">  
        <p class=inline-small-label> 
          <label for=username>Username</label> 
          <input type=text name="username" value="" class=required>
        </p> 
        <p class=inline-small-label> 
          <label for=password>Password</label>
          <input type=password name="password" value="" class=required> 
        </p> 
        <p> </p> 
        <div class=clear></div>
        <div class=block-actions>
         <ul class=actions-left> 
          <li><a class="button red" id=reset-login href="javascript:void(0);">BATAL</a></li></ul> 
          <ul class=actions-right>
            <li><input type=submit class=button value=&nbsp;&nbsp;LOGIN&nbsp;&nbsp;></li>
          </ul>
        </div>
      </form> 
    </section> 
  </div>
  
</div>  -->


<script src="js/jquery.min.js"></script> 
<script>window.jQuery||document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>'); </script> 
<script defer src='js/zal.js'></script>  

</body>
</html>