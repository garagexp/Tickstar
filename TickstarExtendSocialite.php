<?php

namespace SocialiteProviders\Tickstar;

use SocialiteProviders\Manager\SocialiteWasCalled;

class TickstarExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('tickstar', Provider::class);
    }
}
