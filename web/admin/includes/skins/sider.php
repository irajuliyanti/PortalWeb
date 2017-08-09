<?php
// hindari akses langsung ke file ini
if (!defined('ACCESS')) {
    die('System Cannot Running');
}
?>
<div class="col-md-2 sidebar">
    <ul class="admin-menus">
        <li><a href="<?=$domain.'admin/dashboard.php';?>">Dashboard</a></li>
        <li><a href="<?=$domain.'admin/posts.php';?>">Posting</a>
            <ul>
                <li><a href="<?=$domain.'admin/all-post.php';?>">All Post</a></li>
            </ul>
        </li>
        <li><a href="<?=$domain.'admin/categories.php';?>">Categories</a></li>
        <li><a href="<?=$domain.'admin/comments.php';?>">Comments</a></li>
        <li><a href="<?=$domain.'admin/users.php';?>">Users</a></li>
        <li><a href="<?=$domain.'admin/?logout=true';?>">Logout</a></li>
    </ul>
</div>