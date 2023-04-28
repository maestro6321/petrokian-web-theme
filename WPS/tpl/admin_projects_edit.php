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