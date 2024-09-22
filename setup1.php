
$lisans_durumu = 1; // 1 yazarsa lisans bitti, 0 yazarsa lisans aktif

// Lisansın süresi dolduysa pop-up göster
if ($lisans_durumu == 1) {
    echo "<script type='text/javascript'>
        window.onload = function() {
            setTimeout(function() {
                if (confirm('Lisans süreniz dolmuştur. Yeni bir lisans satın almak için lütfen bizimle iletişime geçin.')) {
                    window.location.href = 'https://example.com';
                }
            }, 5000); // 5000 milisaniye = 5 saniye
        }
    </script>";
}
