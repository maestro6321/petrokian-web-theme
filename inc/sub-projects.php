<section class="about-top container">
    <table class="table-responsive caption-top table-bordered text-center w-100">
        <caption><p class="text-center">سوابق پروژه های شرکت</p></caption>
        <thead>
        <tr>
          <th scope="col">ردیف</th>
          <th scope="col">کارفرما</th>
          <th scope="col">مکان</th>
          <th scope="col">شرح قرارداد</th>
          <th scope="col">آخرین وضعیت</th>
          <th scope="col">حجم قرارداد</th>
          <th scope="col">تاریخ عقد قرارداد</th>
        </tr>
      </thead>
      <tbody>
      <?php echo get_pk_projects($_GET['id']);?>
      </tbody>
    </table>
  </section>