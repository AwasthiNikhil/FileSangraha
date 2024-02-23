@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <x-navigation />
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>FileSangraha</h1>
                <p>Your Ultimate File Management Solution for Laravel Websites</p>
                <ul>
                    <li>Seamless Integration</li>
                    <li>User-Friendly Interface</li>
                    <li>Secure Storage</li>
                    <li>Customizable Permissions</li>
                    <li>Version Control</li>
                    <li>Advanced Search</li>
                    <li>File Sharing</li>
                    <li>Responsive Design</li>
                </ul>
            </div>
            <div class="col-md-6">
                <form id="signupForm">
                    <h2>Get Started Today!</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
@endsection
