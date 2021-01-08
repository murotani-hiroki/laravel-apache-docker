<?php


namespace App\Service;


class FxService
{
    /**
     * FxService constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param string|null $fromDate 検索開始日
     * @param string|null $toDate 検索終了日
     */
    public function search(?string $fromDate, ?string $toDate) {
        return 'Service!!';
    }
}
