@extends('layouts.master')
<title>iPOS MBLB Company</title>
@section('content')
    

<!--tabel company-->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><b>Tabel Data Company</b></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div id="success_message"></div>
        <!-- <h6 class="m-0 font-weight-bold text-primary">Tabel Data Produk</h6> -->
            <form>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCompany" style="float: right;">Tambah Company <i class="fa fa-plus"></i>
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
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">No</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px;">User</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 66px;">Perusahaan</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 66px;">Telepon</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 66px;">Alamat</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 66px;">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 70px;">Nama PIC</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 66px;">Hp PIC</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 66px;">Keterangan</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 66px;">Status</th>
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
<div class="modal fade" id="addCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Company</h5>
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
            <label for="id_user">User</label>
            <input type="text" class="form-control id_user"  placeholder="" name="id_user">
          </div>
          <div class="form-group">
            <label for="perusahaan">Perusahaan</label>
            <input type="text" class="form-control perusahaan"  placeholder="" name="perusahaan">
          </div>
          <div class="form-group">
            <label for="telp">Telepon</label>
            <input type="number" class="form-control telp"  placeholder="" name="telp">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea type="text" class="form-control alamat"  placeholder="" name="alamat"></textarea>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control email"  placeholder="" name="email">
          </div>
          <div class="form-group">
            <label for="name_pic">PIC</label>
            <input type="text" class="form-control name_pic"  placeholder="" name="name_pic">
          </div>
          <div class="form-group">
            <label for="hp_pic">HP</label>
            <input type="number" class="form-control hp_pic"  placeholder="" name="hp_pic">
            </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea type="number" class="form-control keterangan"  placeholder="" name="keterangan"></textarea>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <input type="number" class="form-control status"  placeholder="" name="status">
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary mt-3" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary mt-3 addCompanyButton" >Simpan</button>
          </div>
          </form>
        </div>    
        </div>
      </div>
    </div>
  
  <!--modal edit data-->
  <div class="modal fade" id="editCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
             <input type="hidden" id="id_company" name="id_company" >
             <div class="form-group">
                <label for="id_user">User</label>
                <input type="text" class="form-control" id="id_user" placeholder="" name="id_user">
              </div>
              <div class="form-group">
                <label for="perusahaan">Perusahaan</label>
                <input type="text" class="form-control" id="perusahaan" placeholder="" name="perusahaan">
              </div>
              <div class="form-group">
                <label for="telp">Telepon</label>
                <input type="number" class="form-control" id="telp" placeholder="" name="telp">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea type="text" class="form-control" id="alamat" placeholder="" name="alamat"></textarea>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email"  placeholder="" name="email">
              </div>
              <div class="form-group">
                <label for="name_pic">PIC</label>
                <input type="text" class="form-control" id="name_pic" placeholder="" name="name_pic">
              </div>
              <div class="form-group">
                <label for="hp_pic">HP</label>
                <input type="number" class="form-control" id="hp_pic" placeholder="" name="hp_pic">
                </div>
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea type="number" class="form-control" id="keterangan" placeholder="" name="keterangan"></textarea>
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <input type="number" class="form-control" id="status" placeholder="" name="status">
                </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary mt-3" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-success mt-3 updateCompany" >Simpan</button>
          </div>
          </form>
        </div>    
        </div>
      </div>
    </div>

      <!--modal delete data-->
