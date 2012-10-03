<?php

class Users implements SplSubject
{
    private
        $_users,
        $_observers,
        $_currentUser;

    public function __construct(array $users)
    {
        $this->_users = $users;
        $this->_observers = array();
    }

    /**
     * Updates the users
     */
    public function updateUsers()
    {
        foreach ($this->_users as $user)
        {
            $this->_currentUser = $user;

            //Do update

            $this->notify();
        }
        $this->_currentUser = null;
    }

    /**
     * Returns the item currently being updated
     *
     * @return $user
     */
    public function getCurrent()
    {
        return $this->_currentUser;
    }

    /**
     * Attach an observer
     *
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer)
    {
        array_push($this->_observers, $observer);
    }

    /**
     * Detach an observer
     *
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer)
    {
        foreach ($this->_observers as $key => $item)
        {
            if ($observer == $item) {
                unset($this->_observers[$key]);
            }
        }
    }

    /**
     * Send notification to all observers
     */
    public function notify()
    {
        foreach ($this->_observers as $key => $item) {
            $item->update($this);
        }
    }
}