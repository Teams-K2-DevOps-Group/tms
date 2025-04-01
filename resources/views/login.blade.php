
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
    color: white;
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
                <h2 class="pt-8 pb-3 text-4xl font-extrabold">Login</h2>
                <div class="">
			<p>Please use your email as the username. <br />Enter your password or click on Forgotten password.</p>
			<form action="/action_page.php">
                	<input type="text" name="username" placeholder="Username" required>
                	<input type="password" name="password" placeholder="Password" required>
                	<input type="submit" value="Login">
			</form>
                </div>
                <div class="p-5">
                    <a href="{{route('forgotenpassword')}}" class="a"> Forgot password? Click here </a>
                </div>
            </div>

            <div class="">
                <img class="h-auto max-w-full rounded-lg" src="{{asset('imgs/login.png')}}" alt="">
            </div>
        </div>
    
    </main>
@endsection