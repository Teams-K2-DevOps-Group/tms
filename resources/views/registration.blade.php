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
            height: 120vh;
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
            padding-top: 1cm;
			
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
            background: black;
            border-radius: 10px;
			color: white;
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
				text-align: center;
				color: blue;
				/* padding: 0px 0px 500px 0px; */
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
	height: 400px;          
}

.image-container img {
    max-width: 100%;
    height: auto;
	align-items: center;   
	text-align: center;
}

.btn-submit {
        background-color: #28a745; /* Green color */
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
<div class="split-screen">
    
    <!-- LeftSide (Registration Form) -->
    <div class="left-side">
         <h1> TMS BOLTON </h1>  
		 
		<div class="form-container">
            <h3 class="text-center mb-4">Sign Up</h3>

         <form action =" " method="POST">
                
				
                <div class="mb-3">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input type="text" name="full_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="student_id" class="form-label">Student ID</label>
                    <input type="text" name="student_id" class="form-control" required>
                    
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                  
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
              </div>
              <p style="text-align:center; padding:5px 0px;"> <button class="btn-submit">  Submit </button> </p>
                <button type="submit">Don't have account yet?</button> 
                <button type="submit"><h2>Click to Register</h2> </button>
            </form>
        </div>
    </div>
	
	<!-- Right side -->
    <div class="right-side">
        <div>
		
		<div class="image-container">
    <img src="{{ asset('imgs/reg_banner.png') }}" alt="">
</div>

    </div>

</div>

    
    </main>



@endsection