<?php require('views/partials/head.php'); ?>

<h1>All Users</h1>

<?php foreach ($users as $user) : ?>
  <li> <?= $user->name ?> </li>
<? endforeach; ?>

  <h1>Submit your form</h1>

  <form action="/users" method="POST">
    <input name="name"></input>
    <button type="submit">Submit</button>
  </form>
  
<?php require('views/partials/footer.php'); ?>