<div class="container" style="padding-bottom:40px";>
    <div class="row">
        <div style="width:100%; padding-top:40px;">
            <h2>Login Here!</h2>
            <hr />
        </div>
        <div class="col-lg-6">
            <div class="text-container">
                {{-- @if ($errors->any())
                    <button class="alert alert-danger mb-3">Check your credentials!</button>
                @endif --}}
                <form wire:submit.prevent="auth">
                    @csrf
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" class="form-control" wire:model="username">
                        <div class="help-block with-errors"></div>
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" wire:model="password">
                        <div class="help-block with-errors"></div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class="form-control-submit-button" style="float:left; width:50%;">
                            LOGIN</button>
                    </div>
                </form>
            </div> <!-- end of text-container -->
        </div> <!-- end of col -->
    </div> <!-- end of row -->
</div> <!-- end of container -->
