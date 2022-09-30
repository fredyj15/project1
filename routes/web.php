<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  <!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Part 12 : Membuat Navigation bar Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="lol">Contoh Website Saya</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="lol">Home</a></li>
				<li><a href="info">Info Pribadi</a></li>
				<li><a href="port">Portfolio</a></li> 
				<li><a href="kontak">Kontak</a></li> 
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</nav>
	
	<h1>Selamat Datang Di Website Pribadi Saya.</h1>
  <h1>Perkenalkan nama saya Fredy Jafar.</h1>
  <div class="info">
    <h1>Nama lengkap saya adalah Saya adalah mahasiswa Universitas Pelita Harapan intake 19 jurusan Sistem Informasi.</h1>
  </div>

  <div class="port">
    <h1><a href="port">Berikut merupakan portfolio saya : portfolio 1, protfolio 2, portfolio 3.</h1>
  </div>

  <div class="kontak">
    <h1><a href="kontak">Berikut merupakan kontak saya. email : fredyjafar15@gmail.com, no telp : 085156654056.</h1>
  </div>
</body>
</html>
      </form>
    </div>
  </div>
</nav>
});
