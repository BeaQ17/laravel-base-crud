@extends('layout.app')

@section('content')

<h1>Add new issue</h1>

<form action="" method="post">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" placeholder="Add title" id="title" name="title">
    </div>
    <div>
        <label for="">Cover image</label>
        <input type="text" placeholder="Add cover image as an url" id="cover" name="cover">
    </div>
    <div>
        <label for="">Issue number</label>
        <input type="text" placeholder="Add the issue number" id="issue_number" name="issue_number">
    </div>
    <div>
        <label for="">Year</label>
        <input type="text" placeholder="Add publication year" id="year" name="year">
    </div>
    <div>
        <label for="">Publisher</label>
        <input type="text" placeholder="Add publishing house" id="publisher" name="publisher">
    </div>
    <div>
        <label for="">Writer</label>
        <input type="text" placeholder="Add writer" id="writer" name="writer">
    </div>
    <div>
        <label for="">Colorist</label>
        <input type="text" placeholder="Add colorist" id="colorist" name="colorist">
    </div>
    <div>
        <button type="submit">Add</button>
    </div>
</form>
    
@endsection