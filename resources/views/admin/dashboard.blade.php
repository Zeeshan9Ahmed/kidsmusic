@extends('layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
               </ol>
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <!-- Info boxes -->
         <div class="row">
            <div class="col-md-4 col-sm-6 col-12">
               <div class="info-box">
                  <span class="info-box-icon bg-primary"><i class="fas fa-signature"></i></span>
                  <div class="info-box-content">
                     <span class="info-box-text">TOTAL MUSIC</span>
                     <span class="info-box-number total-music">0</span>
                  </div>
                  <!-- /.info-box-content -->
               </div>
               <!-- /.info-box -->
               <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-md-4 col-sm-6 col-12">
               <div class="info-box">
                  <span class="info-box-icon bg-primary"><i class="fas fa-signature"></i></span>
                  <div class="info-box-content">
                     <span class="info-box-text">TOTAL LEVEL</span>
                     <span class="info-box-number total-level">0</span>
                  </div>
                  <!-- /.info-box-content -->
               </div>
               <!-- /.info-box -->
               <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-md-4 col-sm-6 col-12">
               <div class="info-box">
                  <span class="info-box-icon bg-primary"><i class="fas fa-signature"></i></span>
                  <div class="info-box-content">
                     <span class="info-box-text">TOTAL QUESTION</span>
                     <span class="info-box-number total-question">0</span>
                  </div>
                  <!-- /.info-box-content -->
               </div>
               <!-- /.info-box -->
               <!-- /.info-box -->
            </div>
            <!-- /.col -->

            

            
            
            
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
            
            <div class="col-md-4 col-sm-6 col-12">
               <div class="info-box ">
                  <span class="info-box-icon bg-primary"><i class="fa fa-users"></i></span>
                  <div class="info-box-content">
                     <a href="">
                        <span class="info-box-text">TOTAL USERS</span>
                        <span class="info-box-number total-users">0</span>
                     </a>
                  </div>
                  <!-- /.info-box-content -->
               </div>
               <!-- /.info-box -->
            </div>
            <!-- /.col -->
            
         </div>
         <!-- /.row -->
      </div>
      <!--/. container-fluid -->
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('additional_scripts')
<script>
   $(document).ready( ()=>{
      $.ajax({
            url: "{{route('admin.dashboard')}}",
            dataType: 'json',
            success: function (response, textStatus, jqXHR) {
                if(response.success == 1){
                  data = response.data
                  $('.total-users').html(data.total_users)
                  $('.total-music').html(data.total_musics)
                  $('.total-question').html(data.total_questions)
                  $('.total-level').html(data.total_levels)
                                      
                }else{
                    toastr.error(response.message,'error');
                }

            }
        });
   });
</script>
@endsection