
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input type="text" value="{{ old('nome') }}" placeholder="Nome" name='nome' class={{ $classe }}>
    <br>
    <input type="text" value="{{ old('telefone') }}" placeholder="Telefone" name="telefone" class={{ $classe }}>
    <br>
    <input type="text" value="{{ old('email') }}" placeholder="E-mail" name="email" class={{ $classe }}>
    <br>
    <select class={{ $classe }} name="motivo_contato">
        <option value="1">Qual o motivo do contato?</option>
        <option value="2">Dúvida</option>
        <option value="3">Elogio</option>
        <option value="4">Reclamação</option>
    </select>
    <br>
    <textarea class={{ $classe }} name="mensagem" placeholder="Preencha aqui a sua mensagem">
        @if ( old('mensagem')  != '')
            {{ old('mensagem') }}
        @endif
    </textarea>
    <br>
    <button type="submit" class={{ $classe }}>ENVIAR</button>
</form>
<pre>
    {{ print_r($errors) }}
</pre>
