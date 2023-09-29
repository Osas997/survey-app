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

        th, td {
            border: 1px solid #000; /* Menambahkan garis hitam pada th dan td */
            padding: 8px; /* Menambahkan padding untuk sel th dan td */
            text-align: left; /* Mengatur teks menjadi rata kiri */
        }

        th {
            background-color: #ffffff; /* Warna latar belakang untuk th */
        }
    </style>
</head>

<body>
    <button onclick="window.print()">Print</button>
    <div class="">
        <div class="container mx-auto px-4 py-8">
            <div>
                {{-- nama, Skor, klasifikasi, interpretasi --}}
                <div class="">
                    <p>Nama : Diki Brong</p>
                    <p>Skor Anda Pelaku Bullying :
                        <span>3</span>
                    </p>
                    <p>Skor Anda Korban Bullying :
                        <span>4</span>
                    </p>
                    <p>Klasifikasi Pelaku Bullying : <span>Rendah</span></p>
                    {{-- <p>Klasifikasi Pelaku Bullying : <span class="text-amber-400">Sedang</span></p>
             <p>Klasifikasi Pelaku Bullying : <span class="text-orange-400">Tinggi</span></p>
             <p>Klasifikasi Pelaku Bullying : <span class="text-red-400">Sangat Tinggi</span></p> --}}
                    <p>Klasifikasi Korban Bullying : <span>Rendah</span></p>
                    {{-- <p>Klasifikasi Korban Bullying : <span class="text-amber-400">Sedang</span></p>
             <p>Klasifikasi Korban Bullying : <span class="text-orange-400">Tinggi</span></p>
             <p>Klasifikasi Korban Bullying : <span class="text-red-400">Sangat Tinggi</span></p> --}}
                    <p>Interpretasi : Memiliki kecenderungan menjadi Pelaku bullying : <span>Rendah</span></p>
                    {{-- <p>Interpretasi : Memiliki kecenderungan menjadi pelaku bullying <span class="text-amber-400">Sedang</span></p>
             <p>Interpretasi : Memiliki kecenderungan menjadi pelaku bullying <span class="text-orange-400">Tinggi</span></p>
             <p>Interpretasi : Memiliki kecenderungan menjadi pelaku bullying <span class="text-red-400">Sangat Tinggi</span></p> --}}
                    <p>Interpretasi : Memiliki kecenderungan menjadi Korban bullying : <span>Rendah</span></p>
                    {{-- <p>Interpretasi : Memiliki kecenderungan menjadi Korban bullying <span class="text-amber-400">Sedang</span></p>
             <p>Interpretasi : Memiliki kecenderungan menjadi Korban bullying <span class="text-orange-400">Tinggi</span></p>
             <p>Interpretasi : Memiliki kecenderungan menjadi Korban bullying <span class="text-red-400">Sangat Tinggi</span></p> --}}
                </div>
            </div>
                <table >
                    <thead  >
                        <tr>
                            <th >
                                No
                            </th>
                            <th >
                                Pertanyaan
                            </th>
                            <th >
                                Jawaban
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <th >
                                <span>1</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>2</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>3</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>1</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>2</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>3</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>1</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>2</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>3</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>1</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>2</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>3</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>1</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>2</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>3</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>1</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>2</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>3</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>1</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>2</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>3</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>1</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>2</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>3</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>1</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>2</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>3</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                        <tr >
                            <th >
                                <span>1</span>
                            </th>
                            <td>
                                <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga saya merasa sakit hati</span>
                            </td>
                            <td>
                                <span>Selalu</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>Saran Guru BK: </p>
                <table>
                    <thead>
                        <tr>
                            <td style="text-align: left; vertical-align: top; height: 20rem;">Saran :</td>
                        </tr>
                    </thead>
                </table>
        </div>

    </div>
</body>

</html>
