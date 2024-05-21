<div class="bg-base-100 min-h-screen min-w-full">
    <div class="card card-compact divide-y-2 divide-base-300 w-full md:w-96 rounded-none bg-base-100 border-0">
        <div class="card-body">
            <div class="flex gap-2">
                <input type="text" class="input input-bordered flex-1" placeholder="Pencarian chat">
                <label for="drawer" class="btn btn-circle">
                    <x-tabler-chevron-left class="size-5" />
                </label>
            </div>
        </div>
        @forelse ($chats as $chat)
            <div class="card-body flex flex-row justify-start hover:bg-base-200 cursor-pointer items-center group">
                <div class="flex flex-1 gap-3" wire:click="$dispatch('selectChat', {chat: {{ $chat->id }}})">
                    <div class="flex items-center">
                        <div class="avatar placeholder">
                            <div class="w-9 rounded-full bg-base-300">
                                {{ $chat->tujuan?->name[0] ?? '' }}
                                {{-- <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" /> --}}
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col flex-1">
                        <div class="font-bold line-clamp-1">{{ $chat->tujuan?->name }}</div>
                        <div class="text-xs line-clamp-1 opacity-50">
                            {{ $chat->pesans?->last()->pesan ?? '...' }}
                        </div>
                    </div>
                </div>
                <div class="flex-none">
                    <button class="btn btn-xs btn-square opacity-0 group-hover:opacity-100"
                        wire:click="deleteChat({{ $chat->id }})">
                        <x-tabler-trash class="size-4" />
                    </button>
                </div>
            </div>
        @empty
            <div class="card-body flex min-h-screen">
                <div class="flex flex-col flex-1 items-center justify-center">
                    <div class="flex flex-col p-10 text-center gap-6">
                        <p class="opacity-50">Hai. kamu belum mulai chat dengan orang lain. klik tombol dibawah untuk
                            mulai chat</p>
                        <button class="btn btn-primary" wire:click="$dispatch('createChat')">
                            <x-tabler-plus class="size-5" />
                            <span>Mulai chat</span>
                        </button>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
</div>
