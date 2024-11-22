$(document).ready(function() {
    $("#add_product").on("submit", function(e) {
        e.preventDefault();  // Prevent the default form submission

        var formData = new FormData(this);  // Create FormData object from the form element
        let product_add_btn=$(".add_product_btn");
        
        if (product_add_btn.length) {
            // Disable the submit button to prevent multiple submissions
            product_add_btn.prop('disabled', true);
        } else {
            console.error("Submit button not found.");
            return;  // Stop the function if submit button is not found
        }
        
        

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
            },
            complete:function() {
                product_add_btn.prop('disabled', false);
            }
        });
    });
});
