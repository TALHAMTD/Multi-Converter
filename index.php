<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter UI-UX</title>
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <script src="../src/js/fontawesome.js"></script>
    <script src="../src/js/jquery.js"></script>
<script src="js.js"></script>
    <style>
        html{
            scroll-behavior:smooth;
        }
        .menu{
            background-color:#F6F1F1;
            padding-left:0!important;
            border-radius:18px;
            color:#AFD3E2;
            list-style:none;
        }
        .menu > li{
            padding:10px 0;
            height:50px;
            position:relative;
            transition:500ms all;
            margin:2px;
        }
        .menu > li > i{
            font-size:30px;
            position:absolute;
            top:50%;left:50%;
            transform:translate(-50%,-50%);
        }
        .active{
            background-color:#146C94;border-radius:18px;
        }
        .menu > li:hover{
            background-color:#AFD3E2;
            border-radius:18px;
            color:white;
            cursor:pointer;
        }
        option{
            padding:unset;
            margin:unset;
        }
        input[type='text']{
            background-color:unset;
            border:1px solid #6c757d;
            width:144px;
            margin:unset;
            padding:5px;
            border-radius:5px;
        }
        input:focus{
            outline:3px solid #7c9eff24;
            transition:200ms all;
        }
        .inputklas{
            margin-bottom:1em;
        }
        input[type=submit]{
            border:1px solid #AFD3E2;
            color:#146C94;
            display:block;
        }
        input[type=submit]:hover{
            background-color:#146C94;
            color:White;
            display:block;
        }
        form{
            width:60%;
            margin-left:auto;
            margin-right:auto;
        }
        .yanson{
            transition:unset;
            animation:yanson .5s alternate-reverse infinite;
        }
        
        .sekme{
            overflow:hidden;
            height:100vh;
            padding:2em 0;
            display:none;
        }
        .sonucgos-css{
            overflow:hidden;opacity:0;height:0;background-color:white;display:block;padding:10px;
        }
        .label{
            top:2px!important;
            left:6px!important;
            margin:4px 0;
        }

        #ANIMATION
        #ANIMATION
        @keyframes yanson{
            from{opacity:0}
            to{opacity:.6}
        }
        @keyframes kapat{
            from{transform:scale(1);opacity:1;}
            to{transform:scale(0.9);opacity:0;}
        }
        @keyframes getir{
            from{transform:translate(60px,0);opacity:0;}
            to{transform:translate(0,0);opacity:1;}
        }
        @keyframes yarimtur{
            from{transform:rotate(0deg);}
            to{transform:rotate(180deg);}
        }
        @keyframes toleft{
            0%{transform:translate(0,0);opacity:1;}
            50%{transform:translate(-30px,0);opacity:0;}
            75%{transform:translate(0,0);opacity:0;}
            100%{transform:translate(0,0);opacity:1;} 
        }
        @keyframes toright{
            0%{transform:translate(0,0);opacity:1;}
            50%{transform:translate(30px,0);opacity:0;}
            75%{transform:translate(0,0);opacity:0;}
            100%{transform:translate(0,0);opacity:1;} 
        }
        @keyframes titre{
            0% { transform: translateX(0) }
            25% { transform: translateX(5px) }
            50% { transform: translateX(-5px) }
            75% { transform: translateX(5px) }
            100% { transform: translateX(0) }
        }
        
    </style>
