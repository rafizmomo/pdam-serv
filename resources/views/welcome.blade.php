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
            <h3 class="mt-5">PELANGGAN</h3>
            <div class="row">
                <div class="col-6 mb-3">
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
                <div class="col-6 mb-3">
                    <div class="card" id="GET SINGLE DATA ON T4PELANGGAN">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>GET SINGLE DATA T4PELANGGAN API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4pelanggan/idpel</code>
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
                <div class="col-6  mb-3">
                    <div class="card mb-3" id="INPUT DATA ON T4PELANGGAN">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>INPUT DATA T4PELANGGAN API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4pelanggan/idpel</code>
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
    "namapel": "JULIDAR",
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

                <div class="col-6  mb-3">
                    <div class="card mb-3" id="EDIT DATA ON T4PELANGGAN">
                        <div class="card-header" style="background-color: #ffffff">
                            <h5>EDIT DATA T4PELANGGAN API</h5> 
                        </div>
                        <div class="card-body">
                            <p class="mb-1">Endpoint</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>url/api/admin/t4pelanggan/idpel</code>
                            </div>
                            <p class="mt-3 mb-1">Method</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <code>PUT</code>
                            </div>
                            <p class="mt-3 mb-1">Example Request:</p>
                            <div class="container" style="background-color: #f0f0f0">
                                <pre><code>
{   
    "idno": 30122,
    "idjln": 103006,
    "namapel": "JULIDAR",
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
            </div>
        </div>

    
            
        </section>
        
    </body>
</html>
