<?php

class Tablemappings {

  protected $tables = array(
    'anti_virus_programs' => 'Antivirus Programs',
    'applications' => 'Applications',
    'asps' => 'ASPs',
    'avspam' => 'Email Antivirus and Spam',
    'backup_isp' => 'Backup Internet Service Provider',
    'clients' => 'Clients',
    'clients_documents' => 'Documents',
    'client_domain' => 'Domains',
    'company' => 'Company',
    'company_perm_set' => 'Permissions for Users per client',
    'drac' => 'DRAC (Dell)',
    'firewalls' => 'Firewalls',
    'items_perm_set' => 'Permissions for Users per Category',
    'mlocs' => 'Other Locations',
    'permset' => 'Permession Set',
    'pisp' => "Primary Internet Service Provider",
    'printers' => 'Printers',
    'routers' => 'Routers',
    'servers' => 'Servers',
    'server_accounts' => 'Server Accounts',
    'ssl_vpn' => 'SSL VPN Information',
    'switches' => 'Switches',
    'ups_devices' => 'Uninterrupted Power Supply Devices',
    'users' => 'Users',
    'webmail' => 'Webmail Link(s)',
    'wifi_networks' => 'Wi-Fi Networks'
  );

  public function mapTable($table) {
    return $this->tables[$table];
  }

}