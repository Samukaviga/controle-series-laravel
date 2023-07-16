
<x-layout title="Series">

            <a class="btn btn-dark mb-2" href="series/criar">Adicionar</a>
            <ul class="list-group">
                @foreach($series as $serie)
                
                    <li class="list-group-item"> {{ $serie->nome; }}</li>
                
                @endforeach

              <!--  @{{ nome }}  // O blade ignoraria e exibiria --> 

            </ul>

</x-layout>