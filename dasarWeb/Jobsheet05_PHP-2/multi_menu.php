<?php
$menu = [
    [
        "nama" => "Beranda",
    ],
    [
        "nama" => "Berita",
        "submenu" => [
            [
                "nama" => "Wisata",
                "submenu" => [
                    [
                        "nama" => "Pantai",
                    ],
                    [
                        "nama" => "Gunung",
                    ],
                ]
                ],
                [
                    "nama" => "Kuliner"
                ],
                [
                    "nama" => "Hiburan"
                ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat (array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";
        
        // cek apakah ada submenu
        if (isset($item['submenu']) && is_array($item['submenu'])) {
            // panggil dirinya sendiri
            tampilkanMenuBertingkat($item['submenu']);
        }

        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>