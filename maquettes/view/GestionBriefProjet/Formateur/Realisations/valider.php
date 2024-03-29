<!DOCTYPE html>
<html lang="fr">

<!-- Inclure l'en-tête -->
<?php include_once "../../../layouts/heade.php" ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once "../../../layouts/nav.php" ?>
        <!-- Barre latérale -->
        <?php include_once "../../../layouts/aside.php" ?>

        <div class="content-wrapper" style="min-height: 1302.4px;">

            <div class="content-header">
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title">Validation : lab-markdown</h3>
                                </div>
                                <div class="card-body p-0">
                                    <!-- form -->
                                    <form></form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nom">Nom</label>
                                            <input type="text" class="form-control" id="nom" name="nom">
                                        </div>
                                        <div class="form-group">
                                            <label for="prenom">Prénom</label>
                                            <input type="text" class="form-control" id="prenom" name="prenom">
                                        </div>
                                        <div class="form-group">
                                            <label for="livrables">Les livrables</label>
                                            <textarea class="form-control" id="livrables" name="livrables"></textarea>
                                        </div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Compétence</th>
                                                    <th>Niveau</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Maquetter une application mobile</td>
                                                    <td>
                                                        <select name="competence_mobile_level" class="form-control">
                                                            <option value="imiter">Imiter</option>
                                                            <option value="adapter">Adapter</option>
                                                            <option value="transposer">Transposer</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success"><i class="fas fa-check"></i></button>
                                                        <button class="btn btn-danger"><i class="fas fa-times"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Manipuler une
                                                                        base de données - perfectionnement</td>
                                                    <td>
                                                    <select name="competence_mobile_level"
                                                                        class="form-control">
                                                                        <option value="imiter">Imiter</option>
                                                                        <option value="adapter">Adapter</option>
                                                                        <option value="transposer">Transposer</option>
                                                                    </select>
                                                    </td>
                                                    <td>
                                                    <button class="btn btn-success"><i class="fas fa-check"></i></button>
                                                        <button class="btn btn-danger"><i class="fas fa-times"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Développer la partie back-end d’une application web ou web mobile -
                                                                        perfectionnement</td>
                                                    <td>
                                                    <select name="competence_mobile_level"
                                                                        class="form-control">
                                                                        <option value="imiter">Imiter</option>
                                                                        <option value="adapter">Adapter</option>
                                                                        <option value="transposer">Transposer</option>
                                                                    </select>
                                                    </td>
                                                    <td>
                                                    <button class="btn btn-success"><i class="fas fa-check"></i></button>
                                                        <button class="btn btn-danger"><i class="fas fa-times"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </form>

                                    <!-- Include footer -->
                                    <?php include_once "../../../layouts/footer.php" ?>




                                    <!-- Inclure le pied de page -->
                                    <?php include_once "../../../layouts/footer.php" ?>

                                </div>

                                <!-- Inclure le script -->
                                <?php include_once "../../../layouts/script-link.php" ?>
</body>

</html>