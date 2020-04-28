<?php

namespace Oro\Bundle\UserBundle;

class OroUserEvents
{
    public const PRE_CREATE_GROUP = 'oro.user.pre_create_group';
    public const POST_CREATE_GROUP = 'oro.user.post_create_group';

    public const PRE_UPDATE_GROUP = 'oro.user.pre_update_group';
    public const POST_UPDATE_GROUP = 'oro.user.post_update_group';

    public const PRE_DELETE_GROUP = 'oro.user.pre_delete_group';
    public const POST_DELETE_GROUP = 'oro.user.post_delete_group';
}
