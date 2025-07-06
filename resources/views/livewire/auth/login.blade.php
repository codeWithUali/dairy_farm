<div class="container d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="card shadow p-4 w-100" style="max-width: 350px;">
        <h2 class="text-center mb-4">Login</h2>
        @if($error)
            <div class="alert alert-danger text-center">{{ $error }}</div>
        @endif
        <form wire:submit.prevent="login">
            <div class="mb-3">
                <input type="text" wire:model="user_code" maxlength="4" minlength="4" pattern="\\d{4}" class="form-control form-control-lg text-center" placeholder="Enter 4-digit User ID" autofocus required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg w-100">Login</button>
        </form>
    </div>
</div>
