@props(['errors'])

@if ($errors->any())
<div class="alert-content ml-4">
            <div class="alert-title font-semibold text-lg text-red-800">
                {{ __('Whoops, something went wrong') }}
            </div>
            <div class="alert-description text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        </div>
    </div>
@endif