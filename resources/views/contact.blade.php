@extends('layouts.main')

@section('container')
    <div class="title-top mb-5">
        <h2 class="fw-bold"> Contact Us </h2>
    </div>
    <form>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" placeholder="Name">
        <label id="nameid" for="inputname" class="form-label">Name</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" placeholder="Email">
        <label id="emailid" for="inputemail" class="form-label">Email</label>
    </div>
    <div class="form-floating mb-3">
        <textarea id="messageid" class="form-control" placeholder="Enter your message . ." type="inputmessage"> </textarea>
        <label class="message">Message</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection