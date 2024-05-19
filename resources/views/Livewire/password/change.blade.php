<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Change Password

                {{--
                @if(Hash::check($current_password, Auth::user()->password))
                    <p>일치</p>
                @else
                    <p>패스워드 불일치</p>
                @endif
                --}}

            </div>
            <div class="panel-body">

                @if(Session::has('password_success'))
                    <div class="alert alert-success">{{Session::get('password_success')}}</div>
                @endif
                @if(Session::has('password_error'))
                    <div class="alert alert-danger">{{Session::get('password_error')}}</div>
                @endif

                <form class="form-horizontal" wire:submit.prevent="changePassword">
                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Current Password</label>
                        <div class="col-md-4">
                            <input type="password" class="form-control input-md" name="current_password"
                            placeholder="current password"
                            wire:model.defer="current_password">
                        </div>
                        @error('current_password')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">new Password</label>
                        <div class="col-md-4">
                            <input type="password" class="form-control input-md" name="new_password"
                            placeholder="new password"
                            wire:model.defer="new_password">
                        </div>
                        @error('new_password')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-4">
                            <input type="password" class="form-control input-md" name="confirm_password"
                            placeholder="confirm password"
                            wire:model.defer="confirm_password">
                        </div>
                        @error('confirm_password')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="" class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">변경</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
