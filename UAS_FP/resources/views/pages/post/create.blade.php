@extends('layouts.app')
@section('nama')
    Create Post
@endsection

@section('content')
<div class="container">
  <br>
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<h2>Create Post</h2>
    	</div>
    	<div class="col-md-6">
    		<div class="float-right">
    			<a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
    		</div>
    	</div>
    	<br>
        <div class="col-md-12">
        	@if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-error" role="alert">
                    {{ session('error') }}
                </div>
            @endif
      <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nama_buku">Nama Buku :</label>
          <input type="text" class="form-control" id="nama_buku" name="nama_buku" required>
        </div>
        <div class="form-group">
          <label for="jenis_buku">Jenis Buku:</label>
          <textarea name="jenis_buku" class="form-control" id="jenis_buku" rows="5" required></textarea>
        </div>
        <div class="form-group">
          <label for="nama_pengarang">Nama Pengarang:</label>
          <textarea name="nama_pengarang" class="form-control" id="nama_pengarang" rows="5" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit Post</button>
      </form>
        </div>
    </div>
    
</div>
<x-footer />
@endsection