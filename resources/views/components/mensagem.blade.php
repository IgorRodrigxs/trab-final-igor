<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    @if(session()->has('mensagem'))
        {{session()->get('mensagem')}}
    @elseif($errors->any())
        @foreach($errors->all() as $error)
            {{'Formulario não pode ser vazio.'}}
        @endforeach
    @endif
</div>
