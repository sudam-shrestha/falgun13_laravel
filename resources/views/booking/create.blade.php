<x-layout>
    <section class="py-16">
        <div class="container">
            <div class="pb-5 flex justify-between items-center">
                <h1 class="text-3xl font-bold">Booking Create</h1>
                <a href="/booking" class="bg-(--primary)/90 hover:bg-(--primary) px-4 py-2 rounded-3xl text-white">
                    go back
                </a>
            </div>

            <div>
                <form action="" method="post">
                    <div>
                        <label for="full_name">Enter your full name</label>
                        <input type="text" name="" id="full_name" class="border w-full px-2 py-1" value="yooo">
                    </div>
                    <div>
                        <label for="email">Enter your email</label>
                        <input type="email" name="" id="email" class="border w-full px-2 py-1">
                    </div>
                    <div>
                        <label for="phone">Enter your phone number</label>
                        <input type="tel" name="" id="phone" class="border w-full px-2 py-1">
                    </div>
                    <div>
                        <label for="gender">Select Gender</label>

                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="male" value="male">
                        <label for="female">Female</label>
                        <input type="radio" name="gender" id="female" value="female">
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