<div class="modal fade" id="deleteCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
           
             <input type="hidden" id="deleteCompanyId">
             <p>Data yang sudah dihapus tidak bisa dilihat kembali.</p>
             <div class="modal-footer">
                <button type="button" class="btn btn-secondary mt-3" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger mt-3 deleteCompanyButton" >Hapus</button>
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
        fetchcompany();
        function fetchcompany(){
            $.ajax({
                type: "get",
                url: "{{route('fetchcompany')}}",
                dataType: "json",
                success: function (response) {
                    $('tbody').html("");
                $.each(response.companies, function (key, item) { 
                        $('tbody').append('<tr>\
                            <td>'+item.id+'</td>\
                            <td>'+item.id_user+'</td>\
                            <td>'+item.perusahaan+'</td>\
                            <td>'+item.telp+'</td>\
                            <td>'+item.alamat+'</td>\
                            <td>'+item.email+'</td>\
                            <td>'+item.name_pic+'</td>\
                            <td>'+item.hp_pic+'</td>\
                            <td>'+item.keterangan+'</td>\
                            <td>'+item.status+'</td>\
                            <td>\
                            <form>\
                            <button type="submit" value ="'+item.id+'" class="btn btn-success editButton" data-toggle = "modal" data-target="#editCompany"><i class="fa fa-edit"></i></button>\
                            <button type="submit" value ="'+item.id+'" class="btn btn-danger deleteButton"><i class="fa fa-trash"></i></button>\
                            </form>\
                            </td>\
                            </tr>');
                });  
                }
            });
        }

         //edit data produk
         $(document).on('click', '.editButton', function (e) {
            e.preventDefault();
            var id = $(this).val(); 
            $.ajax({
                type: "GET",
                url: "{{route('editCompany')}}/"+id,
                success: function (response) {
                    if(response.status == 404){
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-danger');
                        $('#success_message').text(response.message);
                    }

                    else
                    {
                        $('#id_company').val(id);
                        $('#id_user').val(response.company.id_user);
                        $('#perusahaan').val(response.company.perusahaan);
                        $('#telp').val(response.company.telp);
                        $('#alamat').val(response.company.alamat);
                        $('#email').val(response.company.email);
                        $('#name_pic').val(response.company.name_pic);
                        $('#hp_pic').val(response.company.hp_pic);
                        $('#keterangan').val(response.company.keterangan);
                        $('#status').val(response.company.status);
                    }
                }
            });
        });

        //delete data
        $(document).on('click', '.deleteButton', function (e) {
            e.preventDefault();

            $(this).text("Deleting");
            var id = $(this).val();
            $('#deleteCompanyId').val(id);
            $('#deleteCompany').modal('show');
        });

        $(document).on('click', '.deleteCompanyButton', function (e) {
            e.preventDefault();

            var id = $('#deleteCompanyId').val();

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          
        });

        $.ajax({
            type: "DELETE",
            url: "{{route('deleteCompany')}}/"+id,
            success: function (response) {
                console.log(response);
                $('#success_message').addClass('alert alert-success');
                $('#success_message').text(response.message);
                $('#deleteCompany').modal('hide');
                $('#deleteCompanyButton').text("Hapus");
                fetchcompany();
            }
        });
            
        });

        //mengirim update
        $(document).on('click', '.updateCompany', function (e) {
            e.preventDefault();
            $(this).text('Updating');
            var id = $('#id_company').val();
            var data = {
                'id_user' : $('#id_user').val(),
                'perusahaan' : $('#perusahaan').val(),
                'telp' : $('#telp').val(),
                'alamat' : $('#alamat').val(),
                'email' : $('#email').val(),
                'name_pic' : $('#name_pic').val(),
                'hp_pic' : $('#hp_pic').val(),
                'keterangan' : $('#keterangan').val(),
                'status' : $('#status').val(),
            }
            
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

            $.ajax({
                type: "PUT",
                url: "{{route('updateCompany')}}/"+id,
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
                        $('.updateCompany').text('Update');
                    }
                    else if(response.status == 404)
                    {
                        $('#updateform_errList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.updateCompany').text('Update');
                    }
                    else 
                    {
                        $('#updateform_errList').html("");
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);

                        $('#editCompany').modal('hide');
                        $('.updateCompany').text('Update');
                        fetchcompany();
                        
                    }
                }
            });

            
        });
        

        //tambah data
        $(document).on('click', '.addCompanyButton', function (e) {
            e.preventDefault();

            var data = {
                'id_user' : $('.id_user').val(),
                'perusahaan' : $('.perusahaan').val(),
                'telp' : $('.telp').val(),
                'alamat' : $('.alamat').val(),
                'email' : $('.email').val(),
                'name_pic' : $('.name_pic').val(),
                'hp_pic' : $('.hp_pic').val(),
                'keterangan' : $('.keterangan').val(),
                'status' : $('.status').val(),
            }

            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "{{route('addCompany')}}",
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
                        $('#addCompany').modal('hide');
                        $('#addCompany').find('input').val("");
                        fetchcompany();
                    }
            }
        });

        });
    });
</script>
    
@endsection