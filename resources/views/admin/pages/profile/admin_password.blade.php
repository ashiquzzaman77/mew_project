<x-admin-app-layout>

    <div class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Profile</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="">

            <div class="main-body">
                <div class="row">

                    @include('admin.partials.profile_sidebar')

                    <div class="col-lg-8">

                        <div class="card">
                            <div class="card-body">

                                <form action="{{ route('admin.password.update.submit') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <!-- Old Password -->
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Old Password</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="password" class="form-control" name="old_password">
                                            @error('old_password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- New Password -->
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">New Password</h6>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <input type="password" class="form-control" name="new_password"
                                                id="new_password" onkeyup="checkPasswordStrength()">
                                            @error('new_password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-sm-5 condition">
                                            <ul style="list-style-type: disc; padding-left: 20px;">
                                                <li id="condition1" style="color: red;">Password must use Uppercase &
                                                    Lowercase letters</li>
                                                <li id="condition2" style="color: red;">Password must include at least
                                                    one Special Character</li>
                                                <li id="condition3" style="color: red;">Password must include at least
                                                    one Letter</li>
                                                <li id="condition4" style="color: red;">Password must contain at least
                                                    one Number</li>
                                                <li id="condition5" style="color: red;">Password must be at least 8
                                                    characters long</li>
                                            </ul>
                                        </div>

                                    </div>

                                    <!-- Confirm New Password -->
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Confirm Password</h6>
                                        </div>
                                        <div class="col-sm-4 text-secondary">
                                            <input type="password" class="form-control"
                                                name="new_password_confirmation">
                                            @error('new_password_confirmation')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <button type="submit" class="btn btn-outline-primary px-3 rounded-0">Update
                                                Password</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <script>
        // Function to check the password strength and apply color change
        function checkPasswordStrength() {
            var password = document.getElementById('new_password').value;

            // Regular expressions to check different conditions
            var upperCase = /[A-Z]/;
            var lowerCase = /[a-z]/;
            var specialChar = /[!@#$%^&*(),.?":{}|<>]/;
            var numbers = /\d/;
            var length = password.length >= 8;

            // Check each condition and update the color accordingly
            document.getElementById('condition1').style.color = (upperCase.test(password) && lowerCase.test(password)) ?
                'green' : 'red';
            document.getElementById('condition2').style.color = specialChar.test(password) ? 'green' : 'red';
            document.getElementById('condition3').style.color = /[a-zA-Z]/.test(password) ? 'green' : 'red';
            document.getElementById('condition4').style.color = numbers.test(password) ? 'green' : 'red';
            document.getElementById('condition5').style.color = length ? 'green' : 'red';
        }
    </script>

</x-admin-app-layout>
