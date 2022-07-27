@extends('products.layout')



@section('content')

<div class="container theme-showcase" role="main" style="margin-top:40px;">

    <div class="row">



        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div id="myCarousel" class="carousel slide" style="margin-left:-25px; margin-right:-25px; margin-top:-10px; margin-bottom:-10px;">
                            <!-- Carousel items -->
                            <div class="carousel-inner">


                                <div class="item active">
                                    <a href="https://ppid.banyuwangikab.go.id" target="_self"><img src="https://ppid.banyuwangikab.go.id/assets/slide/GLand_WSL_2022.jpg" width="100%" /></a>
                                </div>

                                <div class="item">
                                    <a href="https://ppid.banyuwangikab.go.id" target="_self"><img src="https://ppid.banyuwangikab.go.id/assets/slide/Slide_PPID_2021_Bwi.jpg" width="100%" /></a>
                                </div>

                                <div class="item">
                                    <a href="https://ppid.banyuwangikab.go.id" target="_self"><img src="https://ppid.banyuwangikab.go.id/assets/slide/Slide_PPID_2021_TPID_Award_New.jpg" width="100%" /></a>
                                </div>

                                <div class="item">
                                    <a href="https://ppid.banyuwangikab.go.id" target="_self"><img src="https://ppid.banyuwangikab.go.id/assets/slide/Jangan_Lengah_Lawan_Covid_19.jpg" width="100%" /></a>
                                </div>

                                <div class="item">
                                    <a href="https://ppid.banyuwangikab.go.id" target=""><img src="https://ppid.banyuwangikab.go.id/assets/slide/Penghargaan_2019.jpg" width="100%" /></a>
                                </div>

                                <div class="item">
                                    <a href="https://ppid.banyuwangikab.go.id" target=""><img src="https://ppid.banyuwangikab.go.id/assets/slide/PPID_Award_Jatim_2018.jpg" width="100%" class="img-responsive" /></a>
                                </div>

                                <div class="item">
                                    <a href="https://ppid.banyuwangikab.go.id" target=""><img src="https://ppid.banyuwangikab.go.id/assets/slide/Awal_2019.jpg" width="100%" /></a>
                                </div>


                            </div>
                            <!-- Carousel nav -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="icon-prev"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="icon-next"></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Dokumen PPID</h3>
                </div>
                <div class="panel-body" style="margin-bottom:-29px; margin-top:-8px;">
                    <div class="list-group">

                        <a href="{{ route('products.create') }}" target="_blank" class="list-group-item">Permohonan Informasi</a>
                        <a href="https://ppid.banyuwangikab.go.id/assets/dokumen/blangko/pemberitahuan_tertulis.pdf" target="_blank" class="list-group-item">Permohonan Tertulis</a>
                        <a href="https://ppid.banyuwangikab.go.id/assets/dokumen/blangko/pernyataan_keberatan.pdf" target="_blank" class="list-group-item">Pernyataan Keberatan</a>
                        <a href="https://ppid.banyuwangikab.go.id/assets/dokumen/blangko/penolakan_permohonan.pdf" target="_blank" class="list-group-item">Penolakan Permohonan</a>
                    </div>
                </div>
            </div>
        </div>





        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">UPDATE INFO COVID-19</h3>
                </div>
                <div class="panel-body" style="margin-bottom:-15px; margin-top:8px;">
                    <div class="list-group">

                        <a href="https://corona.banyuwangikab.go.id/" target="_blank" class="list-group-item">Info Covid-19 Kabupaten Banyuwangi</a>
                        <a href="http://infocovid19.jatimprov.go.id/" target="_blank" class="list-group-item">Info Covid-19 Jawa Timur</a>
                        <a href="https://covid19.go.id/peta-sebaran" target="_blank" class="list-group-item">Info Covid-19 Indonesia</a>

                    </div>


                </div>

            </div>
        </div>


    </div>
    <!-- <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Berita Daerah</h3>
        </div>
        <div class="panel-body">
            <div id="beritaskpd"></div>
        </div>
    </div>


    <script type="600fd581efa6bd4b19a31ce8-text/javascript">
        function getberitaskpd() {

            $.ajax({
                url: 'https://webserver.banyuwangikab.go.id/rest/newjson/0/jsoncallback',
                dataType: 'jsonp',
                jsonpCallback: 'jsoncallback',
                timeout: '3000',
                success: function(data) {
                    $.each(data, function(i, item) {
                        var str = item.content;
                        var link_news = 'berita/' + item.slug;
                        var judul = item.title;
                        if (item.img_thumb) {
                            var img = 'https://banyuwangikab.go.id/media/berita/thumbnail/' + item.img_thumb;
                        } else {
                            var img = 'https://ppid.banyuwangikab.go.id/assets/img/bwi.jpg';
                        }
                        $('#beritaskpd').append(
                            '<div class="col-xs-12 col-lg-3" style="margin-left:-3px;"><div class="panel panel-default" style="width:260px; height:350px; margin-right:-50px;"><div class="panel-body" style=""><a href="https://banyuwangikab.go.id/' + link_news + '" target="_blank">' + judul + '</a><br/><img style="width:225px; height:120px;" src="' + img + '" /><br/><p style="text-align:justify">' + str.substring(0, 180) + '...</p></div></div></div>'
                        );
                    });
                }
            });

        }

        $(document).ready(function() {
            getberitaskpd();
        });


        $(function() {
            $("#beritaskpd").slimScroll({
                height: "300px"
            });
        });
    </script> -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Berita PPID</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="list-group">

                        <h6 style="text-transform:uppercase"><a href="https://ppid.banyuwangikab.go.id/home/news_detail/studi-banding-kabupaten-kediri-jawa-timur" data-pjax>Studi Banding Kabupaten Kediri Jawa Timur</a></h6>

                        <img src="https://ppid.banyuwangikab.go.id/assets/img/page/Upload_WebPPID_StudyBanding_Kab.Kediri_08042021_.jpeg " align="left" class="img-responsive" style="padding-right:4px; width:100px; height:75px">


                        <p align="justify">
                        <p>Banyuwangi kembali menjadi rujukan bagi kabupaten / kota di Pulau Jawa, salah satunya Kabupaten Kediri. Kabupaten Kediri berkunjung ke Kabupaten Banyuwangi dalam rangka studi banding yang diterima langsung oleh Bapak Kepala Dinas Komunikasi, Informatika dan Persandian Kabupaten Banyuwangi.</p>

                        < .... </p>


                            <h6 style="text-transform:uppercase"><a href="https://ppid.banyuwangikab.go.id/home/news_detail/studi-banding-ppid-kabupaten-lumajang" data-pjax>Studi Banding PPID Kabupaten Lumajang</a></h6>

                            <img src="https://ppid.banyuwangikab.go.id/assets/img/page/Upload_Studi_Banding_Lumajang-3.jpg " align="left" class="img-responsive" style="padding-right:4px; width:100px; height:75px">


                            <p align="justify">
                            <p>Sobat PPID --- Pada kesempatan kali ini, PPID Kabupaten Banyuwangi mendapat kehormatan atas kedatangan PPID Kabupaten Lumajang untuk Studing Banding terkait Pelayanan Publik dan juga Informasi Publik yang ada di Kabupaten Banyuwangi pada tanggal 25 Nopember 2020. Selain itu, Kabupaten Lumajang sa ....
                            </p>


                            <h6 style="text-transform:uppercase"><a href="https://ppid.banyuwangikab.go.id/home/news_detail/monev-ppid-kabupatenkota-di-provinsi-jawa-timur" data-pjax>Monev PPID Kabupaten/Kota di Provinsi Jawa Timur</a></h6>

                            <img src="https://ppid.banyuwangikab.go.id/assets/img/page/Monev_PPID_20202.jpeg " align="left" class="img-responsive" style="padding-right:4px; width:100px; height:75px">


                            <p align="justify">
                            <p>Sobat PPID --- Sebagaimana amanat Undang - Undang Keterbukaan Informasi Publik (UU No.14 Tahun 2008) bahwa setiap Badan Publik wajib untuk menyediakan dan memberikan layanan informasi publik, serta mengacu pada Permendagri 3 tahun 2017 tentang Pengelolaan layanan Informasi dan Dokumentasi (PLID) ....
                            </p>


                            <h6 style="text-transform:uppercase"><a href="https://ppid.banyuwangikab.go.id/home/news_detail/rapat-koordinasi-virtual-layanan-ppid-masa-pandemi-covid-19" data-pjax>Rapat Koordinasi Virtual Layanan PPID Masa Pandemi Covid-19</a></h6>

                            <img src="https://ppid.banyuwangikab.go.id/assets/img/page/Rakor_PPID_Kab.jpeg " align="left" class="img-responsive" style="padding-right:4px; width:100px; height:75px">


                            <p align="justify">
                            <p>Sobat PPID - Dinas Komunikasi, Informatika dan Persandian Provinsi Jawa Timur mengadakan Rapat Koordinasi Virtual Layanan PPID Masa Pandemi Covid-19 pada hari Rabu tanggal 10 Juni 2020 pukul 09.00 WIB s/d selesai bersama Kab./Kota Se-Jawa Timur. Rakor tersebut membahas terkait update layanan info ....
                            </p>


                            <h6 style="text-transform:uppercase"><a href="https://ppid.banyuwangikab.go.id/home/news_detail/studi-tiru-ppid-kementerian-pertanian-di-kabupaten-banyuwangi" data-pjax>Studi Tiru PPID Kementerian Pertanian di Kabupaten Banyuwangi</a></h6>

                            <img src="https://ppid.banyuwangikab.go.id/assets/img/page/WhatsApp_Image_2020-03-05_at_09.27_.10_.jpeg " align="left" class="img-responsive" style="padding-right:4px; width:100px; height:75px">


                            <p align="justify">
                            <p>Sobat PPID, Pada tanggal 4 sampai 6 Maret 2020 rombongan dari Kementerian Pertanian RI mengunjungi Kabupaten Banyuwangi. Dalam kesempatan kali ini, antusias Kementerian Pertanian akan menyelenggarakan Workshop Pengelolaan Informasi Publik dan Dokumentasi lingkup Pusat dan UPT Badan Penyuluhan dan ....
                            </p>


                            <h6 style="text-transform:uppercase"><a href="https://ppid.banyuwangikab.go.id/home/news_detail/ppid-kab-banyuwangi-mendapat-3-penghargaan-nominasi-di-ppid-award-jatim-2019" data-pjax>PPID Kab. Banyuwangi mendapat 3 Penghargaan Nominasi di PPID Award Jatim 2019</a></h6>

                            <img src="https://ppid.banyuwangikab.go.id/assets/img/page/11.jpeg " align="left" class="img-responsive" style="padding-right:4px; width:100px; height:75px">


                            <p align="justify">
                            <p>Sobat PPID, --- PPID Kabupaten Banyuwangi kembali meraih penghargaan di <span style="font-family: Arial,sans-serif;">Malam Anugerah Keterbukaan Informasi Publik Jawa Timur 2019 Pejabat dan Pengelola Informasi Daerah (PPID) Award 2019. Demikian dikatakan gubenur dalam sambutannya pada Ma ....
                            </p>

                    </div>

                </div>
                <div class="col-md-6">


                    <h6 style="text-transform:uppercase"><a href="https://ppid.banyuwangikab.go.id/home/news_detail/bimtek-ppid-pembantu-skpd-ppid-pembantu-desa-tahun-2019" data-pjax>Bimtek PPID Pembantu SKPD & PPID Pembantu Desa Tahun 2019</a></h6>

                    <img src="https://ppid.banyuwangikab.go.id/assets/img/page/3-4._Bimtek_PPID_Pembantu_OPD_dan_PPID_Desa_Se-Kab_._Bwi_di_Sahid_Osing_Hotel_25-26_Mar_2019_.png " align="left" class="img-responsive" style="padding-right:4px; width:100px; height:75px">


                    <p align="justify">
                    <p>PPID Kabupaten Banyuwangi mengadakan Bimbingan Teknis PPID Pembantu SKPD pada tanggal 25 Maret 2019 dan PPID Pembantu Desa pada tanggal 26 Maret 2019 di Sahid Osing Hotel Kemiren.</p>

                    <p>Pada acara tersebut Bapak Agus Dwi Muhanan, S.Sos, MM selaku narasumber menjelaskan secara detail terkait PPI ....
                    <div style="clear:both"> </div>
                    </p>



                    <h6 style="text-transform:uppercase"><a href="https://ppid.banyuwangikab.go.id/home/news_detail/kunjungan-kerja-kabupaten-banyumas" data-pjax>Kunjungan Kerja Kabupaten Banyumas</a></h6>

                    <img src="https://ppid.banyuwangikab.go.id/assets/img/page/Kunker_Kab._Banyumas_.png " align="left" class="img-responsive" style="padding-right:4px; width:100px; height:75px">


                    <p align="justify">
                    <p>Sobat PPID, Tanggal 31 Oktober 2018 PPID Kabupaten Banyumas menimba ilmu dengan melakukan kunjungan kerja ke Kabupaten Banyuwangi terkait PPID, Salah satunya berkunjung ke Lounge Pelayanan Publik di Kantor Pemerintah Kabupaten Banyuwangi</p>
                    ....<div style="clear:both"> </div>
                    </p>



                    <h6 style="text-transform:uppercase"><a href="https://ppid.banyuwangikab.go.id/home/news_detail/4-event-menarik-di-bulan-desember-2018" data-pjax>4 Event Menarik di bulan Desember 2018</a></h6>

                    <img src="https://ppid.banyuwangikab.go.id/assets/img/page/Jadwal_desember_EDIT_Videotron.jpg " align="left" class="img-responsive" style="padding-right:4px; width:100px; height:75px">


                    <p align="justify">
                    <p>Deretan event menarik di Banyuwangi Indonesia Festival 2018 pada bulan Desember 2018 yang tersaji diantaranya Festival Kebaya Banyuwangi, Festival Kuwung, Malam Anugerah 247th Hari Jadi Banyuwangi, dan Festival Old &amp; New.</p>

                    <p>Sangat disayangkan jika tidak menyaksikan secara langsung, AYO ....
                    <div style="clear:both"> </div>
                    </p>



                    <h6 style="text-transform:uppercase"><a href="https://ppid.banyuwangikab.go.id/home/news_detail/air-asia-akan-buka-penerbangan-banyuwangi-kualalumpur" data-pjax>AIR ASIA AKAN BUKA PENERBANGAN BANYUWANGI-KUALALUMPUR</a></h6>

                    <img src="https://ppid.banyuwangikab.go.id/assets/img/page/Air_Asia.jpg " align="left" class="img-responsive" style="padding-right:4px; width:100px; height:75px">


                    <p align="justify">
                    <p>Sobat PPID, Air Asia berencana untuk membuka jalur penerbangan internasional dengan rute Banyuwangi - kuala lumpur, menindaklanjuti hal tersebut Bupati Banyuwangi bertemu langsung dengan Rifa&#39;i Taberi Commercial Director Air Asia dan perwakilan dari PT. Angkasa Pura 2 di ruang kerja bupati ba ....
                    <div style="clear:both"> </div>
                    </p>



                    <h6 style="text-transform:uppercase"><a href="https://ppid.banyuwangikab.go.id/home/news_detail/festival-gendhing-using-2018" data-pjax>FESTIVAL GENDHING USING 2018</a></h6>

                    <img src="https://ppid.banyuwangikab.go.id/assets/img/page/FGU_Landscape.jpg " align="left" class="img-responsive" style="padding-right:4px; width:100px; height:75px">


                    <p align="justify">
                    <p>Salurkan Bakatmu disini... Yuk, Ikutan Lomba menyanyi lagu khas Banyuwangi yang dikemas di dalam Festival Gendhing Using 2018. Pendaftaran dimulai tgl 5 s/d 24 Oktober 2018 di Radio Anggota JRSB. Buruan..!!!</p>
                    ....<div style="clear:both"> </div>
                    </p>



                    <h6 style="text-transform:uppercase"><a href="https://ppid.banyuwangikab.go.id/home/news_detail/hari-kesaktian-pancasila" data-pjax>HARI KESAKTIAN PANCASILA</a></h6>

                    <img src="https://ppid.banyuwangikab.go.id/assets/img/page/Kesaktian_Pancasila.jpg " align="left" class="img-responsive" style="padding-right:4px; width:100px; height:75px">


                    <p align="justify">
                    <p>Memperingati hari Kesaktian Pancasila, Jajaran Forpimda melakukan Upacara bendera di Taman Blambangan, serta mengheningkan cipta untuk para Pahlawan Revolusi yang telah gugur</p>
                    ....<div style="clear:both"> </div>
                    </p>

                </div>
            </div>
        </div>
    </div>




    <hr />

    @endsection