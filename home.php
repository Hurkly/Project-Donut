<?php
session_start();
$total = NULL;
$post = $_POST;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varo D'Nuts</title>
    <!--Link CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!--Link font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <!--Bagian Navigasi untuk keseluruhan dikasih class "navb"-->
        <div class="navb">
            <!--Lalu ada class untuk masukin logo-->
            <div class="logo">
                <img src="img/lildonuts.png" alt="Donut Image">
                <!--disini ada bagian hero yaitu display utama-->
                <a href="#hero">
                    <!--Disini ada span diguanin untuk ngasih style seperti contohnya kita kasih class highlight yang nantinya bagian itu akan ke highlight "contoh nya kayak fontnya jadi warna merah/sesuai yang kita mau"-->
                    <span>Varo D'</span>
                    <span class="highlight">Nuts</span>
                </a>
            </div>
            
            <!--Disini ada class button grup yaitu untuk bagian tombol tombol navigasi-->
            <div class="buttonGroup">
                <!--nav itu adalah navigasi link-->
                <nav>
                    <!--ul ini adalah unorder list yang itemnya tidak terurut-->
                    <ul>
                        <!--Disini ada li untuk menampilkan item dari ul-->
                        <li class="current">
                            <a href="#hero">Home</a>
                        </li>
                        <li>
                            <a href="#About">About</a>
                        </li>
                        <li>
                            <a href="#customize">Donut Types</a>
                        </li>
                        <li>
                            <a href="#Testimonial">Testimonial</a>
                        </li>
                        <li>
                            <a href="#Price">
                                <span class="highlight">Order Now</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>










    <!--DISPLAY SECTION-->
    <!--disini ada id yang gunanya untuk sebagai identitas pada sebuah halaman yang nanti bisa mengarah ke bagian ini dari navigasi-->
    <div id="hero">
        <!--Ini ada bagian title dan slogan-->
        <div class="greet">Selamat Datang Di Varo D'Nuts</div>
        <div class="slogan">Donut kami adalah donut<span
                class="highlight">Kamu</span></div>
        <!--Ini bagian Image beserta classnya-->
        <div id="hero-image">
            <img src="img/KirikoHold.png" alt="Kiriko Holding donut">
        </div>
        <a href="#About" class="btn">Baca Lebih Lengkap...</a>
    </div>







    
    <!--ABOUT SECTION-->
    
    <!--Ini bagian/halaman about-->
    <div id="About">

        <h1 class="section-title">Tentang Donut
            <span class="highlight">Donut's&trade;</span>
        </h1>
        <hr>

        <!--Div bagian ini adalah isi dari bagian/halaman about yg isi nya ada paraghraf tentang donut dan foto donut-->
        <div class="grid">
            <div id="About-Donut-image" class="left">
                <img src="img/Rotatedonut.png" alt="Donut Image">
            </div>

            <!--Ini bagian paragraf-->
            <div id="About-list" class="right">
                <ul>
                    <li>
                        <!--Disini ada P yaitu untuk sebuah paragraf-->
                        <p>
                            Donut adalah salah satu
                            <strong>Cemilan</strong> terbaik saat kamu sedang bersantai</p>
                    </li>
                    <li>
                        <p>
                            Makan donut membantu kamu menaikan
                            <strong>Mood</strong>.</p>
                    </li>
                    <li>
                        <p>
                            Donut pernah dijulukkan nama
                            <strong>Olykoeks</strong> dikarenakan saat dibawa ke america, makanan ini dipanggilnya
                            olykoeks.</p>
                    </li>
                    <li>
                        <p>
                            Ada banyak tipe 
                            <strong>Donuts</strong> diseluruh dunia, dan diantara nya mempunyai rasa yang nikmat.</p>
                    </li>
                    <li>
                        <p>
                            1 medium size donut mempunyai 190–300
                            <strong>calories</strong>.</p>
                    </li>
                    <li>
                        <p>
                            Donut adalah makanan Favorite
                            <strong>Kiriko</strong>.</p>
                    </li>
                </ul>

            </div>
        </div>
    </div>








    <!--Customize-->

    <div id="customize">

        <!--disini ada title dan subtitle nya-->
        <h1 class="section-title">Our Product
            <span class="highlight">Donut&trade;</span>
        </h1>
        <div class="section-subtitle">Pilih Toping</div>
        <hr>

        <!--disini kita mengatur grid untuk merapihkan foto donut-->
        <ul class="grid">
            <li class="donuts">
                <img src="img/Donut/Alpacone.png" alt="Alpacone">
                <p class="donut-name">Mede</p>
            </li>
            <li class="donuts">
                <img src="img/Donut/Mrgreentea.png" alt="Mr Greentea">
                <p class="donut-name">Greentea</p>
            </li>
            <li class="donuts">
                <img src="img/Donut/Sprinkle.png" alt="Sprinkle">
                <p class="donut-name">Springkle</p>
            </li>
            <li class="donuts">
                <img src="img/Donut/Nutcraker.png" alt="Nutcraker">
                <p class="donut-name">Kacang</p>
            </li>
            <li class="donuts">
                <img src="img/Donut/Tiramisu.png" alt="Tiramisu">
                <p class="donut-name">Tiramisu</p>
            </li>
            <li class="donuts">
                <img src="img/Donut/Whynut.png" alt="Why Nut">
                <p class="donut-name">Capuchino</p>
            </li>
            <li class="donuts">
                <img src="img/Donut/Snow white.png" alt="Snowy">
                <p class="donut-name">Gula manis</p>
            </li>
            <li class="donuts">
                <img src="img/Donut/Blackhole.png" alt="Blackhole">
                <p class="donut-name">Bluberry</p>
            </li>
            <li class="donuts">
                <a href="cart.html" class="button-order">Order Satuan!</a>
            </li>
        </ul>

    </div>

    <!--Donut Detail-->
    
    <!--Ini bagian/halaman about-->
    <div id="About">

        <h1 class="section-title">Deskripsi Donut
            <span class="highlight">Donut's&trade;</span>
        </h1>
        <hr>

        <h1 class="section-title"> Mede </h1>

        <!--Div bagian ini adalah isi dari bagian/halaman about yg isi nya ada paraghraf tentang donut dan foto donut-->
        <div class="grid">
            <div id="About-Donut-image" class="left">
                <img src="img/Donut/Alpacone.png" alt="Alpacone">
            </div>

            <!--Ini bagian paragraf-->
            <div id="About-list" class="right">
                <ul>
                    <li>
                        <!--Disini ada P yaitu untuk sebuah paragraf-->
                        <p>
                            Donat lezat dengan topping kacang mede yang renyah ini menawarkan
                            <strong>Kombinasi</strong> 
                        </p>
                        <p>
                            menciptakan sensasi rasa yang memanjakan lidah
                        </p>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <hr>

    <div id="About">

        <h1 class="section-title">Deskripsi Donut
            <span class="highlight">Donut's&trade;</span>
        </h1>
        <hr>

        <h1 class="section-title"> Greentea </h1>

        <!--Div bagian ini adalah isi dari bagian/halaman about yg isi nya ada paraghraf tentang donut dan foto donut-->
        <div class="grid">
            <div id="About-Donut-image" class="left">
                <img src="img/Donut/Mrgreentea.png" alt="Mr Greentea">
            </div>

            <!--Ini bagian paragraf-->
            <div id="About-list" class="right">
                <ul>
                    <li>
                        <!--Disini ada P yaitu untuk sebuah paragraf-->
                        <p>
                            Donat lembut dengan topping green tea yang kaya akan rasa teh
                            <strong>Hijau</strong> 
                        </p>
                        <p>
                            memberikan perpaduan sempurna antara manis dan sedikit pahit
                        </p>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <hr>
    
    <div id="About">

        <h1 class="section-title">Deskripsi Donut
            <span class="highlight">Donut's&trade;</span>
        </h1>
        <hr>

        <h1 class="section-title"> Springkle </h1>

        <!--Div bagian ini adalah isi dari bagian/halaman about yg isi nya ada paraghraf tentang donut dan foto donut-->
        <div class="grid">
            <div id="About-Donut-image" class="left">
                <img src="img/Donut/Sprinkle.png" alt="Sprinkle">
            </div>

            <!--Ini bagian paragraf-->
            <div id="About-list" class="right">
                <ul>
                    <li>
                        <!--Disini ada P yaitu untuk sebuah paragraf-->
                        <p>
                        Donat lembut yang dihiasi dengan topping 
                            <strong>sprinkle</strong> 
                        </p>
                        <p>
                            warna-warni ini memberikan sentuhan ceria dan manis yang menyenangkan
                        </p>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <hr>
    
    <div id="About">

        <h1 class="section-title">Deskripsi Donut
            <span class="highlight">Donut's&trade;</span>
        </h1>
        <hr>

        <h1 class="section-title"> Kacang </h1>

        <!--Div bagian ini adalah isi dari bagian/halaman about yg isi nya ada paraghraf tentang donut dan foto donut-->
        <div class="grid">
            <div id="About-Donut-image" class="left">
                <img src="img/Donut/Nutcraker.png" alt="Nutcraker">
            </div>

            <!--Ini bagian paragraf-->
            <div id="About-list" class="right">
                <ul>
                    <li>
                        <!--Disini ada P yaitu untuk sebuah paragraf-->
                        <p>
                        Donat empuk dengan topping 
                            <strong>Kacang</strong> 
                        </p>
                        <p>
                            yang gurih dan renyah ini memberikan kombinasi rasa manis dan tekstur
                        </p>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <hr>
    
    <div id="About">

        <h1 class="section-title">Deskripsi Donut
            <span class="highlight">Donut's&trade;</span>
        </h1>
        <hr>

        <h1 class="section-title"> Tiramisu </h1>

        <!--Div bagian ini adalah isi dari bagian/halaman about yg isi nya ada paraghraf tentang donut dan foto donut-->
        <div class="grid">
            <div id="About-Donut-image" class="left">
                <img src="img/Donut/Tiramisu.png" alt="Tiramisu">
            </div>

            <!--Ini bagian paragraf-->
            <div id="About-list" class="right">
                <ul>
                    <li>
                        <!--Disini ada P yaitu untuk sebuah paragraf-->
                        <p>
                        Donat tiramisu yang lembut dan lezat ini menawarkan perpaduan sempurna antara
                            <strong>rasa</strong> 
                        </p>
                        <p>
                            kopi yang kaya, keju mascarpone yang creamy
                        </p>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <hr>
    
    <div id="About">

        <h1 class="section-title">Deskripsi Donut
            <span class="highlight">Donut's&trade;</span>
        </h1>
        <hr>

        <h1 class="section-title"> Capuchino </h1>

        <!--Div bagian ini adalah isi dari bagian/halaman about yg isi nya ada paraghraf tentang donut dan foto donut-->
        <div class="grid">
            <div id="About-Donut-image" class="left">
                <img src="img/Donut/Whynut.png" alt="Why Nut">
            </div>

            <!--Ini bagian paragraf-->
            <div id="About-list" class="right">
                <ul>
                    <li>
                        <!--Disini ada P yaitu untuk sebuah paragraf-->
                        <p>
                        Donat cappuccino yang lembut ini memadukan rasa kopi yang harum dengan sentuhan
                            <strong>manis</strong> 
                        </p>
                        <p>
                            yang pas, dihiasi dengan lapisan gula cappuccino yang creamy
                        </p>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <hr>
    
    <div id="About">

        <h1 class="section-title">Deskripsi Donut
            <span class="highlight">Donut's&trade;</span>
        </h1>
        <hr>

        <h1 class="section-title"> Gula Manis </h1>

        <!--Div bagian ini adalah isi dari bagian/halaman about yg isi nya ada paraghraf tentang donut dan foto donut-->
        <div class="grid">
            <div id="About-Donut-image" class="left">
                <img src="img/Donut/Snow white.png" alt="Snowy">
            </div>

            <!--Ini bagian paragraf-->
            <div id="About-list" class="right">
                <ul>
                    <li>
                        <!--Disini ada P yaitu untuk sebuah paragraf-->
                        <p>
                        Donat gula manis yang empuk ini dilapisi dengan taburan gula halus yang memberikan sentuhan manis
                            <strong>Klasik</strong> 
                        </p>
                        <p>
                            menciptakan kenikmatan sederhana yang tak pernah gagal memanjakan lidah
                        </p>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <hr>
    
    <div id="About">

        <h1 class="section-title">Deskripsi Donut
            <span class="highlight">Donut's&trade;</span>
        </h1>
        <hr>

        <h1 class="section-title"> Bluberry </h1>

        <!--Div bagian ini adalah isi dari bagian/halaman about yg isi nya ada paraghraf tentang donut dan foto donut-->
        <div class="grid">
            <div id="About-Donut-image" class="left">
                <img src="img/Donut/Blackhole.png" alt="Blackhole">
            </div>

            <!--Ini bagian paragraf-->
            <div id="About-list" class="right">
                <ul>
                    <li>
                        <!--Disini ada P yaitu untuk sebuah paragraf-->
                        <p>
                        Donat blueberry yang lembut ini dilapisi dengan glasir blueberry yang
                            <strong>manis</strong> 
                        </p>
                        <p>
                            dan sedikit asam, serta dihiasi dengan potongan buah blueberry segar
                        </p>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <!--Slogan-->

    <div id="slogan">

        <div class="title">Rasakan semua rasa
            <span class="highlight">Donut&trade;</span>
        </div>
        <div class="subtitle">Seperti Kiriko </div>
        <hr>

        <div class="grid">
            <div class="imgwrapper">
                <img class="imgslogan" src="img/Calmkiriko.png" alt="Kiriko">
                <img class="imgslogan" src="img/Surprisekiriko.png" alt="Kiriko">
            </div>
        </div>

    </div>






    <!--Testimonial-->
    <div id="Testimonial">
        <div class="title">Kritik & Saran
            <span class="highlight">Donut&trade;</span>
        </div>
        <div class="subtitle">Kiriko akan menanggapinya</div>
        <hr>
        <div class="row mt-3">
            <?php    
            if(isset($_POST['button'])){ //check if form was submitted
                $nama = $_POST['nama']; //get input text
                $email = $_POST['email']; //get input text
                $feedback = $_POST['feedback']; //get input text
            }
            ?>
            <div class="col-6">
            <!--Disni untuk title dan subtitle nya-->
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <!--disini ada class item yg isinya input dan symbols-->
                <div class="form-item">
                    <!--disini ada span dengan class material symbols rounded yang nantinya akan memunculkan icon/symbol import dari google symbols yang sudah tertera link di atas-->
                    <input id="nameUser" class="form-control" type="text" placeholder="Masukkan Nama" name="nama" aria-label="Name" aria-describedby="basic-addon1" required autofocus>
                </div>
                <div class="form-item">
                    <input id="emailUser" class="form-control mt-2" type="email" placeholder="Masukkan Email" name="email" aria-label="Email" aria-describedby="basic-addon1" required>
                </div>
                <div class="form-item">
                    <textarea id="feedbackUser" class="form-control mt-2" type="text" placeholder="Masukkan Kritik dan Saran" name="feedback" aria-label="Feedback" aria-describedby="basic-addon1" required></textarea>
                </div>
                <!--ini bagian button-->
                <div class="form-group">
                    <input name="button" type="submit" class="button mt-3" value="Send" /> 
                </div>
            </form>
            </div>
            <div class="col-6">
                <!--Ini bagian testimonial-->
                <div class="testimonial">
                    <!--bagian class item ini adalah untuk layout dari 1 orang testimonial isinya ada gambar lalu teks-->
                    <div class="item">
                        <div class="img"></div>
                        <!--disini ada class name untuk namanya-->
                        <div class="name"><b><?php echo $nama; ?></b></div>
                        <!--dibagian content ini ada paragraf nya sama gambar dari bintangnya-->
                        <div class="content">
                            <p><b><?php echo $email; ?></b></p>
                            <p>"<?php echo $feedback; ?>"</p>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
                    <div id="testimonialUser">
                </div>
                </div>
            </div>
        </div>
        
    </div>














    <!--Order Now-->

    <div id="Price">
        <!--Sama kaya tadi dibagian ini title nya dan subtitle-->
        <div class="title-order">Order Sekarang Favorit donut kamu dengan bundle lusin 
            <span class="highlight">Donut&trade;</span>
        </div>
        <div class="subtitle-order">Dan Jangan lupa dinikmati!</div>
        <hr>

        <!--disini sama class nya grid untuk mengatur konten yang ada di layar lebih teratur yang nanti disempurnakan di css-->
        <div class="grid">
            <!--Bagian ini sama kayak testimonial, 1 layout ada dalemannya-->
            <div class="col order">
                <ul class="price-box">
                    <li class="header">Paket 1</li>
                    <li class="emph">
                        <strong>Rp. 56.000</strong></li>
                    <li>
                        <strong>6</strong> Donut's</li>
                    <li>
                        <strong>gratis</strong> Memilih donut</li>
                    <li>
                        <strong>gratis</strong> Kiriko Sticker imut</li>
                    <li class="emph">
                        <!--disini ada button jg yang langsung mengarah ke link-->
                        <a href="halfdozens.php" class="button">Pesan Sekarang!</a>
                    </li>
                </ul>
            </div>
            <div class="col order">
                <ul class="price-box best">
                    <li class="header header-red">Paket 2</li>
                    <li class="emph">
                        <strong>Rp. 96.000</strong></li>
                    <li>
                        <strong>12</strong> Donut's</li>
                    <li>
                        <strong>gratis</strong> Memilih Donut</li>
                    <li>
                        <strong>gratis</strong> Kiriko Sticker</li>
                    <li>
                        <strong>gratis</strong> Kiriko Tumbler</li>
                    <li class="emph">
                        <a href="onedozens.php" class="button">Pesan Sekarang!</a>
                    </li>
                </ul>
            </div>
            <div class="col order">
                <ul class="price-box">
                    <li class="header">Paket 3</li>
                    <li class="emph">
                        <strong>Rp. 305.000</strong></li>
                    <li>
                        <strong>24</strong> Donut's</li>
                    <li>
                        <strong>gratis</strong> Memilih Donut</li>
                    <li>
                        <strong>gratis</strong> Kiriko Stickers R34</li>
                    <li>
                        <strong>gratis</strong> Boneka Rubah</li>
                    <li class="emph">
                        <a href="twodozens.php" class="button">Pesan Sekarang!</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>


    <!--bagian footer sama seperti header cuma dia bedanya ada dibawah-->
    <footer>
        <p>
            <span class="highlight">Varo D'Nuts&trade;</span> - Copyright &copy; 2022
        </p>

        <ul>
            <li>
                <!--Disini ada image yang bisa ngelink caranya dengan menambah link pada gambar nya-->
                <a target="_blank" href="https://www.instagram.com/sydnei78?r=nametag">
                    <div class="tiny-logo">
                        <img src="img/Background.png" alt="Instagram">
                    </div>
                </a>
            </li>
            <li>
                <a target="_blank" href="https://twitter.com/DaithiDeNogla?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                    <div class="tiny-logo">
                        <img src="img/Twitter.png" alt="Twitter">
                    </div>
                </a>
            </li>
        </ul>
    </footer>

    <!--Disini ada link direktori tambahan untuk menjalankan animasi seperti smooth scroll, fade in, slide in. sama hal nya seperti animasi di ppt-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!--ini link animasi javascript-->
    <script src="animation.js"></script>
    <!-- <script>
        var wrapper = document.getElementById("testimonialUser");
      
        var myHTML = '';
        var nameUser = [];
        var feedbackUser = [];
      
        for (var i = 0; i < nameUser.length ; i++) {
            for (var j = 0; j < feedbackUser.length ; j++) {
                myHTML += '<span class="test">Ini ulasan ke #' + (i + 1) + '</span><br/><br/>';
                myHTML += '<span class="test">Name user : ' + (nameUser[i]) + '</span><br/><br/>';
                myHTML += '<span class="test">Feedback user : ' + (feedbackUser[j]) + '</span><br/><br/>';
            }
        }
        
        var name = document.getElementById("nameUser").value
        var feedback = document.getElementById("feedbackUser").value
        name.push(name)
        feedback.push(feedbackUser)
      
        wrapper.innerHTML = myHTML
      
      </script> -->
</body>

</html>
