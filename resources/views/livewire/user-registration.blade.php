<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h3 align="center">Add Users</h3>
            <form wire:submit.prevent="submit">
            <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" id="regioncode" wire:model='name'>
                </div>
                @error('name')
                <span class='messagestl'>{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label class="form-label">NIC</label>
                    <input type="text" class="form-control" id="regioncode" wire:model='nic'>
                </div>
                @error('nic')
                <span class='messagestl'>{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" id="regioncode" wire:model='address'>
                </div>
                @error('address')
                <span class='messagestl'>{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="text" class="form-control" id="regioncode" wire:model='mobile'>
                </div>
                @error('mobile')
                <span class='messagestl'>{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" id="regioncode" wire:model='email'>
                </div>
                @error('email')
                <span class='messagestl'>{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <select class="form-control" wire:model='gender'>
                        <option>select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Territory</label>
                    <select class="form-control" wire:model='territory'>
                        <option>select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">User Name</label>
                    <input type="text" class="form-control" id="regioncode" wire:model='username'>
                </div>
                @error('username')
                <span class='messagestl'>{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label class="form-label">Password<Code></Code></label>
                    <input type="password" class="form-control" id="regionname" wire:model='password'>
                </div>
                @error('password')
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