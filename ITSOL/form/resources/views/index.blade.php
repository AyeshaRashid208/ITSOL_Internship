<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="topbar">
			<div class="container">
				<ul class="social-custom list-inline mb-0">
					<li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
					<li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					<li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
			<div class="container">
				<a class="navbar-brand" href="#">LOGO</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Front Page <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Shaking</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Room</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact information</a>
						</li>

					</ul>
				</div>
			</div>
		</nav>
	</header>
	<section>
		<div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Tilaa</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Etusivu</a></li>
                <li class="breadcrumb-item active">Tilaa</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
	</section>
    <form action="{{url('upload_data')}}" method="POST">
    @csrf
    <section class="main-section">
    
		<div class="container">
			<h2>TILAA</h2>
			<h5>Täältä voit tehdä kimpputilauksen. Resepti-kenttään voit sanailla vapaasti toiveitasi. Toiveen ei tarvitse olla tarkka. Voit kirjoittaa esimerkiksi näin: "Joku kiva kesäinen kimppu olohuoneen pöydälle joka sopisi vihreä-keltaiseen sisustukseen."</h5>
			<div class="card">
				<div class="inner-card">
					<h5>Kimpun koko:</h5>
					<p class="my-3">Valitse tästä kimpun koko. Jos muu kuin S, M, L tai XL, niin kirjoita resepti-kohtaan toiveesi.</p>
					<div class="row">
						<div class="col-12 col-md-4">
							  <div class="form-group">
							    <input type="radio" id="other" name="size" value="Mini S - 10cm / 30€"/>
							    <label for="other">Mini S - 10cm / 30€</label>
							  </div>
						</div>
						<div class="col-12 col-md-4">
							  <div class="form-group">
							    <input type="radio" id="other" name="size" value="M - 20cm / 69 €"/>
							    <label for="other">M - 20cm / 69 €</label>
							  </div>
						</div>
						<div class="col-12 col-md-4">
							  <div class="form-group">
							    <input type="radio" id="other" name="size" value="L - 25cm / 135 €" />
							    <label for="other">L - 25cm / 135 €</label>
							  </div>
						</div>
						<div class="col-12 col-md-4">
							  <div class="form-group">
							    <input type="radio" id="other" name="size" value="XL - 30cm / 250 €"/>
							    <label for="other">XL - 30cm / 250 €</label>
							  </div>
						</div>
						<div class="col-12 col-md-4">
							  <div class="form-group">
							    <input type="radio" id="other" name="size" value="Vihanneskori - 150€"/>
							    <label for="other">Vihanneskori - 150€</label>
							  </div>
						</div>
						<div class="col-12 col-md-4">
							  <div class="form-group">
							    <input type="radio" id="other" name="size" value="Muu"/>
							    <label for="other">Muu</label>
							  </div>
						</div>
						<div class="col-12 col-md-4">
							  <div class="form-group">
							    <input type="radio" id="other" name="size" value="Marjakimppu - 99€"/>
							    <label for="other">Marjakimppu - 99€</label>
							  </div>
						</div>
					</div>
				</div>
					<div class="inner-card mt-3">
					<h5>Resepti:</h5>
					<p class="my-3">Kirjoitathan tähän millaisen kimpun haluat (resepti, värit yms).</p>
					<div class="form-group">
						 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="prescription"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="inner-card mt-3">
							<h5>Nimi:</h5>
							<p class="my-3">Kirjoitathan tähän koko nimesi.</p>
							<div class="form-group">
							    <input type="text" class="form-control" id="" placeholder="" name="name">
							  </div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="inner-card mt-3">
							<h5>Puhelinnumero:</h5>
							<p class="my-3">Laitathan tähän puhelinnumerosi.</p>
							<div class="form-group">
							    <input type="text" class="form-control" id="" placeholder="" name="phone">
							  </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 mt-3">
						<div class="inner-card mt-3">
							<h5>Nouto / Toimitus</h5>
							<p class="my-3">Valitse joko nouto (Tiilitie 8, 01720 Vantaa) tai kotiintoimitus (ainoastaan pk-seutu).</p>
							<div class="row">
								<div class="col-12 col-md-6">
									 <div class="form-group">
							    <input type="radio" id="other" name="choice" value="Nouto">
							    <label for="other">Nouto</label>
							  </div>
								</div>
								<div class="col-12 col-md-6">
									 <div class="form-group">
							    <input type="radio" id="other" name="choice" value="Toimitus 10€">
							    <label for="other">Toimitus 10€</label>
							  </div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-12 col-md-6 mt-3">
						<div class="inner-card mt-3">
							<h5>Nouto- / Toimitusajankohta:</h5>
							<p class="my-3">Laita tähän päivämäärä ja kellonaika koska haluat kimpun toimitettavan.</p>
							<div class="form-group">
							    <input type="text" class="form-control" id="" placeholder="" name="time">
							  </div>
						</div>
					</div>
					<div class="col-12 col-md-6 mt-3">
						<div class="inner-card mt-3">
							<h5>Maksutapa:</h5>
							<p class="my-3">Valitsehan tästä maksutavan (käteinen, tilisiirto).</p>
							<div class="row">
								<div class="col-12 col-md-6">
									 <div class="form-group">
							    <input type="radio" id="other" name="payment" value="Käteinen">
							    <label for="other">Käteinen</label>
							  </div>
								</div>
								<div class="col-12 col-md-6">
									 <div class="form-group">
							    <input type="radio" id="other" name="payment" value="Tilisiirto">
							    <label for="other">Tilisiirto</label>
							  </div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-12 col-md-6 mt-3">
						<div class="inner-card mt-3">
							<h5>Nouto- / Toimitusajankohta:</h5>
							<p class="my-3">Laita tähän päivämäärä ja kellonaika koska haluat kimpun toimitettavan.</p>
							<div class="form-group">
							    <input type="text" class="form-control" id="" placeholder="" name="date">
							  </div>
						</div>
					</div>
					<div class="col-12  mt-3">
						<div class="inner-card mt-3">
							<h5>Tilaa tästä:</h5>
							<p class="my-3">Kirjoitathan tähän sähköpostiosoitteesi.</p>
							<div class="form-group">
							    <input type="text" class="form-control" id="" placeholder="Email Address" name="email">
							  </div>
						</div>
					</div>
                    
				</div>
                <div style="padding:50px;">
                        <input type="submit" class="btn-btn-success">
                    </div>
			</div>
		</div>
   
	</section>
    </form>


	<footer>
	<div class="container">
		<div class="row">
			<div class="col-12 offset-md-3 col-md-3 text-center">
				<h5>Sivukartta</h5>
				<ul class="footersivustokartta">
                <li><a class="footerlink" href="in">Etusivu</a></li>
                <li><a class="footerlink" href="tari">Tarina</a></li>
                <li><a class="footerlink" href="po">Portfolio</a></li>
                <li><a class="footerlink" href="ti">Tilaa</a></li>
                <li><a class="footerlink" href="yh">Yhteystiedot</a></li>
              </ul>
			</div>
			<div class="col-12 col-md-3 text-center">
				<h5>Ota yhteyttä</h5>
				<p>Vihanneskimppu.fi<br>nura.leino@vihanneskimppu.fi</p>
			</div>
		</div>
	</div>
	<div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 text-center-md">
                <p class="mb-0">© 2022 copyright</p>
              </div>
              
            </div>
          </div>
        </div>
	</footer>
	<script src="assets/js/jquery-3.2.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js" ></script>
	<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>