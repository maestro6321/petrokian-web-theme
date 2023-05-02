<?php
  global $pagenow;
  if($pagenow == 'admin.php' && isset($_GET['page'] )&& $_GET['page'] == 'wps_custom_prj_edit' ){

			if(isset($_GET['actions'] ) && $_GET['actions']=='edit' && $_GET['id']!= null){
        global $wpdb;
        $prj_id=$_GET['id'];
        $table_name=$wpdb->prefix . 'pk_projects';
        $data=$wpdb->get_row("SELECT * FROM $table_name WHERE id=$prj_id");
        if($data){
?>
<div class="wrap" style="direction : rtl;">
<form action="#" method="POST">
  <div class="mb-3">
    <label for="employer" class="form-label">کارفرما</label>
    <input type="text" class="form-control" placeholder="نام کارفرما را وارد کنید" id="employer" name="employer" value="<?php echo($data->employer); ?>" >
  </div>
  <div class="mb-3">
    <label for="place" class="form-label">مکان</label>
    <input type="text" class="form-control" placeholder="نام مکان را وارد کنید" id="place" name="place" value="<?php echo($data->place); ?>" >
  </div>
  <div class="mb-3">
    <label for="contract" class="form-label">شرح قرارداد</label>
    <input type="text" class="form-control" placeholder="شرح قرارداد را وارد کنید" id="contract" name="contract" value="<?php echo($data->contract); ?>" >
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">آخرین وضعیت قرارداد</label>
    <select class="form-select" aria-label="Default select example" id="status" name="status">
      <option selected><?php echo($data->status); ?></option>
      <option value="تکمیل">تکمیل</option>
      <option value="در حال انجام">در حال انجام</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="volume" class="form-label">حجم قرارداد</label>
    <input type="text" class="form-control" placeholder="حجم قرارداد را وارد کنید" id="volume" name="volume" value="<?php echo($data->volume); ?>" >
  </div>
  <div class="mb-3">
    <label for="date" class="form-label">عقد قرارداد تاریخ</label>
    <input type="text" class="form-control" placeholder="تاریخ عقد قرارداد را وارد کنید" id="date" name="date" value="<?php echo($data->date); ?>" >
    <div id="passwordHelpBlock" class="form-text">
    نمونه فرمت ورود تاریخ به صورت 1234/12/12 می باشد
    </div>
  </div>
  <button type="submit" class="btn btn-success" name="save_project">ذخیره</button>
</form>
</div>

<?php
        }else{
          print_r('error');exit;
					//error
				}
      }else{
      ?>
<div class="wrap" style="direction : rtl;">
<form action="#" method="POST">
  <div class="mb-3">
    <label for="employer" class="form-label">کارفرما</label>
    <input type="text" class="form-control" placeholder="نام کارفرما را وارد کنید" id="employer" name="employer" >
  </div>
  <div class="mb-3">
    <label for="place" class="form-label">مکان</label>
    <input type="text" class="form-control" placeholder="نام مکان را وارد کنید" id="place" name="place" >
  </div>
  <div class="mb-3">
    <label for="contract" class="form-label">شرح قرارداد</label>
    <input type="text" class="form-control" placeholder="شرح قرارداد را وارد کنید" id="contract" name="contract" >
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">آخرین وضعیت قرارداد</label>
    <select class="form-select" aria-label="Default select example" id="status" name="status">
      <option selected>یک وضعیت را برای پروژه انتخاب کنید</option>
      <option value="تکمیل">تکمیل</option>
      <option value="در حال انجام">در حال انجام</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="volume" class="form-label">حجم قرارداد</label>
    <input type="text" class="form-control" placeholder="حجم قرارداد را وارد کنید" id="volume" name="volume" >
  </div>
  <div class="mb-3">
    <label for="date" class="form-label">عقد قرارداد تاریخ</label>
    <input type="text" class="form-control" placeholder="تاریخ عقد قرارداد را وارد کنید" id="date" name="date" >
    <div id="passwordHelpBlock" class="form-text">
    نمونه فرمت ورود تاریخ به صورت 1234/12/12 می باشد
    </div>
  </div>
  <button type="submit" class="btn btn-success" name="save_project">ذخیره</button>
</form>
</div>

<?php
}
    }
?>
