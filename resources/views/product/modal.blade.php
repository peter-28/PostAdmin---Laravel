<div class="modal fade text-left" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" pointer>
                    <i class="bi bi-x"></i>
                </button>
            </div>
            <form action="{{ route('product.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <label>Nama : </label>
                    <div class="form-group">
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <label>Qty : </label>
                    <div class="form-group">
                        <input type="number" id="qty" name="qty" class="form-control">
                    </div>
                    <label>Price : </label>
                    <div class="form-group">
                        <input type="number" id="price" name="price" class="form-control">
                    </div>
                    <label>Description : </label>
                    <div class="form-group">
                        <input type="text" id="description" name="description" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary mr-1"><i class="bx bx-save mt"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
