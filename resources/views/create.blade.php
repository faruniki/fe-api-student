<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <form action="/siswa/create" method="post">
        @csrf
        <label for="nis">NIS</label>
        <input type="text" name="nis">
        <label for="nama">Nama</label>
        <input type="text" name="nama">
        <label for="rombel">Rombel</label>
        <input type="text" name="rombel" name="" id="">
        <button type="submit">Submit</button>
    </form>
</body>
</html>