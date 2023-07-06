<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
  background-image: url(img2.jpg.webp);
    height: 100vh;
    background-size: cover;
    background-position: center;
    }
    .container{
        position:absolute;
        top: 50%;
        left: 50%;
        transform:translate(-50%,-50%);
        background-color: rgba(0,0,0,0.4);
        padding: 6%;
        color: aliceblue;
    }
    ul li{
    display: inline-block;
}
ul li a{
    color: beige;
    padding:  8px 20px;
    border: 1px solid #fff
}
ul li a:hover{
    background-color: aliceblue;
    color:black;
}
      
</style>
</head>
<body>
<ul>
<li><a  href="index.html"> HOME </a></li>
</ul>
    <form action="dbconn.php"  method="post">
        <div class="container">
            <h1> Log In</h1>
            <hr><br>
          
          <label for="email"><b>EMAIL</b></label><br><br>
          <input type="text" placeholder="Enter Email" name="email" id="email" required><br><br>
        
      
          <label for="psw"><b>PASSWORD</b></label><br><br>
          <input type="password" placeholder="Enter Password" name="password" id="psw" required><br><br>
          <button type="submit" >LOGIN</button>


          <li><a href="index.php"> forgot password </a></li>
          </div>
</body>
</html>

