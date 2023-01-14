<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-weight: 300;
  
}
body {
  font-family: 'Source Sans Pro', sans-serif;
  color: white;

  font-weight: 300;
}
body ::-webkit-input-placeholder {
  /* WebKit browsers */
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  font-weight: 300;
}
body :-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  opacity: 1;
  font-weight: 300;
}
body ::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  opacity: 1;
  font-weight: 300;
}
body :-ms-input-placeholder {
  /* Internet Explorer 10+ */
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  font-weight: 300;
}
.wrapper {
  background: #50a3a2;
  background: linear-gradient(268deg,#0043ce,#000000);
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  height: 400px;
  margin-top: -200px;
  overflow: hidden;
}
.wrapper.form-success .container h1 {
          transform: translateY(85px);
}
.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 80px 0;
  height: 400px;
  text-align: center;
}
.container h1 {
  font-size: 40px;
  transition-duration: 1s;
  transition-timing-function: ease-in-     put;
  font-weight: 200;
}
form {
  padding: 20px 0;
  position: relative;
  z-index: 2;
}
form input {
          appearance: none;
  outline: 0;
  border: 1px solid rgba(255, 255, 255, 0.4);
  background-color: rgba(255, 255, 255, 0.2);
  width: 250px;
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 10px auto;
  display: block;
  text-align: center;
  font-size: 18px;
  color: white;
  -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;
  font-weight: 300;
}
form input:hover {
  background-color: rgba(255, 255, 255, 0.4);
}
form input:focus {
  background-color: white;
  width: 300px;
  color: #53e3a6;
}
form button {
          appearance: none;
  outline: 0;
  background-color: white;
  border: 0;
  padding: 10px 15px;
  color: #191ea9;
  border-radius: 3px;
  width: 250px;
  cursor: pointer;
  font-size: 18px;
  transition-duration: 0.25s;

}
form button:hover {
  background-color: #348de6;
}
.bg-bubbles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}
.bg-bubbles li {
  position: absolute;
  list-style: none;
  display: block;
  width: 40px;
  height: 40px;
  background-color: rgba(255, 255, 255, 0.15);
  bottom: -160px;
  animation: square 25s infinite; 
  transition-timing-function: linear;
}
.bg-bubbles li:nth-child(1) {
  left: 10%;
}
.bg-bubbles li:nth-child(2) {
  left: 20%;
  width: 80px;
  height: 80px;
  animation-delay: 2s;
  animation-duration: 17s;
}
.bg-bubbles li:nth-child(3) {
  left: 25%;
  animation-delay: 4s;
  
}
.bg-bubbles li:nth-child(4) {
  left: 40%;
  width: 60px;
  height: 60px;
  animation-duration: 22s;
  background-color: rgba(255, 255, 255, 0.25);
}
.bg-bubbles li:nth-child(5) {
  left: 70%;
}
.bg-bubbles li:nth-child(6) {
  left: 80%;
  width: 120px;
  height: 120px;
  animation-delay: 3s;
  background-color: rgba(255, 255, 255, 0.2);
}
.bg-bubbles li:nth-child(7) {
  left: 32%;
  width: 160px;
  height: 160px;
  animation-delay: 7s;
}
.bg-bubbles li:nth-child(8) {
  left: 55%;
  width: 20px;
  height: 20px;
  animation-delay: 15s;
  animation-duration: 40s;
}
.bg-bubbles li:nth-child(9) {
  left: 25%;
  width: 10px;
  height: 10px;
  animation-delay: 2s;
  animation-duration: 40s;
  background-color: rgba(255, 255, 255, 0.3);
}
.bg-bubbles li:nth-child(10) {
  left: 90%;
  width: 160px;
  height: 160px;
  animation-delay: 11s;        
}
@keyframes square {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-700px) rotate(600deg);
  }
}
@keyframes square {
  0% {
            transform: translateY(0);
  }
  100% {
            transform: translateY(-700px) rotate(600deg);
  }
}
#ribbon {
   position: relative;
   top:0px ;
   right: 0px;
}


