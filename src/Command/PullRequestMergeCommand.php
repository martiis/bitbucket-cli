<?php

declare(strict_types=1);

namespace Martiis\BitbucketCli\Command;

use Symfony\Component\Console\Command\Command;

class PullRequestMergeCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('pull-request:merge')
            ->setDescription('Merges pull-request');
    }
}