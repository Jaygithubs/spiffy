$(document).ready(function () {
    $(".product_delete").on("click",(e)=>{
        $product_id=$(e.currentTarget).attr("product_id");

        $.ajax({
            type: "post",
            url: $base_url+"mysqlcode/product_delete.php",
            dataType: "json",
            data:{product_delete:"delete",product_id:$product_id},
            success: function (response) {
                if(response.status === true)
                {
                    alert(response.msg);
                    location.reload();
                }
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
                alert("There was an error with the request.");
            }
        });
    })
});