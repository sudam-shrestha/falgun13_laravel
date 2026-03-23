<x-layout>
    <section class="py-16">
        <div class="container">
            <div class="pb-5 flex justify-between items-center">
                <h1 class="text-3xl font-bold">Course Lists</h1>
                <a href="/course/create" class="bg-(--primary)/90 hover:bg-(--primary) px-4 py-2 rounded-3xl text-white">
                    add new +
                </a>
            </div>

            <div>
                <table class="w-full text-center">
                    <thead>
                        <tr class="bg-gray-300">
                            <th class="border border-gray-400 py-1">SN</th>
                            <th class="border border-gray-400 py-1">Name</th>
                            <th class="border border-gray-400 py-1">Price</th>
                            <th class="border border-gray-400 py-1">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($courses as $i => $course)
                            <tr>
                                <td class="border border-gray-400 py-1">
                                    {{ ++$i }}
                                </td>
                                <td class="border border-gray-400 py-1">
                                    {{ $course->name }}
                                </td>
                                <td class="border border-gray-400 py-1">
                                    Rs.{{ $course->price }}
                                </td>
                                <td class="border border-gray-400 py-1">
                                    edit delete
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-layout>
