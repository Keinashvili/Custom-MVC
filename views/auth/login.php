<?php include_once __DIR__.'/includes/header.php'; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <h2 class="card-title text-center">Login</h2>
                <div class="card-body py-md-4">
                    <form action="/loginIn" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <a href="/register">Register</a>
                            <button class="btn btn-primary">Sign in!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>