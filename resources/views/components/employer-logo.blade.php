@props(['employer', 'width' => 90])

{{-- {{ dd($employer->logo) }} --}}

<img src="{{ asset($employer->logo) }}" alt="LOGO" class="rounded-xl" width="{{ $width }}" />
