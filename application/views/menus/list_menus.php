<?= $this->load->view('global/content') ?>
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$timenow = now();
foreach ($menus as $row):
    ?>
    <?php if ($row->published == 1) { ?>

        <?php if ($row->dates == 1 && $row->enddate < $timenow) {
            
        } else { ?>

            <?php if ($row->dates == 1 && $row->startdate > $timenow) {
                
            } else { ?>
            <a href="<?= base_url() ?>menus/view_menu/<?= $row->menu_id ?>"><?= $row->menu_title ?></a>

            <?php
            $is_logged_in = $this->session->userdata('is_logged_in');
            $role = $this->session->userdata('role');
            if ($is_logged_in != 0 || $role == 1) {

                echo anchor('admin/edit_menu/' . $row->menu_id, 'edit');
            }
            ?>

            <br/>
            <?php
            }
        }
    }
    ?>

    <?php
endforeach;
?>

<?php
$is_logged_in = $this->session->userdata('is_logged_in');
$role = $this->session->userdata('role');
if ($is_logged_in != 0 || $role == 1) {
    echo "<br/>";
    echo anchor('admin/add_menu/', 'add new menu');
    ?>   
            <br/>
    <?php 
    foreach ($menus as $row):
    if ($row->published >= 0) { ?>

<a href="<?= base_url() ?>admin/edit_menu/<?= $row->menu_id ?>"><?= $row->menu_title ?></a>
    <?php }
    endforeach; ?>
<?php }
?>
