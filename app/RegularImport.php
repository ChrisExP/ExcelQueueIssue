<?php

namespace App;

use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Row;

class RegularImport implements OnEachRow, WithChunkReading
{
    public int $count = 0;

    public function onRow(Row $row)
    {
        $this->count++;
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
