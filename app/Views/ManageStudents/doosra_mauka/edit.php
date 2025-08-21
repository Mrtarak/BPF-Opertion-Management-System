<?= view('includes/header'); ?>
<?= view('includes/navbar'); ?>

<div class="container-fluid page-body-wrapper">
    <?= view('includes/sidebar'); ?>

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

          <?= view('includes/breadcrumb'); ?>

            <h4 class="card-title">Edit Student</h4>
            <form id="editStudentForm" action="<?= site_url('students/doosra_mauka/edit') ?>" method="post" enctype="multipart/form-data" id="editStudentForm">

                <!-- Tabs -->
                <ul class="nav nav-tabs" id="studentTabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal Info</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#program">Program</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#mentor">Mentor</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#family">Family</a></li>
                </ul>

                <div class="tab-content mt-3">

                    <!-- PERSONAL INFO TAB -->
                    <div class="tab-pane fade show active" id="personal">
                        <div class="row">
                            <div class="col-md-4 mb-3"><label>First Name <span class="text-danger">*</span></label>
                                <input type="text" name="First_Name" class="form-control" value="<?= old('First_Name') ?>">
                            </div>
                            <div class="col-md-4 mb-3"><label>Last Name <span class="text-danger">*</span></label>
                                <input type="text" name="Last_Name" class="form-control" value="<?= old('Last_Name') ?>">
                            </div>
                            <div class="col-md-4 mb-3"><label>Gender <span class="text-danger">*</span></label>
                                <select name="Gender" class="form-control">
                                    <option value="">-- Select --</option>
                                    <option <?= old('Gender','Male') ?>>Male</option>
                                    <option <?= old('Gender','Female') ?>>Female</option>
                                    <option <?= old('Gender','Other') ?>>Other</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3"><label>Date of Birth <span class="text-danger">*</span></label>
                                <input type="date" name="DOB" class="form-control" value="<?= old('DOB') ?>">
                            </div>
                                                <div class="col-md-6 mb-3"><label>Caste <span class="text-danger">*</span></label><input type="text" class="form-control" name="caste"></div>
                            <div class="col-md-4 mb-3"><label>Aadhar No</label>
                                <input type="text" name="Aadhar_No" class="form-control" value="<?= old('Aadhar_No') ?>">
                            </div>
                            <div class="col-md-4 mb-3"><label>Phone <span class="text-danger">*</span></label>
                                <input type="text" name="Phone_No" class="form-control" value="<?= old('Phone_No') ?>">
                            </div>
                            <div class="col-md-4 mb-3"><label>Email </label>
                                <input type="email" name="Email_Id" class="form-control" value="<?= old('Email_Id') ?>">
                            </div>
                            <div class="col-md-4 mb-3"><label>City/Village <span class="text-danger">*</span></label>
                                <input type="text" name="Village_City" class="form-control" value="<?= old('Village_City') ?>">
                            </div>
                            <div class="col-md-4 mb-3"><label>District <span class="text-danger">*</span></label>
                                <input type="text" name="District" class="form-control" value="<?= old('District') ?>">
                            </div>
                            <div class="col-md-4 mb-3"><label>State <span class="text-danger">*</span></label>
                                <input type="text" name="State" class="form-control" value="<?= old('State') ?>">
                            </div>
                            <div class="col-md-4 mb-3"><label>Pincode <span class="text-danger">*</span></label>
                                <input type="text" name="Pincode" class="form-control" value="<?= old('Pincode') ?>">
                            </div>
                            <div class="col-md-4 mb-3"><label>Nationality <span class="text-danger">*</span></label>
                                <input type="text" name="Nationality" class="form-control" value="<?= old('Nationality') ?>">
                            </div>
                            <div class="col-md-12 mb-3"><label>Address <span class="text-danger">*</span></label>
                                <textarea name="Address" class="form-control" value="<?= old('Address') ?>"></textarea>
                            </div>
                            <div class="col-md-4 mb-3"><label>Photo </label>
                                <input type="file" name="Photo_URL" class="form-control">
                            </div>
                            <div class="col-md-4 mb-3"><label>Aadhar Photo</label>
                                <input type="file" name="Aadhar_Photo_URL" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3"><label>Remarks</label>
                                <textarea name="Remarks" class="form-control" value="<?= old('Remarks') ?>"></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end"><button type="button" class="btn btn-primary next-tab">Next</button></div>
                    </div>

                <!-- Education Info -->
