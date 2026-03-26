<x-layout>
    <section class="py-16">
        <div class="container">
            <div class="pb-5 flex justify-between items-center">
                <h1 class="text-3xl font-bold">Enrollment Lists</h1>
                <a href="{{ route('enrollment.create') }}"
                    class="bg-(--primary)/90 hover:bg-(--primary) px-4 py-2 rounded-3xl text-white">
                    add new +
                </a>
            </div>

            <div>
                <table class="w-full text-center">
                    <thead>
                        <tr class="bg-gray-300">
                            <th class="border border-gray-400 py-1">SN</th>
                            <th class="border border-gray-400 py-1">Name</th>
                            <th class="border border-gray-400 py-1">Email</th>
                            <th class="border border-gray-400 py-1">Course</th>
                            <th class="border border-gray-400 py-1">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($enrollments as $i => $enrollment)
                            <tr>
                                <td class="border border-gray-400 h-[60px] py-1">
                                    {{ ++$i }}
                                </td>
                                <td class="border border-gray-400 h-[60px] py-1">
                                    {{ $enrollment->name }}
                                </td>
                                <td class="border border-gray-400 h-[60px] py-1">
                                    {{ $enrollment->email }}
                                </td>
                                <td class="border border-gray-400 h-[60px] py-1">
                                    {{ $enrollment->course->name }}
                                </td>
                                <td class="border border-gray-400 h-[60px] py-1 flex gap-2 items-center justify-center">
                                    <a href="{{ route('enrollment.edit', $enrollment->id) }}" class="text-[#12c0f0]">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{ route('enrollment.delete', $enrollment->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-[red]">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-layout>
