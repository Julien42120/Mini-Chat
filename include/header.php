<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="emoji/emojione.picker.css">
    <link href="dist/emojione.picker.css" rel="stylesheet">


    <title>Document</title>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
           
            <a class="navbar-brand" href="" >MINI CHAT 🗨</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    
                    <?php  if (isset($_GET['id'])){  ?>
              
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php?id=<?=$_GET['id']?>">Chat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="deco" href="requetes/deconnect.php?id=<?=$_GET['id']?>"> Deconnexion </a>
                        </li>
                    <?php }else{  ?>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Chat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./inscription.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./loginUsers.php"> Connection</a>
                        </li>

                    <?php } ?>

                </ul>
            </div>
        </div>  
    </nav>
    <?php   if (isset($_GET["message"])) : ?>
            <div style="padding:10px;background:linear-gradient(#1eff2a , #012e08);color:#fff;">
                <?= $_GET["message"] ?>
            </div>
        <?php endif; ?>
</head>