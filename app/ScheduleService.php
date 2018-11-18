<?php
/**
 * Created by PhpStorm.
 * User: mikewong
 * Date: 17/11/2018
 * Time: 22:16
 */

namespace App;
use App\Jobs\ProcessSpecies;
use Illuminate\Support\Facades\Log;
class ScheduleService
{

  public function registerCommands(Schedule $schedule)
  {
//    Log::info("Request Cycle with Queues Begins");
//    $schedule->job(new ProcessSpecies, 'processspecies')
//      ->everyFiveMinutes()
//      ->appendOutputTo(storage_path('logs/examplecommand.log'));
//    Log::info("Request Cycle with Queues Ends");
  }
}
