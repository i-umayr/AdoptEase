<style>
    /* ===== Google Font Import - Poppins ===== */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap");
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #4070f4;
    }
    .container {
        position: relative;
        max-width: 900px;
        width: 100%;
        border-radius: 6px;
        padding: 30px;
        margin: 0 15px;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    .container header {
        position: relative;
        font-size: 20px;
        font-weight: 600;
        color: #333;
    }
    .container header::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -2px;
        height: 3px;
        width: 27px;
        border-radius: 8px;
        background-color: #4070f4;
    }
    .container form {
        position: relative;
        margin-top: 16px;
        min-height: 490px;
        background-color: #fff;
        overflow: hidden;
    }
    .container form .form {
        position: absolute;
        background-color: #fff;
        transition: 0.3s ease;
    }
    .container form .form.second {
        opacity: 0;
        pointer-events: none;
        transform: translateX(100%);
    }
    form.secActive .form.second {
        opacity: 1;
        pointer-events: auto;
        transform: translateX(0);
    }
    form.secActive .form.first {
        opacity: 0;
        pointer-events: none;
        transform: translateX(-100%);
    }
    .container form .title {
        display: block;
        margin-bottom: 8px;
        font-size: 16px;
        font-weight: 500;
        margin: 6px 0;
        color: #333;
    }
    .container form .fields {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    form .fields .input-field {
        display: flex;
        width: calc(100% / 3 - 15px);
        flex-direction: column;
        margin: 4px 0;
    }
    .input-field label {
        font-size: 12px;
        font-weight: 500;
        color: #2e2e2e;
    }
    .input-field input,
    select {
        outline: none;
        font-size: 14px;
        font-weight: 400;
        color: #333;
        border-radius: 5px;
        border: 1px solid #aaa;
        padding: 0 15px;
        height: 42px;
        margin: 8px 0;
    }
    .input-field input :focus,
    .input-field select:focus {
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
    }
    .input-field select,
    .input-field input[type="date"] {
        color: #707070;
    }
    .input-field input[type="date"]:valid {
        color: #333;
    }
    .container form button,
    .backBtn {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 45px;
        max-width: 200px;
        width: 100%;
        border: none;
        outline: none;
        color: #fff;
        border-radius: 5px;
        margin: 25px 0;
        background-color: #4070f4;
        transition: all 0.3s linear;
        cursor: pointer;
    }
    .container form .btnText {
        font-size: 14px;
        font-weight: 400;
    }
    form button:hover {
        background-color: #265df2;
    }
    form button i,
    form .backBtn i {
        margin: 0 6px;
    }
    form .backBtn i {
        transform: rotate(180deg);
    }
    form .buttons {
        display: flex;
        align-items: center;
    }
    form .buttons button,
    .backBtn {
        margin-right: 14px;
    }

    @media (max-width: 750px) {
        .container form {
            overflow-y: scroll;
        }
        .container form::-webkit-scrollbar {
            display: none;
        }
        form .fields .input-field {
            width: calc(100% / 2 - 15px);
        }
    }

    @media (max-width: 550px) {
        form .fields .input-field {
            width: 100%;
        }
    }
</style>
<link
            rel="stylesheet"
            href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
        />
        <div class="container">
            <header>Registration <a style="float: right;" class="btn btn-success" href="/">Back</a></header>

            <form method="POST" action="/register_adopter">
                @csrf
                    <div class="details personal">
                        <span class="title">Login Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>First Name</label>
                                <input
                                    type="text"
                                    placeholder="Enter first name"
                                    id="first_name"  
                                    class="form-control @error('first_name') is-invalid @enderror" 
                                    name="first_name" 
                                    value="{{ old('first_name') }}" 
                                    required autocomplete="first_name" 
                                    autofocus
                                />
                                @error('first_name')
                                <p class="text-red-500 mt-1">{{$message}}</p>
                                 @enderror
                            </div>
                            <div class="input-field">
                                <label>Last Name</label>
                                <input
                                    type="text"
                                    placeholder="Enter last name"
                                    required
                                    id="last_name" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    name="last_name" 
                                    value="{{ old('last_name') }}" 
                                    required 
                                    autocomplete="last_name"
                                />
                                @error('last_name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="input-field">
                                <label>Username</label>
                                <input
                                    type="text"
                                    placeholder="Enter username"
                                    required
                                    id="username" 
                                    class="form-control @error('first_name') is-invalid @enderror" 
                                    name="username" 
                                    value="{{ old('username') }}" 
                                    required 
                                    autocomplete="username" 
                                    autofocus
                                />
                                @error('username')
                                <p class="text-red-500 mt-1">{{$message}}</p>
                                 @enderror
                            </div>

                            <div class="input-field">
                                <label>Email</label>
                                <input
                                    type="email"
                                    placeholder="Enter your email"
                                    required
                                    id="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    name="email" 
                                    value="{{ old('email') }}" 
                                    required 
                                    autocomplete="email"
                                />
                                @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>

                            <div class="input-field">
                                <label>Password</label>
                                <input
                                    type="password"
                                    placeholder="Enter password"
                                    id="password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    name="password" 
                                    minlength="6"
                                    required 
                                    autocomplete="new-password"
                                />
                                @error('password')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="input-field">
                                <label>Confirm Password</label>
                                <input
                                    type="password"
                                    placeholder="Confirm password"
                                    id="password-confirm"
                                    class="form-control" 
                                    name="password_confirmation"
                                    minlength="6" 
                                    required 
                                    autocomplete="new-password"
                                />
                                @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                    
                        <div class="details ID">
                            <span class="title">Personal Details</span>
                            <div class="fields">
                                <div class="input-field">
                                    <label>Occupation</label>
                                    <input
                                        type="text"
                                        placeholder="Enter your Occupation"
                                        id="occupation"
                                        class="form-control @error('email') is-invalid @enderror" 
                                        name="occupation" 
                                        value="{{ old('occupation') }}" 
                                        required 
                                        autocomplete="occupation"
                                    />
                                    @error('occupation')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                                </div>
                                <div class="input-field">
                                    <label>Address</label>
                                    <input
                                        type="text"
                                        placeholder="Enter your Address"
                                        required
                                        id="address"
                                        class="form-control @error('address') is-invalid @enderror" 
                                        name="address" 
                                        value="{{ old('address') }}" 
                                        required 
                                        autocomplete="address"
                                    />
                                    @error('address')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                                </div>
                                <div class="input-field">
                                    <label for="income">Income</label>
                                    <select  name="income" id="income" required>
                                        <option disabled selected>
                                            Select Income
                                        </option>
                                        <option value="Below 30000">Below 30000</option>
                                        <option value="30000-70000">30000-70000</option>
                                        <option value="70000-100000">70000-100000</option>
                                        <option value="Above 100000">Above 100000</option>
                                    </select>
                                    @error('income')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                                </div>

                                <div class="input-field">
                                    <label for="marital_status">Marital Status</label>
                                    <select required name="marital_status">
                                        <option disabled selected>
                                            Select Status
                                        </option>
                                        <option  id="single" name = "marital_status" value="Single">Single</option>
                                        <option  id="married" name = "marital_status" value="Married">Married</option>
                                        <option  id="widow" name = "marital_status" value="Widowed">Widowed</option>
                                    </select>
                                    @error('marital_status')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                                </div>


                                <div class="input-field">
                                    <label for="family_size">Family Size</label>
                                    <input
                                        type="number"
                                        min="0"
                                        placeholder="Enter number of members"
                                        required
                                        id="family_size" 
                                        class="@error('number') is-invalid @enderror" 
                                        name="family_size" 
                                        value="{{ old('family_size') }}" 
                                        required 
                                        autocomplete="family_size"
                                    />
                                    @error('family_size')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                                </div>
                     
                                <div class="input-field">
                                    <label for="gender">Gender</label>
                                    <select required name="gender">
                                        <option disabled selected>
                                            Select Gender
                                        </option>
                                        <option id="male" name = "gender" value="Male">Male</option>
                                        <option id="female" name = "gender" value="Female">Female</option>
                                    </select>
                                </div>
                        </div>

                        <button type="submit" class="nextBtn">
                            <span class="btnText">Register</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                    <div class="login-signup">
                <span class="text"
                    >Have an Accound?
                    <a href="/login">Login Now</a>
                </span>
            </div>
            </form>
        </div>
<script>
    const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");

    nextBtn.addEventListener("click", (event) => {
        // Check if passwords match before proceeding
        const password = form.querySelector("#password").value;
        const confirmPassword = form.querySelector("#password-confirm").value;

        if (password !== confirmPassword) {
            event.preventDefault();
            showErrorMessage(form.querySelector("#password-confirm"), "Passwords do not match");
            return;
        }

        // Continue with other validations
        if (!validateForm()) {
            event.preventDefault(); // Prevent form submission if validation fails
        } else {
            form.classList.add("secActive");
        }
    });

    function validateForm() {

        // Example validation for non-empty occupation
        const occupationInput = form.querySelector("#occupation");
        if (occupationInput.value.trim() === "") {
            showErrorMessage(occupationInput, "Occupation cannot be empty");
            return false;
        }
        return true;
    }

    function showErrorMessage(input, message) {
        const errorElement = document.createElement("p");
        errorElement.className = "error-message text-red-500 text-xs mt-1";
        errorElement.textContent = message;

        // Remove existing error messages before showing a new one
        const existingErrorMessage = input.parentNode.querySelector(".error-message");
        if (existingErrorMessage) {
            existingErrorMessage.remove();
        }

        input.parentNode.appendChild(errorElement);
    }

    backBtn.addEventListener("click", () => form.classList.remove("secActive"));
</script>