<?php

use App\QueuedImport;
use App\RegularImport;
use Illuminate\Http\UploadedFile;
use Maatwebsite\Excel\Facades\Excel;

test('an import can be queued', function () {
    $file = UploadedFile::fake()->create('import.csv', file_get_contents(__DIR__.'/dummy_imports.csv'));
    $regularImport = new RegularImport();
    $queuedImport = new QueuedImport();
    Excel::import($regularImport, $file);
    // Excel::clearResolvedInstances(); // Uncommenting this will make the test pass
    Excel::import($queuedImport, $file);
    expect(true)->toBe(true);
});
