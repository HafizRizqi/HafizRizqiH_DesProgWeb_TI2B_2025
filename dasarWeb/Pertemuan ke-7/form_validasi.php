<!DOCTYPE html>
<html>
<head>
    <title> Form Input PHP dengan Validasi</title>
    </head>
    <body>
        <h1>Form Input Data dengan Validasi</h1>
        <form method="post" action="proses_validasi.php">
           <label for="nama">Nama:</label><br>
              <input type="text" id="nama" name="nama" required><br><br>

            <label for="email">Email:</label><br>
              <input type="text" id="email" name="email" required><br><br>

                <input type="submit" value="Submit">
        </form>
    </body>
</html>