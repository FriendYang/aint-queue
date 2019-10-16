<?php

/*
 * This file is part of the littlesqx/aint-queue.
 *
 * (c) littlesqx <littlesqx@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

declare(strict_types=1);

namespace Littlesqx\AintQueue;

interface JobInterface
{
    /**
     * Execute current job.
     *
     * @return mixed
     */
    public function handle(): void;

    /**
     * Determine whether current job can retry if fail.
     *
     * @param int $attempt
     * @param $error
     *
     * @return bool
     */
    public function canRetry(int $attempt, $error): bool;

    /**
     * Get current job's next execution unix time after failed.
     *
     * @param int $attempt
     *
     * @return int
     */
    public function getRetryTime(int $attempt): int;
}
