<style>
    .error {
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
                            Welcome Back!
                        </h4>
                        <p class="n500-color">
                            Sign in to your account and join us
                        </p>
                    </div>

                    <!-- Display the error message -->
                    <?php if (!empty($error)) : ?>
                        <div class="error"><?= h($error) ?></div>
                    <?php endif; ?>

                    <form id="FormID" action="" class="writere-v1" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-cmn mb-xxl-6 mb-5">
                                    <label for="email" class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Enter Your Email ID</label>
                                    <input type="email" placeholder="Your email ID here" name="email" id="email" class="n0-bg">
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="sign__item">
                                    <label for="password-field" class="fs-six fw_500 n700-color mb-xxl-3 mb-2">Enter Your Password</label>
                                    <div class="ps-grp position-relative">
                                        <input type="password" id="password-field" name="password" class="password-field" placeholder="Enter Your Password...">
                                        <i class="far fa-eye-slash field-icon toggle-password eye-icon"></i>
                                        <span class="error"></span>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="d-flex justify-content-end n700-color fs-eight mt-xxl-4 mt-3">
                                Forget password
                            </a>
                            <div class="col-lg-12">
                                <p class="n500-color fw_400 mt-1">
                                    Don’t have an account? <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'register']); ?>" class="fw_600 n700-color">Signup</a>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="cmn-btn mt-xxl-10 mt-lg-8 mt-6 fw_600 justify-content-center d-inline-flex align-items-center gap-2 py-3 px-xl-6 px-5 n700-color">
                                    <span>
                                        Sign In
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
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
    $(document).ready(function() {
        $("#FormID").validate({
            rules: {
                'email': {
                    required: true,
                    email: true
                },
                'password': {
                    required: true,
                },
            },
            messages: {
                'email': {
                    required: "Enter Email",
                    email: "Enter a valid Email"
                },
                'password': {
                    required: "Enter Password"
                },
            },
            submitHandler: function(form) {
                form.submit();
                $(".btn").prop('disabled', true);
            }
        });

        $('.toggle-password').on('click', function() {
            let passwordField = $(this).siblings('.password-field');
            let type = passwordField.attr('type') === 'password' ? 'text' : 'password';
            passwordField.attr('type', type);
            $(this).toggleClass('fa-eye fa-eye-slash');
        });
    });
</script>