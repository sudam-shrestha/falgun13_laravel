<x-layout>
    <section class="py-16">
        <div class="container">
            <div class="pb-5 flex justify-between items-center">
                <h1 class="text-3xl font-bold">Enrollment Edit</h1>
                <a href="{{ route('enrollment.index') }}"
                    class="bg-(--primary)/90 hover:bg-(--primary) px-4 py-2 rounded-3xl text-white">
                    go back
                </a>
            </div>

            <div>
                <form action="{{ route('enrollment.update', $enrollment->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method("patch")
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="name">Your Name</label>
                            <input type="text" name="name" id="name" class="border w-full px-2 py-1"
                                value="{{ $enrollment->name }}">
                        </div>
                        <div>
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="border w-full px-2 py-1"
                                value="{{ $enrollment->email }}">
                        </div>
                        <div>
                            <label for="course_id">Select Course</label>
                            <select name="course_id" id="course_id" class="border w-full px-2 py-1">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}" {{$course->id == $enrollment->course_id ? 'selected' : ''}}>{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-2">
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
