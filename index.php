<!DOCTYPE html>
<html>
<head>
    <title>Личный кабинет студента</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<div class="b-example-divider"></div>

<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-secondary">Оценки</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Расписание</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Задания</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Зачётная книжка</a></li>

            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Войти</button>
                <button type="button" class="btn btn-warning">Зарегестрироваться</button>
            </div>
        </div>
    </div>
</header>

<div class="b-example-divider"></div>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
        <form action="form.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" style="margin-left:150px">Номер семестра</label>
                <input type="text" class="form-control" name="firststr" id="exampleFormControlInput1" value="<?php echo $_POST['Номер семестра'] ?? '' ?>" placeholder="например, 5" style="margin-left:150px">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label" style="margin-left:150px">Предмет</label>
                <input type="text" class="form-control" name="laststr" id="exampleFormControlInput2" value="<?php echo $_POST['Предмет'] ?? '' ?>" placeholder="например, интернет-программирование" style="margin-left:150px">
            </div>

            <div class="mb-3">
                <input type="submit" class="btn btn-primary" style="background-color: #ffc107;border-color: #ffc107;color: #000; margin-left:150px;" value="Показать">
            </div>
        </form>
        <?php
    }
    ?>
</div>
<div class="container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo '<b>firststr</b> = ' . ($_POST['Номер семестра'] ?? '') . '<br>';
        echo 'laststr = ' . ($_POST['Предмет'] ?? '');
    }
    ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>