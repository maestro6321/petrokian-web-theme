<?php
defined('ABSPATH') || exit;
global $title;
$id =0;
$employer ='';
$place ='';
$contract ='';
$status ='یک وضعیت را برای پروژه انتخاب کنید';
$volume ='';
$date ='';
if($projects){
  $id =$projects->id;
  $employer =$projects->employer;
  $place =$projects->place;
  $contract =$projects->contract;
  $status =$projects->status;
  $volume =$projects->volume;
  $date =$projects->date;
}
echo $title;
?>
<div class="wrap" style="direction : rtl;">
<form action="" method="POST">
  <div class="mb-3">
    <label for="employer" class="form-label">کارفرما</label>
    <input type="text" class="form-control" placeholder="نام کارفرما را وارد کنید" id="employer" name="employer" value="<?php echo esc_attr( $employer ); ?>">
  </div>
  <div class="mb-3">
    <label for="place" class="form-label">مکان</label>
    <input type="text" class="form-control" placeholder="نام مکان را وارد کنید" id="place" name="place" value="<?php echo esc_attr( $place ); ?>">
  </div>
  <div class="mb-3">
    <label for="contract" class="form-label">شرح قرارداد</label>
    <input type="text" class="form-control" placeholder="شرح قرارداد را وارد کنید" id="contract" name="contract" value="<?php echo esc_attr( $contract ); ?>">
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">آخرین وضعیت قرارداد</label>
    <select class="form-select" aria-label="Default select example" id="status" name="status">
      <option selected><?php echo esc_attr( $status ); ?></option>
      <option value="تکمیل">تکمیل</option>
      <option value="در حال انجام">در حال انجام</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="volume" class="form-label">حجم قرارداد</label>
    <input type="text" class="form-control" placeholder="حجم قرارداد را وارد کنید" id="volume" name="volume"value="<?php echo esc_attr( $volume ); ?>" >
  </div>
  <div class="mb-3">
    <label for="date" class="form-label">عقد قرارداد تاریخ</label>
    <input type="text" class="form-control" placeholder="تاریخ عقد قرارداد را وارد کنید" id="date" name="date" value="<?php echo esc_attr( $date ); ?>">
    <div id="passwordHelpBlock" class="form-text">
    نمونه فرمت ورود تاریخ به صورت 1234/12/12 می باشد
    </div>
  </div>
  <input type="hidden" id="id" name="id" value="<?php echo esc_attr( $id ); ?>">
  <button type="submit" class="btn btn-success" name="save_project">ذخیره</button>
</form>
</div>
