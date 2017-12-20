<?php
namespace changyuan\umengpush\ios;

use changyuan\umengpush\IOSNotification;

class IOSBroadcast extends IOSNotification
{
    public function __construct()
    {
        parent::__construct();
        $this->data["type"] = "broadcast";
    }
}
