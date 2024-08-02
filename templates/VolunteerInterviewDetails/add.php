<style>
    .error {
        color: red;
    }

    .mandatory {
        color: red;
    }
</style>
<section class="contact-section pb-120 position-relative" style="padding-top: 200px;">
    <div class="container">
        <div class="row g-6">
            <div class="offset-lg-2 col-lg-8">
                <div class="contact-right n0-bg n30-border radius16 p-xxl-8 px-lg-6 p-5">
                    <h4 class="n700-color fw_600 pb-xxl-10 pb-7 mb-xxl-10 mb-7 bb-n40dash">
                        Volunteer for mockinterview
                    </h4>
                    <?= $this->Form->create($volunteerInterviewDetail, ['class' => 'writere-v1', 'id' => 'volunteerInterviewDetail']) ?>
                    <div class="row g-4">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Alumni Name <span class="mandatory">*</span></label>

                                <?= $this->Form->control('alumni_name', ['type' => 'text', 'id' => 'alumni_name', 'label' => false, 'class' => 'n20-bg', 'placeholder' => 'Enter Your Alumni Name...']) ?>
                            </div>
                            <span class="error"></span>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Alumni Registration Number <span class="mandatory">*</span></label>

                                <?= $this->Form->control('alumni_registration_number', ['type' => 'text', 'label' => false, 'class' => 'n20-bg', 'placeholder' => 'Enter Your Number...']) ?>
                            </div>
                            <span class="error"></span>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Alumni Current Position <span class="mandatory">*</span></label>

                                <?= $this->Form->control('current_position', ['type' => 'text', 'label' => false, 'class' => 'n20-bg', 'placeholder' => 'Enter Your Number...']) ?>
                            </div>
                            <span class="error"></span>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Alumni Short Bio<span class="mandatory">*</span></label>

                                <?= $this->Form->control('short_bio', ['type' => 'textarea', 'label' => false, 'class' => 'n20-bg', 'placeholder' => 'Enter Your Number...']) ?>
                            </div>
                            <span class="error"></span>

                        </div>





                        <div class="col-lg-12">
                            <button type="submit" class="cmn-btn fw_600 justify-content-center d-flex align-items-center gap-2 py-3 px-xl-6 px-5 n700-color">
                                <span> Send Message </span>
                                <i class="ti ti-arrow-up-right fs-six"></i>
                            </button>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('alumni_name').addEventListener('input', function(e) {
        var value = e.target.value;
        e.target.value = value.replace(/[^a-zA-Z\s]/g, '');
    });
    $(document).ready(function() {
        $("#volunteerInterviewDetail").validate({
            rules: {
                alumni_name: {
                    required: true,
                    // minlength: 2
                },
                alumni_registration_number: {
                    required: true,
                    // minlength: 2
                },
                current_position: {
                    required: true,
                },
                short_bio: {
                    required: true,
                },

            },
            messages: {
                alumni_name: {
                    required: "Please enter  alumni name",
                    // minlength: "Alumni name must be at least 2 characters long"
                },
                alumni_registration_number: {
                    required: "Please enter alumni registration number",
                    // minlength: "Registration number must be at least 2 characters long"
                },
                current_position: {
                    required: "Please enter current position",
                },
                short_bio: {
                    required: "Please enter short bio",
                },
            },
            submitHandler: function(form) {


                form.submit();

                $(".btn").prop('disabled', true);
            }
        });
    });
</script>