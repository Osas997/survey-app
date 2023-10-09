<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Page</title>
    <style>
        #print {
            position: absolute;
            top: 10;
            left: 50%;
        }

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
    @if ($dataLaporan)
    <div class="container mx-auto px-4 py-8">
        <button onclick="printPage()" id="print" style="visibility: visible">Print</button>
        <div>
            {{-- nama, Skor, klasifikasi, interpretasi --}}
            <div class="">
                <p>Nama : {{ auth('murid')->user()->nama_murid }}</p>
                <p>Skor Anda Pelaku Bullying :
                    <span>{{ $dataLaporan->skor_total_pelaku }}</span>
                </p>
                <p>Skor Anda Korban Bullying :
                    <span>{{ $dataLaporan->skor_total_korban }}</span>
                </p>
                <p>Klasifikasi Pelaku Bullying :
                    @if ($dataLaporan->skor_total_pelaku >= 46)
                    <span>
                        Sangat Tinggi
                    </span>
                    @elseif ($dataLaporan->skor_total_pelaku >= 35 && $dataLaporan->skor_total_pelaku < 46) <span>
                        Tinggi
                        </span>
                        @elseif ($dataLaporan->skor_total_pelaku >= 24 && $dataLaporan->skor_total_pelaku < 35) <span>
                            Sedang
                            </span>
                            @else
                            <span>
                                Rendah
                            </span>
                            @endif
                </p>
                <p>Klasifikasi Korban Bullying :
                    @if ($dataLaporan->skor_total_korban >= 46)
                    <span>
                        Sangat Tinggi
                    </span>
                    @elseif ($dataLaporan->skor_total_korban >= 35 && $dataLaporan->skor_total_korban < 46) <span>
                        Tinggi
                        </span>
                        @elseif ($dataLaporan->skor_total_korban >= 24 && $dataLaporan->skor_total_korban < 35) <span>
                            Sedang
                            </span>
                            @else
                            <span>
                                Rendah
                            </span>
                            @endif
                </p>
                <p>Interpretasi Memiliki kecenderungan menjadi Pelaku bullying :
                    @if ($dataLaporan->skor_total_pelaku >= 46)
                    <span>
                        Sangat Tinggi
                    </span>
                    @elseif ($dataLaporan->skor_total_pelaku >= 35 && $dataLaporan->skor_total_pelaku < 46) <span>
                        Tinggi
                        </span>
                        @elseif ($dataLaporan->skor_total_pelaku >= 24 && $dataLaporan->skor_total_pelaku < 35) <span>
                            Sedang
                            </span>
                            @else
                            <span>
                                Rendah
                            </span>
                            @endif
                </p>
                <p>Interpretasi Memiliki kecenderungan menjadi Korban bullying :
                    @if ($dataLaporan->skor_total_korban >= 46)
                    <span>
                        Sangat Tinggi
                    </span>
                    @elseif ($dataLaporan->skor_total_korban >= 35 && $dataLaporan->skor_total_korban < 46) <span>
                        Tinggi
                        </span>
                        @elseif ($dataLaporan->skor_total_korban >= 24 && $dataLaporan->skor_total_korban < 35) <span>
                            Sedang
                            </span>
                            @else
                            <span>
                                Rendah
                            </span>
                            @endif
                </p>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        Pertanyaan
                    </th>
                    <th>
                        Jawaban
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataLaporan->jawaban as $jawaban)
                <tr>
                    <th>
                        <span>{{ $loop->iteration }}</span>
                    </th>
                    <td>
                        <span>{{ $jawaban->pertanyaan->pertanyaan }}</span>
                    </td>
                    <td>
                        <span style="white-space: nowrap">
                            @if ($jawaban->skor == 4)
                            Selalu
                            @elseif($jawaban->skor == 3)
                            Sering
                            @elseif ($jawaban->skor == 2)
                            Jarang
                            @elseif ($jawaban->skor == 1)
                            Tidak Pernah
                            @endif
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p>Saran Guru BK: </p>
        <table>
            <thead>
                <tr>
                    <td style="text-align: left; vertical-align: top; height: 16rem;">Saran :</td>
                </tr>
            </thead>
        </table>
    </div>
    <script>
        let buttonPrint = document.getElementById('print');
        let container = document.querySelector('.container');

        function printPage() {
            buttonPrint.style.visibility = "hidden";
            container.style.width = '100%';
            window.print();
            alert("Jangan menekan tombol OK sebelum dokumen selesai tercetak!");
            buttonPrint.style.visibility = "visible";
        }
    </script>
    @else
    belum mengisi survey
    @endif

</body>

</html>