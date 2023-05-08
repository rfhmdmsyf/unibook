@extends('template.main')
@section('konten')
<div class="page-inner">
    <div class="page-header">
        
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{ asset('vendor') }}/examples/assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
                    <i class="flaticon-home"></i>
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
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p class="page-title float-left">Tambah Data Artikel </p>
                    
                  
                  
                </div>
                
               <div class="col-md-12">
         <form action="{{ route('store')}}" method="post" enctype="multipart/form-data"> 
                    @csrf
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class=" form-grup ">
                              <label for="jd">Kategori</label>
                            <select name="kategori" class="form-control {{ $errors->first('id') ? "is-invalid":""}}"  id="">
                            <option hidden>PILIH WOOIII</option>
  
                            @foreach ($kategori as $kate)
                            <option value="">
                                {{$kate->nama_kategori}}
                          
                          </option>
                          @endforeach
                          </select>
                             </div>
                          </div>

                          <div class="col-md-6">
                            <div class=" form-grup ">
                              <label for="jd">Penerbit</label>
                            <select name="penerbit" class="form-control {{ $errors->first('id') ? "is-invalid":""}}"  id="">
                            <option hidden>PILIH WOOIII</option>
  
                            @foreach ($item as $puyuh)
                            <option value="">
                                {{$puyuh->id}} 
                              
                          
                          </option>
                          @endforeach
                          </select>
                             </div>
                          </div>


                        <div class="col-md-6">
                            <div class=" form-grup float-left">
                              <label for="password">ID Buku</label>
                              <input type="text" value="{{ old('')}}" class="form-control {{$errors->first('kategori') ? "is-invalid":""}} " id="jd" placeholder="Masukkan ID Buku" name="id">
                               
                             @error('')
                             <small class="text-danger">
                             {{ $message }}
                             </small>
                          @enderror
                             </div>
                          </div>

                          <div class="col-md-6">
                            <div class=" form-grup float-left">
                              <label for="password">Nama Buku</label>
                              <input type="text" value="{{ old('')}}" class="form-control {{$errors->first('kategori') ? "is-invalid":""}} " id="jd" placeholder="Masukkan Nama Buku" name="buku">
                               
                             @error('')
                             <small class="text-danger">
                             {{ $message }}
                             </small>
                          @enderror
                             </div>
                          </div>


                          <div class="col-md-6">
                            <div class=" form-grup float-left">
                              <label for="password">Harga</label>
                              <input type="text" value="{{ old('')}}" class="form-control {{$errors->first('kategori') ? "is-invalid":""}} " id="jd" placeholder="Masukkan Harga" name="harga">
                               
                             @error('')
                             <small class="text-danger">
                             {{ $message }}
                             </small>
                          @enderror
                             </div>
                          </div>

                          <div class="col-md-6">
                            <div class=" form-grup float-left">
                              <label for="password">Stok</label>
                              <input type="text" value="{{ old('')}}" class="form-control {{$errors->first('kategori') ? "is-invalid":""}} " id="jd" placeholder="Masukkan Stok" name="stok">
                               
                             @error('')
                             <small class="text-danger">
                             {{ $message }}
                             </small>
                          @enderror
                             </div>
                          </div>


                     
                       
                    </div>
                
                   </div>
                <div class="card-footer">
                    
                    <div class="form-group">
                       
                        <center>
                            <button type="submit" name="simpan" class="btn btn-primary mt-2">
                            Simpan</button>
                        </center>

                     </div> 
         </form>
                  
                </div>
            </div>
                 
        </div>
        
            

          
    </div>


  
</div>
@endsection