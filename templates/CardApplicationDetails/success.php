<section class="contact-section pb-120 position-relative" style="padding-top: 200px;">
    <div class="container">
        <div class="row g-6">
            <div class="offset-lg-2 col-lg-8">
                <div class="contact-right n0-bg n30-border radius16 p-xxl-8 px-lg-6 p-5">
                    <h4 class="n700-color fw_600 pb-xxl-10 pb-7 mb-xxl-10 mb-7 bb-n40dash">
                        The card application
                    </h4>
                    <?= $this->Form->create($volunteerInterviewDetail, ['class' => 'writere-v1', 'id' => 'volunteerInterviewDetail']) ?>
                    <h5>The card application detail has been successful saved</h5>
                    <!-- <ul>
                        <li>Alumni Name: <?= $volunteerInterviewDetail->alumni_name ?></li>
                        <li>Alumni Registration Number: <?= $volunteerInterviewDetail->alumni_registration_number ?></li>
                        <li>Current Position: <?= $volunteerInterviewDetail->current_position ?></li>
                        <li>Short Bio: <?= $volunteerInterviewDetail->short_bio ?></li>
                    </ul> -->
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</section>