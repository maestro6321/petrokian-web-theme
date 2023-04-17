<div class="wrap">
    <?php
    define('wps_dir',trailingslashit( plugin_dir_path(__FILE__) ));
    define('wps_inc',trailingslashit( wps_dir.'inc' ));
    require(wps_inc."projects_list_table.php");
    // var_dump(class_exists('project_list_table'));
    $projectlist = new project_list_table();
    $projectlist->prepare_items();
    $projectlist->display();
    return;
    ?>
</div>