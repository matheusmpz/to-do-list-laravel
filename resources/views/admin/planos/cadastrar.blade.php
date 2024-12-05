@extends('layout.site')
@section('conteudo')
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-9 mx-auto">
            <h3 class="text-center m-4">Cadastrar Plano</h3>

            <form action="{{ route('planos.salvarCadastro') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="titulo" name="titulo" id="titulo" class="form-control" value="" placeholder="Digite o titulo" autofocus>
                    @error('titulo')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="valor" name='valor' id="valor" class="form-control col-sm-4 valor" value="" placeholder="Digite o valor">
                    @error('valor')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao" class="form-control" rows="5"></textarea>
                    @error('descricao')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button class="btn btn-primary" type="submit">Salvar</button>
                <a class="btn btn-light" href="/admin/planos">Cancelar</a>
            </form>
        </div>
    </div>
</main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"
        integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous">
    </script>
    <!-- Summernote - editor de texto -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/lang/summernote-pt-BR.min.js"></script>
    <!-- JqueryMask - marcara nos campos input -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function () {

            //https://summernote.org/deep-dive/ - Personalizar Toolbar

            $('#descricao').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['picture']]
                ],
                lang: 'pt-BR',
                height: 200, // set editor height

            });

            //https://igorescobar.github.io/jQuery-Mask-Plugin/ - Documentação do Plugin

            $('.valor').mask("#.##0,00", {
                reverse: true
            });

        });
    </script>
@endsection