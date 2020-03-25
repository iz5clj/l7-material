@extends('default.baseof')

@section('content')

<div class="d-flex flex-column align-items-center justify-content-center align-items-center bg-white" style="height: 100vh;">
    <div class="border border-dark bg-light px-3 py-2 mb-4">
        <p>{{ $name }} - {{ $version }}</p>
        <p>If you see this div in the middle of the screen, bootstrap has been loaded.</p>
        <p>This website is created by: Michel.</p>
        <p id="jquery-text" class="text-danger">Jquery is not working</p>
        <button type="button" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="top" title="This tooltip will appear on top of the button">
            Hoover this button to check if tooltip is working
        </button>
    </div>
</div>

@endsection
