@extends('layouts.user.app')
@section('conten')
    <x-parts.header>
        <h1 class="text-text-white text-5xl font-bold">Frequently Asked Questions</h1>
    </x-parts-header>
    <article class="px-28 py-24 ">
        @foreach($data as $key => $item)
        <section class="py-7 border-b-2" id="q-{{$item['id_faq']}}">
            <div class="flex justify-between">
                <h2 class="text-xl font-bold">{{$item['question']}}</h2>
                <p onclick="showAnswer(this)" class="font-bold text-xl cursor-pointer" data-id="q-{{$item['id_faq']}}">+</p>
            </div>
            <p hidden class="answer text-text-gray text-xl text-left whitespace-pre-line">
                {{$item['answer']}}
            </p>

        </section>
        @endforeach
    </article>
@endsection
@section('js')
    <script>
        function showAnswer(param) {
            id = param.getAttribute('data-id');
            section = document.getElementById(id);
            answer = section.getElementsByClassName('answer');
            if (answer[0].hidden) {
                answer[0].hidden = false;
                param.innerHTML = '-';
            } else {
                answer[0].hidden = true;
                param.innerHTML = '+';
            }
            
        }

        
    </script>
@endsection