<?php
require('config/db.php');
require('config/config.php');

//create query
$query = 'SELECT * FROM posts';

//get results
$result = mysqli_query($conn, $query);

//fetch data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($posts);

//free the result
mysqli_free_result($result);

//close connection
mysqli_close($conn);
?>

<?php include ('inc/header.php'); ?>
<?php include ('inc/navbar.php'); ?>
    <div class="container">
        <h1>Posts</h1>
        <?php foreach($posts as $post): ?>
            <div class="card bg-light mb-3" style="max-width: 20rem;">
                <div class="card-header"><small>Created on <?php echo $post['created_at'] ?> by <?php echo $post['author'] ?></small></div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $post['title'] ?></h4>
                    <p class="card-text"><?php echo $post['body'] ?></p>
                    <a class="btn btn-primary"href="post.php?id=<?php echo $post['id']; ?>">Read More</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php include ('inc/footer.php'); ?>

