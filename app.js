$(document).ready(function () {
    $("#applicationForm").on("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission

        const formData = $(this).serialize(); // Serialize form data

        $.ajax({
            url: "process.php", // Backend PHP script
            type: "POST",
            data: formData,
            success: function (response) {
                // Show the response message
                $("#responseMessage").html(response);
                // Clear the form
                $("#applicationForm")[0].reset();
            },
            error: function () {
                $("#responseMessage").html("<p style='color: red;'>An error occurred while submitting the form.</p>");
            }
        });
    });
});
