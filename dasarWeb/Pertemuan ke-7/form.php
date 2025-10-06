<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
    </head>
    <body>
        <h2>Form Input Data</h2>
        <form action="proses_form.php" method="post">
           <label for="nama">Nama:</label><br>
              <input type="text" id="nama" name="nama" required><br><br>

            <label for="email">Email:</label><br>
              <input type="email" id="email" name="email" required><br><br>

                <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
