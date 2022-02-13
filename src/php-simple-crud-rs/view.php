<?php
include './partials/header.php';
require __DIR__ . '/users/users.php';

if (!isset($_GET['id'])) {
    include './partials/notFound.php';
    exit;
}
$id = $_GET['id'];

$user = getUserById($id);

if (!$user) {
    include './partials/notFound.php';
    exit;
}
?>

<div class="container">
    <table class="table">
        <div class="card">
            <div class="card-header">
                <h3>View User: <b><?php echo $user['name'] ?></b></h3>
            </div>
        </div>
        <tbody>
            <tr>
                <th>Name:</th>
                <td><?php echo $user['name'] ?></td>
            </tr>
            <tr>
                <th>user Name:</th>
                <td><?php echo $user['username'] ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo $user['email'] ?></td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td><?php echo $user['phone'] ?></td>
            </tr>
            <tr>
                <th>Website:</th>
                <td>
                    <a target="_blank" href="http://<?php echo $user['website'] ?>">
                        <?php echo $user['website'] ?>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php include './partials/footer.php' ?>