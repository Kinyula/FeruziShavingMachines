@extends('layouts.app')

@section('content')
    @livewire('edit-products-livewire', ['id' => $id])
@endsection
