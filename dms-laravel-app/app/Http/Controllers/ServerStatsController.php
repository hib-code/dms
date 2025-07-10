namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ServerStatsController extends Controller
{
   public function store(Request $request)
    {
        $request->validate([
            'ip' => 'required|ip',
            'hostname' => 'required|string',
            'cpu' => 'required|numeric',
            'ram_total' => 'required|numeric',
            'ram_used' => 'required|numeric',
            'disk_total' => 'required|numeric',
            'disk_free' => 'required|numeric',
            'api_key' => 'required|string',
        ]);

        // Validation de la clé API
        $validApiKeys = ['CLE_API_UNIQUE'];

        $apiKeyFile = base_path('api_key.txt');  // fichier dans la racine Laravel
        if (file_exists($apiKeyFile)) {
            $validApiKeys[] = trim(file_get_contents($apiKeyFile));
        }

        if (!in_array($request->api_key, $validApiKeys)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Stockage dans le cache, 3600s = 1 heure
        cache()->put('server_stats_' . $request->ip, $request->only([
            'hostname', 'ip', 'cpu', 'ram_total', 'ram_used', 'disk_total', 'disk_free'
        ]), 3600);

        return response()->json(['status' => 'ok']);
    }
}
