<div class="navbar bg-base-100">
    <div class="navbar-start">
        <a href="{{ route('home') }}" class="btn btn-circle btn-ghost" wire:navigate>
            <x-tabler-x class="size-6" />
        </a>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost text-xl">{{ $chat?->tujuan->name }}</a>
    </div>
    <div class="navbar-end">
        <label for="userinfo" class="btn btn-ghost btn-circle">
            <x-tabler-layout-sidebar-left-collapse class="size-6" />
        </label>
    </div>
</div>
