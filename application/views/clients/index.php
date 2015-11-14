<div class="col-md-10">
  <?php
  foreach ($client_info as $category => $value) {
    ?>
    <div>
      <table class="table table-hover table-striped">
        <?php
        if (!empty($value)) {
          $first = true;
          foreach ($value as $key) {
            $second = true;
            $x = 1;
            $columnNames = array_keys($key);
            foreach ($key as $title => $catValue) {
              if ($first && $x == 1 && $second) {
                ?>
                <tr>
                  <th colspan="<?php echo count($columnNames); ?>">
                    <?php echo $category; ?>
                  </th>
                </tr>
                <tr>
                  <?php
                  foreach ($columnNames as $columnName) {
                    ?>

                    <th><?php echo $columnName; ?></th>
                    <?php
                  }
                  ?>
                </tr>
                <tr>
                <td><?php echo $catValue; ?></td>
                <?php
                $first = false;
                $second = false;
              } elseif (!$first && $x == 1 && $second) {
                ?>
                <tr>
                <td><?php echo $catValue; ?></td>
                <?php
                $second = false;
              } elseif ($x < count($key) && !$second) {
                ?>
                <td><?php echo $catValue; ?></td>
                <?php
              } elseif ($x == count($key) && !$second) {
                ?>
                <td><?php echo $catValue; ?></td></tr>
                <tr>
                  <td colspan="<?php echo count($columnNames); ?>" class="pull-right"><span
                      class="glyphicon glyphicon-plus"></span></td>
                </tr>
                <?php
              }
              $x++;
            }
          }
        } else {
          ?>
          <tr>
            <th>
              <?php echo $category; ?>
            </th>
          </tr>
          <tr>
            <td>No items</td>
          </tr>
          <?php
        }
        ?>
      </table>
    </div>
    <?php

  }
  ?>

</div>