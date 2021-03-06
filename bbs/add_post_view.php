<!DOCTYPE html>
<html>
<head>
    <title>kisec bbs - board</title>
    <link href="../css/style.css" rel="stylesheet" />
</head>
<body>
<header class="masthead">
    <div class="container">
        <div class="masthead-logo">
            kisec bbs
        </div>
        <nav class="masthead-nav">
            <a href="../bbs/home.php">Home</a>
            <?php include('../utils/general.php'); include('../utils/constants.php'); ShowUserManagement($_SESSION['default_permission']); ?>
            <a href="../user/user_info.php"><?php ShowUser(); ?></a>
            <a href="../logout.php">Log out</a>
        </nav>
    </div>
</header>

<div class="container markdown-body">
    <h1 class="page-title"><?php $board_name = $_GET['board_name']; echo ($board_name); ?></h1>
    <h2>New post</h2>
    <form method="post" action="add_post.php" enctype="multipart/form-data" onSubmit="return InputCheck()">
        <input type="hidden" name="board_ID" value="<?php echo ($_GET['board_ID']); ?>" />
        <p>
            <label for="title">Title :</label>
            <input class="form-control input-block" type="text" id="title" name="title" />
        </p>
        <p>
            <label for="content">Content :</label>
            <textarea class="form-control input-block" id="content" name="content" rows=6></textarea>
        </p>
        <p>
            <input type="file" name="uploadfile" />
        </p>
        <p>
            <input class="btn btn-primary" type="submit" name="submit" value="Post!">
        </p>
    </form>

    <footer class="footer">
        Designed by Kisec
    </footer>
</div>
</body>
</html>

<script>
    function InputCheck()
    {
        title = document.getElementById("title");
        content = document.getElementById("content");
        if (!title.value)
        {
            alert("Post title should not be empty.");
            title.focus();
            return false;
        }
        if (!content.value)
        {
            alert("Content should not be empty.");
            content.focus();
            return false;
        }
        return true;
    }
</script>