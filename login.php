<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
 
<style>
    
 .user-container {
    background: linear-gradient(rgba(0, 0, 0, 0.5), transparent);
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 130vh;
    display: flex;
    align-items: center;
    justify-content: center;

}

.user-form-box{
    width: 90%;
    max-width:450px;
    min-width: 350px;
    background-color: #fff;
    padding: 55px;
    text-align: center;
    border-radius: 10px;
    box-shadow: -2px 2px 15px rgba(0, 0, 0, 0.5);
    height: 110vh;
}
.user-form-box h1{
    color: #d37c35;
    font-size: 30px;
}
.user-form-box .under-line{
    width: 30px;
    height: 4px;
    background: #d37c35;
    margin: 10px auto 50px auto;
    border-radius: 5px;
    transition: transform .5s;
}
.input-field{
    background: #eaeaea;
    margin: 15px 0;
    border-radius: 10px;
    display: flex;
   align-items: center;
   max-height: 60px;
   transition: max-height 0.5s;
   overflow: hidden;
}
.user-input-group{
    height: 280px;
}
.user-input-group .input-field input{
    width: 100%;
    background: transparent;
    border: 0;
    outline: 0;
    padding: 18px 15px;

}
.user-input-group .input-field i{
    margin-left: 15px;
    color: #999;
}
.user-form-box form p 
{
    text-align: left;
    font-size: 13px;
}
.user-form-box form p  a
{
text-decoration: none;

}
.form-control{
    width: 100%;
    padding: 12px 15px;
}
.btn-field{
    width: 100%;
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}
.btn-field button{
   flex-basis: 48%;
   background: #d37c35;
   color: #fff;
   border: 0;
   outline: none;
   cursor: pointer;
   height: 40px;
   border-radius: 20px;
   transition: background 1s;
   
}
.btn-field button.disable{
    background: #eaeaea;
    color:#555;
}
.form-label{
    font-weight: 500;
}


</style>
<body>
  <!-- ==========navbar start========= -->
<?php
include_once "nav.php"
?>
<!-- =========banner section startt===== -->
<section>
    <div class="user-container">
        <div class="user-form-box">
         <h1 class="title">Sign up</h1>
         <div class="under-line"></div>
         <form >
             <div class="user-input-group">
               <div class="input-field namefield">
                 <i class="fa-solid fa-user"></i>
                 <input type="text" id="name" required placeholder="Name"/>
               </div>
               <div class="input-field">
                 <i class="fa-solid fa-at"></i>
                 <input type="text" id="email" required placeholder="Email"/>
               </div>
                 <div class="input-field">
                   <i class="fa-solid fa-key"></i>
                   <input type="password" id="password" required placeholder="Password"/>
                 </div>   
                 <div id="cardDetails">
                  <div class="mb-3">
                    <label for="cardNumber" class="form-label">Card Number</label>
                    <input type="text" class="form-control" id="cardNumber" placeholder="Enter Card Number">
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="expMonth" class="form-label">Expiration Month</label>
                      <input type="text" class="form-control" id="expMonth" placeholder="MM">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="expYear" class="form-label">Expiration Year</label>
                      <input type="text" class="form-control" id="expYear" placeholder="YYYY">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cvv" placeholder="Enter CVV">
                  </div>
                </div>
                 <p><a href="">Forget your Password? </a></p>
               <div class="btn-field">
                 <button type="button" class="signupbtn">Sign up</button>
                 <button type="button" class="disable signinbtn">Sign in</button>
               </div>    
             </div>  
               
         </form>
     </div>
     </div>
</section>


<!-- ======footer section startt====== -->
<?php
 include_once 'footer.php'
?>


    
   
    



<script>
 let signupbtn = document.querySelector('.signupbtn');
let signinbtn = document.querySelector(".signinbtn");
let title = document.querySelector(".title");
let underline = document.querySelector(".under-line");
let nameField = document.querySelector('.namefield'); // Rename this variable
let cardDetails = document.getElementById('cardDetails');
let userFormBox = document.querySelector('.user-form-box');

signinbtn.addEventListener("click", () => {
    nameField.style.maxHeight = '0';
    title.innerHTML = "Sign in";
    signupbtn.classList.add('disable');
    signinbtn.classList.remove('disable');
    underline.style.transform = "translateX(35px)";
    cardDetails.style.display = 'none';
    userFormBox.style.height = '70vh';
});

signupbtn.addEventListener("click", () => {
    nameField.style.maxHeight = '60px';
    title.innerHTML = "Sign Up";
    signinbtn.classList.add('disable');
    signupbtn.classList.remove('disable');
    underline.style.transform = "translateX(0px)";
    cardDetails.style.display = 'block';
    userFormBox.style.height = '110vh';
    var nameValue = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var cardNumber = document.getElementById("cardNumber").value;
    var expMonth = document.getElementById("expMonth").value;
    var expYear = document.getElementById("expYear").value;
    var cvv = document.getElementById("cvv").value;
    if (nameValue === "") {
        alert("Please enter your name");
        return false;
    }

    if (email === "") {
        alert("Please enter your email");
        return false;
    }

    if (password === "") {
        alert("Please enter your password");
        return false;
    }

    if (cardNumber === "") {
        alert("Please enter your card number");
        return false;
    }

    if (expMonth === "") {
        alert("Please enter the expiration month");
        return false;
    }

    if (expYear === "") {
        alert("Please enter the expiration year");
        return false;
    }

    if (cvv === "") {
        alert("Please enter the CVV");
        return false;
    }
    
});



    
</script>
</body>
</html>