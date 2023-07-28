<form action="{{url('password-update')}}" method="post">
@csrf
    <input type="hidden" name="session_id" value="{{base64_encode(session('user')->id)}}">
    <label for="current_password" class="control-label">Current Password</label>
    <input type="password" name="current_password" class="form-control">


    <label for="new_password" class="control-label">New Password</label>
    <input type="password" name="new_password" class="form-control">


    <label for="confirm_password" class="control-label">Confirm Password</label>
    <input type="password" name="confirm_password" class="form-control">

    <br>
    <button type="submit" class="btn btn-primary btn-sm pull-right">Change Password</button>
</form>