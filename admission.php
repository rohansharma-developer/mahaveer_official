<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>School | Mahaveer International School</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<?php include "./includes/header.php"; ?>
  <main id="main">

<section class="hero">
    
</section>


<div style="text-align: center; " class="section-title features">
    <h2 style="font-size: 15px; margin-top: 7%; font-weight: 500;">Our</h2>
    <p>Admissions</p>
    
  </div>

    <!-- ======= About Section ======= -->
    <section style="text-align: center;"  class="text-gray-600 body-font overflow-hidden">
    <div style="margin: 70px 10%;">

    <form class="row g-3 mt-5" action="gen.php" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="row" style="width: 80%;">
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Class to which admission is sort</label>
          <select name="class_admission" class="form-control" id="">
          <option value="I">I</option>
          </select>
        </div>
        <div class="col-6">
          <label for="inputAddress" class="form-label">1. (a) Name of the child</label>
          <input type="text" class="form-control" id="inputAddress" name="name" placeholder="">
        </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label">(b) Gender</label>
          <input type="text" class="form-control" id="inputAddress2" name="gender" placeholder="">
        </div>
        <div class="col-4">
          <label for="inputCity" class="form-label">(c) Date of birth</label>
          <input type="date" class="form-control" id="inputCity" name="dob">
        </div>
        <div class="col-md-4">
            <label for="inputCity" class="form-label">(d) Mother Tongue</label>
            <input type="text" class="form-control" id="inputCity" name="mother_tongue">
          </div>
          <div class="col-md-4">
            <label for="inputCity" class="form-label">(e) Nationality</label>
            <input type="text" class="form-control" id="inputCity" name="nationality">
          </div>
          <div class="col-md-4">
            <label for="inputCity" class="form-label">(f) Religion</label>
            <input type="text" class="form-control" id="inputCity" name="religion">
          </div>
          <div class="col-md-4">
            <label for="inputCity" class="form-label">(g) Category</label>
            <input type="text" class="form-control" id="inputCity" name="category" name="">
          </div>
          <div class="col-md-4">
            <label for="inputCity" class="form-label">(h) Hometown</label>
            <input type="text" class="form-control" id="inputCity" name="hometown">
          </div>
</div>
<div class="col-md-2" style="">
            <label for="inputCity" class="form-label">Upload your photo</label>
            <input type="file" name="image" onchange="readURL(this);" required>
            <img id="img" src="http://placehold.it/413x531" style="margin-left: 1%;width: 213px; height: 431; margin-top: 50px;" alt="your image" />
          </div>
