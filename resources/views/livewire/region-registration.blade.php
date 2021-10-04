<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h3 align="center">Add Region</h3>
            <form wire:submit.prevent="submit">
                <div class="mb-3">
                    <label class="form-label">Zone</label>
                    <select class="form-control" wire:model='zone'>
                        <option>select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Region code</label>
                    <input type="text" class="form-control" id="regioncode" wire:model='regioncode'>
                </div>
                <div class="mb-3">
                    <label class="form-label">Region Name<Code></Code></label>
                    <input type="text" class="form-control" id="regionname" wire:model='regionname'>
                </div>
                <br>
                <button type="submit" class="btn btn-success col-sm-4">Save</button>
                <br>
            </form>
        </div>
    </div>
    @if(session()->has('success'))
            <div class="alert alert-success" align="center">{{session('success')}}</div>
            @endif
</div>