<?php
    require_once '../load.php';
    // confirm_logged_in();
    // movies
    if (isset($_GET['media'])){
        $tbl = "tbl_" . trim($_GET["media"]);
        // echo $tbl;
    }

    if(isset($_GET['filter'])){
        $args = array(
            'tbl' => $tbl,
            'tbl2' => 'tbl_genre',
            'tbl3' => 'tbl_mov_genre',
            'col' => 'movies_id',
            'col2' => 'genre_id',
            'col3' => 'genre_name',
            'filter' => $_GET['filter'],
        );

        $results = getMoviesByFilter($args);
        echo json_encode($results->fetchAll(PDO::FETCH_ASSOC));
    } else {
            $results = getAll($tbl);
            echo json_encode($results);
    }

    // tv shows filters
    if(isset($_GET['filter_tv'])){
        $args = array(
            'tbl' => $tbl,
            'tbl2' => 'tbl_genre',
            'tbl3' => 'tbl_tv_genre',
            'col' => 'tv_id',
            'col2' => 'genre_id',
            'col3' => 'genre_name',
            'filter_tv' => $_GET['filter_tv'],
        );

        $results = getTvByFilter($args);
        echo json_encode($results->fetchAll(PDO::FETCH_ASSOC));
    } 

    // audio

    // Try to filter the music by following video filter
    if(isset($_GET['filter_audio'])){
        $args = array(
            'tbl' => $tbl_,
            'tbl2' => 'tbl_genre',
            'tbl3' => 'tbl_mu_genre',
            'col' => 'music_id',
            'col2' => 'genre_id',
            'col3' => 'genre_name',
            'filter_audio' => $_GET['filter_audio'],
        );

        $results = getAudioByFilter($args);
        echo json_encode($results->fetchAll(PDO::FETCH_ASSOC));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Portal</title>
</head>
<body>
    <h2>Welcome! <?php echo $_SESSION['user_name'];?></h2>
    
    <a href="admin_createuser.php">Create User</a>
    <a href="admin_edituser.php">Edit User</a>
    <a href="admin_deleteuser.php">Delete User</a>
    <a href="admin_logout.php">Sign Out</a>
</body>
</html>