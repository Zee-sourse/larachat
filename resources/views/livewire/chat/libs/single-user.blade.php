<div class="flex flex-col mt-4 -mx-2 ">
    <a href="{{route('rooms.enter',$item->slug)}}" class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
        <div class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full">
            <img src="{{$item->avatar()}}" class="rounded-full" alt="">
        </div>
        <div class="ml-2 text-sm font-semibold">{{$item->name}}</div>
    </a>
</div>
