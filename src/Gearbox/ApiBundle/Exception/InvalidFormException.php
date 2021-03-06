<?php


namespace Gearbox\ApiBundle\Exception;

use Symfony\Component\Form\FormInterface;

class InvalidFormException extends \RuntimeException
{
    /**
     * @var FormInterface
     */
    protected $form;

    /**
     * @param string $message
     * @param FormInterface $form
     */
    public function __construct($message, $form)
    {
        parent::__construct($message);
        $this->form = $form;
    }

    /**
     * @return FormInterface
     */
    public function getForm()
    {
        return $this->form;
    }
} 