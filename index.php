<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
        }
    </style>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <img src="img/rnd1.jpeg" alt="" class="rounded-circle mb-2 col-7" style="width: 90px;height: 70px;">
        <h3 class="col-4 mt-3">SnoopyDoGG</h3>

    </div>
    <div class="card" style="width: 100%; ">
        <img src="img/rnd2.jpeg" class="card-img-top" alt="..." style="height: 80vh">
        <div class="card-body">
            <p class="card-text">Hi guyz this is my lovely family , this is the best family i ever seen  </p>
            <hr>
            <h4 id="like1"><?php echo file_get_contents('like1') ?>
                <a href="LikePost.php?action=like1" class="material-symbols-outlined ">
favorite
                </a>
                  <span class="material-symbols-outlined">
chat_bubble
</span>
            <span class="material-symbols-outlined">
send
</span>
</h4>
        </div>
    </div>
</div>


<div class="container mt-2">
    <div class="row">
        <img src="img/avatar1.png" alt="" class="rounded-circle mb-2 col-7" style="width: 90px;height: 70px;">
        <h3 class="col-4 mt-3">NatureCombine</h3>

    </div>
    <div class="card" style="width: 100%; ">
        <img src="img/rnd3.jpg" class="card-img-top" alt="..." style="height: 80vh">
        <div class="card-body">
            <p class="card-text">Me and my dog thinking how to swim in this big pool </p>
            <hr>
            <h4 id="like2"><?php echo file_get_contents('like2') ?>
                <a href="LikePost.php?action=like2" class="material-symbols-outlined ">
favorite
                </a>
                  <span class="material-symbols-outlined">
chat_bubble
</span>
            <span class="material-symbols-outlined">
send
</span>
</h4>
        </div>
    </div>
</div>


<div class="container mt-2">
    <div class="row">
        <img src="img/avatar2.png" alt="" class="rounded-circle mb-2 col-7" style="width: 90px;height: 70px;">
        <h3 class="col-4 mt-3">JapanCarLover</h3>

    </div>
    <div class="card" style="width: 100%; ">
        <img src="img/rnd4.jpg" class="card-img-top" alt="..." style="height: 80vh">
        <div class="card-body">
            <p class="card-text">I love my car more than my wife :) </p>
            <hr>
            <h4 id="like3"><?php echo file_get_contents('like3') ?>
                <a href="LikePost.php?action=like3" class="material-symbols-outlined ">
favorite
                </a>
                  <span class="material-symbols-outlined">
chat_bubble
</span>
            <span class="material-symbols-outlined">
send
</span>
</h4>
        </div>
    </div>
</div>


<div class="container mt-2">
    <div class="row">
        <img src="img/avatar3.png" alt="" class="rounded-circle mb-2 col-7" style="width: 90px;height: 70px;">
        <h3 class="col-4 mt-3">JohnSmith</h3>

    </div>
    <div class="card" style="width: 100%; ">
        <img src="img/rnd5.jpg" class="card-img-top" alt="..." style="height: 80vh">
        <div class="card-body">
            <p class="card-text">Guyz This is my new house , Do you like it ? </p>
            <hr>
            <h4 id="like4"><?php echo file_get_contents('like4') ?>
                <a href="LikePost.php?action=like4" class="material-symbols-outlined ">
favorite
                </a>
                  <span class="material-symbols-outlined">
chat_bubble
</span>
            <span class="material-symbols-outlined">
send
</span>
</h4>
        </div>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <img src="img/avatar4.png" alt="" class="rounded-circle mb-2 col-7" style="width: 90px;height: 70px;">
        <h3 class="col-4 mt-3">DevilKiller</h3>

    </div>
    <div class="card" style="width: 100%; ">
        <img src="img/rnd6.jpg" class="card-img-top" alt="..." style="height: 80vh">
        <div class="card-body">
            <p class="card-text">HAHA I BUY IT AT ALL .</p>
            <hr>
            <h4 id="like5"><?php echo file_get_contents('like5') ?>
                <a href="LikePost.php?action=like5" class="material-symbols-outlined ">
favorite
                </a>
                  <span class="material-symbols-outlined">
chat_bubble
</span>
            <span class="material-symbols-outlined">
send
</span>
</h4>
        </div>
    </div>
</div>

<script>
    import axios from "axios";

    $(function () {
        $("#like4").click(function (e) {
            e.preventDefault();
            axios.get($(this).attr('href')).then(function (e) {
                $('#like4').text(e.data);

            })

        })
    })
</script>
</body>
</html>