<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="css/style.css">
    <title>MaruuDrawing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style type="text/tailwindcss">
    @layer utilities {
      .navbar-fixed {
        @apply fixed z-[9999] bg-white bg-opacity-80 w-full;
        backdrop-filter: blur(5px);
        box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, -0.1);
      }

      .underline-hover {
        @apply underline underline-offset-100;
      }
    }
  </style>
</head>

<body>
    <div class="container">
        <nav class="md:px-7 md:p-0 p-6 flex items-center absolute bg-transparent z-10 top-0 left-0 w-full justify-between">
            <div class="">
                <a class="hover:underline" href="<?= base_url('/');?>">
                    <p class=" text-2xl">MaruuDrawing</p>
                </a>
            </div>

            <div class="flex items-center px-4">
                <span class="text-3xl cursor-pointer md:hidden block">
                    <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                </span>
        
                <ul id="menu" class="hidden md:block md:static md:bg-transparent md:w-full md:shadow-none md:rounded-none md:flex absolute py-5 bg-white shadow-lg w-[200px] mt-3 top-10 right-4 rounded-lg">
                    <li class="mx-5 group py-2 ">
                        <a class="hover:underline text-md" href="<?= base_url('about');?>">
                        About
                        </a>
                    </li>
                    <li class="mx-5 group py-2">
                        <a class="hover:underline text-md" href="<?= base_url('paintings');?>">
                        Paintings
                        </a>
                    </li>
                    <li class="mx-5 group py-2">
                        <a class="hover:underline text-md" href="<?= base_url('contact');?>">
                        Contact
                        </a>
                    </li>
                </ul>    

            </div>
    
    
        </nav>
    </div>

    <?= $this->renderSection('content');?>
</body>
<footer class="flex py-20 justify-center ">
    <a href="http://"><img src="pictures/instagram.svg" style="height: 25px;" alt="instagram link account" srcset=""></a>
</footer>
<script>
    //nabar fixed
    window.onscroll = function(){
        const header = document.querySelector('nav');
        const fixedNav = header.offsetTop;

        if(window.pageYOffset > fixedNav) {
            header.classList.add('navbar-fixed');
        } else {
            header.classList.remove('navbar-fixed' );
        }
    }

    function Menu(e){
        const navMenu = document.querySelector('ul');
        navMenu.classList.toggle('hidden')
        e.name === "menu" ? 
        (e.name = "close") : 
        (e.name = "menu");
    }
</script>
</html>