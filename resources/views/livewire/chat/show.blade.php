<div class="flex flex-col drawer-content h-screen">
    @livewire('chat.navbar', ['chat' => $chat])

    <div class="flex flex-1 overflow-hidden">
        <div class="flex flex-col flex-1">
            <div class="flex-1 p-5 overflow-auto scrollbar-hide">
                @forelse ($datas as $data)
                    <div @class([
                        'chat',
                        'chat-end' => $data->is_me,
                        'chat-start' => !$data->is_me,
                    ])>
                        <div class="chat-image avatar placeholder hidden md:flex">
                            <div class="w-10 rounded-full bg-base-300">
                                <div class="">{{ $data->user->name[0] }}</div>
                            </div>
                        </div>
                        <div class="chat-bubble">{{ $data->pesan }}</div>
                    </div>
                @empty
                    <div class="text-center opacity-50 flex justify-center items-center h-full max-w-sm mx-auto p-10">
                        Belum ada chat yang dapat ditampilkan, mulai chat dengan mengirimkan sesuatu.
                    </div>
                @endforelse
            </div>
            <div class="flex-none">
                @livewire('partial.chat')
            </div>
        </div>

        <div @class([
            'menu border-l-2 border-base-300 bg-base-100 transition-all overflow-hidden',
            'w-80' => $sidebaruserinfo,
            'w-0 p-0' => !$sidebaruserinfo,
        ])>
            <div class="flex flex-col items-center gap-4 my-4">
                <input type="checkbox" id="userinfo" class="hidden" wire:model.live="sidebaruserinfo">
                <div class="avatar placeholder">
                    <div class="w-24 bg-base-200 rounded-full">
                        <span class="text-xl">{{ $tujuan->name[0] }}</span>
                    </div>
                </div>
                <div class="text-center">
                    <div class="text-lg font-bold">{{ $tujuan->name }}</div>
                    <div class="text-md">{{ $tujuan->email }}</div>
                </div>

                <button class="btn btn-sm btn-error" wire:click="delete">
                    <x-tabler-trash class="size-5" />
                    <span>Hapus chat ini</span>
                </button>
            </div>
        </div>
    </div>
</div>
