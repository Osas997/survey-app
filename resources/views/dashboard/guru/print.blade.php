<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Page</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            /* Menambahkan garis hitam pada th dan td */
            padding: 8px;
            /* Menambahkan padding untuk sel th dan td */
            text-align: left;
            /* Mengatur teks menjadi rata kiri */
        }

        th {
            background-color: #ffffff;
            /* Warna latar belakang untuk th */
        }

        .container {
            margin: auto;
            width: 80%
        }
    </style>
</head>

<body>
    <div class="container">
        <p>Hasil Survey Murid {{$namaSekolah}}</p>
        @if ($dataSiswa->isNotEmpty())
        <table>
            <thead>
                <tr>
                    <th>Nama Murid</th>
                    <th>Skor Pelaku</th>
                    <th>Interpretasi</th>
                    <th>Skor Korban</th>
                    <th>Interpretasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataSiswa as $murid)
                <tr>
                    @if ($murid->nama_murid && $murid->surveyRespon != null)
                    <td>
                        {{$murid->nama_murid}}
                    </td>
                    @endif


                    @if ($murid->surveyRespon)
                    <td>
                        <span>{{$murid->surveyRespon->skor_total_pelaku}}
                            @if ($murid->surveyRespon->skor_total_pelaku >= 46)
                            (Sangat Tinggi)
                            @elseif ($murid->surveyRespon->skor_total_pelaku >= 35 &&
                            $murid->surveyRespon->skor_total_pelaku < 46) (Tinggi) @elseif ($murid->
                                surveyRespon->skor_total_pelaku >= 24 && $murid->surveyRespon->skor_total_pelaku < 35)
                                    (Sedang) @else (Rendah) @endif </span>
                    </td>
                    <td>
                        <span>
                            Memiliki kecenderungan menjadi pelaku bullying
                            @if ($murid->surveyRespon->skor_total_pelaku >= 46)
                            Sangat Tinggi
                            @elseif ($murid->surveyRespon->skor_total_pelaku >= 35 &&
                            $murid->surveyRespon->skor_total_pelaku < 46) Tinggi @elseif ($murid->
                                surveyRespon->skor_total_pelaku >= 24 && $murid->surveyRespon->skor_total_pelaku < 35)
                                    Sedang @else Rendah @endif </span>
                    </td>
                    <td>
                        <span>{{$murid->surveyRespon->skor_total_korban}}
                            @if ($murid->surveyRespon->skor_total_korban >= 46)
                            (Sangat Tinggi)
                            @elseif ($murid->surveyRespon->skor_total_korban >= 35 &&
                            $murid->surveyRespon->skor_total_korban < 46) (Tinggi) @elseif ($murid->
                                surveyRespon->skor_total_korban >= 24 && $murid->surveyRespon->skor_total_korban < 35)
                                    (Sedang) @else (Rendah) @endif </span>
                    </td>
                    <td>
                        <span>
                            Memiliki kecenderungan menjadi korban bullying
                            @if ($murid->surveyRespon->skor_total_korban >= 46)
                            Sangat Tinggi
                            @elseif ($murid->surveyRespon->skor_total_korban >= 35 &&
                            $murid->surveyRespon->skor_total_korban < 46) Tinggi @elseif ($murid->
                                surveyRespon->skor_total_korban >= 24 && $murid->surveyRespon->skor_total_korban < 35)
                                    Sedang @else Rendah @endif </span>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        Siswa Belum Mengisi Survey
        @endif
    </div>

    <script>
        const container = document.querySelector('.container');
        window.addEventListener("load", function () {
            container.style.width='100%'
            window.print();
        });
    </script>
</body>

</html>