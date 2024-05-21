<div class="h-full">
    @isset($chat)
        <div class="flex h-full">
            <div class="p-5 flex-1">
                <input type="checkbox" id="userinfo" class="hidden" wire:model.live="sidebaruserinfo">
                @foreach ($datas as $data)
                    <div @class([
                        'chat',
                        'chat-end' => $data->is_me,
                        'chat-start' => !$data->is_me,
                    ])>
                        <div class="chat-image avatar placeholder">
                            <div class="w-10 rounded-full bg-base-300">
                                <div class="">{{ $data->user->name[0] }}</div>
                            </div>
                        </div>
                        <div class="chat-bubble">{{ $data->pesan }}</div>
                    </div>
                @endforeach
            </div>
            <ul @class([
                'menu border-l-2 border-base-300 min-h-full bg-base-100 transition-all',
                'w-80' => $sidebaruserinfo,
                'w-0 p-0' => !$sidebaruserinfo,
            ])>
                <li><a href="">dfasd</a></li>
            </ul>
        </div>
    @else
        <div class="text-center opacity-50 flex justify-center items-center h-full max-w-sm mx-auto p-10">
            Kamu belum memilih chat. pilih chat di panel sebelah kiri untuk membuka chat.
        </div>
    @endisset
</div>
