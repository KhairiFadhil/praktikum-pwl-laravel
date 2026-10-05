@props(['users'])

<div class="table-responsive">
    <table class="table table-striped table-hover align-middle mb-0">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th class="text-end">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->nim }}</td>
                    <td><span class="badge text-bg-secondary">{{ $user->nama_kelas ?? '-' }}</span></td>
                    <td class="text-end">
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-outline-primary">
                            Edit
                        </a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Yakin ingin menghapus pengguna {{ $user->nama }}?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-4">Belum ada data pengguna.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
