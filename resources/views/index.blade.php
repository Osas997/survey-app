<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="/guru" enctype="multipart/form-data">
        @csrf
        {{-- <input type="hidden" value="1" name="survey[0][pertanyaan]">
        <input type="text" name="survey[0][jawaban]">

        <input type="hidden" value="1" name="survey[1][pertanyaan]"> --}}
        {{-- <input type="text" name="survey[1][jawaban]"> --}}
        <input type="file" name="exel">

        <button type="submit">kirim</button>
    </form>
</body>

</html>