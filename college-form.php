                   <form class="p-4 border rounded bg-white shadow-sm   leadForm" data-form-id="form2">
                        <h4 class="mb-3 text-center">Contact Form</h4>

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                                required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email" required>
                        </div>

                        <!-- Country Code + Number -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <div class="input-group">
                                <select class="form-select" name="countryCode" required>
                                    <?php include('option.php');?>
                                </select>
                                <input type="tel" class="form-control" name="number"  pattern="[0-9]{10}" 
       placeholder="Enter number"
                                    required>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary SubmitBtnEnq">Submit</button>
                        </div>
                    </form>
                    <div class="mb-3 successMessageBro" data-form-id="form2"
                        style="display: none; color: green; font-weight: bold;"></div>