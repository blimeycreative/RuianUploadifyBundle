<?php
namespace Ruian\UploadifyBundle\Interfaces;

interface RessourceInterface
{
    public function getFile();
    public function setFile($value);

    public function getFolder();
    public function setFolder($value);
}
