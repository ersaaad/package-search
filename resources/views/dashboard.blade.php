<style>
#wrapper {
    width: 500px;
    height: 25px;
}
#dsbd {
    width: 300px;
    float:left;
}
#pkg {
    float:left;
}
</style>

<x-app-layout>
    <x-slot name="header">
        <div id="wrapper">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" id="dsbd">
                <a href="{{ url('/') }}">Home</a>
            </h2>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" id="pkg">
                <a href="{{ url('/parcel') }}">Parcel</a>
            </h2>
        </div>

    </x-slot>



</x-app-layout>
