<div class="container-fluid">
    <form wire:submit="Addcustomer">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model="name">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mobile number</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model="mobile">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model="email">
          </div>
        
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" wire:model="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model="address">
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Gender</label>
        <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" wire:model="gender" value="male">
            <label class="form-check-label" for="flexRadioDefault1">
              male
            </label>
          </div>
          <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" wire:model="gender" value="female">
            <label class="form-check-label" for="flexRadioDefault2">
              female
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>