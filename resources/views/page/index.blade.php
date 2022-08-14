@extends('layout.app')

@section('title')
    Page
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Page</h1>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>Page</h4>
                <button class="btn fa fa-plus ml-auto" onclick="addForm()"></button>
              </div>

              <div class="card-body">
                <table class="table table-striped" style="width: 100%" id="tableID">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 5%">No.</th>
                      <th class="text-center">Nama</th>
                      <th class="text-center" style="width: 15%">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>test</td>
                      <td class="text-center">
                        <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
      </div>
    @includeIf('page.form')

@endsection

@push('script')
    <script>
      $(document).ready( function () {
        $('#tableID').DataTable();
    } );

      function addForm(){
        $('#modalForm').modal('show')
      }
    </script>
@endpush