<div>
    <div class="container mt-5">
        <div class="container d-flex justify-content-center">
            <div id="" class="card w-50 " style="box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.266);">
              <div class="card-header" style="background-color: #1b1b1e">
                  <h3 class="text-center m-2 " style="color: #faa916">Edit {{ $this->equipment->name }}'s Details</h3>
              </div>
              @csrf
              <div class="card-body">
                <div class="form-floating mb-3">
                  <input type="text" name="name" class="form-control" wire:model.defer="name" >
                  <label for="name">Name</label>  
                </div>
                  <div class="form-floating mb-3">
                    <input type="number" name="quantity" class="form-control" wire:model.defer="stocks">
                    <label for="quantity">Stocks</label>
                  </div>
                  <div class="form-floating mb-3">
                    <textarea class="form-control" name="" id="" rows="3" wire:model.defer="description"></textarea>
                    <label for="description">Description</label>
                    </div>
                    
                 
                <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-center mt-3">
                  <button id="" class="btn w-25 btn-info" type="submit" style="background-color: #1b1b1e; color: #faa916;" wire:click="saveChanges()">Save Changes</button>
                  <a id="" class="btn w-25 btn-secondary text-light" type="submit" wire:click="" href="{{ route('admin-index')}}">Back</a>
                </div>
              </div>
            </form>
          </div>
    </div>
</div>
