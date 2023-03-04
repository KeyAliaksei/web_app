<div class="container-fluid d-flex h-200 justify-content-center align-items-center p-0">
    <div class="row bg-white">
        <div class="col rounded p-4">

            <h3 class="text-center mb-4">Request order</h3>

            <form method="post" id="requestOrderForm" name="requestOrderForm" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="inputID">Customer ID</label>
                    <input type="text" class="form-control" id="inputID" required>
                </div>

                <div class="form-group">
                    <label for="inputProductName">Product name</label>
                    <input type="text" class="form-control" id="inputProductName" required>
                </div>

                <div class="form-group">
                    <label for="inputNumber">Product number</label>
                    <input type="text" class="form-control" id="inputNumber" required>
                </div>

                <div class="form-group">
                    <label for="productDescription" class="form-label">Product description</label>
                    <textarea class="form-control" id="productDescription" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-danger w-100 mt-2">Send request</button>

            </form>
        </div>
    </div>
</div>