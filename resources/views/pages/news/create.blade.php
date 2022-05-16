@extends('layouts.master')

@section('title', 'News Upload')

@section('content')

    <div class="header-text mb-5">
        <div class="container">
            <h3 style="color: white;"><b>Frequently Asked </b><br> Questions</h3>
        </div>
    </div>
    <div class="container my-5">
        <form action="{{ route('news.store') }}" >
            <div class="form-group">
                <label for="title">News Title</label>
                <input type="text" name="title" class="form-control" id="inputAddress2" placeholder="Kindly input news title...">
            </div>

            <div class="form-group">
                <label for="inputAddress2">Abstract</label>
                <input type="text" name="abstract" class="form-control" id="inputAddress2" placeholder="Kindly input news abstract...">
            </div>

            <div class="form-group">
                <label for="inputAddress2">Author</label>
                <input type="text" name="author" class="form-control" id="inputAddress2" placeholder="Kindly input news author...">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">News Body</label>
                <textarea class="form-control" id="news_body" rows="3" name="body"></textarea>
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlFile1">Images</label>
                <input type="file" class="form-control-file" id="images" name="images">
              </div>
            <button type="submit" class="btn btn-success">Save News</button>
        </form>

    </div>


@endsection
