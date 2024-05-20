<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Zakat </title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h3 class="text-center p-3">
            Laporan Distribusi Zakat Warga Lainnya
        </h3>
    <div class="row justify-content-center">
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Jenis Hak</th>
                    <th scope="col">Hak</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mustahiqs as $index => $mustahiq)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $mustahiq->nama }}</td>
                        <td>{{ $mustahiq->Kategori }}</td>
                        <td>{{ $mustahiq->JenisHak }}</td>
                        <td>{{ $mustahiq->Hak }}</td>
                    </tr>
                @endforeach
                    <tr>
                        <th class="" colspan="3" > Total Uang  </th>
                        <th class="text-end" colspan="2">Rp.{{ number_format($uang) }}</th>
                    </tr>
                    <tr>
                        <th colspan="3">Total Beras </th>
                        <th colspan="2" class="text-end">{{ $beras }} Kg</th>
                    </tr>
                    <tr>
                        <th colspan="3">Total Mustahiq</th>
                        <th colspan="2" class="text-end">{{ $KK }}</th>
                    </tr>
                    <tr>
                        <td colspan="3">Total Muallaf</td>
                        <td colspan="2" class="text-end">{{ $muallaf }}</td>
                    </tr>
                    <tr>
                        <td colspan="3">Total Amil</td>
                        <td colspan="2" class="text-end">{{ $amil }}</td>
                    </tr>
                    <tr>
                        <td colspan="3">Total Fakir</td>
                        <td colspan="2" class="text-end">{{ $fakir }}</td>
                    </tr>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>
