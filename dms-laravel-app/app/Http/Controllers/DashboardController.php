<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        // CPU load (1min)
        $cpuLoad = function_exists('sys_getloadavg') && is_array(sys_getloadavg()) ? sys_getloadavg()[0] : null;

        // Mémoire (en MB)
        $memoryTotal = null;
        $memoryUsed = null;
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            // Windows : utiliser 'wmic' (nécessite droits admin)
            @exec('wmic ComputerSystem get TotalPhysicalMemory', $outputTotal);
            @exec('wmic OS get FreePhysicalMemory', $outputFree);
            if (isset($outputTotal[1]) && isset($outputFree[1])) {
                $memoryTotal = round((int)trim($outputTotal[1]) / 1024 / 1024);
                $memoryFree = round((int)trim($outputFree[1]) / 1024);
                $memoryUsed = $memoryTotal - $memoryFree;
            }
        } else {
            // Linux
            $data = @file_get_contents('/proc/meminfo');
            if ($data) {
                if (preg_match('/MemTotal:\s+(\d+)/', $data, $matches)) {
                    $memoryTotal = round($matches[1] / 1024);
                }
                if (preg_match('/MemAvailable:\s+(\d+)/', $data, $matches)) {
                    $memoryFree = round($matches[1] / 1024);
                    $memoryUsed = $memoryTotal - $memoryFree;
                }
            }
        }

        // Disque (en GB)
        $diskTotal = round(disk_total_space("/") / 1024 / 1024 / 1024, 2);
        $diskFree = round(disk_free_space("/") / 1024 / 1024 / 1024, 2);

        return view('zen.dashboard', compact('cpuLoad', 'memoryTotal', 'memoryUsed', 'diskTotal', 'diskFree'));
    }
}
