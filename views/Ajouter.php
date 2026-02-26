<?php
$title = "Ajouter une patisserie";
ob_start();
?>
<!-- la page d'ajout d'une patisserie -->
<h4 class="display-4">Ajouter une patisserie</h4>
<div class="card-body">
    <form>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="Mille-feuille" type="number" placeholder="Mille-feuille"name="Mille-feuille" />
                    <label for="Mille-feuille">Mille-Feuille</label>
                </div>
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="Tranche" type="number" placeholder="Tranche" />
                    <label for="Tranche">Tranche</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input class="form-control" id="Sable" type="number" placeholder="sable"name="Sable" />
                    <label for="Sable">Sable</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="Galette" type="number" placeholder="Galette" />
                    <label for="Galette">Galette</label>
                </div>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="Madeleine" type="number" placeholder="madeleine" name="Madeleine" />
            <label for="Madeleine">Madeleine</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="Croquet" type="number" placeholder="croquet" name="Croquet" />
            <label for="Croquet">Croquet</label>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="Grandfour" type="number" placeholder="grandfour" name="Grandfour" />
                    <label for="Grandfour">Grand-Four</label>
                </div>
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="Fouree" type="number" placeholder="fouree" name="Fouree" />
                    <label for="Fouree">Fourée</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="s" type="number" placeholder="s" name="s" />
                    <label for="s">s</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="K" type="number" placeholder="K" name="K" />
                    <label for="K">K</label>
                </div>
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control" id="lamouna" type="number" placeholder="Create a password" name="lamouna" />
                    <label for="lamouna">Lamouna</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="eclaire" type="number" placeholder="eclaire" name="eclaire" />
                    <label for="eclaire">Eclaire</label>
                </div>
            </div>
        </div>
        <div class="mt-4 mb-0">
            <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div>
        </div>
    </form>
</div>
<?php
/**
 * Created by PhpStorm.
 */
$contenent = ob_get_clean();
include_once 'views/templates/template.php';
?>