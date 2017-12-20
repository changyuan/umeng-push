<?php
namespace changyuan\umengpush\ios;

use changyuan\umengpush\IOSNotification;

class IOSGroupcast extends IOSNotification
{
    public function __construct()
    {
        parent::__construct();
        $this->data["type"]   = "groupcast";
        $this->data["filter"] = null;
    }
}
