<!DOCTYPE html>
<html>
<head>
    <title>Portal Covid-19</title>
    <link rel="stylesheet" type="text/css" href="asset/Style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descriptions" content="Pandemi Covid-19 Mengurangi Pemanasan Global" />
    <meta name="keywords" content="Pandemi Covid-19 Mengurangi Pemanasan Global" />
    <meta name="author" content="Covid-19" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $("button").click(function(){
        $("#subject").fadeToggle();
      });
    });
    </script>
</head>
<body>
    <div class="wrap">
        <header>
            <div class="logo">
                <img src="asset/Logo-Undiksha-Universitas-Pendidikan-Ganesha.png" width="65">
            </div>
            <div class="judul">
                <h2 style="margin: 0px;">Selamat Datang</h2>
                <h4 style="margin: 0px;">Sistem Informasi Covid-19</h4>
            </div>
        </header>
        <nav class="menu">
            <ul>
                <li>
                    <a href="#">Beranda</a>
                </li>
                <li>
                    <a href="#">Statik</a>
                </li>
                <li>
                    <a href="#">Kasus</a>
                </li>
                <li>
                    <a href="#">Kontak</a>
                </li>
                <li>
                    <a href="#">Tentang</a>
                </li>
                <li>
                <input type="text" placeholder="Cari Disini...">
                </li>
            </ul>
        </nav>
        <aside class="sidebar">
            <div class="widget">
                <h2>Latest Post</h2>
                <ul class="menusidebar">
                    <li><a href="">Mengenal Covid-19</a></li>
                    <li><a href="">Mengapa Harus Menggunakan Masker?</a></li>
                </ul>
            </div>
            <div class="widget">
                <h2>Popular Post</h2>
                <ul class="menusidebar">
                    <li><a href="">Statik Kasus Bulan September</a></li>
                    <li><a href="">PSBB Daerah Jakarta Diperpanjang</a></li>
                    <li><a href="">Kondisi Ekonomi Ketika New Normal</a></li>
                </ul>
            </div>
        </aside>
        <div class="blog">
            <div class="conteudo">
                <img src="asset/sirecov.jpg">
                <h1>Mari Membantu Penanganan Covid-19 Dengan Menjadi Rewalan Bersama Kami</h1>
                <hr>
                <div class="post-info">
                    Posted by <b>admin</b>
                </div>
                <p>Bertambahnya kasus lagi meskipun tengah new normal, kami mengajak Anda untuk bergabung menjadi seorang relawan.
		Jika Anda tertarik menjadi salah satu dari relawan kami dapat mengklik <a href="daftar-relawan">klik disini</a> </p>
                <textarea id="subject" name="subject" placeholder="Tuliskan Komentar Anda" style="padding: 7ex;"></textarea>
                <button>Simpan Komentar</button>
            </div>
        <div class="footer" align="center">
            <a href="#">sirecov19undiksha.com 2020</a>
        </div>
    </div>
</body>
</html>