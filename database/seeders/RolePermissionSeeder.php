<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create permissions
        $permissions = [
            [
                'title' => 'Dashboard',
                'name' => 'dashboard',
                'guard_name' => 'web',
                'url' => 'dashboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Products',
                'name' => 'products',
                'guard_name' => 'web',
                'url' => 'products',
                'created_at' => now(),
                'updated_at' => now(),
                'children' => [
                    [
                        'title' => 'Products Create',
                        'name' => 'products_create',
                        'guard_name' => 'web',
                        'url' => 'products/create',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Products Edit',
                        'name' => 'products_edit',
                        'guard_name' => 'web',
                        'url' => 'products/edit',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Products Delete',
                        'name' => 'products_delete',
                        'guard_name' => 'web',
                        'url' => 'products/delete',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Products Show',
                        'name' => 'products_show',
                        'guard_name' => 'web',
                        'url' => 'products/show',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                ]
            ],
            [
                'title' => 'Purchase',
                'name' => 'purchase',
                'guard_name' => 'web',
                'url' => 'purchase',
                'created_at' => now(),
                'updated_at' => now(),
                'children' => [
                    [
                        'title' => 'Purchase Create',
                        'name' => 'purchase_create',
                        'guard_name' => 'web',
                        'url' => 'purchase/create',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Purchase Edit',
                        'name' => 'purchase_edit',
                        'guard_name' => 'web',
                        'url' => 'purchase/edit',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Purchase Delete',
                        'name' => 'purchase_delete',
                        'guard_name' => 'web',
                        'url' => 'purchase/delete',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Purchase Show',
                        'name' => 'purchase_show',
                        'guard_name' => 'web',
                        'url' => 'purchase/show',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                ]
            ],
            [
                'title' => 'Damages',
                'name' => 'damages',
                'guard_name' => 'web',
                'url' => 'damages',
                'created_at' => now(),
                'updated_at' => now(),
                'children' => [
                    [
                        'title' => 'Damage Create',
                        'name' => 'damage_create',
                        'guard_name' => 'web',
                        'url' => 'damages/create',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Damage Edit',
                        'name' => 'damage_edit',
                        'guard_name' => 'web',
                        'url' => 'damages/edit',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Damage Delete',
                        'name' => 'damage_delete',
                        'guard_name' => 'web',
                        'url' => 'damages/delete',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Damage Show',
                        'name' => 'damage_show',
                        'guard_name' => 'web',
                        'url' => 'damages/show',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                ]
            ],
            [
                'title' => 'Stock',
                'name' => 'stock',
                'guard_name' => 'web',
                'url' => 'stock',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Reviews',
                'name' => 'reviews',
                'guard_name' => 'web',
                'url' => 'reviews',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'POS',
                'name' => 'pos',
                'guard_name' => 'web',
                'url' => 'pos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'POS Orders',
                'name' => 'pos-orders',
                'guard_name' => 'web',
                'url' => 'pos-orders',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Online Orders',
                'name' => 'online-orders',
                'guard_name' => 'web',
                'url' => 'online-orders',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Return And Refunds',
                'name' => 'return-and-refunds',
                'guard_name' => 'web',
                'url' => 'return-and-refunds',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Return Orders',
                'name' => 'return-orders',
                'guard_name' => 'web',
                'url' => 'return-orders',
                'created_at' => now(),
                'updated_at' => now(),
                'children' => [
                    [
                        'title' => 'Return Order Create',
                        'name' => 'return_order_create',
                        'guard_name' => 'web',
                        'url' => 'return-orders/create',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Return Order Edit',
                        'name' => 'return_order_edit',
                        'guard_name' => 'web',
                        'url' => 'return-orders/edit',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Return Order Delete',
                        'name' => 'return_order_delete',
                        'guard_name' => 'web',
                        'url' => 'return-orders/delete',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Return Order Show',
                        'name' => 'return_order_show',
                        'guard_name' => 'web',
                        'url' => 'return-orders/show',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                ]
            ],
            [
                'title' => 'Coupons',
                'name' => 'coupons',
                'guard_name' => 'web',
                'url' => 'coupons',
                'created_at' => now(),
                'updated_at' => now(),
                'children' => [
                    [
                        'title' => 'Coupons Create',
                        'name' => 'coupons_create',
                        'guard_name' => 'web',
                        'url' => 'coupons/create',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Coupons Edit',
                        'name' => 'coupons_edit',
                        'guard_name' => 'web',
                        'url' => 'coupons/edit',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Coupons Delete',
                        'name' => 'coupons_delete',
                        'guard_name' => 'web',
                        'url' => 'coupons/delete',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Coupons Show',
                        'name' => 'coupons_show',
                        'guard_name' => 'web',
                        'url' => 'coupons/show',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                ]
            ],
            [
                'title' => 'Promotions',
                'name' => 'promotions',
                'guard_name' => 'web',
                'url' => 'promotions',
                'created_at' => now(),
                'updated_at' => now(),
                'children' => [
                    [
                        'title' => 'Promotions Create',
                        'name' => 'promotions_create',
                        'guard_name' => 'web',
                        'url' => 'promotions/create',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Promotions Edit',
                        'name' => 'promotions_edit',
                        'guard_name' => 'web',
                        'url' => 'promotions/edit',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Promotions Delete',
                        'name' => 'promotions_delete',
                        'guard_name' => 'web',
                        'url' => 'promotions/delete',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Promotions Show',
                        'name' => 'promotions_show',
                        'guard_name' => 'web',
                        'url' => 'promotions/show',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                ]
            ],
            [
                'title' => 'Product Sections',
                'name' => 'product-sections',
                'guard_name' => 'web',
                'url' => 'product-sections',
                'created_at' => now(),
                'updated_at' => now(),
                'children' => [
                    [
                        'title' => 'Product Sections Create',
                        'name' => 'product-sections_create',
                        'guard_name' => 'web',
                        'url' => 'product-sections/create',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Product Sections Edit',
                        'name' => 'product-sections_edit',
                        'guard_name' => 'web',
                        'url' => 'product-sections/edit',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Product Sections Delete',
                        'name' => 'product-sections_delete',
                        'guard_name' => 'web',
                        'url' => 'product-sections/delete',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Product Sections Show',
                        'name' => 'product-sections_show',
                        'guard_name' => 'web',
                        'url' => 'product-sections/show',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                ]
            ],
            [
                'title' => 'Push Notifications',
                'name' => 'push-notifications',
                'guard_name' => 'web',
                'url' => 'push-notifications',
                'created_at' => now(),
                'updated_at' => now(),
                'children' => [
                    [
                        'title' => 'Push Notifications Create',
                        'name' => 'push-notifications_create',
                        'guard_name' => 'web',
                        'url' => 'push-notifications/create',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Push Notifications Edit',
                        'name' => 'push-notifications_edit',
                        'guard_name' => 'web',
                        'url' => 'push-notifications/edit',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Push Notifications Delete',
                        'name' => 'push-notifications_delete',
                        'guard_name' => 'web',
                        'url' => 'push-notifications/delete',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Push Notifications Show',
                        'name' => 'push-notifications_show',
                        'guard_name' => 'web',
                        'url' => 'push-notifications/show',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                ]
            ],
            [
                'title' => 'Subscribers',
                'name' => 'subscribers',
                'guard_name' => 'web',
                'url' => 'subscribers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Administrators',
                'name' => 'administrators',
                'guard_name' => 'web',
                'url' => 'administrators',
                'created_at' => now(),
                'updated_at' => now(),
                'children' => [
                    [
                        'title' => 'Administrators Create',
                        'name' => 'administrators_create',
                        'guard_name' => 'web',
                        'url' => 'administrators/create',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Administrators Edit',
                        'name' => 'administrators_edit',
                        'guard_name' => 'web',
                        'url' => 'administrators/edit',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Administrators Delete',
                        'name' => 'administrators_delete',
                        'guard_name' => 'web',
                        'url' => 'administrators/delete',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Administrators Show',
                        'name' => 'administrators_show',
                        'guard_name' => 'web',
                        'url' => 'administrators/show',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                ]
            ],
            [
                'title' => 'Customers',
                'name' => 'customers',
                'guard_name' => 'web',
                'url' => 'customers',
                'created_at' => now(),
                'updated_at' => now(),
                'children' => [
                    [
                        'title' => 'Customers Create',
                        'name' => 'customers_create',
                        'guard_name' => 'web',
                        'url' => 'customers/create',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Customers Edit',
                        'name' => 'customers_edit',
                        'guard_name' => 'web',
                        'url' => 'customers/edit',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Customers Delete',
                        'name' => 'customers_delete',
                        'guard_name' => 'web',
                        'url' => 'customers/delete',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Customers Show',
                        'name' => 'customers_show',
                        'guard_name' => 'web',
                        'url' => 'customers/show',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                ]
            ],
            [
                'title' => 'Employees',
                'name' => 'employees',
                'guard_name' => 'web',
                'url' => 'employees',
                'created_at' => now(),
                'updated_at' => now(),
                'children' => [
                    [
                        'title' => 'Employees Create',
                        'name' => 'employees_create',
                        'guard_name' => 'web',
                        'url' => 'employees/create',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Employees Edit',
                        'name' => 'employees_edit',
                        'guard_name' => 'web',
                        'url' => 'employees/edit',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Employees Delete',
                        'name' => 'employees_delete',
                        'guard_name' => 'web',
                        'url' => 'employees/delete',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Employees Show',
                        'name' => 'employees_show',
                        'guard_name' => 'web',
                        'url' => 'employees/show',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                ]
            ],
            [
                'title' => 'Transactions',
                'name' => 'transactions',
                'guard_name' => 'web',
                'url' => 'transactions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sales Report',
                'name' => 'sales-report',
                'guard_name' => 'web',
                'url' => 'sales-report',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Products Report',
                'name' => 'products-report',
                'guard_name' => 'web',
                'url' => 'products-report',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Credit Balance Report',
                'name' => 'credit-balance-report',
                'guard_name' => 'web',
                'url' => 'credit-balance-report',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Settings',
                'name' => 'settings',
                'guard_name' => 'web',
                'url' => 'settings',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        $i = 1;
        $buildArray = [];
        if (count($permissions) > 0) {
            foreach ($permissions as $arr) {
                if (isset($arr['children'])) {
                    $children = $arr['children'];
                    unset($arr['children']);

                    $arr['ulid'] = \Illuminate\Support\Str::ulid();
                    $arr['parent'] = 0;
                    $buildArray[$i] = $arr;
                    $parentId = $i;
                    $i++;
                    foreach ($children as $child) {
                        $child['ulid'] = \Illuminate\Support\Str::ulid();
                        $child['parent'] = $parentId;
                        $buildArray[$i] = $child;
                        $i++;
                    }
                } else {
                    $arr['ulid'] = \Illuminate\Support\Str::ulid();
                    $arr['parent'] = 0;
                    $buildArray[$i] = $arr;
                    $i++;
                }
            }
        }
        \DB::table('permissions')->insert($buildArray);

        \DB::table('roles')->insert([
            [
                'ulid' => \Illuminate\Support\Str::ulid(),
                'name' => RoleEnum::ADMIN->value,
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ulid' => \Illuminate\Support\Str::ulid(),
                 'name' => RoleEnum::CUSTOMER->value,
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ulid' => \Illuminate\Support\Str::ulid(),
                'name' => RoleEnum::MANAGER->value,
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ulid' => \Illuminate\Support\Str::ulid(),
                'name' => RoleEnum::POS_OPERATOR->value,
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ulid' => \Illuminate\Support\Str::ulid(),
                'name' => RoleEnum::STAFF->value,
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


        $adminRole = Role::find(RoleEnum::ADMIN->value);
        $adminRole?->givePermissionTo(Permission::all());

        $branchManager = Role::where('name', RoleEnum::MANAGER->value)->first();
        if ($branchManager) {
            $branchManagerPermissions = [
                ['name' => 'dashboard'],
                ['name' => 'pos'],
                ['name' => 'pos-orders'],
                ['name' => 'online-orders'],
                ['name' => 'push-notifications'],
                ['name' => 'push-notifications_create'],
                ['name' => 'push-notifications_edit'],
                ['name' => 'push-notifications_delete'],
                ['name' => 'push-notifications_show'],
                ['name' => 'subscribers'],
                ['name' => 'customers'],
                ['name' => 'customers_create'],
                ['name' => 'customers_edit'],
                ['name' => 'customers_delete'],
                ['name' => 'customers_show'],
                ['name' => 'employees'],
                ['name' => 'employees_create'],
                ['name' => 'employees_edit'],
                ['name' => 'employees_delete'],
                ['name' => 'employees_show'],
                ['name' => 'transactions'],
                ['name' => 'sales-report']
            ];
            $branchManagerPermissions = Permission::whereIn('name', $branchManagerPermissions)->get();
            $branchManager->givePermissionTo($branchManagerPermissions);
        }

        $posOperatorManager = Role::find(4);
        if ($posOperatorManager) {
            $posOperatorManagerPermissions = [
                ['name' => 'dashboard'],
                ['name' => 'pos'],
                ['name' => 'pos-orders']
            ];
            $posOperatorManagerPermissions = Permission::whereIn('name', $posOperatorManagerPermissions)->get();
            $posOperatorManager->givePermissionTo($posOperatorManagerPermissions);
        }




    }
}
