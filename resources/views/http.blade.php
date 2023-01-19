<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTTP Client Laravel</title>
    <style>
        td{
          text-align: center  
        }
    </style>
</head>
<center>
<body>
    <h1>Data Postingan</h1>
    <table border="1">
        <tr>
            <td>No</td>
            <td width="200">Nama Surah</td>
            <td width="300">Nama Surah Inggris</td>
        </tr>

        @foreach ($http as $data)
        <tr>
            <td>{{ $data['number'] }}</td>
            <td>{{ $data['name'] }}</td>
            <td>{{ $data['englishName'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</center>
</html>