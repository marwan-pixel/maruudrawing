<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container pt-20 max-w-md sm:max-w-xl mx-auto md:max-w-full">
    <div class="header mx-6 md:max-w-full lg:mx-32  md:flex mx:items-center md:justify-center " style="">
        <img class="md:h-96 lg:h-full" src="pictures/myPhotos.webp" alt="maruudrawing">
        <div class="my-10 md:ml-7 flex flex-col justify-center">
            <p class="text-lg text-left">A Beginner Artist.</p>
            <p class="mt-6 text-3xl sm:text-4xl md:text-5xl lg:text-7xl">Who likes to draw and sketch someone or something, then post it</p>
        </div>
    </div>

    <div class="main mx-6 my-20 lg:mx-52  md:flex md:items-center md:justify-center ">
        <div class="p-5 md:p-10 md:flex md:items-center" style="background-color:antiquewhite; border-radius: 10px;">
            <img class="rounded-xl sm:h-48 md:hidden" src="pictures/mySketching.webp" alt="">
            <div class="">
                <p class="mt-6 md:mt-0 text-md md:text-xl md:mr-6">This is my journey about how long I have been drawing. I started drawing since March 2023.</p>
            </div>
            <img class="rounded-xl hidden md:h-64 sm:h-32 md:block" src="pictures/mySketching.webp" alt="">

        </div>
    </div>

    <div class="main mx-6 lg:mx-52 my-20">
        <div class="md:flex md:items-center">
            <img class="rounded-xl md:h-96" src="pictures/myFirstSketching.webp" alt="">
            <div class="md:ml-10">
                <p class="mt-6 text-xl">For the first time, I tried to draw about a person who plays a piano. I used a pen tablet.</p>
                <p class="mt-6 text-xl">But the result wasn't what I expected. That was so difficult for the beginner like me. </p>
            </div>
        </div>
    </div>

    <div class="main mx-6  my-20">
        <div class="flex items-center justify-center">
            <div class="my-10">
                <p class=" text-center text-4xl">After that I decided to learn how to draw better.</p>
            </div>
        </div>
    </div>

    <div class="main lg:mx-32 mx-6 my-20 p-5 md:p-10 " style="background-color:antiquewhite; border-radius: 10px;">
        <div class="md:block hidden md:flex md:justify-center md:space-x-4">
            <img class="rounded-xl md:h-32 xl:h-52 sm:h-full" src="pictures/mySixthSketching.webp" alt="">
            <img class="rounded-xl md:h-32 xl:h-52 sm:h-full" src="pictures/mySeventhSketching.webp" alt="">
            <img class="rounded-xl md:h-32 xl:h-52 sm:h-full" src="pictures/myEightSketching.webp" alt="">
        </div>
        <div class="flex items-center justify-center">
            <div class="mt-5">
                <p class=" text-center text-xl">I keep learning and practicing even I have no time to do it</p>
                <p class=" text-center text-xl">by watching some tutorial videos on Youtube and Instagram as an inpsiration. </p>
            </div>
        </div>
        <div class="p-5 md:hidden">
            <img class="mt-5 rounded-xl" src="pictures/mySixthSketching.webp" alt="">
            <img class="mt-5 rounded-xl" src="pictures/mySeventhSketching.webp" alt="">
            <img class="mt-5 rounded-xl" src="pictures/myEightSketching.webp" alt="">
        </div>

    </div>


    <div class="main lg:mx-32 mx-6 my-20 mx-6">
        <div class=" md:flex md:justify-center md:space-x-4">
            <img class="rounded-xl md:h-96 mt-5"  src="pictures/mySecondSketching.webp" alt="">
            <img class="rounded-xl md:h-96 mt-5"  src="pictures/myThirdSketching.webp" alt="">
            <img class="rounded-xl md:h-96 mt-5"  src="pictures/myFourthSketching.webp" alt="">
        </div>
    </div>

    <div class="main mx-6 my-20">
        <div class="flex items-center justify-center">
            <div class="">
                <p class=" text-center text-xl">After sketching, some paintings I post to my Instagram Account.</p>
            </div>
        </div>
    </div>

    <div class="main lg:mx-52 mx-6 my-20 mx-6">
        <div class="md:flex md:justify-center md:space-x-8">
            <img class="rounded-xl md:h-96 mt-5" style="" src="pictures/myPostedSketching1.webp" alt="">
            <img class="rounded-xl md:h-96 mt-5" style="" src="pictures/myPostedSketching2.webp" alt="">
        </div>
    </div>

    <div class="main mx-6 my-10">
        <div class="flex items-center justify-center">
            <div class="my-10" style="width: 100%;">
                <p class=" text-center text-xl">For now, monochrome style is the suitable style for me.</p>
                <p class=" text-center text-xl">I wish someday I could make my own style drawing.</p>
            </div>
        </div>
    </div>
    
    <div class="main mx-6 my-10">
        <div class="flex items-center justify-center">
            <div class="my-10" style="width: 100%;">
                <p class=" text-center text-xl">So, Here I GO!</p>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>