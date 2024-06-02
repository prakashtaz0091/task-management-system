@extends('layout.base')

@section('internal-styles')
    <style>
        .password-field-1,
        .password-field-2 {
            position: relative;

            img {
                position: absolute;
                top: 50%;
                right: 10px;
                transform: translateY(-50%);
            }
        }
    </style>
@endsection

@section('main-content')
    <h1>Task Management System</h1>
    <p class="lead">A Task Management System is a software application that helps manage tasks, projects, and
        workflows.</p>
    <p class="lead">


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-light text-dark btn-lg" data-bs-toggle="modal" data-bs-target="#signupForm">
            Signup
        </button>

        <!-- Modal -->
    <div class="modal fade" id="signupForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="signupFormLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="signupFormLabel">
                        Sign up
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">
                    <form>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3 password-field-1">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                            <label for="password">Password</label>
                            <img src="{{ url('images/eye.gif') }}" alt="" height="40" width="40">
                            <img class="d-none" src="{{ url('images/eye-close.png') }}" alt="" height="40"
                                width="40">
                        </div>
                        <div class="form-floating mb-3 password-field-2">
                            <input type="password" class="form-control" id="confirm_password"
                                placeholder="Confirm Password">
                            <label for="confirm_password">Confirm Password</label>
                            <img src="{{ url('images/eye.gif') }}" alt="" height="40" width="40">
                            <img class="d-none" src="{{ url('images/eye-close.png') }}" alt="" height="40"
                                width="40">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </p>
@endsection


@section('internal-scripts')
    <script>
        const password = document.querySelector('#password');
        const confirm_password = document.querySelector('#confirm_password');
        const eye1 = document.querySelector('.password-field-1 img');
        const eye2 = document.querySelector('.password-field-2 img');
        eye1.addEventListener('click', () => {
            if (password.type === 'password') {
                password.type = 'text';
                eye1.src = "{{ url('images/eye-close.png') }}";
            } else {
                password.type = 'password';
                eye1.src = "{{ url('images/eye.gif') }}";
            }
        });
        eye2.addEventListener('click', () => {
            if (confirm_password.type === 'password') {
                confirm_password.type = 'text';
                eye2.src = "{{ url('images/eye-close.png') }}";
            } else {
                confirm_password.type = 'password';
                eye2.src = "{{ url('images/eye.gif') }}";
            }
        });
    </script>
@endsection
