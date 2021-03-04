<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title><?= $title; ?></title>
</head>

<body>

    <!-- <style>
        input[type="email"] {
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        input[type="password"] {
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
        }
    </style> -->

    <div class="border border-danger container rounded pb-3" style="width: max-content; margin-top: 11em;">
        <div class="text-center">
            <form method="POST" action="<?= base_url('auth'); ?>" style="max-width: 380px; margin:auto;">
                <img class="my-4" src="<?= base_url('assets/img/logo.png'); ?>" height="125" alt="fit logo">
                <h1 class="h3 mb-3 font-weight-normal text-secondary">Login</h1>
                <?= $this->session->flashdata('alert'); ?>
                <label>
                    <input type="text" name="username" id="username" class="form-control border border-gray" placeholder="Username" value="<?= set_value('username'); ?>" autofocus>
                </label>
                <label for="password" class="sr-only">
                    <input type="password" name="password" class="form-control border border-gray" placeholder="Password">
                </label>
                <small class="text-danger"><?= form_error('username'); ?></small>
                <small class="text-danger"><?= form_error('password'); ?></small>
                <div class="my-3">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>