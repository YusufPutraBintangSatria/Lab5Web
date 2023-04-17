<?php
class Form {
	private $conn;

	public function __construct($conn) {
		$this->conn = $conn;
	}

	public function displayForm() {
		echo '<form method="POST" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">';
		echo '<label for="nim">NIM:</label>';
		echo '<input type="number" name="nim" required><br>';
		echo '<label for="nama">Nama:</label>';
		echo '<input type="text" name="nama" required><br>';
		echo '<label for="alamat">Alamat:</label>';
		echo '<input type="text" name="alamat" required><br>';
		echo '<input type="submit" value="Submit">';
		echo '</form>';
	}

	public function processForm($data) {
		$nim = $data['nim'];
		$nama = $data['nama'];
		$alamat = $data['alamat'];

		$sql = 'INSERT INTO data_mahasiswa (nim, nama, alamat) VALUES (?, ?, ?)';
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('sss', $nim, $nama, $alamat);
		$stmt->execute();
	}
}
?>