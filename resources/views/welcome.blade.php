@extends('layout.index')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h5>Compras do Mês de: <span id="mes"></span></h5>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <a href=""
            class="btn"
            data-toggle="modal"
            data-target="#adicionaItem"
            title="Adicionar Item">
              <i class="fa-solid fa-circle-plus fa-2xl"></i>
          </a>
                  
        </h3>

      </div>
      <div class="card-body">
        Minha lista
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
{{-- /.content-wrapper --}}


{{-- MODAL adicionar produtos   --}}
<div class="modal fade" id="adicionaItem">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Novo item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST" class="form-horizontal">
        {{method_field('PUT')}}
        {{ csrf_field()}}
        <div class="modal-body">

          <div class="form-group">
            <label for="campo">Campo</label>
            <select id="campo" name="campo_um" class="form-control select2bs4" style="width: 100%;">
              <option>Selecione um campo</option>
              <option>Feijão</option>
              <option>Arroz</option>
            </select>
          </div>
          <div class="form-group row">
            <div class="col-sm-6">                                                                       
              <label for="user">Quantidade</label>
              <input type="number" class="form-control" min="0" id="edit_name_setor" name="name_setor" required>
            </div>
            <div class="col-sm-6">
              <label for="user">Preço</label>
              <input type="number" class="form-control" step="0.01" min="0.01" id="edit_name_setor" name="name_setor" required>
            </div>
          </div>
          {{-- <div class="form-group">
            <label for="campo">Categoria</label>
              <select id="campo" name="campo_um" class="form-control select2bs4" style="width: 100%;">
                <option>Selecione um campo</option>
                <option>Feijão</option>
                <option>Arroz</option>
              </select>
          </div> --}}

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