<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

    <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;500;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"/>

    <link rel="stylesheet" href="../assets/css/todo.css">

    <title>Todo</title>
</head>
<body>

<div id="container">
    <h1>
        To-Do List<span id="toggleForm"><i class="fas fa-plus"></i></span>
    </h1>
    <div class="inputBox">
        <form action="" method="POST" id="newTask">
            <div class="row mt-3">
                <div class="col-md-10">
                    <input type="text" name="task_name" class="form-control" width="90%" placeholder="Добавить..." required/>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-success form-control">Добавить</button>
                </div>
            </div>
        </form>

    </div>
    <ul id="list" class="mt-5">
        <!-- list will render here -->
    </ul>
    <div class="container" id="footer">
        <div class="row d-flex justify-content-center">
            <span class=""><span id="counter"></span>- счетчик заданий </span>
        </div>
        <br>
        <div class="row d-flex justify-content-center">
            <div class="btn-group" role="group">
                <button id="all" class="btn btn-success">Все</button>
                <button id="active" class="btn btn-success">Активные</button>
                <button id="completed" class="btn btn-success">Выполненые</button>
                <button id="clearCompleted" class="btn btn-success">Отчистить</button>
            </div>
        </div>
        <div class="row justify-content-center py-2">
            <span>Двойной клик: редактирование</span>
        </div>
    </div>
</div>

</body>

<script
        src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
        crossorigin="anonymous"></script>
<script src="assets/js/todo.js"></script>
</html>

