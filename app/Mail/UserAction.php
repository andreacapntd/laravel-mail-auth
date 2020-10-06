<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserAction extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $product;
    public $action;

    public function __construct($user, $product, $action)
    {

      $this -> user = $user;
      $this -> product = $product;
      $this -> action = $action;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this -> from('user@boolean.it') 
                     -> view('product_mail');
    }
}
