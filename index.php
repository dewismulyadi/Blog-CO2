<style>
.bg-dark {
    background-color: #2f2f2f;
}

.bg-yellow {
    background-color: #FFC731;
}

.text-white {
    color: #FFFFFF;
}

.text-yellow {
    color: #FFC731;
}
.display-contents{
    display: contents;
}
.slider {
    margin-top: 42px;
    width: 1331px;
    height: 472px;
    border-radius: 58px;
    display: inline-flex;
    align-items: center;
    justify-content: space-around;
}
.slider img{
    height: 378px;
    width: 543px;
    border-radius: 58px;
    align-self: center;
}
.slider p{
    font-size: 18px;
}
.slider-detail{
    width: 469px;
    height: auto;
    align-items: center;
    align-content: center;
    justify-content: space-evenly;
}
.home{
    text-align: -webkit-center;
}

.home h1{
    width: 575px;
    margin-top: 38.26px;
}
.home p{
    font-size: 24px;
    font-weight: bold;
}
.home-info{
    margin-top: 38.26px;
    width: 1331px;
    height: 472px;
    border-radius: 58px;
    display: inline-flex;
    align-items: center;
    justify-content: space-around;
}
.home-info p{
    width: 877px;
    text-align: center;
    font-size: 28px;
}
.home-info button{
    background-color: #2f2f2f;
    height: 66px;
    width: 187px;
    border-radius: 84px;
    font-size: 18px;
    color: #FFC731;
}
.support{
    font-size: 18px;
    font-weight: bold;
}

.middle{
    text-align: center;
    color: #474443;
}
.article-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.article-card img {
    display: block;
    border: 0;
    width: 100%;
    height: 269px;
    border-top-right-radius: 58px;
    border-top-left-radius: 58px;
}
.article-card {
    background: #474443;
    margin: 50px;
    width: 403px;
    height: 570px;
    border-radius: 58px;
    color: #FFFFFF;
    text-align: center;
}

.article-card a {
    color: #FFFFFF;
    text-decoration: none;
}

.article-card a:hover {
    box-shadow: 3px 3px 8px hsl(0, 0%, 80%);
}

.article-card-content {
    padding: 1.4em;
}

.article-card-content h2 {
    margin-top: 0;
    margin-bottom: .5em;
    font-weight: bold;
    
}
</style>
<?php
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <!-- <link href="style.css" rel="stylesheet" type="text/css"> -->
    <title>Article & News CO2</title>
</head>
<body>
    <div class="slider bg-dark text-white">
        <div class="slider-detail">
            <h1>Collection of Latest Articles and News</h1>
            <p>We are here to collect news and articles from all national, international and trusted sources and are always updated in gathering news.</p>
        </div>
        <img src="img/slider1.jpg" alt="Slider 1">
    </div>
    
    <div class="home">
        <h1>Welcome to Collection of Latest <span class="text-yellow">Articles and News</span></h1>
        <p>“Updated and Reliable”</p>
    </div>
    <div class="home-info bg-yellow">
        <p>We are here to collect news and articles from all national, international and trusted sources and are always updated in gathering news. <br><br>
        We accept submissions in the form of articles if the articles we receive are appropriate and appropriate to be posted on our website.</p>
        <button>Know More</button>
        <button>Contact Us</button>
    </div>
    <p class="home support">For any other inquiries please contact <a href="#">support@codingcollective.com</a></p>

    <div class="middle">
        <h1>Articles</h1>
        <h2 class="middle">Most Read :</h2>
        <section class="article-cards">
            <article class="article-card">
                <img src="img/mu.jpg" alt="Manchester United">
                <div class="article-card-content">
                    <a href="#"><h2>Pulang ke Manchester United, Cristiano Ronaldo Pakai Nomor Punggung Berapa?</h2></a>
                    <p>Suara.com - Cristiano Ronaldo resmi kembali ke Manchester United, Jumat (27/8/2021) malam WIB. Lalu penyerang 36 tahun itu akan mengenakan nomor punggung berapa dalam periode keduanya merumput di Old Trafford? .....</p>
                </div><!-- .card-content -->
            </article><!-- .card -->

            <article class="article-card">
                <img src="img/positivity-rate.jpg" alt="Positivity Rate">
                <div class="article-card-content">
                    <a href="#"><h2>468 Kasus Baru Covid-19 di Jakarta Hari Ini, Positivity Rate di Bawah Batas Aman WHO</h2></a>
                    <p>JAKARTA, KOMPAS.com - Pemprov DKI Jakarta kembali mengumumkan perkembangan terbaru kasus Covid-19 di Ibukota pada Sabtu (28/8/2021). Berikut rinciannya: ...</p>
                </div><!-- .card-content -->
            </article><!-- .card -->

            <article class="article-card">
                <img src="img/blood-vaksin.jpg" alt="Vaksin Covid-19">
                <div class="article-card-content">
                    <a href="#"><h2>Beruntung Bagi yang Sudah Vaksin Covid-19, Penelitian Ini Ungkap Perbedaan Kondisi Orang Sebelum dan Sesudah Vaksin Jik Terinfeksi Covid-19, Ternyata Begini Kondisi Darahnya <br>....</h2></a>
                </div><!-- .card-content -->
            </article><!-- .card -->
        </section><!-- .cards -->
    </div>

    <div class="middle">
        <h1>News</h1>
        <h2 class="middle">Most Read :</h2>
        <section class="article-cards">
            <article class="article-card">
                <img src="img/mu.jpg" alt="Manchester United">
                <div class="article-card-content">
                    <a href="#"><h2>Pulang ke Manchester United, Cristiano Ronaldo Pakai Nomor Punggung Berapa?</h2></a>
                    <p>Suara.com - Cristiano Ronaldo resmi kembali ke Manchester United, Jumat (27/8/2021) malam WIB. Lalu penyerang 36 tahun itu akan mengenakan nomor punggung berapa dalam periode keduanya merumput di Old Trafford? .....</p>
                </div><!-- .card-content -->
            </article><!-- .card -->

            <article class="article-card">
                <img src="img/positivity-rate.jpg" alt="Positivity Rate">
                <div class="article-card-content">
                    <a href="#"><h2>468 Kasus Baru Covid-19 di Jakarta Hari Ini, Positivity Rate di Bawah Batas Aman WHO</h2></a>
                    <p>JAKARTA, KOMPAS.com - Pemprov DKI Jakarta kembali mengumumkan perkembangan terbaru kasus Covid-19 di Ibukota pada Sabtu (28/8/2021). Berikut rinciannya: ...</p>
                </div><!-- .card-content -->
            </article><!-- .card -->

            <article class="article-card">
                <img src="img/blood-vaksin.jpg" alt="Vaksin Covid-19">
                <div class="article-card-content">
                    <a href="#"><h2>Beruntung Bagi yang Sudah Vaksin Covid-19, Penelitian Ini Ungkap Perbedaan Kondisi Orang Sebelum dan Sesudah Vaksin Jik Terinfeksi Covid-19, Ternyata Begini Kondisi Darahnya <br>....</h2></a>
                </div><!-- .card-content -->
            </article><!-- .card -->
        </section><!-- .cards -->
    </div>
    
</body>
</html>