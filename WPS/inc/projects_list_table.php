<?php
if(!class_exists('WP_List_Table')){
    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
}
class project_list_table extends WP_List_Table{
    public function get_columns(){
        return [
            'cb' => '<input type="checkbox" />',
            'id' => 'ردیف',
            'employer' => 'کارفرما',
            'place' => 'مکان',
            'contract' => 'شرح قرارداد',
            'status' =>'آخرین وضعیت',
            'volume' =>'حجم قرارداد',
            'date' =>'تاریخ'
        ];
        // return [
        //     'id'    => 'row',
        //     'name'  => 'first name',
        //     'family'    => 'last name',
        //     'ssss'  => 'ssss121'
        // ];
    }
    public function column_default($item,$column_name){
        if(isset($item[$column_name])){
            return $item[$column_name];
        }
        return '_';
    }
    public function column_employer($item) {
        $actions = [
                'edit'      => '<a href="?page=wps_custom_prj_edit&actions=edit&id='.$item['id'].'">Edit</a>',
                'delete'    => '<a href="?page=wps_custom_prj_edit&actions=delete&id='.$item['id'].'" onclick="return confirm()">Delete</a>',
            ];
      
        return $item['employer']. $this->row_actions($actions) ;
    }
    public function no_items(){
        echo 'موردی یافت نشد';
    }
    public function prepare_items(){
        global $wpdb;

        $per_page = 4;
        $current_page = $this->get_pagenum();
        $offset = ($current_page - 1) * $per_page;

        $results = $wpdb->get_results( "SELECT SQL_CALC_FOUND_ROWS * FROM wp_pk_projects ORDER BY id LIMIT $per_page OFFSET $offset",ARRAY_A);

        $this->_column_headers = array($this->get_columns(),array(),array(),'employer');
        $this->set_pagination_args([
            'total_items' => $wpdb->get_var("SELECT FOUND_ROWS()"),
            'per_page' => $per_page,
        ]);
        $this->items = $results;
    }
    


    // public function column_cb( $item ) {
    //     return sprintf(
    //     '<input type="checkbox" name="bulk-delete[]" value="%s" />', $item['ID']
    //     );
    // }


      
}
