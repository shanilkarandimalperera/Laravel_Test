<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h3 align="center">Add SKU</h3>
            <form wire:submit.prevent="submit">
            <div class="mb-3">
                    <label class="form-label">SKU ID</label>
                    <input type="text" class="form-control" id="regioncode" wire:model='skuid'>
                </div>
                @error('skuid')
                <span class='messagestl'>{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label class="form-label">SKU Code</label>
                    <input type="text" class="form-control" id="regioncode" wire:model='skucode'>
                </div>
                @error('skucode')
                <span class='messagestl'>{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label class="form-label">SKU Name</label>
                    <input type="text" class="form-control" id="regioncode" wire:model='skuname'>
                </div>
                @error('skuname')
                <span class='messagestl'>{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label class="form-label">MRP</label>
                    <input type="text" class="form-control" id="regioncode" wire:model='mrp'>
                </div>
                @error('mrp')
                <span class='messagestl'>{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label class="form-label">Distributed Price</label>
                    <input type="text" class="form-control" id="regioncode" wire:model='distributedprice'>
                </div>
                @error('distributedprice')
                <span class='messagestl'>{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label class="form-label">Weight/Volume</label>
                    <input type="text" class="form-control" id="regioncode" wire:model='weight'>
                </div>
                @error('weight')
                <span class='messagestl'>{{$message}}</span>
                @enderror
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