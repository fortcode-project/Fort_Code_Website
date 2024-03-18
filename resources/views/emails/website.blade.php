<div>
    <div class="bg-primary text-white">
        <h1>Website Clássico Grátis</h1>
    </div>
    <h3>Agradecemos por preencher o formulario</h3>

    <p>Nome Completo: {{$name . " " . $ultimonome}}</p>
    <p>Email: {{$email}}</p>
    <p>Contacto: {{$telefone}}</p>
    <p>Nome da Empresa: {{$company}}</p>
    <p>Email Coorporativo: {{$coorporativo}}</p>
    <p>Representante da Empresa: {{$representante}}</p>
    <p>Tipo de Negócio: {{$negocio}}</p>
    <p>Status da Organização: {{$status}}</p>
    <p>Cliente Primario: {{$organizacao}}</p>
    <p>Industria da Organização: {{$industria}}</p>
    <p>Tempo no mercado: {{$tempo}}</p>
    <p>NIF: {{$nif}}</p>
    <p>Rendimento Medio Mensal: {{$rendimento}}</p>
    <p>Dominio: {{$dominio}}</p>
    <p>Tem um dominio para o website: {{$website}}</p>
    <h5>funcionalidades: </h5>
    @foreach ($funcionalidade as $function)
        <p>{{$function}}</p>
    @endforeach
    <h5>Preços: </h5>
    @foreach ($price as $valor)
        <p>AOA {{$valor}}</p>
    @endforeach
</div>