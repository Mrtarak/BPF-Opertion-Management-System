<?= view('includes/header'); ?>
<?= view('includes/navbar'); ?>

<div class="container-fluid page-body-wrapper">
  <?= view('includes/sidebar'); ?>

  <div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-8 mx-auto grid-margin stretch-card">
        <div class="card">
          <div class="card-body">

             <!-- Back Button -->
              <button class="btn btn-secondary mb-3" onclick="window.history.back()">
                <i class="mdi mdi-arrow-left"></i> Back
              </button>

              <!-- Breadcrumb -->
              <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('ManageEvents/event_type'); ?>">Manage EventTypes</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add EventType</li>
                </ol>
              </nav>


            <h4 class="card-title">Add New Event Type</h4>
            <form method="post" action="<?= site_url('events/types/save') ?>">

              <div class="form-group">
                <label for="type_id">Event Type ID</label>
                <input type="text" name="EventType_Id" class="form-control" id="type_id" required>
              </div>

              <div class="form-group">
                <label for="type_name">Type Name</label>
                <input type="text" name="Event_TypeName" class="form-control" id="type_name" required>
              </div>

              <div class="form-group">
                <label for="event_type">Event Type</label>
                <input type="text" name="Event_Type" class="form-control" id="event_type" required>
              </div>

    <div class="col-md-6 form-group">
      <label>Recorded By</label>
      <input type="text" name="Rec_Added_By" class="form-control" value="<?= old('Rec_Added_By') ?>" placeholder="Enter Who Recorded Record" >
    </div>

    <div class="col-md-6 form-group">
      <label>Recorded On</label>
      <input type="date" name="Rec_Added_On" class="form-control" value="<?= old('Rec_Added_On') ?>">
    </div>

    <div class="col-md-6 form-group">
      <label>Updated By</label>
      <input type="text" name="Rec_Updated_By" class="form-control" value="<?= old('Rec_Updated_By') ?>" placeholder="Enter Who Updated Record" >
    </div>

    <div class="col-md-6 form-group">
      <label>Updated On</label>
      <input type="date" name="Rec_Updated_On" class="form-control" value="<?= old('Rec_Updated_On') ?>">
    </div>
  </div>
              <button type="submit" class="btn btn-primary">Save</button>
              <a href="<?= site_url('events/types') ?>" class="btn btn-light">Cancel</a>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= view('includes/footer'); ?>
