<?php
require('config/db.php');

//get ID
$id = mysqli_real_escape_string($conn, $_GET['id']);

//create query
$query = 'SELECT * FROM posts WHERE id = '.$id;

//get results
$result = mysqli_query($conn, $query);

//fetch data
$post = mysqli_fetch_assoc($result);
// var_dump($posts);

//free the result
mysqli_free_result($result);

//close connection
mysqli_close($conn);
?>

<?php include ('inc/header.php'); ?>
<?php include ('inc/navbar.php'); ?>
    <div class="container">
        <h1><?php echo $post['title'] ?></h1>
        <small>Created on <?php echo $post['created_at'] ?> by <?php echo $post['author'] ?></small>
        <p class="card-text"><?php echo $post['body'] ?></p>
        <a class="btn btn-primary"href="index.php?id=<?php echo $post['id']; ?>">Go Back</a>
        <a class="btn btn-primary"href="editpost.php?id=<?php echo $post['id']; ?>">Edit</a>

    </div>
<?php include ('inc/footer.php'); ?>