<h3>Fornecedor</h3>

{{-- isso é um comentário --}}
{{-- abaixo usando a sintaxe php pura --}}
@php
    //comentário
    /*comentário*/
    $a = 'testando variáveis PHP';
    echo "dentro PHP puro variavel $a </br>";
@endphp

<?= $a ?>

{{-- comando @dd para imprimir array no blade --}}
{{-- @dd($fornecedores); --}}
{{-- o @dd interrompe a execução do script --}}

{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>  
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>  
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>  
@endif --}}

{{-- <br>Status atual: <br>
@if($fornecedores[0]['status'] == 'S')
    Status Inativo (1)
@endif

@unless($fornecedores[0]['status'] == 'S')
    Status Inativo (2)
@endunless --}}
{{-- @isset : se as variaveis estão definidas --}}

{{-- @isset($fornecedores)
    <br>
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] }}

    @endisset    
@endisset --}}

<br>
{{-- @empty --}}
@php
/*
    valores entendidos como @empty pelo blade:
    -''
    - 0
    - 0.0
    - null
    - false
    - array() //array vazio
    - variavel não atribuida
*/
@endphp

@isset($fornecedores[0]['cnpj'])
    CNPJ: {{ $fornecedores[0]['cnpj'] }}<br>
    @empty($fornecedores[0]['cnpj'])
        -Vazio<br>
    @endempty    
@endisset    


