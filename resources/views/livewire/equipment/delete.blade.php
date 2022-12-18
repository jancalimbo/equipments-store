<div>
       
    <div class="prompt-messages container col-md-6 offset-md-3 delete-card" style="margin-top: 100px; ">
        <div class="card card-delete " style="box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.266);">
            <div class="card-body card-body-delete">
                <h2 class="text-center">Are you sure you want to remove this item from inventory?
                </h2>
                
            </div>

           
            <div class="card-footer card-footer-delete">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger text-dark" wire:click="delete()">Remove</button>
                    <a class="btn btn-secondary mx-3" wire:click="" href="{{ route('admin-index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
