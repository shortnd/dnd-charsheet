@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card px-2 py-2">
        <form class="form-group" action="/characters" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div><!--/.form-group-->
            <div class="form-group">
                <label for="class">Class</label>
                <select name="class" id="class" class="form-control">
                    <option value="warrior">Warrior</option>
                    <option value="paliden">paliden</option>
                </select>
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <input type="number" name="level" id="level" min="1" value="1" class="form-control">
            </div>
            <div class="form-group">
                <label for="race">Race</label>
                <input type="text" name="race" id="race" class="form-control">
            </div>
            <div class="form-group">
                <label for="size">Size</label>
                <input type="text" name="size" id="size" class="form-control">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" value="1" min="1" class="form-control">
            </div>
            <div class="form-group">
                <label for="weight">Weight</label>
                <input type="number" name="weight" id="weight" min="0" value="1" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add New</button>
        </form>
    </div><!--/.card-->
</div>
@endsection
