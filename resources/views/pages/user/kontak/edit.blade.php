{{-- Dashboard Layout --}}
@extends('components.pages.user.dashboard.main')

@section('dashboardBody')

<div>
    <form action="{{ route('contact.update',$contact->id) }}" method="post">
        @csrf
        @method('PUT')

        <h3 class="main-content-header mb-8">Profil Kantor</h3>
        <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-4">
            <div class="mb-6">
                <label for="alamat" class="main-form-label">Alamat Kantor</label>
                <input type="text" id="alamat" name="alamat" value="{{ $contact->alamat }}" class="main-form-input" placeholder="">
                @error('alamat')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="main-form-label">Email</label>
                <input type="text" id="email" name="email" value="{{ $contact->email }}" class="main-form-input" placeholder="">
                @error('email')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="tlp" class="main-form-label">Telepon Kantor</label>
                <input type="text" id="tlp" name="tlp" value="{{ $contact->tlp }}" class="main-form-input" placeholder="">
                @error('tlp')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="nohp" class="main-form-label">Nomor HP</label>
                <input type="text" id="nohp" name="nohp" value="{{ $contact->nohp }}" class="main-form-input" placeholder="">
                @error('nohp')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <hr class="my-4">
        <h3 class="main-content-header mb-8">Media Sosial</h3>
        <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-4">
            <div class="mb-6">
                <label for="fb_link" class="main-form-label">Facebook</label>
                <input type="text" id="fb_link" name="fb_link" value="{{ $contact->fb_link }}" class="main-form-input" placeholder="">
                @error('fb_link')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="ig_link" class="main-form-label">Instagram</label>
                <input type="text" id="ig_link" name="ig_link" value="{{ $contact->ig_link }}" class="main-form-input" placeholder="">
                @error('ig_link')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="youtube_link" class="main-form-label">Youtube</label>
                <input type="text" id="youtube_link" name="youtube_link" value="{{ $contact->youtube_link }}" class="main-form-input" placeholder="">
                @error('youtube_link')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="medsos_link1" class="main-form-label">Medsos 4</label>
                <input type="text" id="medsos_link1" name="medsos_link1" value="{{ $contact->medsos_link1 }}" class="main-form-input" placeholder="">
                @error('medsos_link1')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="medsos_link2" class="main-form-label">Medsos 5</label>
                <input type="text" id="medsos_link2" name="medsos_link2" value="{{ $contact->medsos_link2 }}" class="main-form-input" placeholder="">
                @error('medsos_link2')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <hr class="my-4">
        <h3 class="main-content-header mb-8">Tautan Resmi</h3>
        <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-4">
            <div class="mb-6">
                <label for="link_tautan1" class="main-form-label">Website Tanjungpinang</label>
                <input type="text" id="link_tautan1" name="link_tautan1" value="{{ $contact->link_tautan1 }}" class="main-form-input" placeholder="">
                @error('link_tautan1')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="link_tautan2" class="main-form-label">Tautan 2</label>
                <input type="text" id="link_tautan2" name="link_tautan2" value="{{ $contact->link_tautan2 }}" class="main-form-input" placeholder="">
                @error('link_tautan2')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="link_tautan3" class="main-form-label">Tautan 3</label>
                <input type="text" id="link_tautan3" name="link_tautan3" value="{{ $contact->link_tautan3 }}" class="main-form-input" placeholder="">
                @error('link_tautan3')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
        
        <div class="mt-4">
            <button type="submit" class="main-blue-btn">Simpan Pembaruan</button>
        </div>
    </form>
</div>

@endsection