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
                        Guest House Booking
                    </h4>
                    <?= $this->Form->create($guesthouseBookingDetail, ['class' => 'writere-v1', 'id' => 'guestHouseForm']) ?>
                    <div class="row g-4">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Alumni Name <span class="mandatory">*</span></label>

                                <?= $this->Form->control('alumni_name', ['type' => 'text', 'label' => false, 'class' => 'n20-bg', 'placeholder' => 'Enter Your Alumni Name...', 'id' => 'alumni_name']) ?>
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
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Dates when required (From:) <span class="mandatory">*</span></label>

                                <?= $this->Form->control('from_date', ['type' => 'date', 'label' => false, 'class' => 'n20-bg']) ?>
                            </div>
                            <span class="error"></span>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Dates when required (To:) <span class="mandatory">*</span></label>

                                <?= $this->Form->control('to_date', ['type' => 'date', 'label' => false, 'class' => 'n20-bg']) ?>
                            </div>
                            <span class="error"></span>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-cmn">
                                <label for="room_type" class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Type of Room Required <span class="mandatory">*</span></label>
                                <?= $this->Form->control('room_type', ['empty' => 'select', 'label' => false, 'options' => ['1' => 'Single', '2' => 'Double'], 'id' => 'room_type']) ?>
                            </div>
                            <span class="error"></span>

                        </div>

                        <div class="col-lg-12">
                            <div class="form-cmn mb-xxl-4 mb-3">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Reason of Visit <span class="mandatory">*</span></label>

                                <?= $this->Form->control('visit_reason', ['type' => 'textarea', 'label' => false, 'rows' => 4, 'class' => 'n20-bg', 'placeholder' => 'Enter Your Message...']) ?>
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
        $("#guestHouseForm").validate({
            rules: {
                alumni_name: {
                    required: true,
                    minlength: 2
                },
                alumni_registration_number: {
                    required: true,
                    minlength: 2
                },
                from_date: {
                    required: true,
                    date: true
                },
                to_date: {
                    required: true,
                    date: true
                },
                room_type: {
                    required: true
                },
                visit_reason: {
                    required: true,
                    // minlength: 10
                }
            },
            messages: {
                alumni_name: {
                    required: "Please enter alumni name",
                    minlength: "Alumni name must be at least 2 characters long"
                },
                alumni_registration_number: {
                    required: "Please enter alumni registration number",
                    minlength: "Registration number must be at least 2 characters long"
                },
                from_date: {
                    required: "Please select a start date",
                    date: "Please enter a valid date"
                },
                to_date: {
                    required: "Please select an end date",
                    date: "Please enter a valid date"
                },
                room_type: {
                    required: "Please select a room type"
                },
                visit_reason: {
                    required: "Please enter the reason for visit",
                    // minlength: "Reason must be at least 10 characters long"
                }
            },
            submitHandler: function(form) {


                form.submit();

                $(".btn").prop('disabled', true);
            }
        });
    });
</script>