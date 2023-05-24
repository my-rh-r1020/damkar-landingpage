@extends('layouts.main')

{{-- Import bodyMain From layouts/main.blade.php --}}
@section('bodyMain')

@include('components.navbar')
@include('links.profile.listdanru')
@include('components.footer')