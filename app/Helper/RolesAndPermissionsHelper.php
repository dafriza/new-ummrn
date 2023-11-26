<?php
namespace App\Helper;
class RolesAndPermissionsHelper
{
    public $actions = ['create', 'read', 'update', 'delete'];
    public $accesses = [
      'researches',
      'communities_of_practice',
      'projects',
      'my_account',
      'manage_researches',
      'manage_communities_of_practice',
      'manage_projects',
      'manage_account',
    ];
    public $roles = [
      'superadmin',
      'student',
      'lecture',
    ];
    public $permissions = [];

    function linkPermissions()
    {
        foreach ($this->accesses as $key_access => $access) {
            foreach ($this->actions as $key_action => $action) {
                $this->permissions[$access][] = $action . ' ' . $access;
            }
        }
        return $this->permissions;
    }

}
