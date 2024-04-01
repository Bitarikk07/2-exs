@extends('layout.app')

@section('title', 'Create New Item')

@section('content')
    <div class=" m-auto">
        @include('include.header')
        @if ($listing ?? false)
        @else
            @include('rin.include.create-page')
        @endif
        @include('include.footer')
    </div>
    <script>
        // Найти все элементы с классом colectDiv и добавить для них обработчик событий
        var colectDivs = document.querySelectorAll('.colectDiv');
        colectDivs.forEach(function(element) {
            element.addEventListener('click', function() {
                // Снять выделение со всех других элементов
                colectDivs.forEach(function(el) {
                    if (el !== element) {
                        el.classList.remove('border-bluend');
                    }
                });
                // Выделить текущий элемент
                this.classList.toggle('border-bluend');
            });
        });
    </script>
    {{-- <script>
        var colectDivs = document.querySelectorAll('.colectDiv');
        colectDivs.forEach(function(element) {
            element.addEventListener('click', function() {
                this.classList.toggle('border-[#5ea0e1]');
            });
        });
    </script> --}}
    <script src="{{ asset('js/drop.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
