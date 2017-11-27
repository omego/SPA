<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Action_plan;

class ActionPlanDODApproval extends Mailable
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
    public function __construct()
    {
          //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Action Plan Approval Required')
                    ->view('emails.ActionPlanDODApproval');
    }
}
