<?php

namespace App\Enums;

enum RoleEnum : int
{
   case ADMIN = 1;
   case CUSTOMER = 2;
   case MANAGER = 3;
   case POS_OPERATOR = 4;   
   case STAFF = 5;
}
