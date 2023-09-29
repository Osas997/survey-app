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
        .container{
            margin: auto;
            width: 80%
        }
    </style>
</head>

<body>
    
    <div class="container mx-auto px-4 py-8">
            <button onclick="printPage()" id="print" style="visibility: visible">Print</button>
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
                    <tr>
                        <th>
                            <span>1</span>
                        </th>
                        <td>
                            <span>Saya dipanggil dengan nama panggilan yang jelek, diolok-olok, atau diejek sehingga
                                saya merasa sakit hati</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>2</span>
                        </th>
                        <td>
                            <span>Teman-teman dengan sengaja mengabaikan saya, tidak mengajak saya bergabung dengan
                                kelompoknya, atau menganggap saya tidak ada</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>3</span>
                        </th>
                        <td>
                            <span>Saya dipukul, ditendang, didorong, dipojokkan ke tembok, atau dikunci di dalam
                                ruangan</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>4</span>
                        </th>
                        <td>
                            <span>Murid lain berbohong atau menyebarkan desas-desus palsu tentang saya dan mencoba
                                membuat orang lain tidak menyukai saya</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>5</span>
                        </th>
                        <td>
                            <span>Uang atau barang saya diambil dengan paksa atau dirusak</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>6</span>
                        </th>
                        <td>
                            <span>Saya diancam atau dipaksa melakukan hal-hal yang tidak saya inginkan</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>7</span>
                        </th>
                        <td>
                            <span>Saya diejek tentang pekerjaan orang tua saya</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>8</span>
                        </th>
                        <td>
                            <span>Saya diejek tentang bentuk tubuh atau warna kulit saya</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>9</span>
                        </th>
                        <td>
                            <span>Saya dibentak dengan nama, komentar, atau gerakan kasar</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>10</span>
                        </th>
                        <td>
                            <span>Saya ditakut-takuti dengan nama yang kejam, komentar atau gerak tubuh yang
                                mesum</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>11</span>
                        </th>
                        <td>
                            <span>Saya diejek dengan nama atau komentar jahat tentang kemampuan/prestasi saya</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>12</span>
                        </th>
                        <td>
                            <span>Saya dibully dengan menggunakan ponsel</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>13</span>
                        </th>
                        <td>
                            <span>Saya dibully dengan penggunaan komputer/laptop</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>14</span>
                        </th>
                        <td>
                            <span>Saya diganggu dengan cara lain</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>15</span>
                        </th>
                        <td>
                            <span>Saya memanggil siswa lain dengan nama yang buruk, mengolok-olok atau bercanda untuk
                                menyakitinya</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>16</span>
                        </th>
                        <td>
                            <span>Saya menjauhkan seseorang dari teman-teman saya dengan sengaja, mengucilkannya dari
                                kelompok saya atau sama sekali mengabaikannya</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>17</span>
                        </th>
                        <td>
                            <span>Saya memukul, menendang, dan mendorongnya atau menguncinya di dalam ruangan</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>18</span>
                        </th>
                        <td>
                            <span>Saya menyebarkan kabar bohong tentang dia dan mencoba membuat orang lain tidak
                                menyukainya</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>19</span>
                        </th>
                        <td>
                            <span>Saya mengambil uang atau barang darinya atau merusak barang miliknya</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>20</span>
                        </th>
                        <td>
                            <span>Saya mengancam atau memaksanya melakukan hal-hal yang tidak ingin dia lakukan</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>21</span>
                        </th>
                        <td>
                            <span>Saya mengejeknya dengan nama atau komentar jahat tentang ras atau warna
                                kulitnya</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>22</span>
                        </th>
                        <td>
                            <span>Saya mengejeknya dengan nama atau komentar jahat tentang agamanya</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>23</span>
                        </th>
                        <td>
                            <span>Saya mengejeknya dengan nama atau komentar jahat tentang kecacatannya</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>24</span>
                        </th>
                        <td>
                            <span>Saya mem-bully dia dengan kata-kata kasar, komentar atau gerak tubuh
                                mesum/porno</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>25</span>
                        </th>
                        <td>
                            <span>Saya mengejeknya dengan nama atau komentar jahat karena dia pintar/pandai</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>26</span>
                        </th>
                        <td>
                            <span>Saya membully dia dengan menggunakan ponsel</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>27</span>
                        </th>
                        <td>
                            <span>Saya membully dia dengan menggunakan komputer/laptop</span>
                        </td>
                        <td>
                            <span>Selalu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <span>28</span>
                        </th>
                        <td>
                            <span>Saya mengganggunya dengan cara lain</span>
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

        <script>
            const data = @json($pelakuBully);
            data.forEach(element => {
                element.jawaban.forEach(e => {
                    console.log(e.skor);
                })
            });
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
</body>

</html>
