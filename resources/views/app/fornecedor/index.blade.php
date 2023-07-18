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

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>  
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>  
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>  
@endif