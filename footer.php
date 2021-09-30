<style>
.bg-dark{
	background-color: #2F2F2F !important;
}
.container{
	max-width: 1140px;
}
.pb-5, .py-5 {
    padding-bottom: 3rem!important;
}
.pt-5, .py-5 {
    padding-top: 3rem!important;
}
*, ::after, ::before {
    box-sizing: border-box;
}
div {
    display: block;
}
body {
    font-family: "Roboto",sans-serif;
    font-weight: 300;
}
footer .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.col-lg-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width : 25%;
}
.col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
}
img {
    vertical-align: middle;
    border-style: none;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}
.mt-4, .my-4 {
	font-size: 26px;
    margin-top: 1.5rem!important;
}
.font-weight-bold {
    font-weight: 700!important;
}
.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}
.col-lg-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
}
.col-md-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
}
table {
    display: table;
    border-collapse: separate;
    box-sizing: border-box;
    text-indent: initial;
    border-spacing: 2px;
    border-color: grey;
}
.col-lg-2 {
    width: 16.6666666667%;
}
.col-lg-1, .col-lg-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
}
.col-lg-3 img{
	width: 245px;
	height: 82px;
    aspect-ratio: auto 245 / 82;
    vertical-align: middle;
}
.text-yellow {
    color: #FFC731 !important;
}
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
table th {
    font-size: .9rem;
    font-weight: 400;
}
th {
    display: table-cell;
    vertical-align: inherit;
    font-weight: bold;
    text-align: -internal-center;
}
#table-footer td {
    width: 33% !important;
}
table td {
    font-size: .9rem;
    font-weight: 300;
}
.text-centre{
	text-align: center;
}
</style>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
</head>
<body>
	<footer class="bg-dark">
        <div class="container">
            <div class="pt-5 pb-5">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <img src="img/logo.png">
                        <p class="mt-4 text-yellow font-weight-bold">Monday - Friday : 9 AM - 7 PM (GMT+8)</p>
                    </div>
                    <div class="col-lg-7 col-md-2 table-responsive">
                        <table id="table-footer">
                          <tbody><tr>
                            <th colspan="3"><h2 class="text-uppercase text-yellow font-weight-bold">Contact Us</h2></th>
                          </tr>
                          <tr>
                            <td><p class="text-yellow font-weight-bold"><i class="fas fa-map-marker-alt"></i>&nbsp; &nbsp;Singapore Head Office</p></td>
                            <td><p class="text-yellow font-weight-bold"><i class="fas fa-map-marker-alt"></i>&nbsp; &nbsp;Indonesia Office</p></td>
                            <td><p class="text-yellow font-weight-bold"><i class="fas fa-map-marker-alt"></i>&nbsp; &nbsp;London Office</p></td>
                          </tr>
                          <tr>
                            <td><p class="text-white">456 Alexandra Road, #04-02 Fragrance Empire Building Singapore 119962</p></td>
                            <td><p class="text-white">Jl. Soga No.46 Tahunan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55167</p></td>
                            <td><p class="text-white">71-75 Shelton Street London, Greater London WC2H 9JQ, United Kingdom</p></td>
                          </tr>
                            <tr>
                            <td><p class="mb-0 text-yellow"><i class="fas fa-phone-alt"></i>  <span class="text-white">&nbsp; &nbsp;  +65 8430 0677</span></p></td>
                            <td><p class="mb-0 text-yellow"><i class="fas fa-phone-alt"></i>  <span class="text-white">&nbsp; &nbsp;+62 822-4223-3230</span></p></td>
                          </tr>
                        </tbody></table>
                    </div>
					
                    <div class="col-lg-2 col-md-2">
                        <h2 class="text-uppercase text-yellow font-weight-bold text-centre">Follow Us</h2>
                        <a href="https://www.facebook.com/codingcollective/" target="blank"><div class="facebook d-inline-block"></div></a>
						<!-- <i class="fa fa-facebook"></i> -->
                        <a href="https://www.linkedin.com/company/codingcollective/" target="blank"><div class="linked-in d-inline-block"></div></a>
                        <!-- <i class="fa fa-linkedin"></i> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>