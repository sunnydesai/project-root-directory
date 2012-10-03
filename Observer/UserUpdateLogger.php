<?php

class UserUpdateLogger implements SplObserver
{
    /**
     * Log the fact that a user has been updated
     *
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject)
    {
        echo 'Updated: ' . $subject->getCurrent() . "\n";
    }
}