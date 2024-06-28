A simple Laravel instance to show a bug.

To reproduce the bug:
1. Clone this repo
2. Install dependencies
3. Run the test suite

**Expected:**  
The tests should pass

**Actual:**  
Threw an error:
```
   FAIL  Tests\Feature\ExampleTest
  ⨯ an import can be queued                                                                                                                                                                                                                                                                           0.26s
  ─────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────
   FAILED  Tests\Feature\ExampleTest > an import can be queued                                                                                                                                                                                                                              ErrorException
  serialize(): "spreadsheet" returned as member variable from __sleep() but does not exist

  at vendor/laravel/framework/src/Illuminate/Bus/Queueable.php:253
    249▕
    250▕             $job = CallQueuedClosure::create($job);
    251▕         }
    252▕
  ➜ 253▕         return serialize($job);
    254▕     }
    255▕
    256▕     /**
    257▕      * Dispatch the next job on the chain.

      +7 vendor frames
  8   tests/Feature/ExampleTest.php:14


  Tests:    1 failed (0 asser
```
