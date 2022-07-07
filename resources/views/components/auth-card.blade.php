<div class="min-h-screen flex flex-col sm:justify-center items-center pt-8 bg-gray-100" style="margin-top: 100px">
    {{ $logo }}

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Login') }}
    </h2>
    <div class="w-full sm:max-w-md mt-8 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>

