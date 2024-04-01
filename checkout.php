<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
<style>
    .sec-btn{
        background-color: #d37c35;
        color: #000;
    }
    .sec-btn:hover{
        background-color: #000;
        color: #d37c35;
        border: 2px solid #000;
    }
    .form-check input[type='radio'] {
    color: #d37c35 !important;
}


</style>
<body>
    <!-- ==========navbar start========= -->
<?php
include_once "nav.php"
?>
  <div class="container">
    
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card mt-5">
          <div class="card-body">
          <h5 class="section-subheading mb-4">Billing Address</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="firstName" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="Enter First Name" required>
                </div>
                <div class="mb-3">
                  <label for="lastName" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label">Address</label>
                  <textarea class="form-control" id="address" rows="3" placeholder="Enter Address"></textarea>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" required>
                </div>
              </div>
              <div class="col-md-6">
                <h5 class="mb-3">Payment Options</h5>
                <div class="mb-3 form-check">
                  <input type="radio" class="form-check-input" id="cardPayment" name="paymentMethod">
                  <label class="form-check-label" for="cardPayment">Pay with Card</label>
                </div>
                <div class="mb-3 form-check">
                  <input type="radio" class="form-check-input" id="cashOnDelivery" name="paymentMethod">
                  <label class="form-check-label" for="cashOnDelivery">Cash on Delivery</label>
                </div>
                <div id="cardDetails" style="display: none;">
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
              </div>
            </div>
            <div class=" text-center"  id="billingForm">
            <button type="submit" class=" sec-btn" data-bs-toggle="modal" data-bs-target="#orderConfirmationModal">Place Order</button>
           </div>
           <div class=" text-center mt-2"  id="billingForm">
            <button  class="main-btn sec-btn" data-bs-toggle="modal" data-bs-target="#orderCancelModal">Cancel an Order</button>
           </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Order Cancel Modal -->
  <div class="modal fade" id="orderCancelModal" tabindex="-1" aria-labelledby="orderConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="orderCancelModalLabel">Order Placed</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Are  you sure to cancel this order?
        </div>
        <div class="modal-footer">
        <button type="button" class="main-btn border-0 btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="sec-btn" onclick="confirm()" >Confirm</button>
      </div>
      </div>
    </div>
  </div>
    
  <!-- Order Confirmation Modal -->
  <div class="modal fade" id="orderConfirmationModal" tabindex="-1" aria-labelledby="orderConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="orderConfirmationModalLabel">Order Placed</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Thank you for placing the order!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  </div>

<!-- footer  -->
<?php
 include_once 'footer.php'
?>






<script>
    const cardPayment = document.getElementById('cardPayment');
    const cashOnDelivery = document.getElementById('cashOnDelivery');
    const cardDetails = document.getElementById('cardDetails');

    function toggleCardDetails() {
        cardDetails.style.display = cardPayment.checked ? 'block' : 'none';
    }

    cardPayment.addEventListener('change', toggleCardDetails);
    cashOnDelivery.addEventListener('change', toggleCardDetails);

    // Initially hide card details when the page loads
    toggleCardDetails();
    function confirm(){
        alert ("Your Order is cancelled Successfully!!")
        window.location='index.php';
    }

    // document.getElementById('billingForm').addEventListener('submit', function(event) {
    //   event.preventDefault(); // Prevents form submission
    //   // Check if form is valid
    //   if (this.checkValidity()) {
    //     // Display the modal
    //     var myModal = new bootstrap.Modal(document.getElementById('orderConfirmationModal'));
    //     myModal.show();
    //   } else {
    //     // If form is not valid, display any validation messages or handle accordingly
    //     // You can add validation logic here
    //     alert('Please fill in all required fields.');
    //   }
    // });
</script>

</body>
</html>
