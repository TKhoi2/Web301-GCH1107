@include('header')
{{--  than web --}}
<main class="body flex justify_center">
    <div class="main_content">
        {{-- Post --}}
        @for ($i = 0; $i < 10; $i++)
            @include('Posts')
        @endfor
    </div>
</main> 
@include('footer')