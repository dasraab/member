<link rel="stylesheet" type="text/css" href="/plugins/Member/static/css/website.css">

<div class="member register">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

            <h2 class="text-center">
                <?= $this->translate('sign_up') ?>
                <?= $this->translate('or') ?>
                <a href="<?= \Member\Plugin\Config::get('routes')->login ?>">
                    <?= $this->translate('login') ?>
                </a>
            </h2>

            <div class="row social">
                <div class="col-xs-4">
                    <a href="#" class="btn btn-lg btn-block btn-social btn-facebook">
                        <i class="fa fa-facebook visible-xs"></i>
                        <span class="hidden-xs">Facebook</span>
                    </a>
                </div>
                <div class="col-xs-4">
                    <a href="#" class="btn btn-lg btn-block btn-social btn-twitter">
                        <i class="fa fa-twitter visible-xs"></i>
                        <span class="hidden-xs">Twitter</span>
                    </a>
                </div>
                <div class="col-xs-4">
                    <a href="#" class="btn btn-lg btn-block btn-social btn-google">
                        <i class="fa fa-google-plus visible-xs"></i>
                        <span class="hidden-xs">Google+</span>
                    </a>
                </div>
            </div>

            <div class="social-or">
                <hr>
                <span class="text"><?= $this->translate('or') ?></span>
            </div>

            <form action="<?= $this->request->getRequestUri() ?>" method="post">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group <?= isset($this->errors['firstname']) ? 'has-error' : '' ?>">
                            <input type="text" name="firstname" id="firstname"
                                   class="form-control input-lg" tabindex="1"
                                   placeholder="<?= $this->translate('first_name') ?>"
                                   value="<?= $this->firstname ?>">
                            <div class="help-block">
                                <?= @reset($this->errors['firstname']) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group <?= isset($this->errors['lastname']) ? 'has-error' : '' ?>">
                            <input type="text" name="lastname" id="lastname"
                                   class="form-control input-lg" tabindex="2"
                                   placeholder="<?= $this->translate('last_name') ?>"
                                   value="<?= $this->lastname ?>">
                            <div class="help-block">
                                <?= @reset($this->errors['lastname']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group <?= isset($this->errors['email']) ? 'has-error' : '' ?>">
                    <input type="email" name="email" id="email"
                           class="form-control input-lg" tabindex="3"
                           placeholder="<?= $this->translate('email_address') ?>"
                           value="<?= $this->email ?>">
                    <div class="help-block">
                        <?= @reset($this->errors['email']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group <?= isset($this->errors['password']) ? 'has-error' : '' ?>">
                            <input type="password" name="password" id="password"
                                   class="form-control input-lg" tabindex="4"
                                   placeholder="<?= $this->translate('password') ?>">
                            <div class="help-block">
                                <?= @reset($this->errors['password']) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group <?= isset($this->errors['password_confirm']) ? 'has-error' : '' ?>">
                            <input type="password" name="password_confirm" id="password_confirm"
                                   class="form-control input-lg" tabindex="5"
                                   placeholder="<?= $this->translate('confirm_password') ?>">
                            <div class="help-block">
                                <?= @reset($this->errors['password_confirm']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4 col-sm-3">
                        <div class="form-group <?= isset($this->errors['agree']) ? 'has-error' : '' ?>">
                            <label class="btn btn-default <?= isset($this->errors['agree']) ? 'btn-danger' : '' ?>" tabindex="6">
                                <input type="checkbox" name="agree" id="agree" value="1"
                                    <?= $this->agree ? 'checked' : '' ?>>
                                <?= $this->translate('i_agree') ?>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-9">
                        <div class="form-group <?= isset($this->errors['firstname']) ? 'has-error' : '' ?>">
                            <?= $this->translate('register_terms_agree') ?>
                            <a href="#" data-toggle="modal" data-target="#terms">
                                <?= $this->translate('terms_and_conditions') ?></a>.
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">
                        <?= $this->translate('create_account') ?>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="<?= $this->editmode ? '' : 'modal fade' ?>" id="terms" tabindex="-1" role="dialog"
         aria-labelledby="termsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                    </button>
                    <h4 class="modal-title" id="termsModalLabel">
                        <?= $this->input('terms_title') ?>
                    </h4>
                </div>
                <div class="modal-body">
                    <?= $this->wysiwyg('terms') ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                        <?= $this->translate('i_agree') ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
