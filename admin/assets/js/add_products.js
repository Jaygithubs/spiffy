$(document).ready(function() {
    $("#add_product").on("submit", function(e) {
        e.preventDefault();  // Prevent the default form submission

        var formData = new FormData(this);  // Create FormData object from the form element

        $.ajax({
            type: "POST",
            url: $base_url+"mysqlcode/add_products.php",  // Your PHP file URL
            data: formData,  // Send the FormData (including file data)
            contentType: false,  // Don't set the content-type (important for FormData)
            processData: false,  // Don't let jQuery process the data (important for FormData)
            dataType: "json",  // Expect JSON response from the server
            success: function(response) {
                if (response.status) {
                    alert("Product added successfully!");
                    console.log(response)
                    // You can clear the form if needed
                    // $('#add_product')[0].reset();
                } else {
                    alert("Error: " + response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
                alert("There was an error with the request.");
            }
        });
    });
});