</head>
<body>
    <div class="container" style="height:100vh;">
        <div class="row" style="height:100%;">
            <div class="col-2">
                <nav style="width:100px;position:sticky;top:5%;">
                    <p>Çeviri Listesi</p>
                    <ul class="menu">
                        <li onclick="sayfa('#DOVIZ','menu1')" class="menu1 DOVIZ"><i class="fa-solid fa-dollar-sign"></i></li>
                        <li onclick="sayfa('#MADEN','menu2')" class="menu2 MADEN"><i class="fa-solid fa-coins"></i></li>
                        <li onclick="sayfa('#BUYUKLUK','menu3')" class="menu3 BUYUKLUK"><i class="fa-solid fa-ruler-horizontal"></i></li>
                        <li onclick="sayfa('#AGE','menu4')" class="menu4 AGE"><i class="fa-solid fa-child"></i></li>
                        <li onclick="sayfa('#WEIGHT','menu5')" class="menu5 WEIGHT"><i class="fa-solid fa-weight-scale"></i></li>
                        <li onclick="sayfa('#INDIRIM','menu6')" class="menu6 INDIRIM"><i class="fa-solid fa-tag"></i></li>
                        <li onclick="sayfa('#FAIZ','menu7')" class="menu7 FAIZ"><i class="fa-solid fa-money-bills"></i></li>
                        <li onclick="sayfa('#ZAMAN','menu8')" class="menu8 ZAMAN"><i class="fa-solid fa-clock"></i></li>
                        <li onclick="sayfa('#YUZDE','menu9')" class="menu9 YUZDE"><i class="fa-solid fa-percent"></i></li>
                        <li onclick="sayfa('#ORTALAMA','menu10')" class="menu10 ORTALAMA"><i class="fa-solid fa-gauge-simple"></i></li>
                        <li onclick="sayfa('#SICAKLIK','menu11')" class="menu11 SICAKLIK"><i class="fa-solid fa-temperature-three-quarters"></i></li>
                    </ul>
                </nav>
            </div>
            <div class="col-10">

                <!--MENU1 DÖVİZ BÖLÜMÜ -->
                <div id="DOVIZ" class="sekme">
                    <div style="background-color:#f7f7f7;height:100%;border-radius:10px;overflow:hidden;">
                        <div style="">
                            <div style="padding:18px;background-color:#0000000a;">
                                <h4 style="margin:unset;">Döviz Çevirici</h4>
                            </div>
                            <div style="padding:18px;">
                                <p>Öğrenmek istediğiniz döviz türünün karşılığını öğrenmek için 1. Giriş alanına miktarını yazıp, türünü seçiniz. Ardından da çevirmek istediğiniz döviz türünü seçip "Hesapla" tuşuna basarak dövizin karşılığını öğrenebilirsiniz.</p>
                                <div>
                                    <form action="javascript:void(0)" method="post">
                                        <div class="doviz1 inputklas" style="background-color:white;display:block;padding:10px;">
                                            <div style="position:relative;">
                                                <label class="1 yanson label" for="doviz1" style="position:absolute;top:5px;left:5px;">Miktar</label>
                                                <div style="display:flex;align-items:center;">
                                                    <input placeholder="Miktar" required class="onlynumber" data-num="1" id="doviz1" style="flex-grow:10" type="text">
                                                    <select id="dovizcon1" style="padding:5px;border:unset;background:unset;width:100px;margin-left:auto;flex-grow:1" id="">
                                                        <option value="TL">TL</option>
                                                        <option value="USD">ABD Doları</option>
                                                        <option value="AVUSD">Avustralya Doları</option>
                                                        <option value="DANKRON">Danimarka Kronu</option>
                                                        <option value="EUR">Euro</option>
                                                        <option value="GBP">İngiliz Sterlini</option>
                                                        <option value="ISVFRA">İsviçre Frangı</option>
                                                        <option value="ISVKRON">İsveç Kronu</option>
                                                        <option value="KANUSD">Kanada Doları</option>
                                                        <option value="KUVEYTDIN">Kuveyt Dinarı</option>
                                                        <option value="NORVECKRON">Norveç Kronu</option>
                                                        <option value="SUUDIRIYAL">Suudi Arabistan Riyali</option>
                                                        <option value="JAPONYEN">Japon Yeni</option>
                                                        <option value="BULGARLEV">Bulgar Levası</option>
                                                        <option value="RUMLEY">Rumen Leyi</option>
                                                        <option value="RUS">Rus Rublesi</option>
                                                        <option value="IRAN">İran Riyali</option>
                                                        <option value="CIN">Çin Yuanı</option>
                                                        <option value="PAK">Pakistan Rupisi</option>
                                                        <option value="KATAR">Katar Riyali</option>
                                                        <option value="KORE">Güney Kore Wonu</option>
                                                        <option value="AZERBAYCAN">Azerbaycan Yeni Manatı</option>
                                                        <option value="BAE">BAE Dirhemi</option>
                                                    </select>
                                                    <span class="convertor" id="dovizcon" style="margin:0 1em;position:relative;height:25px;width:25px;display:inline-block;background:#ffcecb;border-radius:50%;">
                                                        <i style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);" class="fa-solid fa-right-left"></i>
                                                    </span>
                                                    <select id="dovizcon2" style="padding:5px;border:unset;background:unset;width:100px;flex-grow:1;" id="">
                                                        <option value="TL">TL</option>
                                                        <option value="USD">ABD Doları</option>
                                                        <option value="AVUSD">Avustralya Doları</option>
                                                        <option value="DANKRON">Danimarka Kronu</option>
                                                        <option value="EUR">Euro</option>
                                                        <option value="GBP">İngiliz Sterlini</option>
                                                        <option value="ISVFRA">İsviçre Frangı</option>
                                                        <option value="ISVKRON">İsveç Kronu</option>
                                                        <option value="KANUSD">Kanada Doları</option>
                                                        <option value="KUVEYTDIN">Kuveyt Dinarı</option>
                                                        <option value="NORVECKRON">Norveç Kronu</option>
                                                        <option value="SUUDIRIYAL">Suudi Arabistan Riyali</option>
                                                        <option value="JAPONYEN">Japon Yeni</option>
                                                        <option value="BULGARLEV">Bulgar Levası</option>
                                                        <option value="RUMLEY">Rumen Leyi</option>
                                                        <option value="RUS">Rus Rublesi</option>
                                                        <option value="IRAN">İran Riyali</option>
                                                        <option value="CIN">Çin Yuanı</option>
                                                        <option value="PAK">Pakistan Rupisi</option>
                                                        <option value="KATAR">Katar Riyali</option>
                                                        <option value="KORE">Güney Kore Wonu</option>
                                                        <option value="AZERBAYCAN">Azerbaycan Yeni Manatı</option>
                                                        <option value="BAE">BAE Dirhemi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="doviz2 sonucgos-css">
                                            <div style="display:inline-block;">
                                                <p style="margin:unset;padding:5px;">Sonuç</p>
                                            </div>
                                        </div>
                                            
                                        <input type="submit" class="btn" value="Hesapla">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MENU1 DÖVİZ BÖLÜMÜ -->
                
                <!--MENU2 MADEN BÖLÜMÜ -->
                <div id="MADEN" class="sekme">
                    <div style="background-color:#f7f7f7;height:100%;border-radius:10px;overflow:hidden;">
                        <div style="">
                            <div style="padding:18px;background-color:#0000000a;">
                                <h4 style="margin:unset;">Maden Çevirici</h4>
                            </div>
                            <div style="padding:18px;">
                                <p>Öğrenmek istediğiniz döviz türünün karşılığını öğrenmek için 1. Giriş alanına miktarını yazıp, türünü seçiniz. Ardından da çevirmek istediğiniz döviz türünü seçip "Hesapla" tuşuna basarak dövizin karşılığını öğrenebilirsiniz.</p>
                                <div>
                                    <form action="javascript:void(0)" method="post">
                                        <div class="maden1 inputklas" style="background-color:white;display:block;padding:10px;">
                                            <div style="position:relative;">
                                                <label class="2 yanson label" for="maden1" style="position:absolute;top:5px;left:5px;">Miktar</label>
                                                <div style="display:flex;align-items:center;">
                                                    <input required class="onlynumber" data-num="2" id="maden1" style="flex-grow:10" type="text">
                                                    <select class="dovizcon" style="padding:5px;border:unset;background:unset;width:100px;margin-left:auto;flex-grow:1" id="">
                                                        <option value="TL">TL</option>
                                                        <option value="USD">ABD Doları</option>
                                                        <option value="AVUSD">Avustralya Doları</option>
                                                        <option value="DANKRON">Danimarka Kronu</option>
                                                        <option value="EUR">Euro</option>
                                                        <option value="GBP">İngiliz Sterlini</option>
                                                        <option value="ISVFRA">İsviçre Frangı</option>
                                                        <option value="ISVKRON">İsveç Kronu</option>
                                                        <option value="KANUSD">Kanada Doları</option>
                                                        <option value="KUVEYTDIN">Kuveyt Dinarı</option>
                                                        <option value="NORVECKRON">Norveç Kronu</option>
                                                        <option value="SUUDIRIYAL">Suudi Arabistan Riyali</option>
                                                        <option value="JAPONYEN">Japon Yeni</option>
                                                        <option value="BULGARLEV">Bulgar Levası</option>
                                                        <option value="RUMLEY">Rumen Leyi</option>
                                                        <option value="RUS">Rus Rublesi</option>
                                                        <option value="IRAN">İran Riyali</option>
                                                        <option value="CIN">Çin Yuanı</option>
                                                        <option value="PAK">Pakistan Rupisi</option>
                                                        <option value="KATAR">Katar Riyali</option>
                                                        <option value="KORE">Güney Kore Wonu</option>
                                                        <option value="AZERBAYCAN">Azerbaycan Yeni Manatı</option>
                                                        <option value="BAE">BAE Dirhemi</option>
                                                    </select>
                                                    <span id="dovizcon" style="margin:0 1em;position:relative;height:25px;width:25px;display:inline-block;background:#ffcecb;border-radius:50%;">
                                                        <i style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);" class="fa-solid fa-right-left"></i>
                                                    </span>
                                                    <select class="dovizcon" style="padding:5px;border:unset;background:unset;width:100px;flex-grow:1;" id="">
                                                        <option value="TL">TL</option>
                                                        <option value="USD">ABD Doları</option>
                                                        <option value="AVUSD">Avustralya Doları</option>
                                                        <option value="DANKRON">Danimarka Kronu</option>
                                                        <option value="EUR">Euro</option>
                                                        <option value="GBP">İngiliz Sterlini</option>
                                                        <option value="ISVFRA">İsviçre Frangı</option>
                                                        <option value="ISVKRON">İsveç Kronu</option>
                                                        <option value="KANUSD">Kanada Doları</option>
                                                        <option value="KUVEYTDIN">Kuveyt Dinarı</option>
                                                        <option value="NORVECKRON">Norveç Kronu</option>
                                                        <option value="SUUDIRIYAL">Suudi Arabistan Riyali</option>
                                                        <option value="JAPONYEN">Japon Yeni</option>
                                                        <option value="BULGARLEV">Bulgar Levası</option>
                                                        <option value="RUMLEY">Rumen Leyi</option>
                                                        <option value="RUS">Rus Rublesi</option>
                                                        <option value="IRAN">İran Riyali</option>
                                                        <option value="CIN">Çin Yuanı</option>
                                                        <option value="PAK">Pakistan Rupisi</option>
                                                        <option value="KATAR">Katar Riyali</option>
                                                        <option value="KORE">Güney Kore Wonu</option>
                                                        <option value="AZERBAYCAN">Azerbaycan Yeni Manatı</option>
                                                        <option value="BAE">BAE Dirhemi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="doviz2 sonucgos-css" style="opacity:0;height:0;background-color:white;display:block;padding:10px;">
                                            <div style="display:inline-block;">
                                                <p style="margin:unset;padding:5px;">Sonuç</p>
                                            </div>
                                        </div>
                                            
                                        <input type="submit" class="btn" value="Hesapla">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MENU2 MADEN BÖLÜMÜ -->

                <!--MENU3 BÜYÜKLÜK BÖLÜMÜ -->
                <div id="BUYUKLUK" class="sekme">
                    <div style="background-color:#f7f7f7;height:100%;border-radius:10px;overflow:hidden;">
                        <div style="">
                            <div style="padding:18px;background-color:#0000000a;">
                                <h4 style="margin:unset;">Büyüklük Çevirici</h4>
                            </div>
                            <div style="padding:18px;">
                                <p>Bir birimin başka bir birimdeki karşılığını öğrenmek için ilk önce sayınızı ardından da büyüklük birimlerini seçerek hesaplaya basabilirsiniz.</p>
                                <div>
                                    <form id="buyuklukform" action="javascript:void(0)" method="post">
                                        <div class="buyukluk1 inputklas" style="background-color:white;display:block;padding:10px;">
                                            <div style="position:relative;">
                                                <label class="3 yanson label" for="buyukluk1" style="position:absolute;top:5px;left:5px;">Miktar</label>
                                                <div style="display:flex;align-items:center;">
                                                    <input type="text" required name="buyukluk" id="buyukluk1" class="onlynumber" data-num="3" style="flex-grow:10">
                                                    <select class="buyukluk" name="buyukluk" id="buyuklukcon1" style="padding:5px;border:unset;background:unset;width:100px;margin-left:auto;flex-grow:1">
                                                        <option value="25">Kuetta | 30</option>
                                                        <option value="24">Ronna | 27</option>
                                                        <option value="23">Yotta | 24</option>
                                                        <option value="22">Zetta | 21</option>
                                                        <option value="21">Ekza | 18</option>
                                                        <option value="20">Peta | 15</option>
                                                        <option value="19">Tera | 12</option>
                                                        <option value="18">Giga | 9</option>
                                                        <option value="17">Mega | 6</option>
                                                        <option value="16">Kilo | 3</option>
                                                        <option value="15">Hekta | 2</option>
                                                        <option value="14">Deka | 1</option>
                                                        <option value="13">Metre | 0</option>
                                                        <option value="12">Desi | -1</option>
                                                        <option value="11">Santi | -2</option>
                                                        <option value="10">Mili | -3</option>
                                                        <option value="9">Mikro | -6</option>
                                                        <option value="8">Nano | -9</option>
                                                        <option value="7">Piko | -12</option>
                                                        <option value="6">Femto | -15</option>
                                                        <option value="5">Atto | -18</option>
                                                        <option value="4">Zepto | -21</option>
                                                        <option value="3">Yokto | -24</option>
                                                        <option value="2">Ronto | -27</option>
                                                        <option value="1">Kuekto | -30</option>
                                                    </select>
                                                    <span class="convertor" id="buyuklukcon" style="margin:0 1em;position:relative;height:25px;width:25px;display:inline-block;background:#ffcecb;border-radius:50%;">
                                                        <i style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);" class="fa-solid fa-right-left"></i>
                                                    </span>
                                                    <select class="buyukluk" name="buyukluk" id="buyuklukcon2" style="padding:5px;border:unset;background:unset;width:100px;flex-grow:1;">
                                                        <option value="25">Kuetta | 30</option>
                                                        <option value="24">Ronna | 27</option>
                                                        <option value="23">Yotta | 24</option>
                                                        <option value="22">Zetta | 21</option>
                                                        <option value="21">Ekza | 18</option>
                                                        <option value="20">Peta | 15</option>
                                                        <option value="19">Tera | 12</option>
                                                        <option value="18">Giga | 9</option>
                                                        <option value="17">Mega | 6</option>
                                                        <option value="16">Kilo | 3</option>
                                                        <option value="15">Hekta | 2</option>
                                                        <option value="14">Deka | 1</option>
                                                        <option value="13">Metre | 0</option>
                                                        <option value="12">Desi | -1</option>
                                                        <option value="11">Santi | -2</option>
                                                        <option value="10">Mili | -3</option>
                                                        <option value="9">Mikro | -6</option>
                                                        <option value="8">Nano | -9</option>
                                                        <option value="7">Piko | -12</option>
                                                        <option value="6">Femto | -15</option>
                                                        <option value="5">Atto | -18</option>
                                                        <option value="4">Zepto | -21</option>
                                                        <option value="3">Yokto | -24</option>
                                                        <option value="2">Ronto | -27</option>
                                                        <option value="1" selected>Kuekto | -30</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buyukluk2 sonucgos-css">
                                            <div style="display:inline-block;">
                                                <p style="margin:unset;padding:5px;">Sonuç</p>
                                            </div>
                                        </div>
                                            
                                        <input name="buyukluksub" type="submit" class="btn" value="Hesapla">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MENU3 BÜYÜKLÜK BÖLÜMÜ -->

                <!--MENU4 YAŞ BÖLÜMÜ -->
                <div id="AGE" class="sekme">
                    <div style="background-color:#f7f7f7;height:100%;border-radius:10px;overflow:hidden;">
                        <div style="">
                            <div style="padding:18px;background-color:#0000000a;">
                                <h4 style="margin:unset;">Yaş Hesaplayıcı</h4>
                            </div>
                            <div style="padding:18px;">
                                <p>Doğum tarihinizi ilgili yere girdikten sonra hesapla tuşuna bastıktan sonra yaşınızı öğrenebilirsiniz.</p>
                                <div>
                                    <form id="ageform" action="javascript:void(0)" method="post">
                                        <div class="yas1 inputklas" style="background-color:white;display:block;padding:10px;">
                                            <div style="position:relative;">
                                                <label class="4" for="yas1">Tarih</label>
                                                <div style="display:flex;align-items:center;">
                                                    <input required data-num="4" name="yas" id="yas1" style="flex-grow:10" class="form-control" type="date">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="yas2 sonucgos-css" >
                                            <div style="display:inline-block;">
                                                <p style="margin:unset;padding:5px;">Sonuç</p>
                                            </div>
                                        </div>
                                            
                                        <input type="submit" class="btn" value="Hesapla">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MENU4 YAŞ BÖLÜMÜ -->

                <!--MENU5 ENDEKS BÖLÜMÜ -->
                <div id="WEIGHT" class="sekme">
                    <div style="background-color:#f7f7f7;height:100%;border-radius:10px;overflow:hidden;">
                        <div>
                            <div style="padding:18px;background-color:#0000000a;">
                                <h4 style="margin:unset;">Boy-Kilo Endeksi Hesaplayıcı</h4>
                            </div>
                            <div style="padding:18px;">
                                <p>Boy kilo ile sağlık durumunuzu öğrenmek için kilonuzu ve boyunuzu ilgili yerlere girdikten sonra hesapla tuşuna bastırınız.</p>
                                <div>
                                    <form action="javascript:void(0)" id="endeks" method="post">
                                        <div class="endeks1 inputklas" style="background-color:white;display:block;padding:10px;">
                                            <div style="position:relative;">
                                                <div style="display:flex;align-items:center;justify-content:space-between;">
                                                    <div style="width:45%;">
                                                        <label for="boy1" style="display:block;">Boy (cm)</label>
                                                        <input style="width:100%;" class="onlynumber endeks" required id="boy1" class="form-control" type="text" min="100" max="260">
                                                    </div>
                                                    <div style="width:45%;">
                                                        <label for="kilo1" style="display:block;">Kilo(kg)</label>
                                                        <input style="width:100%;" class="onlynumber endeks" required id="kilo1" class="form-control" type="text" min="30" max="240">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="endeks2 sonucgos-css" >
                                            <div style="display:inline-block;">
                                                <p style="margin:unset;padding:5px;">Sonuç</p>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn" value="Hesapla">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MENU5 ENDEKS BÖLÜMÜ -->

                <!--MENU6 İNDİRİM BÖLÜMÜ -->
                <div id="INDIRIM" class="sekme">
                    <div style="background-color:#f7f7f7;height:100%;border-radius:10px;overflow:hidden;">
                        <div style="">
                            <div style="padding:18px;background-color:#0000000a;">
                                <h4 style="margin:unset;">İndirim Hesaplayıcı</h4>
                            </div>
                            <div style="padding:18px;">
                                <p>Doğum tarihinizi ilgili yere girdikten sonra hesapla tuşuna bastıktan sonra yaşınızı öğrenebilirsiniz.</p>
                                <div>
                                    <form action="javascript:void(0)" method="post">
                                        <div class="indirim1 inputklas" style="background-color:white;display:block;padding:10px;">
                                            <div style="position:relative;">
                                                <div style="display:flex;align-items:center;justify-content:space-between;">
                                                    <div>
                                                        <label for="discount1">Tür</label>
                                                        <select name="indiriminp1" id="discount1" class="form-control w-100">
                                                            <option value="ind1">İndirimsiz Fiyat</option>
                                                            <option value="ind2">İndirimli Fiyat</option>
                                                            <option value="ind3">İndirim Oranı</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label id="ind2" for="discount2">İndirimsiz Fiyat</label>
                                                        <input required name="indiriminp2" id="discount2" class="form-control onlynumber" type="text">
                                                    </div>
                                                    <div>
                                                        <label id="ind3" for="discount2">İndirim Oranı</label>
                                                        <input required name="indiriminp3" id="discount2" class="form-control onlynumber" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="indirim2 sonucgos-css" >
                                            <div style="display:inline-block;">
                                                <p style="margin:unset;padding:5px;">Sonuç</p>
                                            </div>
                                        </div>
                                            
                                        <input type="submit" class="btn" value="Hesapla">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MENU6 İNDİRİM BÖLÜMÜ -->

                <!--MENU7 FAİZ BÖLÜMÜ -->
                <div id="FAIZ" class="sekme">
                    <div style="background-color:#f7f7f7;height:100%;border-radius:10px;overflow:hidden;">
                        <div style="">
                            <div style="padding:18px;background-color:#0000000a;">
                                <h4 style="margin:unset;">Faiz Hesaplayıcı</h4>
                            </div>
                            <div style="padding:18px;">
                                <p>Doğum tarihinizi ilgili yere girdikten sonra hesapla tuşuna bastıktan sonra yaşınızı öğrenebilirsiniz.</p>
                                <div>
                                    <form action="" method="post">
                                        <div class="yas1 inputklas" style="background-color:white;display:block;padding:10px;">
                                            <div style="position:relative;">
                                                <div style="display:flex;align-items:center;flex-wrap:wrap;">
                                                    <div style="display:flex;justify-content:space-between;width:100%;">
                                                        <div style="width:45%;margin-bottom:.375rem;"><label for="faiz1">Faiz Türü</label>
                                                            <select name="" class="form-control w-100" id="faiz1">
                                                                <option value="">Basit Faiz</option>
                                                                <option value="">Bileşik Faiz</option>
                                                            </select>
                                                        </div>
                                                        <div style="width:45%;margin-bottom:.375rem;"><label for="">Vade Şekli</label>
                                                            <select name="" class="form-control w-100" id="faiz1">
                                                                <option value="">Günlük</option>
                                                                <option value="">Aylık</option>
                                                                <option value="">Yıllık</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div style="width:100%;margin-bottom:.375rem;">
                                                        <label>Faiz Bilgileri</label>
                                                        <div style="margin-left:15px;display:flex;flex-wrap:wrap;justify-content:space-between;">
                                                            <div><label for="">Ana Para</label><input required id="yas1" style="flex-grow:10" class="form-control" type="text"></div>
                                                            <div><label for="">Faiz Oranı</label><input required id="yas1" style="flex-grow:10" class="form-control" type="text"></div>
                                                            <div><label for="">Vade Sayısı</label><input required id="yas1" style="flex-grow:10" class="form-control" type="text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="yas2 sonucgos-css" >
                                            <div style="display:inline-block;">
                                                <p style="margin:unset;padding:5px;">Sonuç</p>
                                            </div>
                                        </div>
                                            
                                        <input type="submit" class="btn" value="Hesapla">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MENU7 FAİZ BÖLÜMÜ -->

                <!--MENU8 ZAMAN BÖLÜMÜ -->
                <div id="ZAMAN" class="sekme">
                    <div style="background-color:#f7f7f7;height:100%;border-radius:10px;overflow:hidden;">
                        <div style="">
                            <div style="padding:18px;background-color:#0000000a;">
                                <h4 style="margin:unset;">İki Zaman Arası Fark Hesaplayıcı</h4>
                            </div>
                            <div style="padding:18px;">
                                <p>Doğum tarihinizi ilgili yere girdikten sonra hesapla tuşuna bastıktan sonra yaşınızı öğrenebilirsiniz.</p>
                                <div>
                                    <form action="" method="post">
                                        <div class="yas1 inputklas" style="background-color:white;display:block;padding:10px;">
                                            <div style="position:relative;">
                                                
                                                
                                                <div style="display:flex;align-items:center;justify-content:space-between;">
                                                    <div style="width:40%;"><label for="timeilk">İlk Tarih</label><input required id="timeilk" style="flex-grow:10" class="form-control" type="date"></div>
                                                    <div style="width:40%;"><label for="timeson">Son Tarih</label><input required id="timeson" style="flex-grow:10" class="form-control" type="date"></div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="yas2 sonucgos-css" >
                                            <div style="display:inline-block;">
                                                <p style="margin:unset;padding:5px;">Sonuç</p>
                                            </div>
                                        </div>
                                            
                                        <input type="submit" class="btn" value="Hesapla">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MENU8 ZAMAN BÖLÜMÜ -->

                <!--MENU9 YÜZDE BÖLÜMÜ -->
                <div id="YUZDE" class="sekme">
                    <div style="background-color:#f7f7f7;height:100%;border-radius:10px;overflow:hidden;">
                        <div style="">
                            <div style="padding:18px;background-color:#0000000a;">
                                <h4 style="margin:unset;">Yüzde Hesaplayıcı</h4>
                            </div>
                            <div style="padding:18px;">
                                <p>Sadece bir sayının yüzdesini almak istiyorsanız "Yüzdelik Bölümü" kısmını boş bırakınız</p>
                                <div>
                                    <form action="" method="post">
                                        <div class="yas1 inputklas" style="background-color:white;display:block;padding:10px;">
                                            <div style="position:relative;">
                                                <div style="display:flex;align-items:center;justify-content:space-between">
                                                    <div><label for="yuzde1">Yüzdesi Alınacak</label><input id="yuzde1" style="flex-grow:10" class="form-control" type="text"></div>
                                                    <div><label for="yuzde2">Yüzde %</label><input id="yuzde2" style="flex-grow:10" class="form-control" type="text"></div>
                                                    <div><label for="yuzde3">Yüzdelik Bölümü</label><input id="yuzde3" style="flex-grow:10" class="form-control" type="text"></div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="yas2 sonucgos-css" >
                                            <div style="display:inline-block;">
                                                <p style="margin:unset;padding:5px;">Sonuç</p>
                                            </div>
                                        </div>
                                            
                                        <input type="submit" class="btn" value="Hesapla">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MENU9 YÜZDE BÖLÜMÜ -->

                <!--MENU10 ORTALAMA BÖLÜMÜ -->
                <div id="ORTALAMA" class="sekme">
                    <div style="background-color:#f7f7f7;height:100%;border-radius:10px;overflow:hidden;">
                        <div style="">
                            <div style="padding:18px;background-color:#0000000a;">
                                <h4 style="margin:unset;">Ortalama Hesaplamaları</h4>
                            </div>
                            <div style="padding:18px;">
                                <p>Doğum tarihinizi ilgili yere girdikten sonra hesapla tuşuna bastıktan sonra yaşınızı öğrenebilirsiniz.</p>
                                <div>
                                    <form action="" method="post">
                                        <div class="yas1 inputklas" style="background-color:white;display:block;padding:10px;">
                                            <div style="position:relative;">
                                                <label class="10 yanson label" for="dizi1" style="position:absolute;top:5px;left:5px;">Sıralı Diziniz(Örn:1,3,4,8,13,22,44...n)</label>
                                                <div style="display:flex;align-items:center;">
                                                    <input required class="onlynumber" data-num="10" id="dizi1" style="flex-grow:10" type="text">
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="yas2 sonucgos-css" >
                                            <div style="display:inline-block;">
                                                <p style="margin:unset;padding:5px;">Sonuç</p>
                                            </div>
                                        </div>
                                            
                                        <input type="submit" class="btn" value="Hesapla">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MENU10 ORTALAMA BÖLÜMÜ -->

                <!--MENU11 SICAKLIK BÖLÜMÜ -->
                <div id="SICAKLIK" class="sekme">
                    <div style="background-color:#f7f7f7;height:100%;border-radius:10px;overflow:hidden;">
                        <div style="">
                            <div style="padding:18px;background-color:#0000000a;">
                                <h4 style="margin:unset;">Sıcaklık Dönüşümleri</h4>
                            </div>
                            <div style="padding:18px;">
                                <p>Bir sıcaklık türünün diğerine dönüştürülmesinde bu çeviriciyi kullanabilirsiniz.</p>
                                <div>
                                    <form action="" method="post">
                                        <div class="yas1 inputklas" style="background-color:white;display:block;padding:10px;">
                                        <div style="position:relative;">
                                                <label class="2 yanson label" for="maden1" style="position:absolute;top:5px;left:5px;">Miktar</label>
                                                <div style="display:flex;align-items:center;">
                                                    <input required class="onlynumber" data-num="2" id="maden1" style="flex-grow:10" type="text">
                                                    <select id="sicaklik1" style="padding:5px;border:unset;background:unset;width:100px;margin-left:auto;flex-grow:1" id="">
                                                        <option value="C">&#176;C |Selsius</option>
                                                        <option value="F">&#176;F |Fahrenayt</option>
                                                        <option value="K">K |Kelvin</option>
                                                        <option value="R">R |Rankin</option>
                                                        <option value="Re">Re |Reaumur</option>
                                                    </select>
                                                    <span id="sicaklik" class="convertor" style="margin:0 1em;position:relative;height:25px;width:25px;display:inline-block;background:#ffcecb;border-radius:50%;">
                                                        <i style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);" class="fa-solid fa-right-left"></i>
                                                    </span>
                                                    <select id="sicaklik2" style="padding:5px;border:unset;background:unset;width:100px;flex-grow:1;" id="">
                                                        <option value="C">&#176;C |Selsius</option>
                                                        <option selected value="F">&#176;F |Fahrenayt</option>
                                                        <option value="K">K |Kelvin</option>
                                                        <option value="R">R |Rankin</option>
                                                        <option value="Re">Re |Reaumur</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="yas2 sonucgos-css">
                                            <div style="display:inline-block;">
                                                <p style="margin:unset;padding:5px;">Sonuç</p>
                                            </div>
                                        </div>
                                            
                                        <input type="submit" class="btn" value="Hesapla">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MENU11 SICAKLIK BÖLÜMÜ -->
            </div>
        </div>
    </div>
