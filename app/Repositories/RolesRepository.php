<?php
/**
 * Created by PhpStorm.
 * User: 08417523464
 * Date: 14/07/2016
 * Time: 17:52
 */

namespace App\Repositories;


use App\Repositories\Eloquent\Repository;

class RolesRepository extends Repository {

    public function model() {
        return 'App\Role';
    }

}