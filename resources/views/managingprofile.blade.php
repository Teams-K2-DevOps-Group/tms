@include('header')
                            
            <!-- Tasks and Activity -->
            <div class="tasks-container">
		<div class="task-list">
		<form action =" " method="POST"> 
                  <div class="title">Managing Profile</div>
		<div class="form-label" style="margin:-20px 0px 25px 0px; color:#6B7CD2">Ensure that your information is correctly registered, or edit it and click on 'Update'. <font style="color:#FE0505">Note: </font>All fields with <font style="color:#FE0505">*</font>are required. <br claer="all" /></div>
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Username <font style="color:#FE0505">*</font></label>
			<i class="fas fa-user"></i>
                       <input type="text" name="prof_name" class="form-control" required>
                    </div>

		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Email<font style="color:#FE0505">*</font></label>
			<i class="fa fa-envelope"></i>
			<input type="text" name="prof_email" class="form-control" required>
                    </div>
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Password <font style="color:#FE0505">*</font></label>
			<i class="fa fa fa-lock"></i>
                       <input type="text" name="prof_password" class="form-control" required>
                    </div>   

		<div class="mb-3"><br /></div>
              <p style="text-align:center; padding:5px 0px;"> <button class="btn-submit" style="width:120px !important;">  Update </button> &nbsp; <input type="reset" style="width:120px !important;" class="btn-submit" value="Cancel" /></p> <br />            
		</form>
            
            </div>
        </div>
    </div>

    <script>
        // Simple checkbox toggle functionality
        document.querySelectorAll('.task-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const taskItem = this.closest('.task-item');
                if (this.checked) {
                    taskItem.style.opacity = '0.7';
                } else {
                    taskItem.style.opacity = '1';
                }
            });
        });
    </script>
   
</body>
</html>