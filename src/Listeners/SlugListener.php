<?php

namespace App\Listeners;


use App\Entity\Blog;
use App\Entity\User;



use Doctrine\Persistence\Event\LifecycleEventArgs;

class SlugListener
{


    // the listener methods receive an argument which gives you access to
    // both the entity object of the event and the entity manager itself
    public function postPersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();

        // if this listener only applies to certain entity types,
        // add some code to check the entity type as early as possible
        if (!$entity instanceof Blog) {
            return;
        }


        $entityManager = $args->getObjectManager();
        
     
        
        
        


       
        
    }
}