</style>
<script>
     $("#login-button").click(function(event){
		 event.preventDefault();
	 
	 $('form').fadeOut(500);
	 $('.wrapper').addClass('form-success');
    })
</script>

<body>
    <div class="wrapper">
        <div id="ribbon">
            <img src="data:image/jpeg;base64,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8/mu9cuzN8O3nd3PIqib4zvUq3VRN8Z3qVbg6Z7aXB5cVrKF8ZjAgmbMczyM1gRlFgfnzVXU7LVEhqi0U43lZBVN/EdoyPJdp8HM5P3j99ki0ilYx2y1R+Jbhxmr2Vg/Ed8NuXw+5z8J/NTUuykkTaaJ0jDHDUy1Oe5zvD85DCLW/tCCb6gctdNaiQrIwbLzUWCywRSQlwkbuDIy4jp2yZ2t1B8QubGx5N00UUGytRAIyHwksrX1QBc/Vj2uBaTbmC7728r6bNEhWPpdl54q0TF0V21k1U1gkdlcyRmQtJy6EcwbFfKPZWalxKlmvC7JPVzvBedN9ezGeHkLg3NlsUSFUGB4AabZM0M+Uhwna7I42ySOcdLgcg632UeEYdXYXhMFI11MWxFjN8XOzGBp5bvLbNl0963mtGimFYzDdlJqOlkheKaQDid1K6STPaW9w5tiB72pF725L5BslOIYmEwANoH0Ti17j+IQPGBlFxp3W0RRCspQ7NysxSjmlbTkQ0xp3WcSc2ZpD23b5Ze/5+9kdnZcFbGyUQP3TXsZK17y9zCb6tOjeQvYm5C1CJCsljey82K1eIeONjKiGGNrg8lwdG5zvELWsc1jryH1UeN7Kz4sat5MAdM2lYGZ3FoET85cTl1JuW8uS2KJCqrHMOfW7OT00TYmmSN8YGYhrczSCdG62v8AIXVThWAT0NNTxCOkjyxtilmjkdnewNtoMgFy4A3JNtVq0SFYzCdl6qklw5r3U5ZSMnizNc7M9j2gB2UtsDprqoKTY+p4Wmikkha2KlqKXMx7i7xhoEguB08u63SJCsocFrH4M2MtoBMxsLGyBpN2xuBvq3w6AkCzgHG6gp9lain3RD4SY6yWqALn6ska4FpNuYL/AL28r6bJEhWPpNlp4a1sxdFdlXPUhgkdlcyRhblJy6EXuDYr5RbKzUmI0s14XbuasmeC8ixmvZjPCdBfmbea2KJCqfZLDJMGwGOnkLC5hk9xxIs55cOYHzt9lcIinBdIiLnaiIiAiIgIiICIiAqib4zvUq3VRN8Z3qVfhTp4REWqgiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiC6REXO2EREBERAREQEREBVE3xnepVuqib4zvUq/CvTwiItWYiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiC7REXO2EREBERAREQEREBQGmY43t3KIpxGnCs6e5ThWdPcoim6Q4VnT3KcKzp7lES6Q4VnT3KcKzp7lES6Q4VnT3KcKzp7lES6Q4VnT3KcKzp7lES6Q4VnT3KcKzp7lES6Q4VnT3KcKzp7lES6Q4VnT3KcKzp7lES6Q4VnT3KcKzp7lES6Q4VnT3KcKzp7lES6Q4VnT3KcKzp7lES6Q4VnT3KcKzp7lES6Q4VnT3KcKzp7lES6R//2Q==" alt="ibm logo" >
        </div>
      
      <div class="container">
            <h1>Welcome</h1>
            <form class="form" action='main.php'>
                <button type="submit" id="login-button">Register here first</button >
            </form>
            <form class='form' action='LLD.php'>
            <button type="submit" id="login-button">Submit LLD</button>
            </form>
        </div>
        
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</body>
</html>