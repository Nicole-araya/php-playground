<?php
require_once 'config/ApiConstants.php';
require_once 'helper.php';
require_once 'src/CatApiService.php';
require_once 'src/CatModel.php';

$catApiService = new CatApiService();
$cat = $catApiService->fetchRandomCat();
?>

<html lang="en">
<?php render_template('head'); ?>

<?php render_template('main', [
    'image_url' => $cat->getImageUrl(),
    'breed' => $cat->getBreed(),
    'temperament' => $cat->getTemperament(),
    'description' => $cat->getDescription()
]); ?>

<?php render_template('style'); ?>
<form method="post">
    <button type="submit">Another cat!</button>
</form>

</html>