<?php

namespace App\Http\Filters;
use Illuminate\Database\Eloquent\Builder;

class UserFilter extends AbstractFilter
{
    public const CITY = 'city_id';
    public const ROLE = 'role_id';
    public const NAME = 'name';


    protected function getCallbacks(): array
    {
        return [
            self::CITY => [$this, 'city'],
            self::ROLE => [$this, 'role'],
            self::NAME => [$this, 'orderByName'],
        ];
    }

    public function city(Builder $builder, $value)
    {
        $builder->where('city_id',  $value);
    }

    public function role(Builder $builder, $value)
    {
        $builder->where('role_id', $value);
    }

    public function orderByName(Builder $builder, $value)
    {
        $builder->orderBy('name', $value);
    }
}
