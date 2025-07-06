<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Milk History</h2>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle text-center">
            <thead class="table-light">
                <tr>
                    <th>Date</th>
                    <th>Animal ID</th>
                    <th>Animal Name</th>
                    <th>Milk (L)</th>
                    <th>User</th>
                </tr>
            </thead>
            <tbody>
                @forelse($records as $rec)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($rec->datetime)->format('d M Y H:i') }}</td>
                        <td>{{ $rec->animal_id }}</td>
                        <td>{{ $rec->animal->name ?? '-' }}</td>
                        <td>{{ $rec->milk }}</td>
                        <td>{{ $rec->user->name ?? '-' }}</td>
                    </tr>
                @empty
                    <tr><td colspan="5">No records found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
