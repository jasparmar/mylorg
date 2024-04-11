<?php

namespace App\Models\Admin\auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Register extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin_users';

    public function checkAuthencation($request)
    {
        $requestEmail = $request['email'];
        $requestPassword = $request['password'];
        $admin = DB::table((new static)->getTable())->where([['email', $requestEmail], ['is_allowed', 1]])->first();
        if ($admin) {
            //Check Password
            $passwordStatus = Hash::check($requestPassword, $admin->password);
            if ($passwordStatus) {
                return $admin->id;
            }else{
                return false;
            }
        }
        return false;
    }
}
