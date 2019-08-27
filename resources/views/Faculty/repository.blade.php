@extends('index')
@section('contents')
<h1>ADD REPOSITORY</h1>
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-body pad">
<form role="form">
<div class="form-group">
    <label for="exampleInputEmail1"><h3>Project Tittle</h3></label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter project tittle">
</div>
    <div class="form-group">
        <label for="exampleInputFile"><h3>Proposal</h3></label>
        <input type="file" id="exampleInputFile">
        <label for="exampleInputFile"><h3>Report</h3></label>
        <input type="file" id="exampleInputFile">
        <label for="exampleInputFile"><h3>Code</h3></label>
        <input type="file" id="exampleInputFile">
    </div>
</form>
            </div>
        </div>
    </div>
</div>
    </section>
@endsection