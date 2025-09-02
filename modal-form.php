<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header position-relative">
        <h5 class="modal-title w-100 text-center" id="contactModalLabel">Contact Form</h5>
        <button type="button" class="btn-close position-absolute end-0 me-2" data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <!-- Your Form -->
        <form class="px-3 pb-3 leadForm" data-form-id="form1">
          <!-- Name -->
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
              <input type="hidden" name="source" value="<?php echo $utm_source ?>">
              <input type="hidden" name="medium" value="<?php echo $utm_medium ?>">
              <input type="hidden" name="campaign" value="<?php echo $utm_campaign ?>">
               <input type="hidden" name="service" value="MBBS Abroad">
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
          </div>

          <!-- Phone -->
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <div class="input-group">
              <select class="form-select" name="countryCode" required>
                <?php include('option.php');?>
              </select>
              <input type="tel" class="form-control" id="phone" name="number" placeholder="Enter number" required>
            </div>
          </div> 
          <!-- Submit -->
          <div class="d-grid">
            <button type="submit" class="btn btn-primary SubmitBtnEnq">Submit</button>
          </div>
        </form>
         <div class="mb-3 successMessageBro" data-form-id="form1" style="display: none; color: green; font-weight: bold;"></div>

      </div>
    </div>
  </div>
</div>

