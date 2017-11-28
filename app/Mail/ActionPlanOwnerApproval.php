<?php

namespace App\Mail;

use App\Action_plan;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActionPlanOwnerApproval extends Mailable
{
    use Queueable, SerializesModels;


        /**
       * The order instance.
       *
       * @var Action_plan
       */
      public $action_plan;

        /**
         * Create a new message instance.
         *
         * @return void
         */
        public function __construct(Action_plan $action_plan)
        {
              $this->action_plan = $action_plan;
        }
        
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Action Plan Approval Required')
        ->view('emails.ActionPlanOwnerApproval');
    }
}
