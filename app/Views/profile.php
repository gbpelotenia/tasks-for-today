<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>

<body>

<nav>
    <a href="<?= base_url('/') ?>">Welcome</a> |
    <a href="<?= base_url('tasks') ?>">Task List</a> |
    <a href="<?= base_url('profile') ?>">Profile</a> |
    <a href="<?= base_url('about') ?>">About</a>
</nav>

<hr>

<h1>User Profile</h1>

<p>
    <strong>Username:</strong>
    <?= esc($user['username']) ?>
</p>

<p>
    <strong>Full Name:</strong>
    <?= esc($user['full_name']) ?>
</p>

<p>
    <strong>Email:</strong>
    <?= esc($user['email']) ?>
</p>

<p>
    <strong>Account Created:</strong>
    <?= esc($user['created_at']) ?>
</p>

</body>
</html>