<div class="tab-pane fade" id="education">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Course Enrolled In <span class="text-danger">*</span></label>
            <select name="Course_Enrolled" class="form-control" required>
                <option value="">-- Select Course --</option>
                <option <?= old('Course_Enrolled','B.Sc') ?>>B.Sc</option>
                <option <?= old('Course_Enrolled','B.A') ?>>B.A</option>
                <option <?= old('Course_Enrolled','B.Com') ?>>B.Com</option>
                <option <?= old('Course_Enrolled','Engineering') ?>>Engineering</option>
                <option <?= old('Course_Enrolled','Diploma') ?>>Diploma</option>
                <option <?= old('Course_Enrolled','Other') ?>>Other</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label>Current Education Level <span class="text-danger">*</span></label>
            <input type="text" name="Current_Education_level" class="form-control" value="<?= old('Current_Education_level') ?>">
        </div>
        <div class="col-md-6 mb-3">
            <label>Highest Education Completed</label>
            <input type="text" name="Highest_Education_Completed" class="form-control" value="<?= old('Highest_Education_Completed') ?>">
        </div>
        <div class="col-md-6 mb-3">
            <label>Student Status <span class="text-danger">*</span></label>
            <select name="Student_Status" class="form-control">
                <option value="">-- Select --</option>
                <option <?= old('Student_Status','Active') ?>>Active</option>
                <option <?= old('Student_Status','Inactive') ?>>Inactive</option>
                <option <?= old('Student_Status','Completed') ?>>Completed</option>
            </select>
        </div>
                        <div class="col-md-6 mb-3">
            <label>Course Status <span class="text-danger">*</span></label>
            <select name="Course_Status" class="form-control">
                <option value="">-- Select --</option>
                <option <?= old('Course_Status','Ongoing') ?>>Ongoing</option>
                <option <?= old('Course_Status','Completed') ?>>Completed</option>
            </select>
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <button type="button" class="btn btn-secondary prev-tab">Previous</button>
        <button type="button" class="btn btn-primary next-tab">Next</button>
    </div>
</div>

                <!-- Program Info -->
<div class="tab-pane fade" id="program">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Program </label>
            <input type="text" class="form-control" name="Program_Name" value="Doosra Mauka" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label>Enrollment Date <span class="text-danger">*</span></label>
            <input type="date" name="Enrollment_Date" class="form-control" value="<?= old('Enrollment_Date') ?>">
        </div>
        <div class="col-md-12 mb-3">
            <label>Already Program Enrolled In</label>
            <input type="text" class="form-control" name="Already_Program" value="<?= $alreadyProgram ?? '' ?>" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label>Program Level </label>
            <input type="text" class="form-control" name="Program_Level" value="Primary" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label>Already Program Level <span class="text-danger">*</span></label>
            <select name="Already_Program_Level" class="form-select" required>
                <option value="">Select</option>
                <option <?= old('Already_Program_Level','Primary') ?>>Primary</option>
                <option <?= old('Already_Program_Level','Secondary') ?>>Secondary</option>
            </select>
        </div>
    </div>
<div class="d-flex justify-content-between">
    <button type="button" class="btn btn-secondary prev-tab">Previous</button>
    
    <!-- Multi-time submit -->
    <button type="submit" name="save_tab" value="mentor" class="btn btn-success">
        Save & Submit
    </button>
    
    <button type="button" class="btn btn-primary next-tab">Next</button>
</div>
</div>
<!-- Mentor Info -->
<div class="tab-pane fade" id="mentor" role="tabpanel">

    <?php $mentorCategories = include(APPPATH . 'Config/mentor_categories.php'); ?>
    <h5 class="text-primary">Primary Mentor</h5>
    <div class="row border p-3 mb-3">
        <div class="col-md-6 mb-3">
            <label>Mentor Name <span class="text-danger">*</span></label>
            <select class="form-control" name="Mentor_Id">
                <option value="">-- Select Mentor --</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label>Mentor Category *</label>
            <select class="form-control" name="primary_mentor_category" required>
                <option value="">-- Select Category --</option>
                <?php foreach ($mentorCategories as $cat): ?>
                    <option value="<?= esc($cat) ?>"><?= esc($cat) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label>Mentor Type <span class="text-danger">*</span></label>
            <select class="form-control" name="Mentor_Type">
                <option value="">-- Select Type --</option>
                <option <?= old('Mentor_Type','Primary') ?>>Primary</option>
                <option <?= old('Mentor_Type','Secondary') ?>>Secondary</option>
            </select>
        </div>
                <div class="col-md-6 mb-3">
            <label>From Date <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="Mentor_From_Date" value="<?= old('Mentor_From_Date') ?>">
        </div>
        <div class="col-md-6 mb-3">
            <label>To Date</label>
            <input type="date" class="form-control" name="Mentor_To_Date" value="<?= old('Mentor_To_Date') ?>">
        </div>
