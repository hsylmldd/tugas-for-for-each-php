<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Cards</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Produk Kami</h2>
    <div class="row">
        <?php
        // Array Produk dengan gambar dari internet, nama produk, deskripsi, dan harga yang sesuai
        $products = [
            [
                'nama' => 'Kamera DSLR Canon',
                'deskripsi' => 'Kamera profesional dengan kualitas gambar yang tajam dan fitur unggulan.',
                'harga' => 'Rp 7.500.000',
                'gambar' => 'https://images.unsplash.com/photo-1621958054700-7af166501105?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZHNsciUyMGNhbm9ufGVufDB8fDB8fHww'
            ],
            [
                'nama' => 'Laptop Gaming ASUS',
                'deskripsi' => 'Laptop gaming dengan performa tinggi dan grafis memukau untuk pengalaman gaming terbaik.',
                'harga' => 'Rp 15.000.000',
                'gambar' => 'https://images.unsplash.com/photo-1590126698754-510069860d27?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGxhcHRvcCUyMGFzdXMlMjByb2d8ZW58MHx8MHx8fDA%3D' // Gambar Laptop Gaming ASUS
            ],
            [
                'nama' => 'Headset Bluetooth Sony',
                'deskripsi' => 'Headset nirkabel dengan suara jernih dan bass yang dalam, cocok untuk mendengarkan musik.',
                'harga' => 'Rp 1.200.000',
                'gambar' => 'https://images.unsplash.com/photo-1550009158-9ebf69173e03?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8aGVhZHNldCUyMGJsdWV0b290aCUyMHNvbnl8ZW58MHx8MHx8fDA%3D'
            ],
            [
                'nama' => 'Smartphone Samsung Galaxy',
                'deskripsi' => 'Smartphone dengan layar Super AMOLED dan kamera berkualitas tinggi.',
                'harga' => 'Rp 10.000.000',
                'gambar' => 'https://media.istockphoto.com/id/1297013152/photo/mobile-phone-with-locked-and-home-screens-mockup-of-user-interface-and-app-icons.webp?a=1&b=1&s=612x612&w=0&k=20&c=k0IbNWpmYojcFfslFmT9fry369Se0VOVMdtkV6JYRjg='
            ],
            [
                'nama' => 'Smartwatch Apple Watch',
                'deskripsi' => 'Jam tangan pintar dengan berbagai fitur kesehatan dan notifikasi real-time.',
                'harga' => 'Rp 5.500.000',
                'gambar' => 'https://images.unsplash.com/photo-1617043983671-adaadcaa2460?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YXBwbGUlMjBzbWFydCUyMHdhdGNofGVufDB8fDB8fHww'
            ],
            [
                'nama' => 'Speaker Bluetooth JBL',
                'deskripsi' => 'Speaker portable dengan kualitas suara yang kuat dan baterai tahan lama.',
                'harga' => 'Rp 800.000',
                'gambar' => 'https://images.unsplash.com/photo-1608223652565-63abae6cf733?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8amJsfGVufDB8fDB8fHww'
            ]
        ];

        // Looping Produk dengan foreach
        foreach ($products as $product) {
            echo '
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="' . $product['gambar'] . '" class="card-img-top" alt="' . $product['nama'] . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $product['nama'] . '</h5>
                        <p class="card-text">' . $product['deskripsi'] . '</p>
                        <p class="card-text"><strong>Harga: </strong>' . $product['harga'] . '</p>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
