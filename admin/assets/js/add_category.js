$(document).ready(function () {

    // add category jquery code

    $("#add_category").on("submit", (e) => {
        e.preventDefault(); // Prevent form submission
        let formData = new FormData(e.currentTarget); // e.currentTarget refers to the form
        let add_category_btn=$(".add_category_btn");

        if(add_category_btn.length)
        {
            add_category_btn.prop('disabled', true);
        }
        else
        {
            console.log("Disable button error");
            return
        }
        
        $.ajax({
            type: "POST",
            url: $base_url+"mysqlcode/add_category.php",
            data: formData,
            processData: false,  // Don't process the data
            contentType: false,
            dataType: "json",
            success: function (response) {
                if(response.status)
                {
                    alert("Category inserted");
                    location.reload();
                }
            },
            error: function (xhr,status,error) {
                alert(error);
              },
              complete:function() {
                add_category_btn.prop('disabled', false);
            }
        });
        
    });


    // category delete code

    $(".delete_icon").on("click",(e)=>{
        let category_id=$(e.currentTarget).attr("category_id");
        $.ajax({
            type: "post",
            url: $base_url+"mysqlcode/add_category.php",
            data: {'category_id':category_id},
            dataType: "json",
            success: function (response) {
                if(response.status)
                {
                    alert("Category deleted successfully");
                    location.reload();
                }
            }
        });
    })
    
});