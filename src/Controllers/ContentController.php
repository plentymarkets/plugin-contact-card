<?php

namespace ContactCard\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function renderContactCard(Twig $twig):string
    {
        return $twig->render('PluginContactCard::content.ContactCard');
    }
}