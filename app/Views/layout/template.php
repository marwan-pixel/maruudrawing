<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="css/style.css">
    <title>MaruuDrawing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="p-6 flex flex-row">
        <div class="basis-3/4">
            <a href="<?= base_url('/');?>">
                <p class=" text-2xl">MaruuDrawing</p>
            </a>
        </div>
        <div class="basis-1/4 flex justify-around ">
            <a href="<?= base_url('about');?>">
                <p class=" text-md">About</p>
            </a>
            <a href="<?= base_url('paintings');?>">
                <p class=" text-md">Paintings</p>
            </a>
            <a href="<?= base_url('contact');?>">
                <p class=" text-md">Contact</p>
            </a>
        </div>
    </nav>

    <?= $this->renderSection('content');?>
</body>
<footer class="flex py-20 justify-center">
    <a href="http://"><img src="pictures/instagram.svg" style="height: 25px;" alt="instagram link account" srcset=""></a>
</footer>

</html>