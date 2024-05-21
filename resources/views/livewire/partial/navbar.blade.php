<div class="navbar bg-base-100">
    <div class="navbar-start">
        <label for="drawer" class="btn btn-circle btn-ghost">
            <x-tabler-menu class="size-6" />
        </label>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost text-xl">{{ $title ?? config('app.name') }}</a>
    </div>
    <div class="navbar-end">
        <button wire:click="$dispatch('createChat')" class="btn btn-ghost btn-circle">
            <x-tabler-plus class="size-6" />
        </button>
    </div>
</div>
