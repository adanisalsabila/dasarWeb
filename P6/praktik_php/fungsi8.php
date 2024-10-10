<?php
// Soal11 - 12
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
    foreach ($menu as $item) {
        echo "<li>";
        echo $item['nama'];
        if (isset($item['subMenu'])) {
            echo "<ul>";
            tampilkanMenuBertingkat($item['subMenu']); 
            echo "</ul>";
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>
