<?php view("partials/head.php"); ?>
<?php view("partials/banner.php", ["heading" => $heading]); ?>
<div class="container-fluid py-3">
    <div class="container">
        <p>My Notes</p>
        <ul class="list-group">
            <li class="list-group-item"><a class="btn btn-warning" href="/notes/create">Creat note</a></li>
            <?php foreach ($notes as $note): ?>
                <li class="list-group-item">
                    <a href="/note?id=<?php echo $note["id"]; ?>">
                        <?php echo $note["body"]; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>

<?php view("partials/bottom.php"); ?>
