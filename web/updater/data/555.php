<?php
$this->dbs->query("SELECT value FROM `:prefix_settings` WHERE setting = 'config.enablesteamlogin'");
$data = $this->dbs->single();

if (!$data['value']) {
    $this->dbs->query("INSERT INTO `:prefix_settings` (`setting`, `value`) VALUES ('config.enablesteamlogin', '0')");
    $this->dbs->execute();
}

return true;
