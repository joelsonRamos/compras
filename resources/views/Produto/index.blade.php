@extends('layout.index')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h5>Adicioar Produtos</h5>
                @if (session('status'))
                <h5 class="alert alert-warning">{{session('status')}}</h5>
                @endif
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href=""
                        class="btn"
                        data-toggle="modal"
                        data-target="#novosProdutos"
                        title="Adicionar Item">
                            <i class="fa-solid fa-circle-plus fa-2xl"></i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                      <thead>
                        <tr>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($produtos as $keys=>$item )
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$item['nome']}}</td>
                          <td>{{$item['preco']}}</td>
                          <td>{{$item['quantidade']}}</td>
                          <td>
                            <button  class="btn btn-success  m-1 btn-sm" 
                                data-mytitle=""
                                data-toggle="modal" title="Editar " data-target="#editcampo" >
                              <i class="fa-solid fa-edit nav-icon"></i>
                            </button>
                            <button  class="btn btn-danger  m-1 btn-sm" 
                                data-toggle="modal" title="Deletar ">
                                <i class="fa-solid fa-trash nav-icon"></i>
                            </button>
                          </td>
                        </tr>
                        @endforeach ()
                        
                        
                            
                        

                      </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
    </div>
    {{-- MODAL adicionar produtos   --}}
<div class="modal fade" id="novosProdutos">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Novo Produto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/Produto/store" method="post" class="form-horizontal" data-netlify="true">
          {{-- {{ csrf_field()}} --}}
          @csrf
          {{-- <input name="form-name" value="Netlify Rocks" type="hidden" /> --}}
          <div class="modal-body">
  
            <div class="form-group">
                <label for="user">Nome do Produto</label>
                <input type="text" class="form-control" min="0" id="nome_produto" name="nome" required>
            </div>
            <div class="form-group row">
              <div class="col-sm-6">                                                                       
                <label for="user">Quantidade</label>
                <input type="number" class="form-control" min="0" id="quantidade_produto" name="quantidade" required>
              </div>
              <div class="col-sm-6">
                <label for="user">Preço</label>
                <input type="number" class="form-control" step="0.01" min="0.01" id="preco_produto" name="preco" required>
              </div>
            </div>

  
          </div>
      
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary btn-sm">Salavar item</button>
          </div>
      
        </form>
      
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

@endsection