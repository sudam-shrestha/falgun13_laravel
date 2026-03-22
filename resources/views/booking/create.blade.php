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
                <form action="/booking/store" method="post">
                    @csrf
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="full_name">Full name</label>
                            <input type="text" name="full_name" id="full_name" class="border w-full px-2 py-1">
                        </div>
                        <div>
                            <label for="phone">Phone number</label>
                            <input type="tel" name="phone" id="phone" class="border w-full px-2 py-1">
                        </div>
                        <div>
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="border w-full px-2 py-1">
                        </div>
                        <div class="col-span-2">
                            <label for="request">Your Request</label>
                            <textarea name="your_request" id="request" rows="4" class="border w-full px-2 py-1"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="bg-(--primary)/90 hover:bg-(--primary) px-4 py-2 rounded text-white">
                                Submit Record
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
