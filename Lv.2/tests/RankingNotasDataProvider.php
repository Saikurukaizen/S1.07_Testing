<?php

namespace Tests;

class RankingNotasDataProvider{

    public static function provideRanking(): array{
        return [
            [0.30, false, false, false, true],
            [0.40, false, false, true, false],
            [0.55, false, true, false, false],
            [0.60, true, false, false, false],
            [0.80, true, false, false, false],
            [-0.30, false, false, false, true]
        ];
    }
}
?>
