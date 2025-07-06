<div class="container d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="w-100" style="max-width: 400px;">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <span></span>
            <button wire:click="logout" class="btn btn-outline-danger btn-sm">Logout</button>
        </div>
        <h2 class="text-center mb-4">Dashboard</h2>
        <a href="{{ route('milk.record') }}" class="btn btn-success btn-lg btn-block mb-4 py-4 w-100" style="font-size:2rem;">Record Milk</a>
        <a href="{{ route('medicine.record') }}" class="btn btn-info btn-lg btn-block py-4 w-100" style="font-size:2rem;">Record Medicine</a>
    </div>
</div>
