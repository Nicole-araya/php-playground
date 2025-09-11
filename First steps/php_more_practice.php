<?php
$name = "Nicole";
$petlover = true;
$age = 24;
$favoriteColor = "brown";
$programmingLanguage = ["PHP", "Java", "Python", "Prolog"];


define("LOGO_URL", 'https://www.php.net//images/logos/new-php-logo.svg');
?>

<img src="<?= LOGO_URL; ?>" alt="PHP Logo" width="200" >
<h1>
    <!-- PHP short echo tag -->
    <?= "PHP More Practice \n\n" ?>
</h1>

<h2>
    <!-- PHP Conditional Statement using Alternative Syntax for Templates -->
    <?php if ($petlover && $favoriteColor === "brown"): ?>
        <?= "$name is a pet lover and likes brown color.\n" ?>
    <?php elseif ($petlover && $favoriteColor !== "brown"): ?>
        <?= "$name is a pet lover but does not like brown color.\n" ?>
    <?php else: ?>
        <?= "$name is not a pet lover or does not like brown color.\n" ?>
    <?php endif; ?>
</h2>

<h2> <!-- PHP Match Expression -->
    <?php
    /*$outputage = match ($age) {
        0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12 => "child",
        13, 14, 15, 16, 17 => "teenager",
        default => "adult",
    };*/
    $outputage = match (true) {
        $age < 13 => "child",
        $age < 18 => "teenager",
        default => "adult",
    };
    echo "You are a(n) $outputage.\n";
    ?>
</h2>

<h3><?= "Programming Languages:\n"; ?>
    <ul> <!-- PHP Null Coalescing Operator -->
        <?php foreach ($programmingLanguage as $language): ?>
            <li><?= $language ?? "Unknown Language"; // If $language is null, it will print "Unknown Language" 
                ?></li>
        <?php endforeach; ?>
    </ul>
</h3>

<style>
    :root {
        color-scheme: dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>