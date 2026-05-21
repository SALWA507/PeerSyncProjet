<?php

declare(strict_types=1);

enum Status:string
{
    case PENDING = 'pending';

    case ASSIGNED = 'assigned';

    case RESOLVED = 'resolved';
}