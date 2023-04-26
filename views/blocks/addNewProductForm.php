<div class="container-fluid d-flex h-200 justify-content-center align-items-center p-0">
    <div class="row bg-white">
        <div class="col rounded p-4">

            <h3 class="text-center mb-4">Add product</h3>

            <form method="post" id="requestOrderForm" name="requestOrderForm" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="inputProductName">Product name</label>
                    <input type="text" class="form-control" id="inputProductName" required>
                </div>

                <div class="form-group">
                    <label for="inputNumber">Amount</label>
                    <input type="text" class="form-control" id="inputNumber" required>
                </div>

                <div class="form-group">
                    <label for="productDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="productDescription" rows="3"></textarea>
                </div>

                <div class="form-group mb-mt-3">
                    <label for="file">Product drawing</label><br>
                    <input type="file" class="form-control-file" id="file">
                </div>

                <button type="submit" class="btn btn-danger w-100 mt-2">Add new product</button>

            </form>
        </div>
    </div>
</div>