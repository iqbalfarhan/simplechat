<form class="navbar gap-2 bg-base-100 border-t-2 border-base-300" wire:submit="send">
    <div class="flex-1">
        <input type="text" class="input input-bordered w-full rounded-full" placeholder="Tulis pesan disini"
            wire:model="message">
    </div>
    <div class="flex-none">
        <button class="btn btn-circle btn-primary">
            <x-tabler-send class="size-5" />
        </button>
    </div>
</form>
