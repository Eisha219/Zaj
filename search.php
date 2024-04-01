<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
<body>
    <style>
        .search-container{
            height: 70vh;
        }
    </style>
    <!-- ==========navbar start========= -->
<?php
include_once "nav.php"
?>
<div class="container mt-5 search-container">
    <div class="row justify-content-center">
        <div class="col-lg-6  mt-5">
            <div class="input-group">
                <input type="text" class="form-control" id="searchInput" placeholder="Search products...">
                <button class="btn btn-secondary" id="searchButton"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>
    
    <div class="row mt-4" id="searchResults">
        <!-- Search results will be displayed here -->
    </div>
</div>
<!-- footer  -->
<?php
 include_once 'footer.php'
?>
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
</body>
</html>
