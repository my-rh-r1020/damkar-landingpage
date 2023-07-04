{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div class="w-full lg:w-7/12">
    <div class="mb-10">
        <h3 class="main-content-header">Detail Danru</h3>
    </div>
    <form>
        <div class="mb-6">
            <label for="nama_lengkap" class="main-form-label">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ $danru->nama_lengkap }}" class="main-form-input" placeholder="" disabled readonly>
        </div>
        <div class="mb-6">
            <label for="regu_id" class="main-form-label">Kategori Regu</label>
            <input type="text" id="regu_id" name="regu_id" value="{{ $danru->regu->nama_regu }}" class="main-form-input" placeholder="" disabled readonly>
        </div>
        <div class="mb-12">
            <label class="block mb-2 text-sm md:text-base xl:text-lg font-medium text-gray-900" for="avatar">Avatar</label>
            <div class="border border-gray-200 py-4">
                <img class="w-[50%] rounded-full px-8 mx-auto" src="/assets/images/profile/{{ $danru->avatar }}" alt="Rounded avatar">
            </div>
        </div>
        <div class="mb-4">
            <a href="{{ route('dashboard.danru') }}" class="main-gray-btn">Kembali</a>
        </div>
    </form>
</div>

@endsection