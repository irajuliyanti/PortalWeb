<?php
require 'header.php'; ?>
<div class="row header">
    <div class="col-md-2 title-site "><h2>ONPanel</h2></div>
    <div class="col-md-8 title-page"><h2>Halaman Semua Posting</h2></div>
    <div class="col-md-2 text-right author-shortcut">hi, <?=$_SESSION['user_login'];?></div>
</div>
<div class="row">
    <?php require 'sidebar.php';?>
    <div class="col-md-9">
        <table class="table">
            <tr>
                <th></th>
                <th>Judul</th>
                <th>Category</th>
                <th>Opsi</th>
                <th>Tanggal</th>
            </tr>
            <?php
            $sql = "SELECT * FROM posting ORDER BY date_post DESC LIMIT 0,30";
            // $db check di admin-loader.php
            $result = $db->query($sql);

            // jika terdapat posting
            if ($result->num_rows > 0) {
                while ($post = $result->fetch_assoc()) {
                    echo "<tr>
                            <td><input type=\"checkbox\" id=\"post-{$post['id_post']}\" class=\"post-checkbox\" name=\"idpost[]\" value=\"{$post['id_post']}\"></td>
                            <td>{$post['title']}</td>";

                    // get category on current post
                    // Query Join antara table cat_post dan categories
                    $sqlcat = "SELECT 
                                    cat.category 
                                FROM 
                                    cat_post cp,
                                    categories cat 
                                WHERE 
                                    cat.idcat = cp.idcat 
                                AND 
                                    cp.id_post='{$post['id_post']}'";

                    echo "<td>";
                    $rescat = $db->query($sqlcat);
                    // jika terdapat category
                    if ($rescat && $rescat->num_rows > 0) {
                        while ($cat = $rescat->fetch_assoc()) {
                            $cats = $cat['category'] . ', ';
                        }

                        echo trim($cats, ', ');
                    } else {
                        echo 'belum ber-category';
                    }// end display categories

                    echo "</td>";
                    $date = date('d M, Y', strtotime($post['date_post']));
                    echo "<td>
                            <a href=\"{$domain}admin/posts.php?edit={$post['id_post']}\">Edit</a>
                            <a href=\"{$domain}admin/posts.php?delete={$post['id_post']}\">Delete</a>
                         </td>";
                    echo "<td>{$date}</td>";
                }
                
            } else {
                echo "<tr>
                    <td colspan='4' class='text-center'>Kosong</td>
                </tr>";
            }
            ?>
        </table>
    </div>
</div>
<?php require 'footer.php';?>