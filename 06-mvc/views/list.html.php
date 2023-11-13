<?php require 'partials/header.html.php'; ?>
    <div class="max-w-5xl mx-auto">
        <h2 class="text-xl font-bold">Exemple MVC</h2>
        <h3>Hello <?= $name; ?> !</h3>

        <ul>
            <?php foreach ($cars as $car) { ?>
                <li><?= $car; ?></li>
            <?php } ?>
        </ul>

        <h2 class="text-xl font-bold my-4">CRUD MVC</h2>
        <div class="grid grid-cols-4 gap-3">
            <?php foreach ($users as $user) { ?>
                <a href="/utilisateurs/<?= $user['id']; ?>">
                    <div class="border p-4 rounded-lg shadow">
                        <?= $user['name']; ?>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
<?php require 'partials/footer.html.php'; ?>
