<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=open-sans">
    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
            margin-bottom: 25px;
        }

        .line-table {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }

        body {
            font-family: "open-sans", sans-serif;
        }

        .space {
            margin-bottom: 20px;
        }

        #line {
            border-color: #000;
            border-width: 0.5px;
        }

        .table1 {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .head {
            text-align: center;
            background-color: #B983FF;
            border: 1px solid black;
            color: #FFFF;
        }

        .body {
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table class="space" style="width: 100%;">
        <tr>
            <td class="text-left">
                <span style="line-height:1; font-weight:bold; font-size:22; margin-bottom: 5px;">Klinik Kecantikan</span><br>
                <span style="line-height:1; font-weight:bold; font-size:16">Surat Keterangan Diagnosa Kondisi Wajah</span><br>
            </td>
        </tr>
    </table>
    <hr class="line-title">
    <table style="width: 100%;">
        <tr>
            <td class="text-left">
                <span style="line-height:1; font-weight:normal; font-size:14;"><b>Nama Pasien:</b> {{ ucwords($hasil->nama_user) }}</span><br>
            </td>
            <td>
                <span style="line-height:1; font-weight:normal; font-size:14"><b>Tanggal Pemeriksaan:</b> {{ $hasil->tanggal }}</span><br>
            </td>
        </tr>
    </table>
    <hr class="line-title">
    <div class="row space">
        <div class="col-md-6">
            <span style="line-height:1; font-weight:normal; font-size:14; margin-bottom:50px;"><b>Hasil Diagnosa:</b> @foreach($detail_kerusakan as $i => $detail)
                {{ $detail['nama_kerusakan'] }} | {{ round($detail['value'] * 100, 2) }}% ({{ $detail['value'] }})
                @endforeach</span><br><br>
            <span style="line-height:1; font-weight:normal; font-size:14"><b>Saran Penanganan Dokter Kecantikan (Kulit):</b> @foreach($detail_kerusakan as $i => $detail)
                {{ $detail['saran_kerusakan'] }}
                @endforeach</span><br><br>
            <span style="line-height:1; font-weight:normal; font-size:14"><b>Saran Produk Perawatan:</b> @foreach($detail_kerusakan as $i => $detail)
                {{ $detail['detail_kerusakan'] }}
                <br />
                @endforeach</span>
        </div>
    </div>
    <hr class="line-table">
    <div class="row">
        <h3> Gejala Pasien:</h3>
    </div>
    <table class="table1">
        <thead>
            <tr class="text-center">
                <th class="head">No</th>
                <th class="head">Kode Gejala</th>
                <th class="head">Nama Gejala</th>
                <th class="head">Pilihan Diagnosa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $data_gejala as $key => $hs )
            <tr class="text-center">
                <th scope="row" class="body">{{ $key+1 }}</th>
                <th class="body">G{{ str_pad($hs['kode_gejala'], 3, '0', STR_PAD_LEFT) }}</th>
                <td class="body">{{$hs['nama_gejala']}}</td>
                <td class="body">{{$hs['kondisi']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row space">
        <div class="col-md-6">
            <span style="line-height:1; font-weight:normal; font-size:14;"><b>Catatan:</b><br> Kepada Yth. Pengguna,</span><br>
            <span style="line-height:1; font-weight:normal; font-size:14;">Surat ini hanya untuk diagnosa sementara bukan sebagai
                acuan yang tepat untuk perawatan jangka panjang, jika terjadi masalah keberlanjutan segera kunjungi dokter kecantikan
                atau kulit terdekat pada lokasi anda. Terima kasih </span>
        </div>
    </div>
</body>

</html>