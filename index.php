<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do List</title>
    <link rel="icon" href="to-do-list.png" type="image/x-icon">
    <link rel = "stylesheet" href = "css/style.css">
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <h1>To-do List</h1>
    <div class = "container">
        <h1>To-do List</h1>
        <form action="/add.php" method = "post">
            <input type="text" name = "task" id="task" placeholder="Need to do..." class="form-control">
            <button type="submit" name="SendTask" class="btn btn-success">Send</button>
        </form>

        <?php
            require 'configDB.php';
              
            echo '<ul>';
            $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
            while($row = $query->fetch(PDO::FETCH_OBJ)){
                echo '<li><b>'.$row->task.'</b><a href ="/delete.php?id='.$row->id.'"><button>Delete</button></a></li>';
            }
            echo '</ul>';
        ?>


    </div>
</body>
</html>