<x-app-layout title="Home Page">
@slot('styles')
    <style>
        body {
            background-color: brown;
        }
    </style>
@endslot

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2 class="font-weight-bolder">Halaman home</h2>
        </div>
        <div class="col-md-4">
            <h2 class="font-weight-bolder">Kanan</h2>
        </div>
    </div>
</div>

</x-app-layout>