<?php
namespace changyuan\umengpush\android;

use changyuan\umengpush\AndroidNotification;

class AndroidBroadcast extends AndroidNotification
{
    public function __construct()
    {
        parent::__construct();
        $this->data["type"] = "broadcast";
    }
}
