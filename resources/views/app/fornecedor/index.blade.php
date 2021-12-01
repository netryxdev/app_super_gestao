<h3> Fornecedor</h3>

{{-- Aqui fica o comentário que será descartado pelo interpretador do blade --}}

{{-- @unless executa se o retorno for false --}}



@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[0]['cnpj']}}
@endisset


