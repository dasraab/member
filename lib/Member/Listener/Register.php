<?php

namespace Member\Listener;

class Register
{
    /**
     * Default register validation.
     *
     * You can provide your own validation by attaching callback to
     * 'member.register.validate' event.
     *
     * @param \Zend_EventManager_Event $event
     * @return \Zend_Filter_Input
     */
    public static function validate(\Zend_EventManager_Event $event)
    {
        $data = $event->getParam('data');
        $input = new \Zend_Filter_Input([
            '*' => ['StringTrim', 'StripTags']
        ], [
            'firstname' => [
                'NotEmpty',
                'presence' => 'required',
            ],
            'lastname' => [
                'NotEmpty',
                'presence' => 'required',
            ],
            'email' => [
                'EmailAddress',
                // TODO validate email presence withing existing members
                'presence' => 'required',
            ],
            'agree' => [
                new \Zend_Validate_Identical('1'),
                'presence' => 'required',
            ],
            'password' => [
                new \Zend_Validate_StringLength(6),
                'presence' => 'required',
            ],
            'password_confirm' => [
                new \Zend_Validate_Callback(function ($v) use ($data) {
                    return $v === $data['password'];
                }),
                'presence' => 'required',
            ],
        ], $data);

        return $input;
    }
}