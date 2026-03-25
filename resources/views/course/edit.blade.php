<x-layout>
    <section class="py-16">
        <div class="container">
            <div class="pb-5 flex justify-between items-center">
                <h1 class="text-3xl font-bold">Course Edit</h1>
                <a href="/courses" class="bg-(--primary)/90 hover:bg-(--primary) px-4 py-2 rounded-3xl text-white">
                    go back
                </a>
            </div>

            <div>
                <form action="/course/update/{{ $course->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="name">Course Name</label>
                            <input type="text" name="name" id="name" class="border w-full px-2 py-1"
                                value="{{ $course->name }}">
                        </div>
                        <div>
                            <label for="price">Course Fee</label>
                            <input type="number" name="price" id="price" class="border w-full px-2 py-1"
                                value="{{ $course->price }}">
                        </div>
                        <div>
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="border w-full px-2 py-1">
                            <img src="{{ asset($course->image) }}" class="h-[40px]" alt="">
                        </div>
                        <div class="col-span-2">
                            <button type="submit"
                                class="bg-(--primary)/90 hover:bg-(--primary) px-4 py-2 rounded text-white">
                                Update Record
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
