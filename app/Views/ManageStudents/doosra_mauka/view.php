<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        
        <h4 class="card-title">Doosra Mauka - Student Details</h4>
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal Info</a></li>
          <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#education">Education</a></li>
          <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#program">Program</a></li>
          <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#mentor">Mentor</a></li>
          <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#family">Family</a></li>
        </ul>

        <div class="tab-content mt-3">

          <!-- Personal Info -->
          <div class="tab-pane fade show active" id="personal">
            <table class="table table-bordered">
              <tr><th>First Name</th><td><?= esc($student['First_Name']) ?></td></tr>
              <tr><th>Last Name</th><td><?= esc($student['Last_Name']) ?></td></tr>
              <tr><th>Gender</th><td><?= esc($student['Gender']) ?></td></tr>
              <tr><th>DOB</th><td><?= esc($student['DOB']) ?></td></tr>
              <tr><th>Phone</th><td><?= esc($student['Phone_No']) ?></td></tr>
              <tr><th>Email</th><td><?= esc($student['Email_Id']) ?></td></tr>
              <tr><th>Address</th><td><?= esc($student['Address']) ?></td></tr>
              <tr><th>Photo</th>
                <td>
                  <?php if (!empty($student['Photo_URL'])): ?>
                    <img src="<?= base_url('uploads/'.$student['Photo_URL']) ?>" height="80">
                  <?php endif; ?>
                </td>
              </tr>
            </table>
          </div>

          <!-- Education -->
          <div class="tab-pane fade" id="education">
            <table class="table table-bordered">
              <tr><th>Current Education Level</th><td><?= esc($student['Current_Education_level']) ?></td></tr>
              <tr><th>Highest Education Completed</th><td><?= esc($student['Highest_Education_Completed']) ?></td></tr>
              <tr><th>Caste</th><td><?= esc($student['Student_Caste']) ?></td></tr>
              <tr><th>Status</th><td><?= esc($student['Student_Status']) ?></td></tr>
            </table>
          </div>

          <!-- Program -->
          <div class="tab-pane fade" id="program">
            <table class="table table-bordered">
              <tr><th>Program</th><td><?= esc($program['Program_Name']) ?></td></tr>
              <tr><th>Batch</th><td><?= esc($program['Batch_Name']) ?></td></tr>
              <tr><th>Level</th><td><?= esc($program['Program_level']) ?></td></tr>
              <tr><th>Status</th><td><?= esc($program['Program_Status']) ?></td></tr>
              <tr><th>Enrolled On</th><td><?= esc($program['Prog_enrolled_on']) ?></td></tr>
            </table>
          </div>

          <!-- Mentor -->
          <div class="tab-pane fade" id="mentor">
            <?php if (!empty($mentors)): ?>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Mentor Name</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>From Date</th>
                    <th>To Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($mentors as $m): ?>
                    <tr>
                      <td><?= esc($m['Mentor_Name']) ?></td>
                      <td><?= esc($m['Mentor_Category']) ?></td>
                      <td><?= esc($m['Mentor_Status']) ?></td>
                      <td><?= esc($m['Mentor_From_Date']) ?></td>
                      <td><?= esc($m['Mentor_To_Date']) ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            <?php else: ?>
              <p>No mentor assigned.</p>
            <?php endif; ?>
          </div>

          <!-- Family -->
          <div class="tab-pane fade" id="family">
            <table class="table table-bordered">
              <tr><th>Father's Name</th><td><?= esc($student['Fathers_Name']) ?></td></tr>
              <tr><th>Contact</th><td><?= esc($student['Father_Contact_Number']) ?></td></tr>
              <tr><th>Occupation</th><td><?= esc($student['Father_Occupation']) ?></td></tr>
              <tr><th>Mother's Name</th><td><?= esc($student['Mothers_Name']) ?></td></tr>
              <tr><th>Contact</th><td><?= esc($student['Mother_Contact_Number']) ?></td></tr>
              <tr><th>Occupation</th><td><?= esc($student['Mother_Occupation']) ?></td></tr>
              <tr><th>Income</th><td><?= esc($student['Family_Monthly_Income']) ?></td></tr>
            </table>
          </div>

        </div>

        <div class="mt-3">
          <a href="<?= site_url('students/doosra_mauka/edit/'.$student['Student_Id']) ?>" class="btn btn-primary">Edit</a>
          <a href="<?= site_url('students/doosra_mauka') ?>" class="btn btn-secondary">Back</a>
        </div>

      </div>
    </div>
  </div>
</div>
