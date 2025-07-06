<div class="container d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="w-100" style="max-width: 400px;">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <button wire:click="logout" class="btn btn-outline-danger btn-sm">Logout</button>
            <a href="{{ route('milk.history') }}" class="btn btn-outline-secondary btn-sm">History</a>
        </div>
        <h2 class="text-center mb-4">Record Milk</h2>
        @if($error)
            <div class="alert alert-danger text-center">{{ $error }}</div>
        @endif
        @if($step == 1)
            <form wire:submit.prevent="nextStep">
                <div class="mb-3">
                    <input type="number" wire:model="animal_id" class="form-control form-control-lg text-center" placeholder="Enter Animal ID" required autofocus>
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-100">Next</button>
            </form>
        @elseif($step == 2)
            <form wire:submit.prevent="save">
                <div class="mb-4 text-center">
                    <button type="button" class="btn btn-secondary btn-lg me-3" wire:click="$set('milk', max(0, $wire.milk-1))" style="width:60px; height:60px; font-size:2rem;">-</button>
                    <span class="display-3 align-middle" style="min-width:80px; display:inline-block;">{{ $milk }}</span>
                    <button type="button" class="btn btn-secondary btn-lg ms-3" wire:click="$set('milk', $wire.milk+1)" style="width:60px; height:60px; font-size:2rem;">+</button>
                </div>
                <button type="submit" class="btn btn-success btn-lg w-100 mb-3">Save</button>
            </form>
        @endif
    </div>
</div>
