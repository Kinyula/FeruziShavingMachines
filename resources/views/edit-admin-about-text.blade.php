@extends('layouts.app')

@section('content')
    @livewire('edit-admin-about-text-livewire', ['id' => $id])
@endsection
