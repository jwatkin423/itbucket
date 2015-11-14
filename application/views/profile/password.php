<?php 
    $formOpenAttr = array('class' => 'form-horizontal');
    $formPwd1Attr = array('class' => 'form-control',
                                 'type' => 'password',
                                 'name' => 'password1');
    $formPwd2Attr = array('class' => 'form-control',
                                 'type' => 'password',
                                 'name' => 'password2');
    $formSbmtAttr = array('class' => 'btn btn-default',
                                 'type' => 'submit',
                                 'name' => 'submit',
                                 'value' => 'Submit yo Stuff');
    echo form_open('profile/edit', $formOpenAttr);
?>
<!-- <form class="form-horizontal"> -->
<div class="row">
        <div class="col-lg-6">
            <fieldset>
                <legend>Personal Information</legend>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
                        <?php 
                            echo form_input($formPwd1Attr);
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Confirm Password</label>
                    <div class="col-lg-10">
                        <!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
                        <?php 
                            echo form_input($formPwd2Attr);
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>