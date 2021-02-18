<?php

namespace App\Observers;

use App\Mail\Email;
use app\Models\Blog;
use App\Models\Subscribe;
use App\Notifications\ProductCreatedNatification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class BlogObserver
{
    /**
     * Handle the Blog "created" event.
     *
     * @param  \app\Models\Blog  $blog
     * @return void
     */
    public function created(Blog $blog)
    {
        if($blog->status == 1) {
            $subscribes = Subscribe::all();
            foreach ($subscribes as $subscribe) {
                Mail::to($subscribe->email)->queue(new Email($blog));;
            }
        }
    }
    public function updating(Blog $blog){
        //
    }

    /**
     * Handle the Blog "updated" event.
     *
     * @param  \app\Models\Blog  $blog
     * @return void
     */
    public function updated(Blog $blog)
    {

    }

    /**
     * Handle the Blog "deleted" event.
     *
     * @param  \app\Models\Blog  $blog
     * @return void
     */
    public function deleted(Blog $blog)
    {
        //
    }

    /**
     * Handle the Blog "restored" event.
     *
     * @param  \app\Models\Blog  $blog
     * @return void
     */
    public function restored(Blog $blog)
    {
        //
    }

    /**
     * Handle the Blog "force deleted" event.
     *
     * @param  \app\Models\Blog  $blog
     * @return void
     */
    public function forceDeleted(Blog $blog)
    {
        //
    }
}
