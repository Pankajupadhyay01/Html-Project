<!-- Button trigger modal
<button type="button" class="btn btn-primary">
  Launch demo modal
</button> -->

 <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="signupLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupLabel">Sign up to Bango</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group" >
		<form action="handel.php" method="post">
                        <label for="username">Username</label>
                         
                        <input type="text" class="form-control" id="text" name="username" aria-describedby="Name">
                         
                    </div>
					 <div class="form-group">
                        <label for="signupEmail">Email</label>
                         
                        <input type="text" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">
                         
                    </div>
                    <div class="form-group">
                        <label for="signupPassword">Password</label>
                        <input type="password" class="form-control" id=" signupPassword" name="signupPassword">
                    </div>
                    <div class="form-group">
                        <label for="signupcPassword">Confirm Password</label>
                        <input type="password" class="form-control" id=" signupcPassword" name="signupcPassword">
                    </div>
                     
                    <button type="submit" class="btn btn-primary">Signup</button>
					</form>
            </div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>