</div>        
        <h5 class="text-primary">Secondary Mentor</h5>
    <div class="row border p-3 mb-3">
      <div class="col-md-6 mb-3">
            <label>Mentor Name</label>
            <select class="form-control" name="secondary_mentor_name">
                <option value="">-- Select Mentor --</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label>Mentor Category *</label>
            <select class="form-control" name="primary_mentor_category" required>
                <option value="">-- Select Category --</option>
                <?php foreach ($mentorCategories as $cat): ?>
                    <option value="<?= esc($cat) ?>"><?= esc($cat) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
                <div class="col-md-6 mb-3">
            <label>Mentor Type <span class="text-danger">*</span></label>
            <select class="form-control" name="Mentor_Type">
                <option value="">-- Select Type --</option>
                <option <?= old('Mentor_Type','Primary') ?>>Primary</option>
                <option <?= old('Mentor_Type','Secondary') ?>>Secondary</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label>From Date <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="Mentor_From_Date" value="<?= old('Mentor_From_Date') ?>">
        </div>
        <div class="col-md-6 mb-3">
            <label>To Date</label>
            <input type="date" class="form-control" name="Mentor_To_Date" value="<?= old('Mentor_To_Date') ?>">
        </div>
    </div>
<div class="d-flex justify-content-between">
    <button type="button" class="btn btn-secondary prev-tab">Previous</button>
    <button type="submit" name="save_tab" value="mentor" class="btn btn-success">Save & Submit</button>    
    <button type="button" class="btn btn-primary next-tab">Next</button>
    </div>
</div>
                <!-- Family Info -->
                <div class="tab-pane fade" id="family">
                  <div class="row">
                    <div class="col-md-6 mb-3"><label>Father's Name <span class="text-danger">*</span></label><input type="text" class="form-control" name="father_name"></div>
                    <div class="col-md-6 mb-3"><label>Father's Contact <span class="text-danger">*</span></label><input type="text" class="form-control" name="father_contact"></div>
                    <div class="col-md-6 mb-3"><label>Father's Email <span class="text-danger">*</span></label><input type="email" class="form-control" name="father_email"></div>
                    <div class="col-md-6 mb-3"><label>Father's Occupation <span class="text-danger">*</span></label><input type="text" class="form-control" name="father_occupation"></div>
                    <div class="col-md-6 mb-3"><label>Mother's Name <span class="text-danger">*</span></label><input type="text" class="form-control" name="mother_name"></div>
                    <div class="col-md-6 mb-3"><label>Mother's Contact <span class="text-danger">*</span></label><input type="text" class="form-control" name="mother_contact"></div>
                    <div class="col-md-6 mb-3"><label>Mother's Email <span class="text-danger">*</span></label><input type="email" class="form-control" name="mother_email"></div>
                    <div class="col-md-6 mb-3"><label>Mother's Occupation <span class="text-danger">*</span></label><input type="text" class="form-control" name="mother_occupation"></div>
                    <div class="col-md-6 mb-3"><label>Family Monthly Income <span class="text-danger">*</span></label><input type="text" class="form-control" name="income"></div>
                    <div class="col-md-6 mb-3"><label>Number of Siblings <span class="text-danger">*</span></label><input type="number" class="form-control" name="siblings"></div>
                  </div>

                <!-- Submit -->
  <div class="mt-4 d-flex justify-content-center flex-wrap gap-3">
                    <a href="<?= site_url('students/doosra_mauka') ?>" class="btn btn-light">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?= view('includes/footer'); ?>

<script>
document.querySelectorAll(".next-tab").forEach(btn => {
    btn.addEventListener("click", function () {
        let active = document.querySelector("#studentTabs .nav-link.active");
        let next = active.parentElement.nextElementSibling?.querySelector(".nav-link");
        if (next) next.click();
    });
});
document.querySelectorAll(".prev-tab").forEach(btn => {
    btn.addEventListener("click", function () {
        let active = document.querySelector("#studentTabs .nav-link.active");
        let prev = active.parentElement.previousElementSibling?.querySelector(".nav-link");
        if (prev) prev.click();
    });
});
// form submit interception
document.querySelectorAll("button[name='save_tab']").forEach(btn => {
    btn.addEventListener("click", function() {
        let form = this.closest("form");
        let tabType = this.value;

        fetch(form.action, {
            method: "POST",
            body: new FormData(form)
        })
        .then(res => res.json())
        .then(data => {
            alert(tabType + " saved successfully!");
        })
        .catch(err => console.error(err));
    });
});
</script>
