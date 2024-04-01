
<?php
include('loader.php');
?>


<div class="container-fluid bg-dark text-white text-center py-2">
    <i class="fas fa-gift gift-icon mr-2 animate__animated animate__infinite animate__zoomIn"></i> Free gift with every order
</div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Left Side: Logo and Brand Name -->
            <a class="navbar-brand fs-2" href="index.html">
                ZAJ
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <!-- Center: Navigation Links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav ">
            <li class="nav-item active">
                <a class="nav-link text-capitalize mx-1" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-capitalize mx-2" href="newarrival.php">New Arrivals</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-capitalize mx-2" href="sale.php">Sale</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu mt-2 fw-light">
                  <li><a class="dropdown-item  fw-light text-secnodary" href="eariing.php">earings</a></li>
                  <li><a class="dropdown-item  fw-light text-secnodary" href="necklace.php">neckalace</a></li>
                  <li><a class="dropdown-item  fw-light text-secnodary" href="ring.php">rings</a></li>
                  <li><a class="dropdown-item  fw-light text-secnodary" href="set.php">sets</a></li>
                  <li><a class="dropdown-item  fw-light text-secnodary" href="hair.php">hair accessories</a></li>
                </ul>
              </li>
        </ul>
    </div>
    
            <!-- Right Side -->
            <div class="navbar-right-icons fs-5 ">
                <i class="fas fa-search mx-2" data-toggle="modal" data-target="#searchModal"></i>
               <a href="login.php"><i class="fas fa-user mx-2"></i></a>
               <a href="cart.php"> <i class="fas fa-shopping-cart mx-2"></i></a>
               <a href="trackorder.php"> <i class="fas fa-shipping-fast"></i> </a>
              
             
            </div>
        </div>
    </nav>
    <!-- Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- <div class="modal-header ms-auto">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> -->
        <div class="modal-body">
            <form>
            <div class="row justify-content-center">
            <div class="col-lg-8  mt-2">
            <div class="input-group">
                <input type="text" class="form-control" id="searchInput" placeholder="Search products...">
                <button class="btn btn-secondary" id="searchButton"><i class="fas fa-search"></i></button>
            </div>
         </div>
           </div>
              </form>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    document.addEventListener("DOMContentLoaded", function() {
    var searchInput = document.getElementById('searchInput');
    var searchResults = document.getElementById('searchResults');

    searchInput.addEventListener('input', function() {
        var searchTerm = this.value.trim();
        if (searchTerm.length > 0) {
            // Make AJAX request to fetch search results
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'search.php?q=' + searchTerm, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = xhr.responseText;
                    searchResults.innerHTML = response;
                }
            };
            xhr.send();
        } else {
            searchResults.innerHTML = ''; 
        }
    });
});



<script>
    $(document).ready(function(){
        // Function to handle live search
        function liveSearch(query) {
            // Simulated data for demonstration purposes
            var products = [
                { name: 'Ring 1', price: '$21.99', image: 'images/ringsphoto/ring3.jpg', link: 'ring.php' },
                { name: 'Ring 2', price: '$31.99', image: 'images/ringsphoto/ring1.jpg', link: 'ring.php' },
                { name: 'Black set', price: '$21.99', image: 'images/setphotos/set3.jpg', link: 'set.php' },
                 { name: 'White set', price: '$31.99', image: 'images/setphotos/set1.jpg', link: 'set.php' },
                { name: 'Black earing', price: '$9.99', image: 'images/setphotos/set5.jpg', link: 'earing.php' }
            ];

            // Filter products based on query
            var filteredProducts = products.filter(function(product) {
                return product.name.toLowerCase().includes(query.toLowerCase());
            });

            // Build HTML for search results
            var resultsHtml = '';
            filteredProducts.forEach(function(product) {
                resultsHtml += `
                    <div class="col">
                        <a href="${product.link}" class="hover-text">
                            <div class="card shop-card">
                                <img src="${product.image}" class="card-img-top" alt="${product.name}">
                                <div class="card-body">
                                    <h5 class="card-title">${product.name}</h5>
                                    <div class="d-flex justify-content-between">
                                        <p class="card-text">${product.price}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                `;
            });

            // Update the search results container
            $('#searchResults').html(resultsHtml);
        }

        // Event listener for form submit
        $('#searchButton').click(function(e){
            e.preventDefault();
            var query = $('#searchInput').val();
            liveSearch(query);
        });

        // Event listener for input change
        $('#searchInput').on('input', function () {
            var query = $(this).val();
            liveSearch(query);
        });
    });
</script>
  </script>