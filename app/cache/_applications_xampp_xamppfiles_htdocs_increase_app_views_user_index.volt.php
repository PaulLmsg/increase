<h1>Users</h1>

<?php echo $this->getContent(); ?>
<?php foreach ($users as $user) { ?>
*Name:<?php echo $user->getIdentite(); ?>
<?php } ?>