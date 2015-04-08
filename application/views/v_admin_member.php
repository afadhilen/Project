<html>

    <head>
    <h2> Welcome Admin </h2>
    <title>User Data</title>
</head>
<table>
    <thead>
    <th>ID</th>
    <th>Username</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Option</th>
</thead>

<?php foreach ($users as $_key => $_value): ?> 
    <tr>
        <td> <?= $_value->id ?></td>
        <td><?= $_value->username ?></td>
        <td><?= $_value->password ?></td>
        <td><?= $_value->firstname ?></td>
        <td><?= $_value->lastname ?></td>
        <td><?= $_value->email ?></td>

        <td><a href="<?= site_url("c_admin/delete/{$_value->id}") ?>">Delete</a> | <a href="<?= site_url("c_admin/updateform/{$_value->id}") ?>">Edit</a></td>

    </tr>
<?php endforeach; ?>
</table> 

<a href ="c_admin/logout"> Log Out </a>
</body>
</html>