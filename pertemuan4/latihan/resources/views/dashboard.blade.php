<x-dashboard-layout>
    <x-slot:title>Dashboard</x-slot:title>

    <div class="bg-white rounded-lg shadow p-6">
        <h1 class="text-2xl font-bold text-gray-900 mb-2">Selamat datang di Dashboard</h1>
        <p class="text-gray-600">Halo, {{ auth()->user()->name ?? 'Pengguna' }}! Gunakan menu di atas untuk mengelola postingan.</p>
    </div>
</x-dashboard-layout>
