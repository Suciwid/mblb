@extends('layouts.master')
<title>iPOS MBLB Kategori</title>
@section('content')


<!--tabel kategori-->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><b>Tabel Data Kategori</b></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div id="success_message"></div>
        <!-- <h6 class="m-0 font-weight-bold text-primary">Tabel Data Produk</h6> -->
            <form>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addKategori" style="float: right;">Tambah Kategori <i class="fa fa-plus"></i>
            </button>
            </form>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="dataTable_length">
                            <label>Show entries <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option></select> </label></div></div>
                    <div class="col-sm-12 col-md-6" >
                        <div id="dataTable_filter" class="dataTables_filter" style="float: right;">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                    </div></div></div>
                    <div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr role="row">
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 60px;">Kategori</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 146px;">Nama Kategori</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 70px;">Status</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 66px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                     
                   </tbody>
                </table></div></div>
                <div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate" style="float: right"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
            </div>
        </div>
    </div>
</div>

<!-- modal tambah kategori-->
<div class="modal fade" id="addKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" >
        <form>
            <ul id="saveform_errList"></ul>
          {{-- <div class="form-group">
           <label for="id_kategori">ID Kategori</label>
          <input type="number" class="form-control id_kategori" aria-describedby="emailHelp" placeholder="" name="id_kategori">
          </div> --}}
          <div class="form-group">
          <label for="nama_kategori">Nama Kategori</label>
          <input type="text" class="form-control nama_kategori"  placeholder="" name="nama_kategori">
          </div>
          <div class="form-group">
          <label for="status">Status</label>
          <input type="number" class="form-control status"  placeholder="" name="status">
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary mt-3" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary mt-3 addKategori" >Simpan</button>
          </div>
          </form>
        </div>    
        </div>
      </div>
    </div>
  
    <!--modal edit data-->
  <div class="modal fade" id="editKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
          <form>
              <ul id="updateform_errList"></ul>
              <input type="hidden" id="id_kategori" name="id_kategori" >
            <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" class="form-control" id="nama_kategori" placeholder="" name="nama_kategori">
            </div>
            <div class="form-group">
            <label for="status">status</label>
            <textarea type="number" class="form-control" id="status" placeholder="" name="status"></textarea>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary mt-3" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-success mt-3 updateKategori" >Simpan</button>
            </div>
            </form>
          </div>    
          </div>
        </div>
      </div>

   <!--modal delete data-->
   <div class="modal fade" id="deleteKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Menghapus Data?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" >
        <form>
           
             <input type="hidden" id="deleteKategoriId">
             <p>Data yang sudah dihapus tidak bisa dilihat kembali.</p>
             <div class="modal-footer">
                <button type="button" class="btn btn-secondary mt-3" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger mt-3 deleteKategoriButton" >Hapus</button>
                </div>
          </form>
        </div>    
        </div>
      </div>
    </div>




@endsection

@section('scripts')
    <script>

        $(document).ready(function () {

        //fetching data
        fetchkategori();
        function fetchkategori(){
            $.ajax({
                type: "GET",
                url: "{{route('fetchkategori')}}",
                dataType: "json",
                success: function (response) {
                    // console.log(response.kategori)
                    $('tbody').html("");
                $.each(response.kategoris, function (key, item) { 
                        $('tbody').append('<tr>\
                            <td>'+item.id+'</td>\
                            <td>'+item.nama_kategori+'</td>\
                            <td>'+item.status+'</td>\
                            <td>\
                            <form>\
                            <button type="submit" value ="'+item.id+'" class="btn btn-success editButton" data-toggle = "modal" data-target="#editKategori"><i class="fa fa-edit"></i></button>\
                            <button type="submit" value ="'+item.id+'" class="btn btn-danger deleteButton"><i class="fa fa-trash"></i></button>\
                            </form>\
                            </td>\
                            </tr>');
                }); 
                    
                }
            });
        }
        //delete data
        $(document).on('click', '.deleteButton', function (e) {
            e.preventDefault();

            // $(this).text("Deleting");
            var id = $(this).val();
            $('#deleteKategoriId').val(id);
            $('#deleteKategori').modal('show');
        });

        $(document).on('click', '.deleteKategoriButton', function (e) {
            e.preventDefault();

            var id = $('#deleteKategoriId').val();

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          
        });

        $.ajax({
            type: "DELETE",
            url: "{{route('deleteKategori')}}/"+id,
            success: function (response) {
                console.log(response);
                $('#success_message').addClass('alert alert-success');
                $('#success_message').text(response.message);
                $('#deleteKategori').modal('hide');
                // $('#deleteKategoriButton').text("Hapus");
                fetchkategori();
            }
        });
            
        });

        //edit data kategori
        $(document).on('click', '.editButton', function (e) {
            e.preventDefault();
            var id = $(this).val();

            $.ajax({
                type: "GET",
                url: "{{route('editKategori')}}/"+id,
                success: function (response) {
                    if(response.status == 404){
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-danger');
                        $('#success_message').text(response.message);
                    }

                    else
                    {
                        $('#id_kategori').val(id);
                        $('#nama_kategori').val(response.kategori.nama_kategori);
                        $('#status').val(response.kategori.status);
                    }
                }
            });
            
        });

        //mengirim update data kategori
        $(document).on('click', '.updateKategori', function (e) {
            e.preventDefault();
            // $(this).text('Updating');
            var id = $('#id_kategori').val();
            var data = {
                'nama_kategori' : $('#nama_kategori').val(),
                'status' : $('#status').val(),
            }
            
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

            $.ajax({
                type: "PUT",
                url: "{{route('updateKategori')}}/"+id,
                data: data,
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    if(response.status == 400){
                        $('#updateform_errList').html("");
                        $('#updateform_errList').addClass('alert alert-danger');
                        $.each(response.errors, function (key, err_values) { 
                        $('#updateform_errList').append('<li>' +err_values+ '</li>');
                        });
                        // $('.updateKategori').text('Update');
                    }
                    else if(response.status == 404)
                    {
                        $('#updateform_errList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        // $('.updateKategori').text('Update');
                    }
                    else 
                    {
                        $('#updateform_errList').html("");
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);

                        $('#editKategori').modal('hide');
                        // $('.updateKategori').text('Update');
                        fetchkategori();
                        
                    }
                }
            });

            
        });


        //tambah data kategori
        $(document).on('click', '.addKategori', function (e) {
            e.preventDefault();
            
            var data = {
                'nama_kategori' : $('.nama_kategori').val(),
                'status' : $('.status').val(),

            }
            // console.log(data);
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

            $.ajax({
                type: "POST",
                url: "{{route('addKategori')}}",
                data: data,
                dataType: "json",
                success: function (response) {
                    if(response.status == 400){
                $('#saveform_errList').html("");
                $('#saveform_errList').addClass('alert alert-danger');
                $.each(response.errors, function (key, err_values) { 
                $('#saveform_errList').append('<li>' +err_values+ '</li>');
                        });
                    }
                    else
                    {
                        $('#saveform_errList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#addKategori').modal('hide');
                        $('#addKategori').find('input').val("");
                        fetchkategori();
                        
                }
                }
            })
            });
        });





       
            
            
       
    </script>
@endsection