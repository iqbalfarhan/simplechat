<div class="h-full">
    @isset($chat)
        <div class="drawer drawer-open drawer-end h-full">
            <input type="checkbox" id="userinfo" class="drawer-toggle" wire:model="sidebaruserinfo">
            <div class="drawer-content p-5">
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
            <div @class(['drawer-side'])>
                <label for="userinfo" class="drawer-overlay"></label>
                <ul class="menu w-80 border-l-2 border-base-300 h-full bg-base-100">
                    <li><a href="">dfasd</a></li>
                </ul>
            </div>
        </div>
    @else
        <div class="text-center opacity-50 flex justify-center items-center h-full max-w-sm mx-auto p-10">
            Kamu belum memilih chat. pilih chat di panel sebelah kiri untuk membuka chat.
        </div>
    @endisset
</div>
