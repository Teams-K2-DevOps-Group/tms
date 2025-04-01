
@extends('layouts.app')


@section('content')
<style>
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}
/* style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  cursor: pointer;
}
/* style the submit button */
input[type=text], input[type=password]{
  background: rgba(255, 255, 255, 0.8);
  color: #04AA6D;
  border-radius: 5px;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}
.a {
    color:white;
    cursor: pointer;
    text-decoration: none;
}
.a:hover {
    color: #FFA500;
}
input[type=submit]:hover {
  background-color: #45a049;
}
</style>
    <main class="h-svh">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="py-8 px-8 box-border md:py-1 bg-green-800 text-white">
                <h2 class="pt-8 pb-3 text-4xl font-extrabold">Forgoten Password</h2>
                <div class="">
			<p>Please ensure you enter the correct registered email to reset your password, <br /> or click on 'Sign Up' in the top right corner to create a new account.</p>
			<form action="/action_page.php">
                	<input type="text" name="forgotenpassword" placeholder="User email" required>
                	<input type="submit" value="Reset Password">
			</form>
                </div>
                <div class="p-5">
                    <a href="{{route('login')}}" class="a"> Go Back to Login? Click here </a>
                </div>
            </div>

            <div class="">
                <img class="h-auto max-w-full rounded-lg" src="{{asset('imgs/forgotpassword.jpg')}}" alt="">
            </div>
        </div>
    
    </main>
@endsection