</div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">(i) Aadhaar No. Of Child</label>
            <input type="text" class="form-control" id="inputCity" name="aadhaar">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">(j) Age (optional)</label>
            <input type="text" class="form-control" id="inputCity" name="age">
          </div>
                  <div class="col-md-12">
          <label for="inputCity" class="form-label">(k) Previous school &amp; Place</label>
          <input type="text" class="form-control" id="inputCity" name="pre_school">
        </div>        <div class="col-md-6">
            <label for="inputCity" class="form-label">(l) Class in which studying</label>
            <input type="text" class="form-control" id="inputCity" name="class_studying">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">(m) The Academic year of that school</label>
            <input type="text" class="form-control" id="inputCity" name="academic_year">
          </div>
          <div class="col-md-12">
            <label for="inputCity" class="form-label">2. (a) Present local residence address</label>
            <input type="text" class="form-control" id="inputCity" name="residence_address">
          </div>
          <div class="col-md-12">
            <label for="inputCity" class="form-label">Residence Phone No.</label>
            <input type="text" class="form-control" id="inputCity" name="residence_ph">
          </div>
          <div class="col-md-4">
            <label for="inputCity" class="form-label">2. (b) Father's Name</label>
            <input type="text" class="form-control" id="inputCity" name="f_name">
          </div>
          <div class="col-md-4">
            <label for="inputCity" class="form-label">Profession</label>
            <input type="text" class="form-control" id="inputCity" name="f_profession">
          </div>
          <div class="col-md-4">
            <label for="inputCity" class="form-label">Qualification</label>
            <input type="text" class="form-control" id="inputCity" name="f_qualification">
          </div>
          <div class="col-md-12">
            <label for="inputCity" class="form-label">Office address (father)</label>
            <input type="text" class="form-control" id="inputCity" name="f_office_address">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Office Phone No.</label>
            <input type="text" class="form-control" id="inputCity" name="f_office_ph">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="inputCity" name="f_mobile">
          </div>
          <div class="col-md-4">
            <label for="inputCity" class="form-label">2. (c) Mother's Name</label>
            <input type="text" class="form-control" id="inputCity" name="m_name">
          </div>
          <div class="col-md-4">
            <label for="inputCity" class="form-label">Profession</label>
            <input type="text" class="form-control" id="inputCity" name="m_profession">
          </div>
          <div class="col-md-4">
            <label for="inputCity" class="form-label">Qualifications</label>
            <input type="text" class="form-control" id="inputCity" name="m_qualification">
          </div>
          <div class="col-md-12">
            <label for="inputCity" class="form-label">Office Address (mother)</label>
            <input type="text" class="form-control" id="inputCity" name="m_office_address">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Office Phone No.</label>
            <input type="text" class="form-control" id="inputCity" name="m_office_ph">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="inputCity" name="m_mobile">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">3. (a) Family yearly income from all sources</label>
            <input type="text" class="form-control" id="inputCity" name="family_income">
          </div><div class="col-md-6">
            <label for="inputCity" class="form-label">(b) E-Mail ID</label>
            <input type="email" class="form-control" name="email" id="inputCity">
          </div>
          <div class="col-md-12">
            <label for="inputCity" class="form-label">4. Do you have any other ward studying in Mahaveer, Meerut?</label>
            <select name="other_ward_studying" class="form-control" id="">
            <option value="no" selected>No</option>
            <option value="yes">Yes</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="inputCity" class="form-label">if Yes, Name</label>
            <input type="text" class="form-control" id="inputCity" name="other_student_name">
          </div>
          <div class="col-md-4">
            <label for="inputCity" class="form-label">Class &amp; Section</label>
            <input type="text" class="form-control" id="inputCity" name="other_student_class">
          </div>
          <div class="col-md-4">
            <label for="inputCity" class="form-label">Student No.</label>
            <input type="text" class="form-control" id="inputCity" name="other_student_no">
          </div>
          <div class="col-md-12">
            <label for="inputCity" class="form-label">5. Was either parents a past pupil of Mahaveer International School, Meerut?</label>
            <select name="ex_marian" class="form-control" id="">
            <option value="No" selected>No</option>
            <option value="Yes">Yes</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">If Yes, state year of joining</label>
            <input type="text" class="form-control" id="inputCity" name="ex_marian_joining">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">and year of leaving</label>
            <input type="text" class="form-control" id="inputCity" name="ex_marian_leaving">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">6. Is the child suffering from any disease or sickness? </label>
            <select name="child_disease_confirm" class="form-control" id="">
            <option value="No" selected>No</option>
            <option value="Yes">Yes</option>
            </select>
          </div>
          <div class="col-md-6">
          <label for="" class="form-label">if Yes, name the disease / Sickness</label>
          <input type="text" name="child_disease" class="form-control">
          </div>
          <div class="col-md-12">
            <label for="inputCity" class="form-label">7. Any special reason(s) in favour of your child's admission to this school</label>
            <input type="text" class="form-control" id="inputCity" title="An Apostrophe(') is not allowed" name="special_reason">
          </div>
          <div class="col-md-12" style="display: none;">
            <label for="inputCity" class="form-label">8. Transaction ID</label>
            <input type="text" class="form-control" id="inputCity" name="transaction_id">
          </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" name="submit_form">Submit Form</button>
        </div>
      </form>
</div>

      </section>
    

  </main><!-- End #main -->

  <?php include "./includes/footer.php"; ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>