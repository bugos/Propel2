if ($this->needUpdate<?= $aggregationName ?>) {
    $this->needUpdate<?= $aggregationName ?> = false;
    $aggregatedValues = $this->compute<?= $aggregationName ?>($con);
    if (is_array($aggregatedValues)) {
<?php foreach ($columnPhpNames as $index => $columnName): ?>
        $this->set<?= $columnName ?>($aggregatedValues[<?= $index ?>]);
<?php endforeach; ?>
    }
}
