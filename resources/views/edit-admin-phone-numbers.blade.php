@extends('layouts.app')

@section('content')
    @livewire('edit-admin-phone-numbers-livewire', ['id' => $id])
@endsection
