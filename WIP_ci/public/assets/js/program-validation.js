document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  if (form) {
    form.addEventListener("submit", function (e) {
      const programName = form.querySelector('input[name="Program_Name"]').value.trim();
      const about = form.querySelector('input[name="Program_About"]').value.trim();
      const startDate = form.querySelector('input[name="Program_Start_Date"]').value.trim();
      const theme = form.querySelector('select[name="Program_Theme_Id"]').value;
      const applicableFor = form.querySelector('input[name="Applicable_For"]').value.trim();
      const status = form.querySelector('select[name="Program_Status"]').value;
      const recordedBy = form.querySelector('input[name="Rec_Added_By"]').value.trim();

      let errorMessages = [];

      if (!programName) errorMessages.push("Program Name is required.");
      if (!about) errorMessages.push("About is required.");
      if (!startDate) errorMessages.push("Start Date is required.");
      if (!theme) errorMessages.push("Theme is required.");
      if (!applicableFor) errorMessages.push("Applicable For is required.");
      if (!status) errorMessages.push("Status is required.");
      if (!recordedBy) errorMessages.push("Recorded By is required.");

      if (errorMessages.length > 0) {
        e.preventDefault(); 
        alert("Please fix the following errors:\n\n" + errorMessages.join("\n"));
      }
    });
  }
});
