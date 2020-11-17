<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API LEARN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <style></style>
    </head>
    <body style="background-color: #f0f0f0;">
        <div class="jumbotron" style="background-color: #ffffff;">
            <h1 class="display-4">PDAM-SERV API</h1>
            <p class="lead">Ver 1.1 Alpha release</p>
            <hr class="my-4">
            <p>Testing/Pembelajaran dalam membuat API</p>
            
          </div>
        <section class="content" id="content">

            <div class="container" id="REGISTER">
                <div class="card">
                    <div class="card-header" style="background-color: #ffffff">
                        <h5>Register API</h5> 
                    </div>
                    <div class="card-body">
                        <p class="mb-1">Endpoint</p>
                        <div class="container" style="background-color: #f0f0f0">
                            <code>url/api/register</code>
                        </div>
                        <p class="mt-3 mb-1">Method</p>
                        <div class="container" style="background-color: #f0f0f0">
                            <code>POST</code>
                        </div>
                        
                        <p class="mt-3 mb-1">Example Request:</p>
                        <div class="container" style="background-color: #f0f0f0">
                            <pre><code>
{
    "name": "Admin Testing",
    "email": "email@email.com",
    "password":"testing123",
    "password_confirmation": "testing123"
}
                            </code></pre>
                        </div>

                        <small>Optional for roles(ADMIN) and kantor</small>
                        <div class="container" style="background-color: #f0f0f0">
                            <pre><code>
{
    "name": "Admin Testing",
    "email": "email@email.com",
    "password":"testing123",
    "password_confirmation": "testing123"
    "roles": "ADMIN" 
    "kantor": "Indonesia" 
}
                            </code></pre>
                            </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5" id="LOGIN">
                <div class="card">
                    <div class="card-header" style="background-color: #ffffff">
                        <h5>Login API</h5> 
                    </div>
                    <div class="card-body">
                        <p class="mb-1">Endpoint</p>
                        <div class="container" style="background-color: #f0f0f0">
                            <code>url/api/login</code>
                        </div>
                        <p class="mt-3 mb-1">Method</p>
                        <div class="container" style="background-color: #f0f0f0">
                            <code>POST</code>
                        </div>
                        
                        <p class="mt-3 mb-1">Example Request:</p>
                        <div class="container" style="background-color: #f0f0f0">
                            <pre><code>
{
    "email": "email@email.com",
    "password":"testing123",
    "password_confirmation": "testing123"
}
                            </code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <h2 class="mt-5 mb-3 text-center">USER PANEL</h2>
                <hr>
                <h3 class="mt-2">PELANGGAN</h3>
                <div class="row">
                    
                    <div class="col-md-6 mb-3">
                        <div class="card" id="LIHAT TAGIHAN ON T4PELANGGAN">
                            <div class="card-header" style="background-color: #ffffff">
                                <h5>LIHAT TAGIHAN API</h5> 
                            </div>
                            <div class="card-body">
                                <p class="mb-1">Endpoint</p>
                                <div class="container" style="background-color: #f0f0f0">
                                    <code>url/api/bayartagihan/lihat</code>
                                </div>
                                <p class="mt-3 mb-1">Method</p>
                                <div class="container" style="background-color: #f0f0f0">
                                    <code>GET</code>
                                </div>
                                <p class="mt-3 mb-1">Example Request:</p>
                                <div class="container" style="background-color: #f0f0f0">
                                    <code>url/api/bayartagihan/lihat?idpel=36466</code>
                                </div>
                                <p class="mt-3 mb-1">or</p>
                                <div class="container" style="background-color: #f0f0f0">
                                    <pre><code>
{
    "idpel":"36466" 
}
                                    </code></pre>
                                </div>
            
                                <p class="mt-3 mb-1">Example Response:</p>
                                <div class="container" style="background-color: #f0f0f0">
                                    <pre><code>
{
    "success": true,
    "code": 201,
    "data": [
        {
            "id": 8,
            "idpel": 36466,
            "idjln": 105029,
            "kdpellama": "600001-0005",
            "keltarif": "1",
            "gol": "5",
            "kelompok": "51",
            "novocer": "20000008",
            "aktno": "130110",
            "bulan": "11998",
            "meter_sbl": 6,
            "meter_skr": 7,
            "mpakai": 1,
            "minn": 20,
            "adm": 500,
            "dmeter": 1000,
            "dlain": 0,
            "denda": 2727464,
            "h1": 0,
            "h2": 0,
            "h3": 0,
            "h4": 0,
            "s1": 0,
            "s2": 0,
            "s3": 0,
            "s4": 0,
            "total": 10500,
            "tanggal": "2010-01-06",
            "loket": "1",
            "users": "Admin Trans",
            "setatus": "2",
            "Keterangan": "Rek Lama - Tunggakan Rekening",
            "haspaid": "0",
            "harga": 9000,
            "waktu": "00:00:00",
            "tanggalupload": "2020-09-17 07:18:03"
        }
    ]
}
                                    </code></pre>
                                </div>
                                
                            </div>
                        </div>
                    </div>
            
                    <div class="col-md-6 mb-3">
                        <div class="card" id="BAYAR TAGIHAN ON T4PELANGGAN">
                            <div class="card-header" style="background-color: #ffffff">
                                <h5>BAYAR TAGIHAN API</h5> 
                            </div>
                            <div class="card-body">
                                <p class="mb-1">Endpoint</p>
                                <div class="container" style="background-color: #f0f0f0">
                                    <code>url/api/bayartagihan/bayar</code>
                                </div>
                                <p class="mt-3 mb-1">Method</p>
                                <div class="container" style="background-color: #f0f0f0">
                                    <code>POST</code>
                                </div>
                                <p class="mt-3 mb-1">Example Request:</p>
                                <div class="container" style="background-color: #f0f0f0">
                                    <code>url/api/bayartagihan/bayar?idpel=36466</code>
                                </div>
                                <p class="mt-3 mb-1">or</p>
                                <div class="container" style="background-color: #f0f0f0">
                                    <pre><code>
{
    "idpel":"36466" 
}
                                    </code></pre>
                                </div>
            
                                <p class="mt-3 mb-1">Example Response:</p>
                                <div class="container" style="background-color: #f0f0f0">
                                    <pre><code>
{
    "success": true,
    "code": 201,
    "data": {
        "idpel": 36466,
        "idjln": 105029,
        "kdpellama": "600001-0005",
        "keltarif": "1",
        "gol": "5",
        "kelompok": "51",
        "novocer": "20000008",
        "aktno": "130110",
        "bulan": "11998",
        "meter_sbl": 6,
        "meter_skr": 7,
        "mpakai": 1,
        "minn": 20,
        "adm": 500,
        "dmeter": 1000,
        "dlain": 0,
        "denda": 2727464,
        "h1": 0,
        "h2": 0,
        "h3": 0,
        "h4": 0,
        "s1": 0,
        "s2": 0,
        "s3": 0,
        "s4": 0,
        "total": 10500,
        "tanggal": "2010-01-06",
        "loket": "1",
        "users": "Admin Trans",
        "setatus": "2",
        "keterangan": "Rek Lama - Tunggakan Rekening",
        "haspaid": 1,
        "harga": 9000,
        "waktu": {},
        "statuscetak": 0,
        "tanggalupload": {},
        "kantorbayar": "Kantor Pusat",
        "id": 3
    }
}
                                    </code></pre>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="card" id="LIHAT PROFIL ON T4PELANGGAN">
                            <div class="card-header" style="background-color: #ffffff">
                                <h5>LIHAT PROFIL PELANGGAN API</h5> 
                            </div>
                            <div class="card-body">
                                <p class="mb-1">Endpoint</p>
                                <div class="container" style="background-color: #f0f0f0">
                                    <code>url/api/lihatprofilpelanggan/{idpel}</code>
                                </div>
                                <p class="mt-3 mb-1">Method</p>
                                <div class="container" style="background-color: #f0f0f0">
                                    <code>GET</code>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="container">
            <h2 class="mt-5 mb-3 text-center">ADMIN PANEL</h2>
            <hr>
            <h3 class="mt-2">PELANGGAN</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card" id="GET ALL DATA ON T4PELANGGAN">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>GET ALL DATA T4PELANGGAN API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4pelanggan</code>
                            </div>
                            <p class="mt-3 mb-1">Method</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>GET</code>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card" id="GET SINGLE DATA ON T4PELANGGAN">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>GET SINGLE DATA T4PELANGGAN API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4pelanggan/{idpel}</code>
                            </div>
                            <p class="mt-3 mb-1">Method</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>GET</code>
                            </div>
                            <p class="mt-3 mb-1">Example Request:</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4pelanggan/30154</code>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  mb-3">
                    <div class="card mb-3" id="INPUT DATA ON T4PELANGGAN">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>INPUT DATA T4PELANGGAN API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4pelanggan/{idpel}</code>
                            </div>
                            <p class="mt-3 mb-1">Method</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>POST</code>
                            </div>
                            <p class="mt-3 mb-1">Example Request:</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <pre><code>
{   
    "idno": 30122,
    "idjln": 103006,
    "namapel": "Rahmat",
    "kelompok": "RT4",
    "ketkelompok": "Rumah Tangga D",
    "kdpellama": "003-036-0",
    "alamat": "JL.RAWA SAKTI II No.12",
    "RT": "1",
    "RW": "101",
    "Desa": "PERUMNAS LINGKE",
    "Kecamatan": "SYIAH KUALA",
    "Contact": "JULIDAR",
    "telp": "085260646346",
    "urut": "010",
    "Loket": "30-1051",
    "last_update": "2016-03-01",
    "user_id": "1051-WER",
    "idprop": "0",
    "rute": "0103006",
    "urutrute": "1",
    "mtrid": "0",
    "typemtr": "301",
    "tglinstall": "2008-11-20",
    "jmldigit": "5",
    "idlama": "31125",
    "tglbaca": "2015-10-19",
    "angkamtr": 1691,
    "lokasimtr": "01 - Depan Rumah",
    "artikel": "101",
    "urutno": 1140,
    "setatus": "A",
    "sub_id": "0",
    "agrtid": "0",
    "npa_lama": "Agresso",
    "snmeter": "630990",
    "idpbr": "Kor",
    "keterangan": "EDIT ALAMAT INFORMASI DARI PELANGGAN 15 MARET 2010,PINDAH RUTE RAWA SAKTI II LAP.P.METER(RAMADHAN) DSML MEI 2011",
    "merkmeter": "ITRON",
    "kondisimeter": "01 - Baik",
    "tgl_lahir": "1964-08-20",
    "petugas": "Bag. Distribusi PDAM",
    "khusus": "1",
    "Catatan": "EDIT ALAMAT INFORMASI DARI PELANGGAN 15 MARET 2010,PINDAH RUTE RAWA SAKTI II LAP.P.METER(RAMADHAN) DSML MEI 2011, PERUBAHAN TARIF DARI 41 KE 51 LAP. PETUGAS CAB.I MENGETAHUI KACAB I ( ILHAM YACOB ) TGL 31 DES 2015, GANTI WM BARU LAP. CAB.I  TGL 08 JAN 2016",
    "lat": "5,5809435",
    "lng": "95,3527289",
    "tanggalupd": "1999-12-31 00:00:00"
}
                                </code></pre>
                            </div>
    
                        </div>
                    </div>
                </div>

                <div class="col-md-6  mb-3">
                    <div class="card mb-3" id="EDIT DATA ON T4PELANGGAN">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>EDIT DATA T4PELANGGAN API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4pelanggan/{idpel}</code>
                            </div>
                            <p class="mt-3 mb-1">Method</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>PUT</code>
                            </div>
                            <p class="mt-3 mb-1">Example Request:</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4pelanggan/36469</code>
                                <pre><code>
{   
    "idno": 30122,
    "idjln": 103006,
    "namapel": "Udin",
    "kelompok": "RT6",
    "ketkelompok": "Rumah Tangga D",
    "kdpellama": "003-036-0",
    "alamat": "JL.RAWA SAKTI II No.12",
    "RT": "1",
    "RW": "101",
    "Desa": "PERUMNAS LINGKE",
    "Kecamatan": "SYIAH KUALA",
    "Contact": "JULIDAR",
    "telp": "085260646346",
    "urut": "010",
    "Loket": "30-1051",
    "last_update": "2016-03-01",
    "user_id": "1051-WER",
    "idprop": "0",
    "rute": "0103006",
    "urutrute": "1",
    "mtrid": "0",
    "typemtr": "301",
    "tglinstall": "2008-11-20",
    "jmldigit": "5",
    "idlama": "31125",
    "tglbaca": "2015-10-19",
    "angkamtr": 1691,
    "lokasimtr": "01 - Depan Rumah",
    "artikel": "101",
    "urutno": 1140,
    "setatus": "A",
    "sub_id": "0",
    "agrtid": "0",
    "npa_lama": "Agresso",
    "snmeter": "630990",
    "idpbr": "Kor",
    "keterangan": "EDIT ALAMAT INFORMASI DARI PELANGGAN 15 MARET 2010,PINDAH RUTE RAWA SAKTI II LAP.P.METER(RAMADHAN) DSML MEI 2011",
    "merkmeter": "ITRON",
    "kondisimeter": "01 - Baik",
    "tgl_lahir": "1964-08-20",
    "petugas": "Bag. Distribusi PDAM",
    "khusus": "1",
    "Catatan": "EDIT ALAMAT INFORMASI DARI PELANGGAN 15 MARET 2010,PINDAH RUTE RAWA SAKTI II LAP.P.METER(RAMADHAN) DSML MEI 2011, PERUBAHAN TARIF DARI 41 KE 51 LAP. PETUGAS CAB.I MENGETAHUI KACAB I ( ILHAM YACOB ) TGL 31 DES 2015, GANTI WM BARU LAP. CAB.I  TGL 08 JAN 2016",
    "lat": "5,5809435",
    "lng": "95,3527289",
    "tanggalupd": "1999-12-31 00:00:00"
}
                                </code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6  mb-3">
                    <div class="card mb-3" id="DELETE ON T4PELANGGAN">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>DELETE DATA T4PELANGGAN API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4pelanggan/{idpel}</code>
                            </div>
                            <p class="mt-3 mb-1">Method</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>DELETE</code>
                            </div>
                            <p class="mt-3 mb-1">Example Request:</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4pelanggan/36462</code>
                            </div>
    
                        </div>
                    </div>
                </div>

                <div class="col-md-6  mb-3">
                    <div class="card mb-3" id="SEARCH ON T4PELANGGAN">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>SEARCH DATA T4PELANGGAN API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4pelanggan/search</code>
                            </div>
                            <p class="mt-3 mb-1">Method</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>POST</code>
                            </div>
                            <p class="mt-3 mb-1">Example Request:</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4pelanggan/search?namapel=JUL</code>
                            </div>
    
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <h3 class="mt-5">REK TAGIH</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card" id="GET ALL DATA ON T4REKTAGIH">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>GET ALL DATA T4REKTAGIH API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4rektagih</code>
                            </div>
                            <p class="mt-3 mb-1">Method</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>GET</code>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card" id="GET SINGLE DATA ON T4REKTAGIH">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>GET SINGLE DATA T4REKTAGIH API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4rektagih/{id}</code>
                            </div>
                            <p class="mt-3 mb-1">Method</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>GET</code>
                            </div>
                            <p class="mt-3 mb-1">Example Request:</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4rektagih/2</code>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  mb-3">
                    <div class="card mb-3" id="INPUT DATA ON T4REKTAGIH">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>INPUT DATA T4REKTAGIH API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4rektagih/{id}</code>
                            </div>
                            <p class="mt-3 mb-1">Method</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>POST</code>
                            </div>
                            <p class="mt-3 mb-1">Example Request:</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <pre><code>
{
    "idpel", : "36469",
    "idjln", : "312021",
    "kdpellama", : "110003-0017",
    "keltarif", : "110003-0017",
    "gol", : "1",
    "kelompok", : "4",
    "novocer", : "41",
    "aktno", : "20000004",
    "bulan", : "130110",
    "meter_sbl", : "11998",
    "meter_skr", : "1554",
    "mpakai", : "1579",
    "minn", : "25",
    "adm", : "0",
    "dmeter", : "500",
    "dlain", : "750",
    "denda", : "2727460",
    "h1", : "0",
    "h2", : "0",
    "h3", : "0",
    "h4", : "0",
    "s1", : "0",
    "s2", : "0",
    "s3", : "0",
    "s4", : "0",
    "total", : "287312312",
    "tanggal", : "2010-01-06",
    "loket", : "1",
    "users", : "tes",
    "setatus", : "2",
    "Keterangan", : "-",
    "haspaid", : "0",
    "harga", : "300000",
    "waktu", : "00:00:03",
    "tanggalupd" : "2020-09-17 07:18:03"
}
                                </code></pre>
                            </div>
    
                        </div>
                    </div>
                </div>

                <div class="col-md-6  mb-3">
                    <div class="card mb-3" id="EDIT DATA ON T4REKTAGIH">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>EDIT DATA T4REKTAGIH API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4rektagih/{id}</code>
                            </div>
                            <p class="mt-3 mb-1">Method</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>PUT</code>
                            </div>
                            <p class="mt-3 mb-1">Example Request:</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4rektagih/2</code>
                                <pre><code>
{
    "idpel", : "12517",
    "idjln", : "312021",
    "kdpellama", : "110003-0017",
    "keltarif", : "110003-0017",
    "gol", : "1",
    "kelompok", : "4",
    "novocer", : "41",
    "aktno", : "20000004",
    "bulan", : "130110",
    "meter_sbl", : "11998",
    "meter_skr", : "1554",
    "mpakai", : "1579",
    "minn", : "25",
    "adm", : "0",
    "dmeter", : "500",
    "dlain", : "750",
    "denda", : "2727460",
    "h1", : "0",
    "h2", : "0",
    "h3", : "0",
    "h4", : "0",
    "s1", : "0",
    "s2", : "0",
    "s3", : "0",
    "s4", : "0",
    "total", : "287312312",
    "tanggal", : "2010-01-06",
    "loket", : "1",
    "users", : "tes",
    "setatus", : "2",
    "Keterangan", : "-",
    "haspaid", : "0",
    "harga", : "300000",
    "waktu", : "00:00:03",
    "tanggalupd" : "2020-09-17 07:18:03"
}
                                </code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6  mb-3">
                    <div class="card mb-3" id="DELETE ON T4REKTAGIH">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>DELETE DATA T4REKTAGIH API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4rektagih/{id}</code>
                            </div>
                            <p class="mt-3 mb-1">Method</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>DELETE</code>
                            </div>
                            <p class="mt-3 mb-1">Example Request:</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4rektagih/3</code>
                            </div>
    
                        </div>
                    </div>
                </div>

                <div class="col-md-6  mb-3">
                    <div class="card mb-3" id="SEARCH ON T4REKTAGIH">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>SEARCH DATA T4REKTAGIH API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4rektagih/search</code>
                            </div>
                            <p class="mt-3 mb-1">Method</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>POST</code>
                            </div>
                            <p class="mt-3 mb-1">Example Request:</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4rektagih/search?namapel=JUL</code>
                            </div>
    
                        </div>
                    </div>
                </div>

                <div class="container">
                    <h3 class="mt-5">REK BAYAR</h3>
                    <div class="row">
        
                        <div class="col-md-6  mb-3">
                            <div class="card mb-3" id="SEARCH ON T4REKBAYAR">
                                <div class="card-header" style="background-color: #ffffff">
                                    <h5>SEARCH DATA T4REKBAYAR API</h5> 
                                </div>
                                <div class="card-body">
                                    <p class="mb-1">Endpoint</p>
                                    <div class="container" style="background-color: #f0f0f0">
                                        <code>url/api/admin/t4bayarbas/search</code>
                                    </div>
                                    <p class="mt-3 mb-1">Method</p>
                                    <div class="container" style="ba`ckground-color: #f0f0f0">
                                        <code>POST</code>
                                    </div>
                                    <p class="mt-3 mb-1">Example Request:</p>
                                    <div class="container" style="background-color: #f0f0f0">
                                        <code>url/api/admin/t4bayarbas/search?namapel=JUL</code>
                                    </div>
            
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
        


                
            </div>
        </div>

    
            
        </section>
        
    </body>
</html>
