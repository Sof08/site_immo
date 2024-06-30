<!-- popup login -->

<div class="modal fade" id="modalLogin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="flat-account bg-surface">
                <h3 class="title text-center">Connectez-vous pour créer votre annonce</h3>
                <span class="close-modal icon-close2" data-bs-dismiss="modal"></span>
                <form action="modules/connexion/connexion.php" method="post">
                    <fieldset class="box-fieldset">
                        <label for="name">Votre e-mail<span>*</span>:</label>
                        <input type="email" class="form-contact style-1" name="email" required>
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="pass">Votre mot de passe<span>*</span>:</label>
                        <div class="box-password">
                            <input type="password" class="form-contact style-1 password-field" name="password" required>
                            <span class="show-pass">
                                <i class="icon-pass icon-eye"></i>
                                <i class="icon-pass icon-eye-off"></i>
                            </span>
                        </div>
                    </fieldset>
                    <div class="d-flex justify-content-between flex-wrap gap-12">
                        <fieldset class="d-flex align-items-center gap-6">
                            <input type="checkbox" class="tf-checkbox style-2" id="cb1">
                            <label for="cb1" class="caption-1 text-variant-1">Remember me</label>
                        </fieldset>
                        <a href="#" class="caption-1 text-primary">Mot de passe oublié ?</a>
                    </div>

                    <button type="submit" class="tf-btn primary w-100">Se connecter</button>
                    <div class="mt-12 text-variant-1 text-center noti">Pas encore inscris ?<a href="#modalRegister"
                            data-bs-toggle="modal" class="text-black fw-5">S'inscrire</a> </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- popup register -->
<div class="modal fade" id="modalRegister">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="flat-account bg-surface">
                <h3 class="title text-center">Inscrivez-vous pour créer votre annonce</h3>
                <span class="close-modal icon-close2" data-bs-dismiss="modal"></span>
                <form action="modules/connexion/register.php" method="post">
                    <fieldset class="box-fieldset">
                        <label for="name">Votre e-mail<span>*</span>:</label>
                        <input type="email" class="form-contact style-1" name="email" required>
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="pass">Votre mot de passe<span>*</span>:</label>
                        <div class="box-password">
                            <input type="password" class="form-contact style-1 password-field" name="password" required>
                            <span class="show-pass">
                                <i class="icon-pass icon-eye"></i>
                                <i class="icon-pass icon-eye-off"></i>
                            </span>
                        </div>
                    </fieldset>
                    <fieldset class="box-fieldset">
                        <label for="confirm">Confirmer votre mot de passe<span>*</span>:</label>
                        <div class="box-password">
                            <input type="password" class="form-contact style-1 password-field2" name="confirm_password"
                                required>
                            <span class="show-pass2">
                                <i class="icon-pass icon-eye"></i>
                                <i class="icon-pass icon-eye-off"></i>
                            </span>
                        </div>
                    </fieldset>
                    <fieldset class="d-flex align-items-center gap-6">
                        <input type="checkbox" class="tf-checkbox style-2" id="cb2">
                        <label for="cb2" class="caption-1 text-variant-1">J'accepte <span class="fw-5 text-black">les
                                conditions d'utilisation</span></label>
                    </fieldset>

                    <button type="submit" class="tf-btn primary w-100">Créer un compte</button>
                    <div class="mt-12 text-variant-1 text-center noti">Vous avez déjà un compte ?<a href="#modalLogin"
                            data-bs-toggle="modal" class="text-black fw-5">Se connecter ici</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>