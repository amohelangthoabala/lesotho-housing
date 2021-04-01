<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('application/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('application/css/style.css')}}">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{asset('application/images/signup-img.jpg')}}" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="{{route('appform')}}">
                        @csrf
                        <h2>Application form for house</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name :</label>
                                <input type="text" value="{{ Auth::user()->name }}" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="phone"> Phone Number :</label>
                                <input type="text" value="{{ Auth::user()->mobile }}" name="mobile" id="mobile" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">Apply to</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value="Rent">Rent</option>
                                        <option value="Buy">Buy</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nationality">Nationality</label>
                                <div class="form-select">
                                    <select name="nationality" id="nationality">
                                        <option value="Mosotho">Mosotho</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="text" name="birth_date" id="birth_date">
                        </div>
                        <div class="form-group">
                            <label for="idnumber">ID number or Passport no :</label>
                            <input type="text" name="idnumber" id="idnumber">
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" value="{{ Auth::user()->email }}" name="email" id="email" />
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('application/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('application/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
