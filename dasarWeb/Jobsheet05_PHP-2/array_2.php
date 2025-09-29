<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domilisi' => 'Malang',
        'jenis_kelamin' => 'Perempuan',
    ];
    ?>
    <table>
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?= $Dosen['nama']; ?></td>
    </tr>
    <tr>
        <td>Domisili</td>
        <td><?= $Dosen['domilisi']; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?= $Dosen['jenis_kelamin']; ?></td>
    </tr>
</table>

</body>
</html>