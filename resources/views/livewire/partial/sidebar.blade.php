<div class="bg-base-100 w-96 h-screen min-w-full">
    <div class="flex flex-col h-screen scrollbar-hide card-divider">
        <div class="card border-0 rounded-none flex-none border-b-2 border-base-300">
            <div class="card-body p-2">
                <div class="flex gap-2">
                    <input type="text" class="input input-bordered flex-1" placeholder="Pencarian chat">
                    <button class="btn btn-circle" wire:click="$dispatch('createChat')">
                        <x-tabler-plus class="size-5" />
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-1 overflow-y-auto">
            <div class="card card-compact card-divider rounded-none bg-base-100 border-0">

                @forelse ($chats as $chat)
                    <a href="{{ route('chat.show', $chat) }}" @class([
                        'card-body',
                        'bg-base-200/60' =>
                            Route::is('chat.show') && request()->route('chat')->id == $chat->id,
                    ]) wire:navigate>
                        <div class="flex gap-3">
                            <div class="flex-none">
                                <div class="avatar placeholder">
                                    <div class="w-9 rounded-full bg-base-300">
                                        {{ $chat->tujuan?->name[0] ?? '' }}
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1">
                                <div class="font-bold line-clamp-1">{{ $chat->tujuan?->name }}</div>
                                <div class="text-xs line-clamp-1 opacity-50">
                                    {{ $chat->pesans?->last()->pesan ?? '...' }}
                                </div>
                            </div>
                            <div class="flex-none"></div>
                        </div>
                    </a>
                @empty
                    <div class="card-body">
                        <div class="flex flex-col flex-1 items-center justify-center">
                            <div class="flex flex-col p-10 text-center gap-6">
                                <p class="opacity-50">Hai. kamu belum mulai chat dengan orang lain. klik tombol dibawah
                                    untuk
                                    mulai chat</p>
                                <button class="btn btn-primary" wire:click="$dispatch('createChat')">
                                    <x-tabler-plus class="size-5" />
                                    <span>Mulai chat</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforelse

                <div></div>
            </div>
        </div>
        <div class="navbar flex-none border-t-2 border-base-300 gap-3">
            <div class="flex-none">
                <button class="btn btn-circle" wire:click="$dispatch('logout')">
                    <x-tabler-power class="size-6" />
                </button>
            </div>
            <div class="flex-1 flex flex-col items-start">
                <div class="font-bold line-clamp-1">{{ $user->name }}</div>
                <div class="text-xs line-clamp-1 opacity-50">
                    {{ $user->email }}
                </div>
            </div>
            <div class="flex-none">
                <label for="drawer" class="btn btn-circle btn-ghost">
                    <x-tabler-chevron-left class="size-6" />
                </label>
            </div>
        </div>
    </div>
</div>
