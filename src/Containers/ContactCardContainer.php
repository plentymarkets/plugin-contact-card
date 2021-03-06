<?php

namespace ContactCard\Containers;

use Plenty\Plugin\Templates\Twig;
    
class ContactCardContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('ContactCard::content.ContactCard');
    }
}