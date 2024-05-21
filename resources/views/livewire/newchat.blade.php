<div>
    <input type="checkbox" class="modal-toggle" @checked($show) />
    <form class="modal" role="dialog" wire:submit="simpan">
        <div class="modal-box max-w-sm">
            <h3 class="font-bold text-lg">Buat chat baru</h3>
            <div class="py-4">
                <input type="text" placeholder="Cari email" class="input input-bordered w-full"
                    wire:model.live="search">

                @isset($search)
                    <ul class="menu">
                        @foreach ($users as $id => $email)
                            <li>
                                <button type="button"
                                    wire:click="setTujuan({{ $id }})">{{ $email }}</button>
                            </li>
                        @endforeach
                    </ul>
                @endisset
            </div>
            <div class="modal-action justify-between">
                <button type="button" wire:click="closeModal" class="btn btn-ghost">Close</button>
                <button class="btn btn-primary">
                    <x-tabler-check class="size-5" />
                    <span>Mulai chat</span>
                </button>
            </div>
        </div>
    </form>
</div>
