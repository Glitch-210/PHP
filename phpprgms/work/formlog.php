<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
</head>
<style>
     *{
        margin: 0;
        padding: 0;

    }
    html,body{
       height:100%;
	   width:100%;
        align-items: center;
        justify-content: center;
         background-color: rgb(22, 107, 63); 

     } 
   
   
    form{
        height: 50%;
        width: 30%;
         background-color: red; 
         background-color:rgba(47, 0, 255, 0.213);
        backdrop-filter: blur(10px);
        box-shadow: 10px 10px 10px black;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center; 
         gap: 20px;
        
    }

    form .log{
        width: 50%;
        padding: 0px 10px;
    } 
     form .sub{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
        margin-right: 22px; 
        gap: 2vw;
    }
    form .sub input{
         height: 20px;
        width: 80px;    
    
        border-radius: 2rem;
       
        
    } 
</style>
<body>
    
    <form action="">
    <h1>Login Page</h1>
        <div class="log">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        </div>
        <div class="log">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass">
        </div>
        <div class="log">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="log">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass">
        </div>
        <div class="sub">
            <input type="submit" value="Login">
            <a href="signin.php">sign in?</a>
        </div>
        
    </form>
   
</body>
</html>