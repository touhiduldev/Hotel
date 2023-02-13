<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Roles

        $roleSuperAdmin = Role::create(['name' => 'SuperAdmin']);
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleModerator = Role::create(['name' => 'Moderator']);
        $roleEditor = Role::create(['name' => 'Editor']);
        $roleUser = Role::create(['name' => 'User']);

        // Permission List as Array

        $permissions = [

            [
                'group_name' => 'Dashboard',
                'permissions' => [
                    'dashboard.view',
                ]
            ],

            [
                'group_name' => 'Admin',
                'permissions' => [
                    'admin.create',
                    'admin.view',
                    'admin.edit',
                    'admin.delete',
                    'admin.approve',
                ]
            ],

            [
                'group_name' => 'Role',
                'permissions' => [
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    'role.approve',
                ]
            ],

            [
                'group_name' => 'Profile',
                'permissions' => [
                    'profile.view',
                    'profile.edit',
                ]
            ],

            [
                'group_name' => 'Dashboard Menu',
                'permissions' => [
                    'menu.list.view',
                ]
            ],

            [
                'group_name' => 'User',
                'permissions' => [
                // user list
                    'add.user',
                    'user.list.view',
                    'delete.button',
                ]
            ],

            [
                'group_name' => 'Header',
                'permissions' => [
                // header section
                    'add.logo',
                    'logo.list.view',
                    'logo.delete',
                    'add.email.opening',
                    'email.opening.view',
                    'email.opening.delete',
                ]
            ],

            [
                'group_name' => 'Header Menu',
                'permissions' => [
                // category section
                    'add.category',
                    'category.list.view',
                    'category.delete',
                // subcategory section
                    'add.subcategory',
                    'subcategory.list.view',
                    'subcategory.delete',
                ]
            ],

            [
                'group_name' => 'Banner',
                'permissions' => [
                // banner section
                    'add.banner',
                    'banner.list.view',
                    'banner.edit',
                    'banner.delete',
                ]
            ],

            [
                'group_name' => 'Story',
                'permissions' => [
                // story section
                    'add.story',
                    'story.list.view',
                    'story.edit',
                    'story.delete',
                ]
            ],

            [
                'group_name' => 'food',
                'permissions' => [
                // food menu section
                    'add.food.category',
                    'food.category.view',
                    'food.category.edit',
                    'food.category.delete',
                // food item
                    'add.food.item',
                    'food.item.list.view',
                    'edit.food.item',
                    'delete.food.item',
                //  food menu section
                    'add.food.menu',
                    'food.menu.list.view',
                    'food.menu.edit',
                    'food.menu.delete',
                // number person
                    'add.number.people',
                    'number.people.list.view',
                    'delete.number.people',
                // booking type
                    'add.booking.type',
                    'booking.type.list.view',
                    'delete.booking.type',
                ]
            ],

            [
                'group_name' => 'Product',
                'permissions' => [
                // Product category
                    'add.product.category',
                    'product.category.list.view',
                    'product.category.edit',
                    'product.category.delete',
                // Product subcategory
                    'add.product.subcategory',
                    'product.subcategory.list.view',
                    'product.subcategory.edit',
                    'product.subcategory.delete',
                // Product section
                    'add.product',
                    'product.list.view',
                    'product.edit',
                    'product.delete',
                ]
            ],

            [
                'group_name' => 'Weekly menu',
                'permissions' => [
                // weekly special left section
                    'add.weekly.left.menu',
                    'left.menu.list.view',
                    'left.menu.edit',
                    'left.menu.delete',
                // weekly special Right section
                    'add.weekly.right.menu',
                    'right.menu.list.view',
                    'right.menu.edit',
                    'right.menu.delete',
                ]
            ],

            [
                'group_name' => 'Breakfast',
                'permissions' => [
                // Breakfast item
                    'add.breakfast',
                    'breakfast.list.view',
                    'breakfast.delete',
                ]
            ],

            [
                'group_name' => 'Promotion',
                'permissions' => [
                // top Promotion section
                    'add.top.promotion',
                    'view.top.promotion',
                    'delete.top.promotion',
                // top Promotion section
                    'add.bottom.promotion',
                    'view.bottom.promotion',
                    'delete.bottom.promotion',
                ]
            ],

            [
                'group_name' => 'Testimonial',
                'permissions' => [
                // testimonial section
                    'add.testimonial',
                    'view.testimonial',
                    'delete.testimonial',
                ]
            ],

            [
                'group_name' => 'Discount',
                'permissions' => [
            // Discount section
                'add.discount',
                'view.discount.list',
                'delete.discount',
                ]
            ],

            [
                'group_name' => 'Blog',
                'permissions' => [
            // Blog heading section
                'add.blog.heading',
                'view.blog.heading',
                'delete.blog.heading',
            // blog category section
                'add.blog.category',
                'view.blog.category',
                'delete.blog.category',
            // Blog section
                'add.blog',
                'view.blog.list',
                'edit.blog',
                'delete.blog',
                ]
            ],

        ];

        // Role Assign
        // Permission::create(['name' => 'dashboard.view']);

        for ($i=0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j=0; $j < count($permissions[$i]['permissions']); $j++) {
            // create permission
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup]);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);
            }
        }
    }
}
