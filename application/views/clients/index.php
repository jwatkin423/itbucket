<?php

foreach ($info as $tablename => $fo) {
  $count = count($fo);
  foreach ($fo as $f => $information) {
    $count2 = count($information);
    d($f);
    d($information);
    if ($f == 0) {
      count($information);
      $this->load->view('clients/v_opening_table', $information);
    } elseif ($f == $count) {
      $this->load->view('clients/v_closing_table', $information);
    }
  }
}