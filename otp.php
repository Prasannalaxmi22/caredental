<!DOCTYPE html>
<html>
    <head>
       <style>
           .otpform{
               margin-top: 20%;
               margin-left: 60%px;
               margin-right: 50%px;
           }
           div{
               background-color: white;
           }
           body{
               background-color: black;
           }
           button{
               font-size: 20px;
           }
           input{
               font-size: 20px;
               
               border-color: black;
           }

       </style>
    </head>
    <body>
        <div class="otpform" align="center">
        <form method="POST" action="otpsend.php">
        <h2>please enter your email</h2>
        <input type="email" name="email" id="email">
        <br>
        <br>
        <button value="submit" type="submit">submit</button>
        </form>
        </div>
    </body>
</html>