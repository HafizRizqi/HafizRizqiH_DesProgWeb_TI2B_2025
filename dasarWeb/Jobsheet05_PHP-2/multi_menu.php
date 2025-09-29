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
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>