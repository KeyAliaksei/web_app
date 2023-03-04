<?php
/**
 * @var $pageData
 */
?>
<div class="container-fluid d-flex h-200 justify-content-center align-items-center p-0">
    <div class="row bg-white">
        <div class="col rounded p-4">
            <h3 class="text-center mb-4">Sign up</h3>
            <form id="formReg" name="formReg">

                <?php
                if(!empty($pageData['registerMsg'])) :?>
                <p><?= $pageData['registerMsg']; ?></p>
                <?php endif; ?>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="A-Z, a-z" required>
                </div>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" id="surname" placeholder="A-Z, a-z" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="xxxxx@xxx.xx" required>
                </div>
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" id="login" placeholder="A-Z, a-z, 0-9" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-danger w-100 mt-2">Sign up</button>
            </form>
        </div>
    </div>
</div>