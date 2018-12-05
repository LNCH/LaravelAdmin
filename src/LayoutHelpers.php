<?php

namespace Lnch\LaravelAdmin;

class LayoutHelpers
{
    public function updateCounter($navItem, $count)
    {
        config(["laravel-admin.main_navigation.$navItem.counter" => $count]);
    }
}
