<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="POST" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <input type="button" id="submitForm" value="Submit">

    </form>

    <div id="response"></div>

    <script>
   $(document).ready(function() {
    $("#submitForm").click(function(event) {
        event.preventDefault(); // Mencegah pengiriman form default

        var nama = $("#nama").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var valid = true;
        var formData = $("#myForm").serialize();

        $("#nama-error").text("");
        $("#email-error").text("");
        $("#password-error").text("");

        if (nama === "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        }

        if (email === "") {
            $("#email-error").text("Email harus diisi.");
            valid = false;
        } else {
            $("#email-error").text("");
        }

        if (password === "") {
            $("#password-error").text("Password harus diisi.");
            valid = false;
            if (password.length < 8) {
            $("#password-error").text("Password minimal 8 karakter.");
            valid = false;
            }
        }

        if (valid) {
            $.ajax({
                url: 'proses_validasi.php',
                type: 'POST',
                data: formData,
                success: function(response) {
                    $("#response").html(response);
                },
                error: function(xhr, status, error) {
                    $("#response").html("Terjadi kesalahan: " + error);
                }
            });
        }
    });
});

    </script>
</body>
</html>