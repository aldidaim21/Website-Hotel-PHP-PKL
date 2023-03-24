<?php
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "ngotel");




// data muncul di web
function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}


// tampilan web index
function reservasi($data)
{
	global $conn;

	$nama_hotel1 = htmlspecialchars($data["nama_hotel1"]);
	$checkin = htmlspecialchars($data["checkin"]);
	$checkout = ($data["checkout"]);
	$nama_pengunjung = htmlspecialchars($data["nama_pengunjung"]);
	$room_type = ($data["room_type"]);
	$occupants = ($data["occupants"]);
	$night = htmlspecialchars($data["night"]);



	$query = "INSERT INTO reservasi
				VALUES
				('','$nama_hotel1','$checkin','$checkout','$nama_pengunjung','$room_type','$occupants','$night')

			 ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function komen($data)
{
	global $conn;

	$full_name = htmlspecialchars($data["full_name"]);
	$email = htmlspecialchars($data["email"]);
	$subject = ($data["subject"]);
	$pesan = htmlspecialchars($data["pesan"]);




	$query = "INSERT INTO masukan
				VALUES
				('','$full_name','$email','$subject','$pesan')

			 ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}





function nambah($data)
{
	global $conn;

	$nama_hotel = htmlspecialchars($data["nama_hotel"]);
	$lokasi = htmlspecialchars($data["lokasi"]);
	$bintang = ($data["bintang"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$jumlah_kasur = ($data["jumlah_kasur"]);
	$fitur1 = ($data["fitur1"]);
	$deskripsi_lengkap = htmlspecialchars($data["deskripsi_lengkap"]);
	$jenis_kamar = htmlspecialchars($data["jenis_kamar"]);
	$harga = htmlspecialchars($data["harga"]);
	$kota = htmlspecialchars($data["kota"]);




	// upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query = "INSERT INTO hotel
				VALUES
				('','$nama_hotel','$lokasi','$bintang','$deskripsi','$jumlah_kasur','$fitur1','$deskripsi_lengkap','$jenis_kamar','$harga','$kota','$gambar')

			 ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}


function upload()
{

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek upload gambar
	if ($error === 4) {
		echo "<script>
		alert('pilih gambar terlebih dahulu!');
		</script>";
		return false;
	}

	// cek apakah filr jenis apload



	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
		alert('yang anda aploud bukan gambar!');
		</script>";
		return false;
	}

	// cek ukuran gambar 
	if ($ukuranFile > 1000000) {
		echo "<script>
		alert('ukuran gambar terlalu besar!');
		</script>";
		return false;
	}


	// lolos pengecekan ,gambar siap diupload
	// generate nama baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;




	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
}


function ubah1($data)
{
	global $conn;
	$id = $data["id"];
	$nama_hotel = htmlspecialchars($data["nama_hotel"]);
	$lokasi = htmlspecialchars($data["lokasi"]);
	$bintang = ($data["bintang"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$jumlah_kasur = ($data["jumlah_kasur"]);
	$fitur1 = ($data["fitur1"]);
	$deskripsi_lengkap = htmlspecialchars($data["deskripsi_lengkap"]);
	$jenis_kamar = htmlspecialchars($data["jenis_kamar"]);
	$harga = htmlspecialchars($data["harga"]);
	$kota = htmlspecialchars($data["kota"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);




	// cek apakah user pilih gambar baru atau tidak

	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}


	$query = "UPDATE hotel SET 
				nama_hotel='$nama_hotel',
				lokasi='$lokasi',
				bintang='$bintang',
				deskripsi='$deskripsi',
				jumlah_kasur='$jumlah_kasur',
				fitur1='$fitur1',
				deskripsi_lengkap='$deskripsi_lengkap',
				jenis_kamar='$jenis_kamar',
				harga='$harga',
				kota='$kota',
				gambar='$gambar'
				WHERE id = $id
				";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function cari($keyword)
{
	$query = "SELECT * FROM hotel
			WHERE 
			nama_hotel LIKE '%$keyword%' OR
			harga LIKE '%$keyword%' OR
			lokasi LIKE '%$keyword%' OR
			kota LIKE '%$keyword%'
			";
	return query($query);
}

// function hapus
function hapus($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM hotel WHERE id = $id");

	return mysqli_affected_rows($conn);
}


// funciton registrasi 
function registrasi($data)
{
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM admin WHERE username= '$username' ");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('username sudah terdaftar!!');
			</script>
			";
		return false;
	}


	// cek password sama 
	if ($password !== $password2) {
		echo "<script>
				alert ('konfirmasi password tidak sesuai');
				</script>

		";
		return false;
	}



	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambah userbaru ke data base
	mysqli_query($conn, "INSERT INTO admin VALUES ('','$username','$password')");

	return mysqli_affected_rows($conn);
}

// funciton user
function user($data)
{
	global $conn;

	$usernameus = strtolower(stripcslashes($data["usernameus"]));
	$passwordus = mysqli_real_escape_string($conn, $data["passwordus"]);
	$password2us = mysqli_real_escape_string($conn, $data["password2us"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT usernameus FROM user WHERE usernameus= '$usernameus' ");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('username sudah terdaftar!!');
			</script>
			";
		return false;
	}


	// cek password sama 
	if ($passwordus !== $password2us) {
		echo "<script>
				alert ('konfirmasi password tidak sesuai');
				</script>

		";
		return false;
	}



	// enkripsi password
	$passwordus = password_hash($passwordus, PASSWORD_DEFAULT);

	// tambah userbaru ke data base
	mysqli_query($conn, "INSERT INTO user VALUES ('','$usernameus','$passwordus')");

	return mysqli_affected_rows($conn);
}



//blog area 
function blog($data)
{
	global $conn;

	$judul = htmlspecialchars($data["judul"]);
	$awal = htmlspecialchars($data["awal"]);
	$p1 = htmlspecialchars($data["p1"]);
	$p2 = ($data["p2"]);
	$p3 = htmlspecialchars($data["p3"]);
	$p4 = ($data["p4"]);
	$p5 = ($data["p5"]);
	$p6 = htmlspecialchars($data["p6"]);
	$p7 = htmlspecialchars($data["p7"]);

	// upload gambar
	$gambarblog = uploadblog();
	if (!$gambarblog) {
		return false;
	}

	$query = "INSERT INTO blog
				VALUES
				('','$judul','$awal','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$gambarblog')

			 ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}


function uploadblog()
{

	$namaFile = $_FILES['gambarblog']['name'];
	$ukuranFile = $_FILES['gambarblog']['size'];
	$error = $_FILES['gambarblog']['error'];
	$tmpName = $_FILES['gambarblog']['tmp_name'];

	//cek upload gambar
	if ($error === 4) {
		echo "<script>
		alert('pilih gambar terlebih dahulu!');
		</script>";
		return false;
	}

	// cek apakah filr jenis apload



	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
		alert('yang anda aploud bukan gambar!');
		</script>";
		return false;
	}

	// cek ukuran gambar 
	if ($ukuranFile > 1000000) {
		echo "<script>
		alert('ukuran gambar terlalu besar!');
		</script>";
		return false;
	}


	// lolos pengecekan ,gambar siap diupload
	// generate nama baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;




	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;



	// function hapus
	function hapusblog($id)
	{
		global $conn;
		mysqli_query($conn, "DELETE FROM blog WHERE id = $id");

		return mysqli_affected_rows($conn);
	}
}
