@extends('template.main')
@section('konten')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="page-inner">
    <div class="page-header">
        
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{ asset('vendor') }}/examples/assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Tables</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Basic Tables</a>
            </li>
        </ul>
    </div>
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert"> 
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="page-title float-left">Daftar Mahasiswa </h4>
                        </div>
                        <div class="row">
                        <div class="col-md-2">
                            <a href="">
                                <button class="btn btn-md btn-round btn-primary float-right">
        
                                    <i class="fa fa-plus-circle"></i>Tambah
                                </button>
                            </a>

                            

                        </div>


                    </div>

                        <div class="col-md-4">
                            <form action="" method="get">
                           
                            <input style="width: 70%" type="text" class="form-control d-inline" name="search">
                            <button type="submit" class="btn btn-secondary d-inline">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                        </div>
                    </div>









                  
                   
                </div>
               
                <div class="card-body">
                   
                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th style="width: 3%">ID Penerbit</th>
                                <th style="width: 5%">Nama</th>
                                <th>Alamat</th>
                                <th style="width: 1%">Kota</th>
                                <th >Telepon</th>
                             
                               
                                <th style="width: 15%"></th>
                            </tr>
                        </thead>
                        <tbody>
                           {{-- Lakukan looping data disini --}}
                         
                           
                               
                           
             
                        @foreach ($data as $item)  
                           <tr>
                            
                               <td>{{$item->id_penerbit}}</td>
                              
                               <td>{{$item->nama_penerbit}}</td>
                              
                               <td>{{$item->alamat}}</td>
                              <td>{{$item->kota}}</td>
                              <td>{{$item->telepon}}</td>
                              
                              
                             
                              <td>
                                   
                     
                                <a href="" style="text-decoration: none">
                                <button type="button" class="btn btn-icon btn-round btn-secondary">
                                    <i class="fa fa-edit"></i>
                                </button>&nbsp;
                                <a href="" style="text-decoration: none">
                                <button onclick="return confirm('Kamu serius mau lupain aku?')" type="button" class="btn btn-icon btn-round btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button> </a>
        
        
                            </td>
                              
                         </tr>
                         @endforeach
           
           
                  

                   
                          
                           
                        </tbody>

                        

                     

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection