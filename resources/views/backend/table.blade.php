@extends('backend.layouts.master')

@section('content')
    <form>
        <div class="form-group">
            <label>Category Name</label>
            <input class="form-control" name='category_name'>
        </div>
        <div class="form-group">
            <label>Details</label>
            <textarea class="form-control" name="details"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

@endsection