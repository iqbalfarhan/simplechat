<div class="navbar bg-base-100">
    @if ($chat)
        <div class="navbar-start">
            <button class="btn btn-circle btn-ghost" wire:click="removeChat">
                <x-tabler-arrow-left class="size-5" />
            </button>
        </div>
        <div class="navbar-center">
            <a class="btn btn-ghost text-xl">{{ $title ?? config('app.name') }}</a>
        </div>
        <div class="navbar-end">
            <label for="userinfo" class="btn btn-ghost btn-circle">
                <x-tabler-layout-sidebar-left-collapse class="size-5" />
            </label>
        </div>
    @else
        <div class="navbar-start">
            <label for="drawer" class="btn btn-circle btn-ghost">
                <x-tabler-chevron-right class="size-5" />
            </label>
        </div>
        <div class="navbar-center">
            <a class="btn btn-ghost text-xl">{{ $title ?? config('app.name') }}</a>
        </div>
        <div class="navbar-end">
            <button wire:click="$dispatch('createChat')" class="btn btn-ghost btn-circle">
                <x-tabler-plus class="size-5" />
            </button>
        </div>
    @endif
</div>
