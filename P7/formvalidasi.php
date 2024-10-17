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
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="button" id="submitForm" value="Submit">

        <div id="hasil"></div>
    </form>

    <div id="response"></div>

    <script>
    $(document).ready(function() {
        $("#submitForm").click(function() {
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
            }else{
                $("#email-error").text("");
            }

            if (password === "") {
                $("#password-error").text("Password harus diisi.");
                valid = false;
            }else if(password.length < 8){
                $("#password-error").text("Password minimal 8 karakter.");
                valid = false;
            }

            if(!valid){
                event.preventDefault();
            }

            if(valid){
                $.ajax({
                    url: 'proses_validasi.php',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $("#hasil").html(response);
                    }
                })
            }
            




        });
    });
    </script>
</body>
</html>