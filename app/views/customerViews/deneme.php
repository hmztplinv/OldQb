<?php
$productsfeatures=products::get_productname();

// Verileri saklayan dizi
$data = products::get_productname();
// Sayfa boyutu
$page_size = 5;

// Geçerli sayfa numarası
$current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

// Toplam sayfa sayısı
$total_pages = ceil(count($data) / $page_size);

// Geçerli sayfadaki verileri almak için başlangıç ​​indeksi
$start = ($current_page - 1) * $page_size;

// Geçerli sayfadaki verileri almak için bitiş indeksi
$end = min($start + $page_size, count($data));

// Geçerli sayfadaki verileri alın
$current_page_data = array_slice($data, $start, $end - $start);

require cview('deneme');
