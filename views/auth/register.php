<?php include_once __DIR__.'/includes/header.php'; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <h2 class="card-title text-center">Register</h2>
                <div class="card-body py-md-4">
                    <form action="/register" method="post">
                        <div class="form-group">
                            <label for="name" class="error"><?php error('name'); ?></label>
                            <input type="text" class="form-control" id="name" name="name"  placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="error"><?php error('email'); ?></label>
                            <input type="email" class="form-control" id="email" name="email"  placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="password" class="error"><?php error('password'); ?></label>
                            <input type="password" class="form-control" id="password" name="password"  placeholder="password">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password" class="error"><?php error('confirm_password'); ?></label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password"  placeholder="confirm-password">
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="/login">Login</a>
                            <button class="btn btn-primary" type="submit">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>