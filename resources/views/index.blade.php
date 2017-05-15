<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Seminar 2017</title>

    <!-- css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body data-spy="scroll" data-target="#site-nav">
    <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">

                <!-- logo -->
                <div class="site-branding">
                    <a class="logo" href="index.html">

                        <!-- logo image  -->
                        <img src="assets/images/logo1.png" alt="Logo">

                        Seminar 2017
                    </a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- /.navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">

                    <!-- navigation menu -->
                    <li class="active"><a data-scroll href="#about">About</a></li>
                    <li><a data-scroll href="#speakers">Pembicara</a></li>
                    <li><a data-scroll href="#schedule">Jadwal</a></li>
                    <li><a data-scroll href="#partner">Sponsor</a></li>
                    <!-- <li><a data-scroll href="#">Sponsorship</a></li> -->
                    <li><a data-scroll href="#faq">FAQ</a></li>
                    <li><a data-scroll href="#photos">Foto</a></li>

                </ul>
            </div>
        </div><!-- /.container -->
    </nav>

    <header id="site-header" class="site-header valign-center">
        <div class="intro">
            @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
            @endif

            <h2>Selasa 16 Mei 2017 - Rabu 17 Mei 2017 / STT Terpadu Nurul Fikri</h2>

            <h1>FREELANCE SEMINAR 2017</h1>

            <p>Pertama &amp; Untuk Jabodetabek</p>

            <a class="btn btn-white" data-scroll href="#registration">Register Now</a>

        </div>
    </header>

    <section id="about" class="section about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <h3 class="section-title">Tentang Kami</h3>

                    <p> Anda telah menginspirasi konsumen baru. Kami tidak bisa mengembalikan akhir pekan Anda bekerja. Tetapi jika Anda mengirimkan karya terbaik Anda, kami bisa menyesuaikannya dan mungkin bisa memberi kesempatan untuk menunjukkan pemasaran digital terbaik kepada Anda.</p>


                    <figure>
                        <img alt="" class="img-responsive" src="assets/images/about-us.png">
                    </figure>

                </div><!-- /.col-sm-6 -->

                <div class="col-sm-6">

                    <h3 class="section-title multiple-title">Tujuan Seminar?</h3>

                    <p>Tujuan Akhir dari Seminar ini yaitu , Perlu Anda ketahui bahwa sistem pemasaran digital tak serumit yang Anda bayangkan. Pemasaran digital telah banyak memberikan manfaat besar bagi para pengusaha maupun konsumen baik yang besar maupun yang kecil.</p>


                    <ul class="list-arrow-right">

                        <li>Pemasaran Digital Mengaktifkan Layanan Pelanggan Real-Time</li>
                        <li>Pemasaran Digital Menghasilkan Penjualan yang Tinggi</li>
                        <li>Pemasaran Digital Membuat Anda Lebih Hemat</li>
                        <li>Pemasaran Digital Membantu Menghasilkan Pendapatan Tinggi</li>
                        <li>Pemasaran Digital Menjaga Posisi Anda Terhadap Pesaing</li>
                        <li>Pemasaran Digital Bisa Menghubungkan Anda Dengan Konsumen Di internet</li>
                        <li>Pemasaran Digital Mempersiapkan Anda Untuk Era Internet of Things</li>



                    </ul>

                </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section id="facts" class="section bg-image-1 facts text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    <i class="ion-ios-calendar"></i>
                    <h3>2017<br>Mei 2017</h3>

                </div>
                <div class="col-sm-3">

                    <i class="ion-ios-location"></i>
                    <h3>STTNF<br>Jakarta Selatan</h3>

                </div>
                <div class="col-sm-3">

                    <i class="ion-pricetags"></i>
                    <h3>70<br>Tiket</h3>

                </div>
                <div class="col-sm-3">

                    <i class="ion-speakerphone"></i>
                    <h3>06<br>Pembicara</h3>

                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>

    <section id="speakers" class="section speakers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h3 class="section-title">PEMBICARA</h3>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="speaker">

                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-1.png">
                        </figure>

                        <h4>Amalia Rahmah, MT.</h4>

                        <p>The Data Whiz</p>

                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>

                    </div><!-- /.speaker -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <div class="speaker">

                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-2.png">
                        </figure>

                        <h4>Ahmad Rio Adriansyah, S.Si. M.Si.</h4>

                        <p>The E-Artiste</p>

                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>

                    </div><!-- /.speaker -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <div class="speaker">

                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-3.png">
                        </figure>

                        <h4>Drs. Rusmanto, MM.</h4>

                        <p>The Social Media Master</p>

                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>

                    </div><!-- /.speaker -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-4">

                    <div class="speaker">

                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-4.png">
                        </figure>

                        <h4>Sirojul Munir, S.Si, M.Kom.</h4>

                        <p>The Old School Advertiser</p>

                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="speaker">

                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-5.png">
                        </figure>

                        <h4>Suhendi, ST, MMSI.</h4>

                        <p>The Marketing Megaphone</p>

                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="speaker">
                        <figure>
                            <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-6.png">
                        </figure>
                        <h4>Zaki Imaduddin S.T, M.Kom.</h4>

                        <p>The Snarky Marketer</p>

                        <ul class="social-block">
                            <li><a href=""><i class="ion-social-twitter"></i></a></li>
                            <li><a href=""><i class="ion-social-facebook"></i></a></li>
                            <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                            <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="registration" class="section registration">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Registration &amp; Form</h3>
                </div>
            </div>

            <form action="{{ route('register.participant') }}" id="registration-form" method="POST">
              {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12" id="registration-msg" style="display:none;">
                        <div class="alert"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" id="fullname" name="fullname" required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Telp" id="cell" name="cell" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Pekerjaan" id="job" name="job" required>
                        </div>

                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Alamat" id="address" name="address" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Kode Pos" id="zip" name="zip" required>
                        </div>


                        <div class="form-group">
                            <select class="form-control" name="city" id="city" required>
                              <option readonly>Kota</option>
                              <option value="Jakarta">1. Jakarta</option>
                              <option value="Bogor">2. Bogor</option>
                              <option value="Depok">3. Depok</option>
                              <option value="Tanggerang">4. Tanggerang </option>
                              <option value="Bekasi">5. Bekasi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="session" id="session" required>
                                <option readonly>Pilih Seminar Yang Diinginkan</option>
                                <option value="The Data Whiz">1. THE DATA WHIZ</option>
                                <option value="The Artiste">2. THE E-ARTISTE</option>
                                <option value="The Social Media Master">3. THE SOCIAL MEDIA MASTER</option>
                                <option value="The Old School Advertiser">4. THE OLD SCHOOL ADVERTISER</option>
                                <option value="The Marketing Megaphone">5. THE MARKETING MEGAPHONE</option>
                                <option value="The Snarky Marketer">6. THE SNARKY MARKETER</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-center mt20">
                    <button type="submit" class="btn btn-black" id="registration-submit-btn">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <section id="contribution" class="section bg-image-2 contribution">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-uppercase mt0 font-400">Kirimkan Konstribusi Dari Karya Anda</h3>

                    <p>Anda telah menginspirasi konsumen baru. Kami tidak bisa mengembalikan akhir pekan Anda bekerja. Tetapi jika Anda mengirimkan karya terbaik Anda, kami bisa menyesuaikannya dan mungkin bisa memberi kesempatan untuk menunjukkan pemasaran digital terbaik kepada Anda.</p>

                    <a class="btn btn-white" href="#">Submit</a>
                </div>
            </div>
        </div>
    </section>

    <section id="schedule" class="section schedule">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Jadwal Program Seminar</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="schedule-box">
                        <div class="time">
                            <time datetime="08:00"><h4>08:00 </time> - <time datetime="10:00">10.00</h4></time>
                        </div>
                        <h3>Hari Selasa </h3>
                        <p><h5>-AMALIA RAHMAH, MT.- </br> THE DATA WHIZ</h5></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="schedule-box">
                        <div class="time">
                            <time datetime="11:00"><h4>11.00</time> - <time datetime="13.00">13.00</h4></time>
                        </div>
                        <h3>Hari Selasa </h3>
                       <p><h5>-AHMAD RIO ADRIANSYAH, S.SI. M.SI.- </br> THE E-ARTISTE</h5></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="schedule-box">
                        <div class="time">
                            <time datetime="14:00"><h4>14:00</time> - <time datetime="16:00">16:00</h4></time>
                        </div>
                        <h3>Hari Selasa </h3>
                        <p><h5>-DRS. RUSMANTO, MM.- </br> THE SOCIAL MEDIA MASTER</h5></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="schedule-box">
                        <div class="time">
                            <time datetime="08:00"><h4>08:00 </time> - <time datetime="10:00">10.00</h4></time>
                        </div>
                        <h3>Hari Rabu</h3>
                      <p><h5>-SIROJUL MUNIR, S.SI, M.KOM.- </br>THE OLD SCHOOL ADVERTISER</h5></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="schedule-box">
                        <div class="time">
                            <time datetime="11:00"><h4>11.00</time> - <time datetime="13.00">13.00</h4></time>
                        </div>
                        <h3>Hari Rabu</h3>
                       <p><h5>-SUHENDI, ST, MMSI.- </br> THE MARKETING MEGAPHONE</h5></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="schedule-box">
                        <div class="time">
                            <time datetime="14:00"><h4>14:00</time> - <time datetime="16:00">16:00</h4></time>
                        </div>
                        <h3>Hari Rabu </h3>
                        <p><h5>-ZAKI IMADUDDIN S.T, M.KOM.-</br>THE SNARKY MARKETER</h5></p>
                    </div>
                </div>
            </div>
    </section>

    <section id="partner" class="section partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Sponsor</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <a class="partner-box partner-box-1"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-2"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-3"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-4"></a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <a class="partner-box partner-box-5"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-6"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-7"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-8"></a>
                </div>
            </div>
    </section>

    <section id="faq" class="section faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Pertanyaan Mengenai Seminar</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Berapa Harga Tiket Masuk ?</a>
                                </h4>
                            </div>

                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <h3>Free</h3>
                                    <p>Tidak Dipungut Biaya Apapun</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Event Apa Saja Nanti Yang Disediakan?</a>
                                </h4>
                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <h3>Merchandise dan Doorprize</h3>
                                    <p>Merchandise Berupa Pulpen Dan Buku , Dan Doorprise Yang Akan Disediakan Berupa Laptop ASUS X450CC Seharga Rp.5.500.000,-</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Alamat Kantor/Acara ?</a>
                                </h4>
                            </div>

                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body"><h3>STT Terpadu Nurul Fikri</h3>
                                    <p>Jalan Lenteng Agung Raya No. 20, Srengseng Sawah, Jagakarta, RT.5/RW.1, Srengseng Sawah, Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640</p></div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Bagaimana Cara Berpakaiannya ?</a>
                                </h4>
                            </div>

                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <h3>Gunakan Pakaian Yang Sopan</h3>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="faq-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> Saya Punya Pertanyaan Spesifik Yang Tidak Dibahas Disini. Ada Yang Bisa Membantu Saya ?</a>
                                </h4>
                            </div>

                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body"><h3>Email</h3>
                                    <p>Silahkan Ditanyakan Lewat Email : seminar.nf@nurulfikri.ac.id</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="photos" class="section photos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Photos</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="grid">

                        <li class="grid-item grid-item-sm-6">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-1.png">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-2.png">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-3.png">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-5.png">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-6.png">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-7.png">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-8.png">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-2.png">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-3.png">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="location" class="section location">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="section-title">Lokasi Acara Seminar</h3>
                    <address>
                        <p><h4>STT Terpadu Nurul Fikri<br> Gedung B2<br></h4> Jalan Lenteng Agung Raya No. 20, Srengseng Sawah, Jagakarta, RT.5/RW.1, Srengseng Sawah, Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640 <br> Email: seminar.nf@nurulfikri.ac.id</p>
                    </address>
                </div>
                <div class="col-sm-9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96706.50013548559!2d-78.9870674333782!3d40.76030630398601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sbd!4v1436299406518" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="site-info">Designed and<br> Developed by <a href="http://www.nurulfikri.ac.id/">Mahasiswa NF Buat Presentasi Web Lanjut</a></p>
                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main1.js"></script>
</body>
</html>
