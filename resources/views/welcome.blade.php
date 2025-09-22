{{-- resources\views\welcome.blade.php --}}
@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
    <livewire:counter />
   <livewire:sender-component />
   <livewire:receiver-component />
@endsection