<script>
    $("input").focus(function(){
        var inputid = $(this).attr("id");
        $("."+inputid).css("outline","1px solid #ffcecb");
    });
    $("input").focusout(function(){
        var inputid = $(this).attr("id");
        $("."+inputid).css("outline","unset");
    });
    $("input").not(":input[type='date']").focus(function(){
        var numara =$(this).data("num");
        $("."+numara).css({"position":"relative","animation":"unset"});
    });

    // ONLY NUMBER
    $(".onlynumber").keydown(function(e){
        var girilen = e.key;
        var array = ["Backspace",",",".","Tab","F5","Enter"];
        if(!$.isNumeric(girilen)){
            if($.inArray(girilen,array)!==-1){}else{
                e.preventDefault();
                // HATA MESAJI VER SADECE SAYILAR DIYE
            }
        }
    });
    // ONLY NUMBER
    
    const idnum = getCookie("page")==undefined?"DOVIZ":getCookie("page");
    var getir = document.getElementById(idnum);
    var getirclass = document.getElementsByClassName(idnum)[0];
    console.log(getirclass);
    getirclass.classList.add("active");
    getir.style.display="block";

    //Nevir DÖndürme
    var degismetusu = document.getElementsByClassName("convertor");
    $(".convertor").click(function(){
        degistir($(this).attr("id"));
    });
    function degistir(al){
        $("#"+al).css("animation","yarimtur 1s alternate ease-out");
        var degismeid = al;
        var ilk =document.getElementById(degismeid+1).value;
        var son =document.getElementById(degismeid+2).value
        document.getElementById(degismeid+1).style.animation="toright 1s";
        document.getElementById(degismeid+2).style.animation="toleft 1s";
        setTimeout(()=>{
            document.getElementById(degismeid+1).value=son;
            document.getElementById(degismeid+2).value=ilk;
        },500);
        setTimeout(()=>{
            document.getElementById(degismeid+1).style.animation="unset";
            document.getElementById(degismeid+2).style.animation="unset";
            $("#"+al).css("animation","unset");

        },1000);
        buyukluk();
    }
    /* SUBMİT İŞLEM */
    $("form").on("submit",function(){
        if(this.id==="buyuklukform"){buyukluk();}
        else if(this.id==="ageform"){yashesap()}
        else if(this.id==="endeks"){endeks();}
    });
    /* SUBMİT İŞLEM */


    /* BÜYÜKLÜK CONVERTER */
    /* BÜYÜKLÜK CONVERTER */
    $("#buyukluk1").change(function(){buyukluk();});
    $(".buyukluk").change(function(){buyukluk();});
    function buyukluk(){
        const buyukluk0 = document.getElementsByName("buyukluk")[0].value;
        const buyukluk1 = document.getElementsByName("buyukluk")[1].value;
        const buyukluk2 = document.getElementsByName("buyukluk")[2].value;
        if(buyukluk0 ==""){return;}
        var buyukluk ={1:-30,2:-27,3:-24,4:-21,5:-18,6:-15,7:-12,8:-9,9:-6,10:-3,11:-2,12:-1,13:0,14:1,15:2,16:3,17:6,18:9,19:12,20:15,21:18,22:21,23:24,24:27,25:30};
        if(buyukluk1>buyukluk2){
            var sonuc = buyukluk1-buyukluk2;
            var nihai = BigInt(buyukluk0*(Math.pow(10,sonuc)));
        }else if(buyukluk1<buyukluk2){
            var sonuc = buyukluk2-buyukluk1;
            var nihai = (buyukluk0/(Math.pow(10,sonuc)));
        }else{var nihai = buyukluk0;}
        var open = document.getElementsByClassName("buyukluk2")[0];
        open.style.height="unset";
        open.style.opacity=1;
        $(".buyukluk2 > div > p").html(nihai);
    }
    /* BÜYÜKLÜK CONVERTER */
    /* BÜYÜKLÜK CONVERTER */

    /* YAŞ HESAPLAYICI */
    /* YAŞ HESAPLAYICI */
    function yashesap(){
        const yas = Date.parse(document.getElementsByName("yas")[0].value);
        const date = new Date();
        const islem = date.getTime()-yas;
        console.log(islem);
    }
    /* YAŞ HESAPLAYICI */
    /* YAŞ HESAPLAYICI */

    /* ENDEKS HESAPLAYICI */
    /* ENDEKS HESAPLAYICI */
    $(".endeks").change(()=>{
        endeks();
    });
    function endeks(){
        var endeks1 = document.getElementsByClassName("endeks")[0].value;
        var endeks2 = document.getElementsByClassName("endeks")[1].value;
        if(endeks1 =="" || endeks2==""){
            return;
        }
        var boy = (endeks1/100)
        var sonuc = endeks2/Math.pow(boy,2);
        $(".endeks2").css({"height":"unset","opacity":1});
        $(".endeks2 > div >p").html(sonuc);
        console.log(sonuc);
        if(sonuc < 18.5){
            console.log("çok DÜşük");
        }else if(sonuc <24.9){
            console.log("İdeal Kilo");

        }else if(sonuc <29.9){
            console.log("İdeal Kilonun üstünde");

        }else if(sonuc <39.9){
            console.log("Obez");

        }else if(sonuc>=39.9){
            console.log("Morbid Obez");

        }
    }
    /* ENDEKS HESAPLAYICI */
    /* ENDEKS HESAPLAYICI */

    /* İNDİRİM HESAPLAYICI */
    /* İNDİRİM HESAPLAYICI */
    var indirim =  document.getElementsByName("indiriminp1")[0];
    indirim.addEventListener("change",function(){

        console.log(this.value);
    });
    /* İNDİRİM HESAPLAYICI */
    /* İNDİRİM HESAPLAYICI */
</script>
</body>
</html>