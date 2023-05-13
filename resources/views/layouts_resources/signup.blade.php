@section('modal-signup')
<div class="modal fade modal-lg" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="SignupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h1 class="modal-title fs-5 d-flex justify-content-center" id="exampleModalLabel">
                    <i class='bx bxs-user h1' ></i>
                </h1>
                <b><span class="h3 ml-2">Create Account</span></b>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <!-- Add your login form here -->
                
                <form method="POST" action="" class="container col-sm-10">
                    @csrf
                    <div class="row g-4 mb-2">
                        <div class="col-sm-4 col-auto">
                          {{-- <label for="FirstName">First Name</label> --}}
                          <input type="text" class="form-control" id="firstName"placeholder="First Name">
                        </div>
                        <div class="col-sm-4 col-auto">
                          {{-- <label for="LastName">Last Name</label> --}}
                          <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                        </div>
                        <div class="col-sm-4 col-auto">
                            {{-- <label for="LastName">Last Name</label> --}}
                            <input type="text" class="form-control" id="middleName" placeholder="Middle Name">
                        </div>
                    </div>
                    <div class="row g-3 mb-2">
                        <div class="col-sm-6 col-auto">
                          {{-- <label for="FirstName">First Name</label> --}}
                          <input type="telephone" class="form-control" id="phone" placeholder="Contact No.">
                        </div>
                        <div class="col-sm-6 col-auto">
                          {{-- <label for="LastName">Last Name</label> --}}
                          <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row g-3 mb-2">
                        <div class="col-sm-6 col-auto">
                          {{-- <label for="FirstName">First Name</label> --}}
                          <input type="date" class="form-control" id="calendar" placeholder="Birthdate">
                        </div>
                        <div class="col-sm-6 col-auto mb-2">
                          {{-- <label for="LastName">Last Name</label> --}}
                          <select class="form-select" id="municipal">
                            <option selected>Municipal</option>
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                          </select>
                        </div>
                    </div>
                    <div class="row g-3 mb-2">
                        <div class="col-sm-4 col-auto">
                          {{-- <label for="FirstName">First Name</label> --}}
                          <input type="text" class="form-control" id="zipcode" placeholder="Zip Code">
                        </div>
                        <div class="col-sm-4 col-auto">
                          {{-- <label for="LastName">Last Name</label> --}}
                          <input type="text" class="form-control" id="barangay" placeholder="Barangay">
                        </div>
                        <div class="col-sm-4 col-auto">
                          {{-- <label for="LastName">Last Name</label> --}}
                          <input type="text" class="form-control" id="user-street" placeholder="Street">
                        </div>
                    </div>
                    <div class="row g-3 mb-2">
                        <div class="col-sm-4 col-auto">
                          {{-- <label for="FirstName">First Name</label> --}}
                          <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="col-sm-4 col-auto">
                          {{-- <label for="LastName">Last Name</label> --}}
                          <input type="text" class="form-control" id="confirm-password" placeholder="Confirm Password">
                        </div>
                        <div class="col-sm-4 col-auto">
                          {{-- <label for="LastName">Last Name</label> --}}
                          <input type="text" class="form-control" id="street" placeholder="Street">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-auto">
                            <input class="form-check-input" type="checkbox" value="" id="agree">
                            <label class="form-check-label" for="agree">
                              <span>Agree to <a href="#">terms and conditions.</a></span>
                            </label>
                        </div>
                    </div>
                </form>
                
            </div>
            <div class="modal-footer text-center">
                <div class="row g-3">
                    <div class="col-auto">
                        <button type="button" class="btn btn-info form-control text-white d-flex justify-content-center">
                            <i class='bx bxs-user-account h3' ></i>
                            <span class="h6" style="margin-top:8px">Create Account</span>
                        </button>
                        {{-- <label class="form-check-label" for="agree">
                          <span>Agree to <a href="#">terms and conditions.</a></span>
                        </label> --}}
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-auto">
                        <button type="button" class="btn btn-info form-control text-white d-flex justify-content-center">
                            <i class='bx bxl-google h3'></i> 
                            <span class="h6" style="margin-top:8px">Sign with Google</span>
                        </button>
                    </div>
                </div>
                {{-- <button type="button" class="btn btn-info form-control text-white">Create Account</button>
                <p class="text-secondary form-control border-0">Don't have an account? <span class="text-info"><a href="#">Register here</a></span></p> --}}
            </div>
        </div>
    </div>
</div>
@endsection
