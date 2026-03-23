<x-layout>
    <section class="py-16">
        <div class="container">
            <div class="pb-5 flex justify-between items-center">
                <h1 class="text-3xl font-bold">Course Create</h1>
                <a href="/courses" class="bg-(--primary)/90 hover:bg-(--primary) px-4 py-2 rounded-3xl text-white">
                    go back
                </a>
            </div>

            <div>
                <form action="/course/store" method="post">
                    @csrf
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="name">Course Name</label>
                            <input type="text" name="name" id="name" class="border w-full px-2 py-1">
                        </div>
                        <div>
                            <label for="price">Course Fee</label>
                            <input type="tel" name="price" id="price" class="border w-full px-2 py-1">
                        </div>
                        <div>
                            <button type="submit"
                                class="bg-(--primary)/90 hover:bg-(--primary) px-4 py-2 rounded text-white">
                                Submit Record
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
{{--
    index->table page
    create->form page
    store->save data
--}}
