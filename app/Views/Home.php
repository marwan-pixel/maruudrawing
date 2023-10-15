<?= $this->extend('layout/template');?>

<?= $this->section('content'); ?>

<div class="content">
    <div class="header flex mx-12 mt-6 mb-10" style="">
        <img class="mr-12" style="height: 90vh;" src="pictures/myPhotos.webp" alt="">
        <div class="ml-12 my-10  flex flex-col justify-center">
            <p class="text-lg text-left">A Beginner Artist.</p>
            <p class="mt-6 text-7xl">Who likes to draw and sketch someone or something, then post it</p>
        </div>
    </div>

    <div class="main mx-12 my-20">
        <div class="flex items-center px-20 py-20 justify-center" style="background-color:antiquewhite; border-radius: 10px;">
            <div class="my-10 mr-10" style="width: 40%;">
                <p class="mt-6 text-xl">This is my journey about how long I have been drawing. I started drawing since March 2023.</p>
            </div>
            <img class="" style="width: 40%; border-radius: 10px;" src="pictures/mySketching.webp" alt="">
        </div>
    </div>

    <div class="main mx-12 my-20">
        <div class="flex items-center px-20 py-5 justify-center">
            <img class="mr-10" style="width: 35%; border-radius: 10px;" src="pictures/myFirstSketching.webp" alt="">
            <div class="" style="width: 40%;">
                <p class="mt-6 text-xl">For the first time, I tried to draw about a person who plays a piano. I used a pen tablet.</p>
                <p class="mt-6 text-xl">But the result wasn't what I expected. That was so difficult for the beginner like me. </p>
            </div>
        </div>
    </div>

    <div class="main mx-12 my-20">
        <div class="flex items-center justify-center">
            <div class="my-10" style="width: 80%;">
                <p class=" text-center text-4xl">After that I decided to learn how to draw better.</p>
            </div>
        </div>
    </div>

    <div class="main mx-12 my-8 py-20" style="background-color:antiquewhite; border-radius: 10px;">
        <div class="flex items-center justify-center   ">
            <img class="mr-5" style="width: 30%; border-radius: 10px;" src="pictures/mySixthSketching.webp" alt="">
            <img class="mr-5" style="width: 30%; border-radius: 10px;" src="pictures/mySeventhSketching.webp" alt="">
            <img class="mr-5" style="width: 30%; border-radius: 10px;" src="pictures/myEightSketching.webp" alt="">
        </div>
        <div class="flex items-center justify-center">
            <div class="mt-10" style="width: 80%;">
                <p class=" text-center text-xl">I keep learning and practicing even I have no time to do it</p>
                <p class=" text-center text-xl">by watching some tutorial videos on Youtube and Instagram as an inpsiration. </p>
            </div>
        </div>
    </div>

    <div class="main mx-12 my-10">

    </div>

    <div class="main mx-12 my-10">
        <div class="flex items-center justify-center">
            <img class="mr-10" style="width: 20%; border-radius: 10px;" src="pictures/mySecondSketching.webp" alt="">
            <img class="mr-10" style="width: 20%; border-radius: 10px;" src="pictures/myThirdSketching.webp" alt="">
            <img class="mr-10" style="width: 20%; border-radius: 10px;" src="pictures/myFourthSketching.webp" alt="">
        </div>
    </div>

    <div class="main mx-12 my-10">
        <div class="flex items-center justify-center">
            <div class="my-10" style="width: 80%;">
                <p class=" text-center text-xl">After sketching, some paintings I post to my Instagram Account.</p>
            </div>
        </div>
    </div>

    <div class="main mx-12 my-10">
        <div class="flex items-center justify-center">
            <img class="mr-10" style="width: 25%; border-radius: 10px;" src="pictures/myPostedSketching1.webp" alt="">
            <img class="ml-10" style="width: 25%; border-radius: 10px;" src="pictures/myPostedSketching2.webp" alt="">
        </div>
    </div>

    <div class="main mx-12 my-10">
        <div class="flex items-center justify-center">
            <div class="my-10" style="width: 80%;">
                <p class=" text-center text-xl">For now, monochrome style is the suitable style for me.</p>
                <p class=" text-center text-xl">I wish someday I could make my own style drawing.</p>
            </div>
        </div>
    </div>


</div>
<?= $this->endSection();?>