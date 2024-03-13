<?php require 'mainPageOperation/header_operation.php'?>
<div class="content-wrap">
    <?php
    // Geçerli sayfadaki verileri yazdırın
    echo '<div class="table-responsive table">
                 <table id="example" class="display" style="width:100%">
                     <thead>
                         <tr>
                             <th class="text-custom text-center">Product Name</th>
                             <th class="text-custom text-center">Size</th>
                             <th class="text-custom text-center">Are of Use</th>
                             <th class="text-custom text-center">Thickness</th>
                             <th class="text-custom text-center">Quality</th>
                             <th class="text-custom text-center">Price İnfo</th>
                         </tr>
                     </thead>
                     <tbody>';

    for($i=0;$i<count($current_page_data);$i++):
        echo '<tr>
                     <td align="center">' . $current_page_data[$i]['collection'] . '</td>
                     <td align="center">' . $current_page_data[$i]['size'] . '</td>
                     <td align="center">' . $current_page_data[$i]['applicationarea'] . '</td>
                     <td align="center">' . $current_page_data[$i]['thickness'] . '</td>
                     <td align="center">' . ($current_page_data[$i]['quality'] == 1 ? " 1. Kalite" : "Endüstriyel") . '</td>
                     <td align="center">' . $current_page_data[$i]['price'] . '</td>
                 </tr>';
    endfor;
    echo '</tbody>
              </table>
           </div>';
    // Sayfalama bağlantılarını oluşturun
    echo '<div class="pagination">';

    if ($current_page > 1) {
        echo '<a href="?page=' . ($current_page - 1) . '"> Previous </a>';
    }

    if ($current_page > 3) {
        echo '<a href="?page=1">1</a>';
        echo '<span>...</span>';
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i >= $current_page - 2 && $i <= $current_page + 2) {
            if ($i == $current_page) {
                echo '<span>' . $i . '</span>';
            } else {
                echo '<a href="?page=' . $i . '">' . $i . '</a>';
            }
        }
    }

    if ($current_page < $total_pages - 2) {
        echo '<span>...</span>';
        echo '<a href="?page=' . $total_pages . '">' . $total_pages . '</a>';
    }

    if ($current_page < $total_pages) {
        echo '<a href="?page=' . ($current_page + 1) . '"> Next </a>';
    }

    echo '</div>';
    ?>
</div>

<?php require 'mainPageOperation/footer_operation.php'?>
