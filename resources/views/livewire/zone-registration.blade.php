<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h3 align="center">Add Zone</h3>
            <form wire:submit.prevent="submit">
                <div class="mb-3">
                    <label class="form-label">Zone Code</label>
                    <input type="text" class="form-control" id="zonecode" aria-describedby="emailHelp" wire:model='zonecode'>
                </div>
                @error('zonecode')
                <span class='messagestl'>{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label class="form-label">Zone Long Description</label>
                    <input type="text" class="form-control" id="zonelong" wire:model='zonelong'>
                </div>
                <div class="mb-3">
                    <label class="form-label">Short Description</label>
                    <input type="text" class="form-control" id="zoneshort" wire:model='zoneshort'>
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


        
