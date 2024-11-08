<div class="flex flex-col space-y-4 vg-white rounded-md shadow-md p-8">
    {{-- <a href="{{ route('front.posts.show', $post) }}" class="m-auto">
        <figure>
            <img src="{{ Storage::url($post->img_path) }}" alt="{{ Str::limit(\nl2br(e($post->body)), 150) }}">
        </figure>
    </a> --}}

    <div class=" grid grid-cols-5 group">

            <span class="text-xl font-semibold text-red-600 transition duration-200 group-hover:text-red-700 group-hover:underline underline-offset-2 ">
                <p class="col-span-2"> {{ \nl2br(e($sandwich->name)) }}</p>

            </span>
            <p class="col-span-3 pl-7 max-w-[85%]">{{ \nl2br(e($sandwich->ingredients)) }}</p>

        <p class="text-gray-700 break-words col-span-1">
            {{ Str::limit(\nl2br(e($sandwich->prix)), 150) }}€
        </p>
    </div>
</div>
