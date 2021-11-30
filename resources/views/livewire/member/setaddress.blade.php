<div><div class="form-group">
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Country</label>
    <select wire:model='country' class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
        <option selected="selected">Choose...</option>
        <option value="United States">United States</option>
        <option value="Germany">Germany</option>
        <option value="Canada">Canada</option>
        <option value="Jamaica">Jamaica</option>
    </select>
</div>
<div class="form-group mb-4">
    <label for="update-city">City</label> 
    <input wire:model='city' type="text" class="form-control" id="update-city">
</div>
<div class="form-group mb-4">
    <label for="update-state">State</label> 
    <input wire:model='state' type="text" class="form-control" id="update-state">
</div>
<div class="form-group mb-4">
    <label for="update-district">District</label> 
    <input wire:model='district' type="text" class="form-control" id="update-district">
</div>
<div class="form-group mb-4">
    <label for="update-postal">Postal</label> 
    <input wire:model='postal' type="text" class="form-control" id="update-postal">
</div>
@if (!$emptyAddField)
    <button wire:click='save("address")' class="btn btn-pill btn-primary" type="button">
        Update Address
        <span class="ml-1">
            <i class="fas fa-cloud-upload-alt"></i>
        </span>
    </button>
@endif

</div>
