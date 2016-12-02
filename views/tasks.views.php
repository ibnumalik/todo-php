<?php require 'partials/header.php'; ?>

    <div class="main">
        <h1>Tasks</h1>    
        <ul>
            <?php foreach ($tasks as $task) :?>
                <li><?php echo $task->description; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="addTask">
        <form method="POST" action="/tasks">
            <input type="text" name="name">
            <button type="submit">Add</button>
        </form>
    </div>
<?php require 'partials/footer.php'; ?>