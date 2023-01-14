<!DOCTYPE html>
<html>
  <head>
    <title>Educational registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <style>

      html, body {
      min-height: 100%;
      background: linear-gradient(268deg,#0043ce,#000000);
      
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: rgb(239, 234, 234);
      
;
      }
      body {
      background: url("/uploads/media/default/0001/01/b5edc1bad4dc8c20291c8394527cb2c5b43ee13c.jpeg") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 10px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      width: 500px;
      
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
      
    </style>
     
  </head>
  <body>
    
    <div class="main-block">
      <div class="left-part">
        <img src="https://th.bing.com/th/id/R.e81fb7b6cfa72b79f1dec70f2ba07f41?rik=eIm%2fRTMNNjhdtg&riu=http%3a%2f%2fsvkm.phemesoft.com%2fpluginfile.php%2f1%2ftheme_croplms%2flogo%2f1578155163%2fIBM+ICE+program+logo_1.jpg&ehk=rjRhgz3kbgFC%2bqV2XXToRIaXXCyaypK6sDcihn3h%2fog%3d&risl=&pid=ImgRaw&r=0" alt="IBM LOGO">
        <h1>Register to our hackathon</h1>
        <p>rules.</p>
        <div class="btn-group">
          <a class="btn-item" href="https://ibmhackathons.theanalytix.in/"> Visit UPES  </a>  
        </div>
      </div>
      <form method ="post" action="validate.php" id='form1'>
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="teamname" placeholder="Team Full name" required>
          <input type="text" name="email" placeholder="Email" required>
          <input type="text" name="number" placeholder="Phone number" required>
          <input type="text" name="leader_name" placeholder="Team Leader Name">
          <select name='college'>
            <option value="college name" selected>College name*</option>           
            <option value="UPES">UPES</option>
            <option value="KARE">KARE</option>
            <option value="SRHU">SRHU</option>
            <option value="AURO">AURO</option>
            <option value="SRI SAI">SRI SRI</option>
            <option value="SRI SAI">SRI SAI</option>
            <option value="YENEPOYA">YENEPOYA</option>
            <option value="GLA">GLA</option>
            <option value="LR TIWARI">LR TIWARI</option>
            <option value="VALIA">VALIA</option>
            <option value="STAREX">STAREX</option>
            <option value="MRIU">MRIU</option>
            <option value="WE SCHOOL">WE SCHOOL</option>
            <option value="HITS">HITS</option>
            <option value="SVKM">SVKM GROUP</option>
            <option value="VISHWAKARMA">VISHWAKARAM UNIVERSITY</option>
            <option value="OP JINDAL">OP JINDAL</option>
            <option value="SOMIYA">SOMIYA</option>  
          </select>
        </div>
        <div>
         <select id="mem" name="mem">
          <option>No. of team members</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
        </div>
        <div>
          <button type="submit" form='form1' value='submit'>Submit</button>
        </div>  
      </form>
    </div>
  </body>
</html>