<?php
session_start();
?>
<html>
  <head>
    <title>New Member Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      background: linear-gradient(268deg,#0043ce,#000000);
      }
      body, div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: rgb(255, 255, 255);
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: rgb(56, 51, 51);
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: o81a1c;
      box-shadow: 0 0 8px  #15eaea; 
      }
      
      
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: feComponentTransfer;
      }
      .banner::after {
      content: "";
      background-color: rgba(79, 107, 159, 0.292); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid rgb(145, 106, 106);
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      color:#020202;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #919797;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #070808;
      color: #070707;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid rgb(117, 53, 53);
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #121212;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #0e0f0f;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;

      }
     }
     .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
  margin-top : 20px;
}
.heading{
margin-top:-60px;
padding:60px;
color:#ffffff;
margin-left:-40px;
margin-bottom:10px;
}
textarea:focus,input:focus{
  color:#0043ce;
}
    </style>
  </head>

  <body>
    
  <img src="https://th.bing.com/th/id/R.e81fb7b6cfa72b79f1dec70f2ba07f41?rik=eIm%2fRTMNNjhdtg&riu=http%3a%2f%2fsvkm.phemesoft.com%2fpluginfile.php%2f1%2ftheme_croplms%2flogo%2f1578155163%2fIBM+ICE+program+logo_1.jpg&ehk=rjRhgz3kbgFC%2bqV2XXToRIaXXCyaypK6sDcihn3h%2fog%3d&risl=&pid=ImgRaw&r=0" alt="IBM LOGO" class="center">
  <?php
  $teamname=$_SESSION['teamname'];
  echo'
  <div class="testbox">
      <form method="post" action="store6.php">

      <div class="heading">
          <h1 style=color:#ffffff>Member 1</h1>
        </div>
        <div class="colums">
         
          <div class="item">
            <label for="name">Full Name<span>*</span></label>
            <input id="fname" type="text" name="name" required/>
          </div>
          <div class="item">
            <label for="phone">Phone<span>*</span></label>
            <input id="phone" type="tel"   name="phone" required/>
          </div>
          
          <div class="item">
            <label for="Team Name">Team Name<span>*</span></label>
            <input id="Team Name" type="text"   name="Team Name" value='.$teamname.' disabled/>
          </div>
         
          <div class="item">
            <label for="eaddress">Email Address<span>*</span></label>
            <input id="eaddress" type="text"   name="eaddress" required/>
          </div>

          
          <div class="heading">
          <h1 style=color:#ffffff>Member 2</h1>
        </div>
          <div class="item">
          <label for="name2">Full Name<span>*</span></label>
            <input id="fname2" type="text" name="name2" required/>
        </div>
        <div class="item">
            <label for="phone2">Phone<span>*</span></label>
            <input id="phone2" type="tel"   name="phone2" required/>
        </div>
          
        <div class="item">
            <label for="Team Name">Team Name<span>*</span></label>
            <input id="Team Name" type="text"   name="Team Name" value='.$teamname.' disabled/>
        </div>
         
        <div class="item">
            <label for="eaddress2">Email Address<span>*</span></label>
            <input id="eaddress2" type="text"   name="eaddress2" required/>
        </div>

       

        <div class="heading">
          <h1 style=color:#ffffff>Member 3</h1>
        </div>
        <div class="item">
          <label for="name3">Full Name<span>*</span></label>
            <input id="fname3" type="text" name="name3" required/>
        </div>
        <div class="item">
            <label for="phone3">Phone<span>*</span></label>
            <input id="phone3" type="tel"   name="phone3" required/>
        </div>
          
        <div class="item">
            <label for="Team Name">Team Name<span>*</span></label>
            <input id="Team Name" type="text"   name="Team Name" value='.$teamname.' disabled/>
        </div>
         
        <div class="item">
            <label for="eaddress3">Email Address<span>*</span></label>
            <input id="eaddress3" type="text"   name="eaddress3" required/>
        </div>


        <div class="heading">
          <h1 style=color:#ffffff>Member 4</h1>
        </div> 
        <div class="item">
          <label for="name4">Full Name<span>*</span></label>
            <input id="fname4" type="text" name="name4" required/>
        </div>
        <div class="item">
            <label for="phone4">Phone<span>*</span></label>
            <input id="phone4" type="tel"   name="phone4" required/>
        </div>
          
        <div class="item">
            <label for="Team Name">Team Name<span>*</span></label>
            <input id="Team Name" type="text"   name="Team Name" value='.$teamname.' disabled/>
        </div>
         
        <div class="item">
            <label for="eaddress4">Email Address<span>*</span></label>
            <input id="eaddress4" type="text"   name="eaddress4" required/>
        </div>


       
        <div class="heading">
          <h1 style=color:#ffffff>Member 5</h1>
        </div>
        <div class="item">
          <label for="name5">Full Name<span>*</span></label>
            <input id="fname5" type="text" name="name5" required/>
        </div>
        <div class="item">
            <label for="phone5">Phone<span>*</span></label>
            <input id="phone5" type="tel"   name="phone5" required/>
        </div>
          
        <div class="item">
            <label for="Team Name">Team Name<span>*</span></label>
            <input id="Team Name" type="text"   name="Team Name" value='.$teamname.' disabled/>
        </div>
         
        <div class="item">
            <label for="eaddress5">Email Address<span>*</span></label>
            <input id="eaddress5" type="text"   name="eaddress5" required/>
        </div>


        <div class="heading">
          <h1 style=color:#ffffff>Member 6</h1>
        </div>       
        <div class="item">
          <label for="name6">Full Name<span>*</span></label>
            <input id="fname6" type="text" name="name6" required/>
        </div>
        <div class="item">
            <label for="phone6">Phone<span>*</span></label>
            <input id="phone6" type="tel"   name="phone6" required/>
        </div>
          
        <div class="item">
            <label for="Team Name">Team Name<span>*</span></label>
            <input id="Team Name" type="text"   name="Team Name" value='.$teamname.' disabled/>
        </div>
         
        <div class="item">
            <label for="eaddress6">Email Address<span>*</span></label>
            <input id="eaddress6" type="text"   name="eaddress6" required/>
        </div>
          
        </div>
     
        <h2>Terms and Conditions</h2>
        <input type="checkbox" name="checkbox1">
        <label>You consent to receive communications from us electronically. We will communicate with you by e-mail or phone. You agree that all agreements, notices, disclosures and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing.</label>
        <div class="btn-block">
          <button type="submit" href="">Submit</button>
        </div>'
        ?>

      </form>
    </div>
  </body>
  </html>
  