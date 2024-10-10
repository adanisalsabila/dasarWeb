<?php
// Soal11
$menu = [
    ["nama" => "Beranda"],
    [
        "nama" => "Berita",
        "subMenu" => [
            ["nama" => "Pantai"],
            ["nama" => "Gunung"]
        ]
    ],
    ["nama" => "Kuliner"],
    ["nama" => "Hiburan"],
    ["nama" => "Tentang"],
    ["nama" => "Kontak"],
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as a$key => $item) {
        echo "<li>{$item['nama']} </li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>
