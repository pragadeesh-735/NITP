<style>
    .error {
        color: red;
    }

    .mandatory {
        color: red;
    }
</style>
<section class="signup-section pt-120 pb-120">
    <div class="container">
        <div class="row g-6">
            <div class="col-lg-6">
                <div class="cmn-form radius16 n20-bg cus-border border py-xxl-8 py-4 px-xxl-8 px-4">
                    <div class="box mb-xxl-10 mb-8">
                        <h4 class="n500-color mb-xxl-4 mb-2">
                            Let’s Get Started!
                        </h4>
                        <p class="n500-color">
                            Please Enter your Email Address to Start your Online Application
                        </p>
                    </div>
                    <!-- Display the error message -->
                    <?php if (!empty($error)) : ?>
                        <div class="error"><?= h($error) ?></div>
                    <?php endif; ?>

                    <?= $this->Form->create($user, ['id' => 'FormID', 'class' => 'writere-v1']) ?>

                    <div class="row g-6">
                        <div class="col-lg-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2"> Name <span class="mandatory">*</span></label>

                                <?= $this->Form->control('name', ['type' => 'text', 'id' => 'name', 'label' => false, 'class' => 'n0-bg', 'placeholder' => 'Enter Your Name...']) ?>
                                <span class="error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2"> Batch <span class="mandatory">*</span></label>

                                <?= $this->Form->control('batch', ['type' => 'text', 'label' => false, 'class' => 'n0-bg', 'placeholder' => 'Enter Your Batch...']) ?>
                                <span class="error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2"> Department <span class="mandatory">*</span></label>

                                <?= $this->Form->control('department', ['type' => 'text', 'label' => false, 'class' => 'n0-bg', 'placeholder' => 'Enter Your Department...']) ?>
                                <span class="error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2"> Mail ID <span class="mandatory">*</span></label>

                                <?= $this->Form->control('email', ['type' => 'text', 'label' => false, 'class' => 'n0-bg', 'placeholder' => 'Enter Your Mail ID...']) ?>
                                <span class="error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2"> Password <span class="mandatory">*</span></label>

                                <?= $this->Form->control('password', ['type' => 'password', 'minlength' => 6, 'label' => false, 'class' => 'n0-bg', 'placeholder' => 'Enter Your Password...']) ?>
                                <span class="error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2"> Phone Number <span class="mandatory">*</span></label>
                                <?= $this->Form->control('phone_number', ['type' => 'number', 'label' => false, 'class' => 'n0-bg', 'placeholder' => 'Enter Your Phone Number...', 'id' => 'phone_number']) ?>
                                <span class="error" id="phone_error"></span>
                            </div>



                        </div>
                        <div class="col-lg-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2"> Social Media Handles (LinkedIn, Instagram, Facebook) <span class="mandatory">*</span></label>

                                <?= $this->Form->control('social_media', ['type' => 'text', 'label' => false, 'class' => 'n0-bg', 'placeholder' => 'Enter Your Social Media Handles...']) ?>
                                <span class="error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2"> Current Position <span class="mandatory">*</span></label>

                                <?= $this->Form->control('current_position', ['type' => 'text', 'label' => false, 'class' => 'n0-bg', 'placeholder' => 'Enter Your Position...']) ?>
                                <span class="error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-cmn">
                                <label class="fs-six fw_500 n700-color mb-xxl-3 mb-2"> Living In <span class="mandatory">*</span></label>

                                <?= $this->Form->control('livingin', ['type' => 'text', 'label' => false, 'class' => 'n0-bg', 'placeholder' => 'Enter Your Living In...']) ?>
                                <span class="error"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <button type="submit" class="cmn-btn fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-3 px-xl-6 px-5 n700-color">
                            <span>
                                Sign Up
                            </span>
                        </button>
                    </div>
                    <?= $this->Form->end() ?>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="sign-thumb sign-thumb-v1">
                    <img src="<?php echo $this->Url->image('/images/common/signup.png'); ?>" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    //name validation
    document.getElementById('name').addEventListener('input', function(e) {
        var value = e.target.value;
        e.target.value = value.replace(/[^a-zA-Z\s]/g, '');
    });
    //mobile validation 
    document.getElementById('phone_number').addEventListener('input', function() {
        var phoneNumber = this.value;
        var errorSpan = document.getElementById('phone_error');

        // Validate that the phone number starts with 6, 7, 8, or 9 and is exactly 10 digits long
        var regex = /^[6789]\d{9}$/;

        if (!regex.test(phoneNumber)) {
            errorSpan.textContent = 'Phone number must start with 6, 7, 8, or 9 and be exactly 10 digits long.';
            this.setCustomValidity('Invalid phone number');
        } else {
            errorSpan.textContent = '';
            this.setCustomValidity('');
        }
    });
    // script validation
    $(document).ready(function() {
        $("#FormID").validate({
            rules: {
                'name': {
                    required: true,
                },
                'batch': {
                    required: true,
                },
                'department': {
                    required: true,
                },
                'email': {
                    required: true,
                    email: true
                },
                'password': {
                    required: true,
                    minlength: 6
                },
                'phone_number': {
                    required: true,
                },
                'social_media': {
                    required: true,
                },
                'current_position': {
                    required: true,
                },
                'livingin': {
                    required: true,
                },
            },
            messages: {
                'name': {
                    required: "Enter Name"
                },
                'batch': {
                    required: "Enter Batch"
                },
                'department': {
                    required: "Enter Department"
                },
                'email': {
                    required: "Enter Email",
                    email: "Enter a valid Email"
                },
                'password': {
                    required: "Enter Password",
                    minlength: "Password must be at least 6 characters long"
                },
                'phone_number': {
                    required: "Enter Phone Number"
                },
                'social_media': {
                    required: "Enter Social Media Handles"
                },
                'current_position': {
                    required: "Enter Current Position"
                },
                'livingin': {
                    required: "Enter Living In"
                },
            },
            submitHandler: function(form) {


                form.submit();

                $(".btn").prop('disabled', true);
            }
        });
    });
</script>