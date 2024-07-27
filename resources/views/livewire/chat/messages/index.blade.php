<div class="flex flex-col h-full overflow-x-auto mb-4">
    <div class="flex flex-col h-full">
            @foreach($messages as $key => $message)
                @livewire('chat.messages.message' , ['message' => $message] ,key($key))
            @endforeach
    </div>
</div>
