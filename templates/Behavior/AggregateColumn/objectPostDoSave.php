if ($this->needUpdate<?=$column->getPhpName()?>) {
    $this->needUpdate<?=$column->getPhpName()?> = false;
    $this->set<?=$column->getPhpName()?>($this->compute<?=$column->getPhpName()?>($con));
}
