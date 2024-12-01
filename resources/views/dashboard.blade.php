<x-layout title="Dashboard">
    <div class="app-content">
        <table>
            <thead>
                <tr>
                    <td>User ID</td>
                    <td>Nama</td>
                    <td>Email</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $user->links() }}
    </div>
</x-layout>
