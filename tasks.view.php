<?php require 'partials/header.php'; ?>

<h2>Add Tasks</h2>
<form action="/tasks" method="POST">
  <input type="text" name="name">
  <input type="submit" value="Submit">
</form>

<h2>All Tasks</h2>
<ul>
    <?php foreach ($tasks as $task) : ?>
     <li>
         <?php echo $task->description; ?>
     </li>       
    <?php endforeach; ?>
</ul>

<?php require 'partials/footer.php'; ?>