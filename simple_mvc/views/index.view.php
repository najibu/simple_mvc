<?php require('views/partials/head.php'); ?>

<?php foreach ($users as $user) : ?>
  <li> <?= $user->name ?> </li>
<? endforeach; ?>

  <h1>Submit your form</h1>

  <form action="/names" method="POST">
    <input name="name"></input>
    <button type="submit">Submit</button>
  </form>
  
<?php require('views/partials/footer.php'); ?>