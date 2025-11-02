<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi dan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi dan AJAX</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br><br>

        <input type="submit" value="Kirim">
    </form>

    <div id="result" style="margin-top: 20px; color: green;"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Mencegah reload halaman

                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                // Reset pesan error
                $("#nama-error").text("");
                $("#email-error").text("");
                $("#result").text("");

                // Validasi nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }

                // Validasi email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else if (!email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                    $("#email-error").text("Format email tidak valid.");
                    valid = false;
                }

                // Jika valid, kirim data via AJAX
                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: { nama: nama, email: email },
                        success: function(response) {
                            $("#result").html(response);
                        },
                        error: function() {
                            $("#result").html("<span style='color:red;'>Terjadi kesalahan saat mengirim data.</span>");
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>

