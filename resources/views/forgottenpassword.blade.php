@extends('layouts.app')


@section('content')

<main class="h-svh">

<style>
        body, html {
            height: 100%;
	            margin: 0;
        }
        .split-screen {
            display: flex;
            height: 95vh;
			width: 100%;
			padding: 40px;
        }
        .right-side {
            flex: 1;
            <!--background: url('../Image/Taskmanager.png') no-repeat center center; -->
            background-size: cover;
	    background-color: lightblue;
            display: static;
            align-items: center;
            justify-content: center;
            color: red;
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;		
        }
        .left-side {
            /* flex: 1; */
            /* display: flex;
            align-items: center; */
			padding: 20px;
			background-color: white;		
        }
        .form-container {
            width: 30cm;
			/* height: 85%; */
            max-width: 400px;
            padding: 20px;
            background: white;
            border-radius: 10px;
			color: black;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
		
		input, textarea {
		  width: 100%;
		  padding: 10px;
		  margin-top: 5px;
		  border: 1px solid #ccc;
		  border-radius: 5px;
		}

			h1 {
				text-align: left;
				color: blue;
				/* padding: 0px 0px 0px 0px; */
				padding: 0px 0px 0px 50px;
			}
		h3{
			text-align: center;
		}

        h2 {
            color: red;
            padding: 10px 0px 12px 15px;
            font-size: 12px;
        }
	.image-container {
    width: 100%;
    margin: 20px 0;
    padding: 100px;
    display: flex;
    justify-content: center; 
    align-items: center;               
}
.image-container img {
    max-width: 100%;
    height: auto;
	align-items: center;   
	text-align: center;
}
.btn-submit {
        background-color: #6B7CD2; /* Green color */
        color: white;
        border: none;
        justify-content: center;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        padding: 10px 20px 10px 30px;
        margin: 5px;
        transition: background-color 0.3s ease-in-out;
    }
    </style>
<h1 style="margin-bottom:-35px; font-weight:bold"> TMS BOLTON </h1>
<div class="split-screen">   
    <!-- LeftSide (Registration Form) -->
<!-- Right side -->
    <div class="right-side">
	<div class="image-container">
    		<img src="{{ asset('imgs/reg_banna.png') }}" alt="">
	</div>
   </div>
<div class="left-side">
<div class="form-container">
            <h3 class="text-center" style="font-size:24px; color: #6B7CD2; font-weight:bold;">Forgotten Passward</h3><br />
         <form action =" " method="POST"> 
            <div class="mb-3"><label for="full_name" class="form-label">Please ensure you enter the correct registered email to reset your password.</label><br clear="all" /><br /></div>	
                <div class="mb-3">
                    <label for="full_name" class="form-label">User Email <font style="color:#FE0505">*</font></label>
                    <input type="text" name="user_name" class="form-control" required>
                </div>
                <div class="mb-3">		
                  <label for="password" class="form-label"><font style="color:#FE0505">Note:</font> All fields with <font style="color:#FE0505">*</font> are required. <br />or 
Click on ‘Sign Up’ in the top right corner to create a new account.</label>                    
              </div>
		<div class="mb-3"><br /></div>
              <p style="text-align:center; padding:5px 0px;"> <button class="btn-submit"> Reset Password </button> </p> <br />
                <div class="mb-3" style="text-align:center;"><a href="{{route('login')}}" class="a"><font style="color: #6B7CD2;">Go back to Login?</font> <font style="color:#FE0505">Click here </font></a></div>
		<div class="mb-3"><br clear="all" /><br /></div>
            </form>
        </div>
    </div>	
 </div>  
</main>
@endsection