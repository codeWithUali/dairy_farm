<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Medicine History</h2>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle text-center">
            <thead class="table-light">
                <tr>
                    <th>Date</th>
                    <th>Animal ID</th>
                    <th>Animal Name</th>
                    <th>Type</th>
                    <th>User</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                @forelse($records as $rec)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($rec->created_at)->format('d M Y H:i') }}</td>
                        <td>{{ $rec->animal_id }}</td>
                        <td>{{ $rec->animal->name ?? '-' }}</td>
                        <td>{{ ucfirst($rec->type) }}</td>
                        <td>{{ $rec->user->name ?? '-' }}</td>
                        <td>{{ $rec->comment }}</td>
                    </tr>
                @empty
                    <tr><td colspan="6">No records found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
