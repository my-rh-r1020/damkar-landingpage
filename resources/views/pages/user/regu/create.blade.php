{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="w-full lg:w-7/12">
    <div class="mb-10">
        <h3 class="main-content-header">Form Regu</h3>
    </div>
    <form action="{{ route('regu.store') }}" method="post">
        @csrf
        <div class="mb-6">
            <label for="nama_regu" class="main-form-label">Nama Regu</label>
            <input type="text" id="nama_regu" name="nama_regu" class="main-form-input" placeholder="Nama Regu Baru" required>
        </div>
        <div class="mb-10">
            <label for="lokasi" class="main-form-label">Lokasi Regu</label>
            <input type="text" id="lokasi" name="lokasi" class="main-form-input" placeholder="Lokasi Regu Baru" required>
        </div>
        <div class="flex justify-between mb-4">
            <button type="submit" class="main-blue-btn">Simpan Data</button>
            <a href="{{ route('dashboard.regu') }}" class="main-gray-btn">Kembali</a>
        </div>
    </form>
</div>

@endsection