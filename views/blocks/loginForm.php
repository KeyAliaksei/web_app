<?php
/**
 * @var $pageData
 */
?>
<div class="container-fluid d-flex h-100 justify-content-center align-items-center p-0">
    <div class="row bg-white">
        <div class="col rounded p-4">
            <h3 class="text-center mb-4">Login</h3>
            <form id="login" name="login">
                <div class="form-group">
                    <label for="inputLogin">Login</label>
                    <input type="text" class="form-control" id="inputLogin" required>
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" required>
                </div>
                <button type="submit" class="btn btn-danger w-100 mt-3">Login</button>
            </form>
        </div>
    </div>
</div>