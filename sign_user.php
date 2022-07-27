<?php include 'inc/header.php'; ?>
<section>
  <div class="card my-3">
    <h4 class="text-center m-1 p-1">Sign Up!</h4>
    <p class="text-center m-1 p-1">Don't have an account yet? Sign up here!</p>

    <form action="inc/sign_up.php" method="POST" class="card-body text-center">
      <label for="email" class="form-label">Email</label>
      <input
        type="email"
        class="form-control"
        name="email"
        placeholder="Enter your email"
      />

      <label for="pwd" class="form-label">Password</label>
      <input
        type="password"
        class="form-control"
        name="pwd"
        placeholder="Enter your password"
      />

      <label for="pwdrepeat" class="form-label">Repeat password</label>
      <input
        type="password"
        class="form-control"
        name="pwdrepeat"
        placeholder="Repeat password"
      />

      <button type="submit" name="submit" class="btn btn-info m-2">
        SIGN UP
      </button>
    </form>
  </div>

  <div class="card my-3">
    <h4 class="text-center m-1 p-1">Sign In!</h4>
    <p class="text-center m-1 p-1">
      You already have an account? Sign in here!
    </p>

    <form action="inc/sign_in.php" method="POST" class="card-body text-center">
      <label for="email" class="form-label">Email</label>
      <input
        type="email"
        class="form-control"
        name="email"
        placeholder="Enter your email"
      />

      <label for="pwd" class="form-label">Password</label>
      <input
        type="password"
        class="form-control"
        name="pwd"
        placeholder="Enter your password"
      />

      <button type="submit" name="submit" class="btn btn-info m-2">
        SIGN IN
      </button>
    </form>
  </div>
</section>
<?php include 'inc/footer.php'; ?>
