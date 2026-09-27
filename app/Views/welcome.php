<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>

<body>

<nav>
    <a href="<?= base_url('/') ?>">Welcome</a> |
    <a href="<?= base_url('tasks') ?>">Task List</a> |
    <a href="<?= base_url('profile') ?>">Profile</a> |
    <a href="<?= base_url('about') ?>">About</a>
</nav>

<hr>

<h1>Tasks for Today</h1>

<p>Here are your tasks scheduled for today.</p>

<table border="1" cellpadding="10">

    <tr>
        <th>Task</th>
        <th>Status</th>
        <th>Date</th>
    </tr>

    <?php foreach ($tasks as $task): ?>

        <tr>
            <td><?= esc($task['title']) ?></td>
            <td><?= esc($task['status']) ?></td>
            <td><?= esc($task['task_date']) ?></td>
        </tr>

    <?php endforeach; ?>

</table>

</body>
</html>