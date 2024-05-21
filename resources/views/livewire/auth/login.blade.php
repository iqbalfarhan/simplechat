<div class="card max-w-sm">
    <form class="card-body" wire:submit="login">
        <h3 class="card-title">Login</h3>
        <div class="py-4 space-y-2">
            <input type="email" class="input input-bordered w-full" placeholder="Email address" autocomplete="email"
                wire:model="email">
            <input type="password" class="input input-bordered w-full" placeholder="Password" wire:model="password">
        </div>
        <div class="card-actions">
            <button class="btn btn-primary">
                <x-tabler-login class="size-5" />
                <span>Login</span>
            </button>
        </div>
    </form>
</div>
