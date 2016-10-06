<?php
$partials = get_pages();
$host = $_SERVER['HTTP_HOST'];
$root_project_name = $_SERVER['REQUEST_URI'];
$base_url = '//' . $host . $root_project_name;
?>
<style>
    * {
        font-family: Arial !important;
    }
</style>
<div style="text-align: center;">
    <h1>Page List</h1>
    <ul style="padding-left: 0; list-style: none;">
        <?php foreach($partials as $filename): ?>
        <li><a href="<?= $base_url . '?page=' . $filename; ?>"><?= $filename; ?></a>
            <?php endforeach; ?>
</div>