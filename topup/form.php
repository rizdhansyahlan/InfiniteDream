<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TOP UP</title>
	<link rel="stylesheet" type="text/css" href="styleform.css">
  
  
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Order form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      height: 100%;
      }
      body, input, select { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: rgb(0, 0, 0);
      }
      h1, h3 {
      font-weight: 400;
      }
      h1 {
      font-size: 32px;
      }
      h3 {
      color: #F2A12C;
      }
      .main-block, .info {
      display: flex;
      flex-direction: column;
      }
      .main-block {
      justify-content: center;
      align-items: center;
      width: 100%; 
      min-height: 100%;
      background: url("/uploads/media/default/0001/01/e7a97bd9b2d25886cc7b9115de83b6b28b73b90b.jpeg") no-repeat center;
      background-size: cover;
      }
      form {
      width: 80%; 
      padding: 25px;
      margin-bottom: 20px;
      background: rgba(255, 255, 255, 0.9);
      }
      input, select {
      padding: 5px;
      margin-bottom: 20px;
      background: transparent;
      border: none;
      border-bottom: 1px solid rgb(0, 0, 0);
      }
      input::placeholder {
      color: rgb(0, 0, 0);
      }
      option {
      background: rgb(255, 255, 255); 
      border: none;
      }
      .metod {
      display: flex; 
      }
      input[type=radio] {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin-right: 20px;
      text-indent: 32px;
      cursor: pointer;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: -1px;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #F2A12C;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 8px;
      height: 4px;
      top: 5px;
      left: 5px;
      border-bottom: 3px solid #F2A12C;
      border-left: 3px solid #F2A12C;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      button {
      display: block;
      width: 200px;
      padding: 10px;
      margin: 20px auto 0;
      border: none;
      border-radius: 5px; 
      background: #F2A12C; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #B4B2F3;
      }
      @media (min-width: 568px) {
      .info {
      flex-flow: row wrap;
      justify-content: space-between;
      }
      input {
      width: 46%;
      }
      input.fname {
      width: 100%;
      }
      select {
      width: 48%;
      }
      }
    </style>
  </head>
  <body>
	
  <header>
    <ul class="navbar">
        <li><a href="../topup/topup.html">HOME</a></li>
    </ul>
</header>

    <div class="main-block">
      <h1>Form Pemesanan</h1>
      <form action="whatsapp.php" method="post" >
        <div class="info">
          <input class="fname" type="text" name="id_game" placeholder="ID GAME ANDA">
          <input class="fname" type="text" name="telepon" placeholder="Nomor Handphone">
          <select name="jumlah">
            <option value="number" disabled selected>JUMLAH TOPUP</option>
            <option value="150">150</option>
            <option value="250">250</option>
            <option value="300">300</option>
            <option value="450">450</option>
            <option value="1500">1500</option>
            <option value="2500">2500</option>
          </select>
        </div>
        <h3>Metode Pembayaran</h3>
        <div class="metod">
          <div> 
            <input type="radio" value="Virtual Account" id="radioOne" name="bayar" checked/>
            <label for="radioOne" class="radio">Virtual Account</label>
          </div>
          <div>
            <input type="radio" value="Kartu Kredit" id="radioTwo" name="bayar" />
            <label for="radioTwo" class="radio">Kartu Kredit</label>
          </div>
          <div>
            <input type="radio" value="QRIS" id="radioThree" name="bayar" />
            <label for="radioThree" class="radio">QRIS</label>
          </div>
          <div> 
            <input type="radio" value="Paypal" id="radioFour" name="bayar" checked/>
            <label for="radioFour" class="radio">Paypal</label>
          </div>
          <div>
            <input type="radio" value="Alfamart" id="radioFive" name="bayar" />
            <label for="radioFive" class="radio">Alfamart</label>
          </div>
          <div> 
            <input type="radio" value="Indomaret" id="radioSix" name="bayar" checked/>
            <label for="radioSix" class="radio">Indomaret</label>
          </div>
        </div>
        <button href="/" class="button">Submit</button>
      </form>
    </div>

    <footer>
		<div class="container">
			<p>Copyright &copy; 2023 Infinite Dream. All Rights Reserved</p>
		</div>
	</footer>
  </body>
</html>