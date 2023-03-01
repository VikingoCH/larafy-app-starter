@extends('layouts.app')
@section('content')
    <!-- You are: (shop domain name) -->
    <div class="flex bg-gray-200 justify-center items-center">
        <p class="p-10 font-bold"><i class="fa-solid fa-shop"></i> {{ $shopDomain ?? Auth::user()->name }}</p>

    </div>
    <!-- <livewire:counter />  -->
    @livewire('counter')
    
@endsection
@section('scripts')
    @parent
    <script>
        actions.TitleBar.create(app, { title: 'Here goes navbar' });
    </script>
@endsection
