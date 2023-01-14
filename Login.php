<!DOCTYPE html>
<html>
  <title>Login</title>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      color: rgb(241, 232, 232);
      background: linear-gradient(268deg,#0043ce,#000000);
      }
      form {
        box-shadow: 0 0 8px  #15eaea; 
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      .icon {
      font-size: 110px;
      display: flex;
      justify-content: center;
      color: #4286f4;
      border-radius: 50%;
      
      }
      button {
      background-color: #4286f4;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 48%;
      box-shadow: 0 0 8px  #15eaea; 
      }
      h1 {
      text-align:center;
      font-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
      border-radius: 5px;
      }
      .container {
      padding: 16px 0;
      margin-top: 20px;
      text-align:left;
      color: rgb(64, 0, 255);
      border-radius: 5px;
      }
      .teampass{
        color: beige;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
      .google{
      background: #d34836;
      }
      .block-item.right {
      border-left: 1px solid #aaa;
      }
      i {
      width: 50px;
      font-size: 24px;
      }
      .center {
  text-align: center;
      }
}
    </style>
  </head>
  <body>
  
    <form action="/action_page.php">
      <h1>LOGIN</h1>
      <div class="icon">
       <!-- <i class="fas fa-user-circle"></i>-->
        <img src="https://media0.giphy.com/media/2ikwIgNrmPZICNmRyX/200w.webp?cid=ecf05e47mou3n886kgog9op18101cbild0vah3ipxp6n6qos&rid=200w.webp&ct=g alt="gif">
      </div>
      <div class="formcontainer">
      <div class="container">
        <div class="teampass">
        <label for="tname"><strong><i>Teamname</strong></i> </label>
        <input type="text" placeholder="Enter Teamname" name="tname" required >
        
        <label for="psw"><strong><i>Password</strong></i></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
      </div></div>
      <button type="submit"><strong>LOGIN</strong></button><br>
      <button class="btn google" data-provider="google"><i class="fab fa-google"></i><span>Google</span></button>
      <div class="container" style="background-color: rgb(237, 238, 244)">
        <label style="padding-left: 15px">
        <input type="checkbox"  checked="checked" name="remember"> Remember me
        </label>
        <span class="psw"><a href="#">Forgot password?</a></span>
      </div>
    </form>
  </body>
</html>
