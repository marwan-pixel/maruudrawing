<?= $this->extend('layout/template');?>

<?= $this->section('content'); ?>

<div class="sketchingContent pt-20">
        <p class="md:text-6xl text-5xl text-center my-20">Sketchings</p>

        <div class="maincontent mx-6 md:mx-auto md:w-2/3 text-justify md:text-lg text-md">
            <div class="block md:flex md:flex-wrap md:space-x-5 md:space-y-4 md:justify-center md:space-x-4">
            <img class="rounded-xl md:h-80 mt-5" src="pictures/mySketching1.webp" alt="">
            <img class="rounded-xl md:h-80 mt-5" src="pictures/mySketching2.webp" alt="">
            <img class="rounded-xl md:h-80 mt-5" src="pictures/mySketching3.webp" alt="">
            <img class="rounded-xl md:h-80 mt-5" src="pictures/mySketching4.webp" alt="">
            <img class="rounded-xl md:h-80 mt-5" src="pictures/mySketching5.webp" alt="">
            <img class="rounded-xl md:h-80 mt-5" src="pictures/mySketching6.webp" alt="">
            <img class="rounded-xl md:h-80 mt-5" src="pictures/mySketching7.webp" alt="">
            <img class="rounded-xl md:h-80 mt-5" src="pictures/mySketching8.webp" alt="">
            <img class="rounded-xl md:h-80 mt-5" src="pictures/mySketching9.webp" alt="">
            <img class="rounded-xl md:h-80 mt-5" src="pictures/mySketching10.webp" alt="">
            </div>
        </div>
    </div>

<?= $this->endSection();?>