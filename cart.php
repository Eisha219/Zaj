<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
<style>
.product_name{
    text-transform: uppercase;
}
</style>
<body>
    <!-- ==========navbar start========= -->
<?php
include_once "nav.php"
?>

<body >
<div class="container-fluid shopping-cart">
<div class="row">

<div class="col-md-10 col-11 mx-auto">
<div class="row mt-5 gx-3">
<div class="container">
<h2 class="section-subheading">Shopping Cart</h2>
</div>
<!-- left side div -->
<div class="col-md-12 col-lg-12 col-11 mx-auto main_cart mb-lg-0 mb-5 ">
<div class="card shopping-card p-4 shadow">
<div class="row">
<!-- cart images div -->
<div class="col-md-4 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
<img src="images/ringsphoto/blue.png" class="card-img-top" alt="Image 1">
</div>
<!-- cart product details -->
<div class="col-md-8 col-11 mx-auto px-4 mt-2">
<div class="row d-flex mt-5">
    <!-- product name  -->
    <div class="col-6 card-title px-5 ">
        <h3 class="mb-4 product_name fs-4 fw-bolder">Green Ring</h3>
        <p class="mb-3">SIZE: <span class="fw-bolder">M</span> </p>
    </div>
    <!-- quantity inc dec -->
    <div class="col-6">
        <ul class="pagination justify-content-end set_quantity">
            <li class="page-item">
                <button class="page-link" onclick="decreaseNumber('textbox','itemval')">
                    <i class="fas fa-minus mt-2 text-dark"></i>
                </button>
            </li>
            <li class="page-item text-dark">
                <input type="text" name="" class="page-link text-dark" value="0" id="textbox" >
            </li>
            <li class="page-item">
                <button class="page-link" onclick="increaseNumber('textbox','itemval')">
                    <i class="fas fa-plus mt-2 text-dark"></i>
                </button>
            </li>
        </ul>
    </div>
</div>

<!-- //remover move and price -->
<div class="row">
<div class="col-8 d-flex justify-content-between remove_wish">
<!-- <p><i class="fas fa-trash-alt"></i> REMOVE ITEM</p> -->
<p><i class="fas fa-heart"></i> MOVE TO WISH LIST </p>
</div>
<div class="col-4 d-flex justify-content-end price_money">
<h3>$<span id="itemval">0.00 </span></h3>
</div>
</div>
</div>
</div>
</div>
<hr/>
<!-- 2nd cart product -->

</div>
<!-- right side div -->
<div class="col-md-12 col-lg-4 col-11  mt-lg-2 mt-md-5 ml-lg-auto">
<div class="right_side p-3 shadow bg-white">
<h2 class="product_name mb-5">The Total Amount Of</h2>
<div class="price_indiv d-flex justify-content-between">
<p>Product amount</p>
<p>$<span id="product_total_amt">0.00</span></p>
</div>
<div class="price_indiv d-flex justify-content-between">
<p>Shipping Charge</p>
<p>$<span id="shipping_charge">50.0</span></p>
</div>
<hr />
<div class="total-amt d-flex justify-content-between font-weight-bold">
<p>The total amount of (including VAT)</p>
<p>$<span id="total_cart_amt">0.00</span></p>
</div>
<div class="text-center p-2">
<a href="checkout.php" class="main-btn p-2">checkout</a>
 </div>
</div>
<!-- discount code part -->
<div class="discount_code mt-3 shadow">
<div class="card">
<div class="card-body">
<a class="d-flex justify-content-between" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
Add a discount code (optional)
<span><i class="fas fa-chevron-down pt-1"></i></span>
</a>
<div class="collapse" id="collapseExample">
<div class="mt-3">
<input type="text" name="" id="discount_code1" class="form-control font-weight-bold" placeholder="Enter the discount code">
<small id="error_trw" class="text-dark mt-3">code is zaj</small>
</div>
<div class="text-center">
<button class="main-btn p-1 text-center btn-sm mt-3" onclick="discount_code()">Apply</button>
</div>
</div>
</div>
</div>
</div>
<!-- discount code ends -->
<div class="mt-3 shadow p-3 bg-white mb-5">
<div class="pt-4">
<h5 class="mb-4">Expected delivery date</h5>
<p>Feb 27th 2024 - March 6th 2024</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- footer  -->
<?php
 include_once 'footer.php'
?>

    
<script type="text/javascript">

var product_total_amt = document.getElementById('product_total_amt');
var shipping_charge = document.getElementById('shipping_charge');
var total_cart_amt = document.getElementById('total_cart_amt');
var discountCode = document.getElementById('discount_code1');
const decreaseNumber = (incdec, itemprice) => {
var itemval = document.getElementById(incdec);
var itemprice = document.getElementById(itemprice);
console.log( itemprice.innerHTML);
// console.log(itemval.value);
if(itemval.value <= 0){
itemval.value = 0;
alert('Negative quantity not allowed');
}else{
itemval.value = parseInt(itemval.value) - 1;
itemval.style.background = '#fff';
itemval.style.color = '#000';
itemprice.innerHTML  = parseInt(itemprice.innerHTML) - 15;
product_total_amt.innerHTML  = parseInt(product_total_amt.innerHTML) - 15;
total_cart_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
}
}
const increaseNumber = (incdec, itemprice) => {
var itemval = document.getElementById(incdec);
var itemprice = document.getElementById(itemprice);
// console.log(itemval.value);
if(itemval.value >= 5){
itemval.value = 5;
alert('max 5 allowed');
itemval.style.background = 'yellow';
itemval.style.color = '#fff';
}else{
itemval.value = parseInt(itemval.value) + 1;
itemprice.innerHTML  = parseInt(itemprice.innerHTML ) + 15;
product_total_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + 15;
total_cart_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
}
}
const  discount_code = () => {
let totalamtcurr = parseInt(total_cart_amt.innerHTML);
let error_trw = document.getElementById('error_trw');
if(discountCode.value === 'zaj'){
let newtotalamt = totalamtcurr - 15;
total_cart_amt.innerHTML = newtotalamt;
error_trw.innerHTML = "Hurray! code is valid zaj";
}else{
error_trw.innerHTML = "Try Again! Valid code is ta";
}
}
</script>
</body>
</html>