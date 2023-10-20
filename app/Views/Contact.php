<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="contactContent pt-20">
    <p class="text-6xl text-center my-20">Contact</p>

    <div class="maincontent mx-6 md:mx-20 text-justify md:text-lg text-md">
        <div class="w-full md:w-2/3 md:mx-auto">
            <p class=" ">
                It would be nice if you had a time to contact me, I really appreciate your advices and critics :)
            </p>
            <br>
    
            <p class="">But don't
                write some bad words in your message or spam message.
            </p>
            <br>
            <p>Take care!</p>
        </div>

        <form>
            <div class="w-full md:w-2/3 md:mx-auto">
                <div class="w-full mt-8">
                    <label for="name text-base" class="flex items-center">Name <p class="text-sm ml-2">(Required)</p></label>
                    <input type="text" name="" required class="w-full border-black text-dark p-3 bg-transparent border focus:ring-dark focus:ring-1 focus:border-dark rounded-md focus:outline-none" id="name">
                </div>
                <div class="w-full mt-8">
                    <label for="email text-base" class="flex items-center">Email <p class="text-sm ml-2">(Required)</p></label>
                    <input type="email" name="" required class="w-full border-black text-dark p-3 bg-transparent border focus:ring-dark focus:ring-1 focus:border-dark rounded-md focus:outline-none" id="name">
                </div>
                <div class="w-full mt-8">
                    <label for="name text-base" class="flex items-center">Message <p class="text-sm ml-2">(Required)</p></label>
                    <textarea type="text" name="" required class="w-full border-black text-dark p-3 bg-transparent border focus:ring-dark focus:ring-1 focus:border-dark rounded-md focus:outline-none h-32" id="name"></textarea>
                </div>
                <div class="w-full mt-8">
                    <button class=" bg-black text-base font-semibold  py-3 px-8 rounded-md text-white w-full">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>