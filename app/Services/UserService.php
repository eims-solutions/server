<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

class UserService
{
    public function list(int $perPage = 20): LengthAwarePaginator
    {
        return User::query()
            ->with(['roles'])
            ->latest()
            ->paginate($perPage);
    }
}
