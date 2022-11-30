<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    @if(session()->has('aviso'))
        {{session()->get('aviso')}}
    @elseif($errors->any())
        @foreach($errors->all() as $error)
            {{'Preencha o formulario corretamente.'}}
        @endforeach
    @endif
</div>